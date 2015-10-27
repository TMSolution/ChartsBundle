function doCanvas(htmlContainerId) {

    if ($('#' + htmlContainerId).find('canvas').length == 0) {
        $('#' + htmlContainerId).append('<canvas style="display:none;" id="' + htmlContainerId + '-canvas"></canvas>');
    }

    var svgContainer = $('#' + htmlContainerId).find('svg').first();
    var svgContent = '<svg>' + svgContainer.html() + '</svg>';
    var canvasContainer = document.getElementById(htmlContainerId + '-canvas');
    canvasContainer.width = svgContainer.width();
    canvasContainer.height = svgContainer.height();
    

    if (typeof (FlashCanvas) != 'undefined') {
        canvasContainer.getContext = document.getElementById('canvas').getContext;
    }
    canvg(canvasContainer, svgContent);
    return canvasContainer.toDataURL('image/png');
}

function downloadImage(link, htmlContainerId, filename) {
    link.href = doCanvas(htmlContainerId);
    link.download = filename;
}





