/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./includes/**/*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Plus Jakarta Sans"', '-apple-system', 'BlinkMacSystemFont', 'sans-serif'],
        display: ['"Space Grotesk"', 'sans-serif'],
        mono: ['"JetBrains Mono"', 'monospace'],
      },
      colors: {
        navy: {
          950: '#040914',
          900: '#070E20',
          850: '#0A1224',
          800: '#0D1732',
          700: '#162447',
          600: '#1F3460',
          500: '#64748B',
          400: '#94A3B8',
          300: '#CBD5E1',
          200: '#E5E7EB',
          100: '#F1F5F9',
          50: '#F8FAFC',
        },
        electric: {
          50: '#EFF6FF',
          100: '#DBEAFE',
          200: '#BFDBFE',
          300: '#93C5FD',
          400: '#38BDF8', // Cyan / Light electric
          500: '#0066FF', // Reference vibrant electric blue
          600: '#0052CC',
          700: '#003D99',
          800: '#1E40AF',
          900: '#1E3A8A',
        },
        yukt: {
          orange: '#FF6B00',
          orangeLight: '#FF8833',
          orangeDark: '#CC5500',
        },
        brandOrange: {
          50: '#FFF7ED',
          100: '#FFEDD5',
          200: '#FED7AA',
          500: '#FF6B00',
          600: '#CC5500',
          700: '#993D00',
        },
        canvas: {
          white: '#FFFFFF',
          subtle: '#F8FAFC',
          muted: '#F1F5F9',
          border: 'rgba(255, 255, 255, 0.09)',
          dark: '#040914',
        }
      },
      boxShadow: {
        'subtle': '0 1px 2px 0 rgba(0, 0, 0, 0.04)',
        'card': '0 1px 3px 0 rgba(0, 0, 0, 0.05), 0 1px 2px -1px rgba(0, 0, 0, 0.04)',
        'card-hover': '0 20px 40px -15px rgba(0, 102, 255, 0.25)',
        'stripe': '0 20px 40px -15px rgba(0, 102, 255, 0.3), 0 0 0 1px rgba(56, 189, 248, 0.25)',
        'stripe-deep': '0 30px 60px -20px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.1)',
        'electric-glow': '0 0 25px rgba(0, 102, 255, 0.45)',
        'orange-glow': '0 0 25px rgba(255, 107, 0, 0.45)',
      },
      borderRadius: {
        'card': '16px',
        'btn': '12px',
        'badge': '8px',
      },
      animation: {
        'float-slow': 'floatSlow 6s ease-in-out infinite',
        'float-delayed': 'floatSlow 7s ease-in-out 2s infinite',
        'pulse-glow': 'pulseGlow 4s ease-in-out infinite',
      },
      keyframes: {
        floatSlow: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%': { transform: 'translateY(-12px)' },
        },
        pulseGlow: {
          '0%, 100%': { opacity: '0.5', transform: 'scale(1)' },
          '50%': { opacity: '0.9', transform: 'scale(1.06)' },
        }
      }
    },
  },
  plugins: [],
}
