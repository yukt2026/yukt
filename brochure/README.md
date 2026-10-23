# YUKT IT SOLUTIONS — Premium Company Profile Brochure

A high-performance, print-ready 8-page A4 corporate brochure engineered for **YUKT IT SOLUTIONS** ([yukt.online](https://yukt.online)).

---

## 📁 Project Directory Structure

```text
c:/xampp/htdocs/yukt/brochure/
├── YUKT_IT_SOLUTIONS_Company_Brochure.pdf   # Print-ready 300 DPI A4 PDF deliverable
├── index.html                               # Editable semantic HTML5 brochure layout
├── styles.css                               # Modular CSS design system & print styling
├── render.js                                # Automated Headless Chrome PDF & PNG renderer
├── generate-qr.js                           # Vector & PNG QR code generator script
├── README.md                                # Documentation & operational guide
├── previews/                                # High-resolution 2x Retina page screenshots
│   ├── page-1.png                           # Page 01: Cover Page
│   ├── page-2.png                           # Page 02: About YUKT & Leadership Pod
│   ├── page-3.png                           # Page 03: Web Design & Custom Development
│   ├── page-4.png                           # Page 04: Mission-Critical Software & ERP/CRM
│   ├── page-5.png                           # Page 05: Autonomous AI & WhatsApp Automation
│   ├── page-6.png                           # Page 06: Performance Marketing & Brand Studio
│   ├── page-7.png                           # Page 07: Specialized Solutions & YUKT Advantage
│   └── page-8.png                           # Page 08: Direct Contact & Action Page
└── assets/                                  # Verified brand identity assets
    ├── yukt-official-logo.png               # Official company logo
    ├── yukt-logo.svg                        # Crisp vector logo
    ├── yukt-logo-light.svg                  # Dark-mode vector logo
    ├── qr-yukt-online.png                   # High-res QR code (https://yukt.online)
    └── qr-whatsapp.png                      # High-res QR code (WhatsApp: +91 7217645059)
```

---

## 🖥️ How to Preview the Brochure

### Option 1: Live Browser Preview (with Screen Toolbar)
1. Double-click or open `index.html` in Google Chrome, Microsoft Edge, or Firefox:
   ```text
   file:///C:/xampp/htdocs/yukt/brochure/index.html
   ```
2. Or serve it via your local XAMPP Apache web server:
   ```text
   http://localhost/yukt/brochure/index.html
   ```
3. Use the floating top toolbar to:
   - Jump directly to any of the 8 pages.
   - Toggle Print Layout simulation.
   - Click **"Download PDF"** to invoke native browser printing.

---

## 🖨️ How to Regenerate the PDF & Page Screenshots

The project includes an automated headless Chrome rendering script powered by `puppeteer-core`.

### Prerequisites
- Node.js installed.
- Google Chrome installed at `C:\Program Files\Google\Chrome\Application\chrome.exe`.

### Command to Render
From the root of the project or brochure folder, run:

```bash
cd C:\xampp\htdocs\yukt\brochure
node render.js
```

### What this does:
1. Launches Chrome with high-fidelity retina pixel density (`deviceScaleFactor: 2`).
2. Waits for all custom web fonts (`Syne`, `Inter`, `JetBrains Mono`) to fully load.
3. Captures individual high-resolution PNG previews into `previews/page-1.png` through `page-8.png`.
4. Compiles and saves the vector-sharp `YUKT_IT_SOLUTIONS_Company_Brochure.pdf` with exact 0mm print margins and CSS background graphics enabled.

---

## 🎨 Design System & Specifications

| Element | Specification |
| :--- | :--- |
| **Document Format** | ISO 216 A4 Portrait (210mm &times; 297mm) |
| **Grid System** | 8pt / 12-column balanced grid with print-safe margins (14mm) |
| **Primary Navy** | `#040914` / `#0B132B` (Enterprise depth & authority) |
| **Electric Blue** | `#0066FF` / `#2563EB` (Engineering precision) |
| **YUKT Orange** | `#FF5500` / `#F97316` (Brand accent & action points) |
| **Display Font** | `Syne` (Bold, geometric, modern tech agency feel) |
| **Body Font** | `Inter` (Optimized for micro-legibility at small print sizes) |
| **Code / Metrics Font** | `JetBrains Mono` (Terminal, SLAs, system architecture) |

---

## 📞 Verified Company Information

- **Company Name:** YUKT IT SOLUTIONS PRIVATE LIMITED
- **Brand Tagline:** *Your Business. Our Technology.*
- **Official Website:** [https://yukt.online](https://yukt.online)
- **Primary WhatsApp / Co-Founder:** `+91 72176 45059` (Ranjeet)
- **Technical Architect Desk / Founder:** `+91 95763 38282` (Ansar Ali Shah)
- **Electronic Mail:** `contact@yukt.online`
- **Delivery Hubs:** Block A, Ram Datt Enclave, Uttam Nagar, Delhi, 110059 &amp; HSR Layout, Bengaluru, Karnataka
