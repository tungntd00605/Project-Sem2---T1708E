<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>

<script src="{{asset('pdfjs/build/pdf.js')}}"></script>

<h1>PDF.js Previous/Next Zoom example</h1>

<div>
    <button id="prev">Previous</button>
    <button id="next">Next</button>
    &nbsp; &nbsp;
    <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
    <button id="zoominbutton" type="button">zoom in</button>
    <button id="zoomoutbutton" type="button">zoom out</button>
    <span>Ratio: <span id="zoom-ratio"></span></span>
</div>

<canvas id="the-canvas"></canvas>
<script type="text/javascript">
    // If absolute URL from the remote server is provided, configure the CORS
    // header on that server.
    var url = '{{asset('pdfjs/web/compressed.tracemonkey-pldi-09.pdf')}}';

    // Loaded via <script> tag, create shortcut to access PDF.js exports.
    var pdfjsLib = window['pdfjs-dist/build/pdf'];

    // The workerSrc property shall be specified. (not working)
    {{--pdfjsLib.GlobalWorkerOptions.workerSrc = '{{asset('pdfjs/build/pdf.worker.js')}}';--}}

    // Use this instead of the above code to add worker.js
    if (!PDFJS.workerSrc && typeof document !== 'undefined') {
        // workerSrc is not set -- using last script url to define default location
    // ****** I have no clue what the code below hope to accomplish ********
    // ****** How can it locate the script container by assuming it ********
    // ****** always would be at the end of <body> or <head> ????   ********
        PDFJS.workerSrc = (function () {
            'use strict';
            var scriptTagContainer = document.body ||
                document.getElementsByTagName('head')[0];
            var pdfjsSrc = scriptTagContainer.lastChild.src;
            return pdfjsSrc && pdfjsSrc.replace(/\.js$/i, '.worker.js');
        })();


    // ****** Here I just hardcode the location of the needed file *********
    // ****** This is the part that makes it work.                 *********
    // ****** Obviously, tailor this to the same path of pdf.js    *********
        PDFJS.workerSrc = '{{asset('pdfjs/build/pdf.worker.js')}}';
    }

    var pdfDoc = null,
        pageNum = 1,
        pageRendering = false,
        pageNumPending = null,
        scale = 1,
        canvas = document.getElementById('the-canvas'),
        ctx = canvas.getContext('2d');

    /**
     * Get page info from document, resize canvas accordingly, and render page.
     * @param num Page number.
     */
    function renderPage(num) {
        pageRendering = true;
        // Using promise to fetch the page
        pdfDoc.getPage(num).then(function(page) {
            var viewport = page.getViewport(scale);
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            var renderContext = {
                canvasContext: ctx,
                viewport: viewport
            };
            var renderTask = page.render(renderContext);

            // Wait for rendering to finish
            renderTask.promise.then(function() {
                pageRendering = false;
                if (pageNumPending !== null) {
                    // New page rendering is pending
                    renderPage(pageNumPending);
                    pageNumPending = null;
                }
            });
        });

        // Update page counters
        document.getElementById('page_num').textContent = num;
        document.getElementById('zoom-ratio').textContent = Math.round(scale * 100) + "%";
    }

    /**
     * If another page rendering in progress, waits until the rendering is
     * finised. Otherwise, executes rendering immediately.
     */
    function queueRenderPage(num) {
        if (pageRendering) {
            pageNumPending = num;
        } else {
            renderPage(num);
        }
    }

    /**
     * Displays previous page.
     */
    var zoominbutton = document.getElementById("zoominbutton");
    zoominbutton.onclick = function() {
        if (scale >= 2) {
            return;
        }
        scale = scale + 0.2;
        queueRenderPage(pageNum);
        document.getElementById('zoom-ratio').textContent = Math.round(scale * 100) + "%";
    }

    var zoomoutbutton = document.getElementById("zoomoutbutton");
    zoomoutbutton.onclick = function() {
        if (scale <= 0.5) {
            return;
        }
        scale = scale - 0.2;
        queueRenderPage(pageNum);
        document.getElementById('zoom-ratio').textContent = Math.round(scale * 100) + "%";
    }

    function onPrevPage() {
        if (pageNum <= 1) {
            return;
        }
        pageNum--;
        queueRenderPage(pageNum);
    }
    document.getElementById('prev').addEventListener('click', onPrevPage);

    /**
     * Displays next page.
     */
    function onNextPage() {
        if (pageNum >= pdfDoc.numPages) {
            return;
        }
        pageNum++;
        queueRenderPage(pageNum);
    }
    document.getElementById('next').addEventListener('click', onNextPage);

    /**
     * Asynchronously downloads PDF.
     */
    pdfjsLib.getDocument(url).then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('page_count').textContent = pdfDoc.numPages;

        // Initial/first page rendering
        renderPage(pageNum);
    });



</script>
</body>
</html>

