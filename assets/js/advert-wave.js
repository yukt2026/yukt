/**
 * YUKT IT SOLUTIONS — WebGL 3D Wave Shader Animation Engine
 * Inspired by AdvertResources interactive wave shader
 * Generates an undulating 3D particle mesh with mouse interaction
 */

(function () {
  'use strict';

  // Check WebGL support
  function isWebGLSupported() {
    try {
      const c = document.createElement('canvas');
      return !!(window.WebGLRenderingContext && (c.getContext('webgl') || c.getContext('experimental-webgl')));
    } catch (e) {
      return false;
    }
  }

  if (!isWebGLSupported()) return;

  const VERTEX_SHADER = `
    #define M_PI 3.1415926535897932384626433832795

    precision highp float;

    attribute vec4 a_position;
    attribute vec4 a_color;

    uniform float u_time;
    uniform float u_size;
    uniform float u_speed;
    uniform vec3 u_field;
    uniform mat4 u_projection;
    uniform vec2 u_mousemove;

    varying vec4 v_color;

    void main() {
      vec3 pos = a_position.xyz;

      // Mouse influence on wave
      float distToMouse = length(pos.xz - u_mousemove * 100.0);
      float mouseInfluence = sin(clamp(distToMouse * 0.05, 0.0, M_PI)) * 8.0;

      // Dual harmonic undulating wave motion
      pos.y += (
        cos(pos.x / u_field.x * M_PI * 6.0 + u_time * u_speed) +
        sin(pos.z / u_field.z * M_PI * 6.0 + u_time * u_speed * 0.8)
      ) * (u_field.y + mouseInfluence);

      gl_Position = u_projection * vec4(pos.xyz, a_position.w);
      gl_PointSize = (u_size / gl_Position.w) * 85.0;

      v_color = a_color;
    }
  `;

  const FRAGMENT_SHADER = `
    precision highp float;

    uniform sampler2D u_texture;
    uniform int u_hasTexture;

    varying vec4 v_color;

    void main() {
      if (u_hasTexture == 1) {
        gl_FragColor = v_color * texture2D(u_texture, gl_PointCoord);
      } else {
        // Crisp antialiased circular particles
        vec2 coord = gl_PointCoord - vec2(0.5);
        if (length(coord) > 0.5) {
          discard;
        }
        gl_FragColor = v_color;
      }
    }
  `;

  class WaveShaderCanvas {
    constructor(container) {
      this.container = container;
      this.canvas = document.createElement('canvas');
      this.canvas.className = 'w-full h-full block absolute inset-0 pointer-events-none opacity-80';
      this.gl = this.canvas.getContext('webgl', { antialias: true, alpha: true });
      if (!this.gl) return;

      this.container.style.position = this.container.style.position || 'relative';
      this.container.insertBefore(this.canvas, this.container.firstChild);

      this.mouse = [0, 0];
      this.time = { start: performance.now(), old: performance.now() };
      this.isVisible = true;

      this.init();
      this.bindEvents();
      this.resize();
      this.render = this.render.bind(this);
      requestAnimationFrame(this.render);
    }

    init() {
      const gl = this.gl;

      // Compile Shaders
      const vs = this.compileShader(gl.VERTEX_SHADER, VERTEX_SHADER);
      const fs = this.compileShader(gl.FRAGMENT_SHADER, FRAGMENT_SHADER);

      this.program = gl.createProgram();
      gl.attachShader(this.program, vs);
      gl.attachShader(this.program, fs);
      gl.linkProgram(this.program);

      if (!gl.getProgramParameter(this.program, gl.LINK_STATUS)) {
        console.warn('Wave shader link failed');
        return;
      }
      gl.useProgram(this.program);

      // Locations
      this.locations = {
        position: gl.getAttribLocation(this.program, 'a_position'),
        color: gl.getAttribLocation(this.program, 'a_color'),
        time: gl.getUniformLocation(this.program, 'u_time'),
        size: gl.getUniformLocation(this.program, 'u_size'),
        speed: gl.getUniformLocation(this.program, 'u_speed'),
        field: gl.getUniformLocation(this.program, 'u_field'),
        projection: gl.getUniformLocation(this.program, 'u_projection'),
        mousemove: gl.getUniformLocation(this.program, 'u_mousemove'),
        hasTexture: gl.getUniformLocation(this.program, 'u_hasTexture')
      };

      // Buffers
      this.posBuffer = gl.createBuffer();
      this.colorBuffer = gl.createBuffer();

      gl.enable(gl.BLEND);
      gl.blendFunc(gl.SRC_ALPHA, gl.ONE);
    }

    compileShader(type, src) {
      const gl = this.gl;
      const s = gl.createShader(type);
      gl.shaderSource(s, src);
      gl.compileShader(s);
      return s;
    }

    buildMesh(width, height) {
      const positions = [];
      const colors = [];

      const cols = Math.min(60, Math.floor(width / 16));
      const rows = 40;
      const xSpan = 260;
      const zSpan = 280;

      for (let i = 0; i < cols; i++) {
        const u = i / (cols - 1);
        const x = (u - 0.5) * xSpan;

        for (let j = 0; j < rows; j++) {
          const v = j / (rows - 1);
          const z = -zSpan * 0.7 + v * zSpan;
          const y = -25;

          positions.push(x, y, z);

          // Color gradient: Electric Blue (0, 0.4, 1) to Cyan (0.2, 0.74, 0.97) with subtle Orange sparks (1, 0.42, 0)
          const isSpark = (i * 7 + j * 13) % 23 === 0;
          if (isSpark) {
            colors.push(1.0, 0.42, 0.0, 0.85); // Yukt brand orange
          } else {
            const r = 0.0 + u * 0.15;
            const g = 0.35 + v * 0.4;
            const b = 0.95 + (1.0 - u) * 0.05;
            const a = 0.25 + v * 0.65;
            colors.push(r, g, b, a);
          }
        }
      }

      this.count = positions.length / 3;

      const gl = this.gl;
      gl.bindBuffer(gl.ARRAY_BUFFER, this.posBuffer);
      gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(positions), gl.STATIC_DRAW);
      gl.enableVertexAttribArray(this.locations.position);
      gl.vertexAttribPointer(this.locations.position, 3, gl.FLOAT, false, 0, 0);

      gl.bindBuffer(gl.ARRAY_BUFFER, this.colorBuffer);
      gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(colors), gl.STATIC_DRAW);
      gl.enableVertexAttribArray(this.locations.color);
      gl.vertexAttribPointer(this.locations.color, 4, gl.FLOAT, false, 0, 0);
    }

    setProjection(aspect) {
      const fov = 55 * (Math.PI / 180);
      const near = 1;
      const far = 2000;
      const r = Math.tan(0.5 * Math.PI - 0.5 * fov);
      const o = 1 / (near - far);

      const proj = [
        r / aspect, 0, 0, 0,
        0, r, 0, 0,
        0, 0, (near + far) * o, -1,
        0, 0, near * far * o * 2, 0
      ];
      proj[14] += 120;
      proj[15] += 120;

      this.gl.uniformMatrix4fv(this.locations.projection, false, proj);
    }

    resize() {
      const width = this.container.offsetWidth || window.innerWidth;
      const height = this.container.offsetHeight || 420;
      const dpr = Math.min(window.devicePixelRatio || 1, 2);

      this.canvas.width = width * dpr;
      this.canvas.height = height * dpr;
      this.canvas.style.width = width + 'px';
      this.canvas.style.height = height + 'px';

      this.gl.viewport(0, 0, width * dpr, height * dpr);
      this.setProjection(width / height);
      this.buildMesh(width, height);

      this.gl.uniform3f(this.locations.field, width, 4.5, 300);
      this.gl.uniform1f(this.locations.size, 2.2 * dpr);
      this.gl.uniform1f(this.locations.speed, 3.2);
    }

    bindEvents() {
      window.addEventListener('resize', () => this.resize(), { passive: true });

      // Track mouse across parent hero section
      this.container.addEventListener('mousemove', (e) => {
        const rect = this.container.getBoundingClientRect();
        const nx = ((e.clientX - rect.left) / rect.width) * 2 - 1;
        const ny = -(((e.clientY - rect.top) / rect.height) * 2 - 1);
        this.mouse = [nx, ny];
      }, { passive: true });

      // Pause when not visible on screen
      if ('IntersectionObserver' in window) {
        const obs = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            this.isVisible = entry.isIntersecting;
          });
        }, { threshold: 0.05 });
        obs.observe(this.container);
      }
    }

    render() {
      if (this.isVisible && this.gl && this.count > 0) {
        const now = performance.now();
        const elapsed = (now - this.time.start) / 1000;

        this.gl.clearColor(0, 0, 0, 0);
        this.gl.clear(this.gl.COLOR_BUFFER_BIT);

        this.gl.uniform1f(this.locations.time, elapsed);
        this.gl.uniform2f(this.locations.mousemove, this.mouse[0], this.mouse[1]);

        this.gl.drawArrays(this.gl.POINTS, 0, this.count);
      }
      requestAnimationFrame(this.render);
    }
  }

  // Auto-mount on all hero sections with .advert-wave-hero
  function initWaveBanners() {
    const waveContainers = document.querySelectorAll('.advert-wave-hero');
    waveContainers.forEach(container => {
      if (!container.dataset.waveInitialized) {
        container.dataset.waveInitialized = 'true';
        new WaveShaderCanvas(container);
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initWaveBanners);
  } else {
    initWaveBanners();
  }
})();
