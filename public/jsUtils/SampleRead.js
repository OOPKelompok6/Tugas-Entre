import pdfjsDist from 'https://cdn.jsdelivr.net/npm/pdfjs-dist@4.8.69/+esm';

pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.8.69/pdf.worker.min.mjs';

const pdfUrl = 'Books/AldousHuxley-BraveNewWorld.pdf';

// Get the canvas element and its context
const canvas = document.getElementById('pdf-canvas');
const context = canvas.getContext('2d');
let pageNum = 1,
pdf = null,
pageRendering = false,
pageNumPending = null,
scale = 1.0;

// Display previous page
document.getElementById('prev').addEventListener('click', () => {
    if (pageNum <= 1) {
        return;
    }
    pageNum--;
    queueRenderPage(pageNum);
});

document.getElementById('zoomIn').addEventListener('click', () => {
    if (scale >= 2.0) {
        return;
    }
    scale += 0.2;
    queueRenderPage(pageNum);
});

document.getElementById('zoomOut').addEventListener('click', () => {
    if (pageNum <= 0.2) {
        return;
    }
    scale -= 0.2;
    queueRenderPage(pageNum);
});

// Display next page
document.getElementById('next').addEventListener('click', () => {
    if (pageNum >= pdf.numPages) {
        return;
    }
    pageNum++;
    queueRenderPage(pageNum);
});

// Queue rendering for the next page
function queueRenderPage(num) {
    if (pageRendering) {
        pageNumPending = num;
    } else {
        renderPage(num);
    }
};

function renderPage(num) {
    pageRendering = true;

    // Fetch the page
    pdf.getPage(num).then((page) => {
        const viewport = page.getViewport({ scale });
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        // Render the page
        const renderContext = {
            canvasContext: context,
            viewport: viewport,
        };
        const renderTask = page.render(renderContext);
        console.log('Page loaded.');

        renderTask.promise.then(() => {
            pageRendering = false;

            if (pageNumPending !== null) {
                renderPage(pageNumPending);
                pageNumPending = null;
            }
        });
    });
}

// Load the PDF document
pdfjsLib.getDocument(pdfUrl).promise.then(localPdf => {
    pdf = localPdf;
    console.log(`PDF loaded: ${pdf.numPages} pages.`);

    // Get render
    renderPage(pageNum);
}).catch(error => {
    console.error('Error loading PDF:', error);
});