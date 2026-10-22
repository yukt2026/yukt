/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./includes/**/*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        navy: {
          950: '#070C18',
          900: '#0B1220', // Dark navy sections
          850: '#0E1726',
          800: '#111827', // Primary text
          700: '#1F2937',
          600: '#4B5563',
          500: '#64748B', // Secondary text
          400: '#94A3B8',
          300: '#CBD5E1',
          200: '#E5E7EB', // Borders
          100: '#F1F5F9',
          50: '#F7F9FC',  // Alternate section background
        },
        electric: {
          50: '#EFF6FF',
          100: '#DBEAFE',
          200: '#BFDBFE',
          300: '#93C5FD',
          400: '#60A5FA',
          500: '#3B82F6',
          600: '#2563EB', // Primary brand blue (Linear/Stripe style)
          700: '#1D4ED8',
          800: '#1E40AF',
          900: '#1E3A8A',
        },
        brandOrange: {
          50: '#FFF7ED',
          100: '#FFEDD5',
          200: '#FED7AA',
          500: '#F97316', // Subtle orange accent
          600: '#EA580C',
          700: '#C2410C',
        },
        canvas: {
          white: '#FFFFFF',
          subtle: '#F7F9FC', // Alternate section background
          muted: '#F1F5F9',
          border: '#E5E7EB', // Clean borders
          dark: '#0B1220',   // Dark navy
        }
      },
      fontFamily: {
        sans: ['Inter', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', 'sans-serif'],
        mono: ['"JetBrains Mono"', '"Fira Code"', 'Consolas', 'monospace'],
      },
      boxShadow: {
        'subtle': '0 1px 2px 0 rgba(0, 0, 0, 0.04)',
        'card': '0 1px 3px 0 rgba(0, 0, 0, 0.05), 0 1px 2px -1px rgba(0, 0, 0, 0.04)',
        'card-hover': '0 12px 30px -6px rgba(11, 18, 32, 0.08), 0 4px 10px -3px rgba(11, 18, 32, 0.04)',
        'stripe': '0 20px 40px -15px rgba(11, 18, 32, 0.12), 0 0 0 1px rgba(11, 18, 32, 0.05)',
        'stripe-deep': '0 30px 60px -20px rgba(11, 18, 32, 0.18), 0 0 0 1px rgba(11, 18, 32, 0.06)',
        'electric-glow': '0 4px 14px 0 rgba(37, 99, 235, 0.22)',
        'orange-glow': '0 4px 14px 0 rgba(249, 115, 22, 0.2)',
      },
      borderRadius: {
        'card': '12px',
        'btn': '8px',
        'badge': '6px',
      }
    },
  },
  plugins: [],
}
