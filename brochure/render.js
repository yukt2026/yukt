const puppeteer = require('puppeteer-core');
const path = require('path');
const fs = require('fs');

async function renderBrochure() {
  console.log('--- Starting YUKT IT SOLUTIONS Brochure Render ---');
  const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
  const htmlPath = path.resolve(__dirname, 'index.html');
  const fileUrl = 'file:///' + htmlPath.replace(/\\/g, '/');

  console.log('Loading HTML from:', fileUrl);

  const browser = await puppeteer.launch({
    executablePath: chromePath,
    args: ['--no-sandbox', '--disable-setuid-sandbox', '--allow-file-access-from-files']
  });

  const page = await browser.newPage();
  
  // Set viewport to high-resolution A4 aspect ratio (210mm x 297mm at ~150-200 DPI)
  // 794px x 1123px is standard 96 DPI A4. Let's use deviceScaleFactor: 2 for crisp 2x retina images!
  await page.setViewport({
    width: 794,
    height: 1123,
    deviceScaleFactor: 2
  });

  await page.goto(fileUrl, { waitUntil: 'networkidle0' });

  // Ensure all web fonts are loaded
  await page.evaluateHandle('document.fonts.ready');

  // Hide the interactive web preview toolbar so it doesn't float over screenshots
  await page.evaluate(() => {
    const tb = document.querySelector('.screen-toolbar');
    if (tb) tb.style.display = 'none';
    document.body.style.padding = '0';
    document.body.style.background = '#e5e7eb';
  });

  // Verify page count
  const pages = await page.$$('.page');
  console.log(`Found ${pages.length} pages in DOM.`);

  // Create preview folder for screenshots
  const previewDir = path.join(__dirname, 'previews');
  if (!fs.existsSync(previewDir)) {
    fs.mkdirSync(previewDir, { recursive: true });
  }

  // Screenshot each page element directly
  for (let i = 0; i < pages.length; i++) {
    const pageNum = i + 1;
    const shotPath = path.join(previewDir, `page-${pageNum}.png`);
    await pages[i].screenshot({
      path: shotPath,
      type: 'png'
    });
    console.log(`Saved screenshot: page-${pageNum}.png`);
  }

  // Generate the complete high-quality print PDF
  const pdfPath = path.join(__dirname, 'YUKT_IT_SOLUTIONS_Company_Brochure.pdf');
  await page.pdf({
    path: pdfPath,
    format: 'A4',
    printBackground: true,
    preferCSSPageSize: true,
    margin: {
      top: '0mm',
      right: '0mm',
      bottom: '0mm',
      left: '0mm'
    }
  });

  const pdfStats = fs.statSync(pdfPath);
  console.log(`PDF successfully generated: ${pdfPath}`);
  console.log(`PDF file size: ${(pdfStats.size / 1024).toFixed(1)} KB`);

  await browser.close();
  console.log('--- Render Finished Successfully ---');
}

renderBrochure().catch(err => {
  console.error('Render error:', err);
  process.exit(1);
});
