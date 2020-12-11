// Unique ID to differentiate this content script from the rest of the web. 
// or use the extension id from @@__extension_id__, I recall there was a bug, haven't
// checked if it got resolved though. 
var map = 'crx_myextension_iframe'; 
var latitude = -1;
var longitude = -1;

/**
 * Here is where you want to render a latitude and longitude. We create an iframe so we
 * we can inject it. We just want to maintain a single instance of it though.
 */
function onRenderMap() {
  var mapViewerDOM = document.getElementById('map');
  if (mapViewerDOM) {
     mapViewerDOM.parentNode.removeChild(mapViewerDOM);
  }

  mapViewerDOM = document.createElement('iframe');
  mapViewerDOM.setAttribute('id', 'map');
  mapViewerDOM.setAttribute('src', chrome.extension.getURL('index.html'));
  mapViewerDOM.setAttribute('frameBorder', '0');
  mapViewerDOM.setAttribute('width', '99.90%');
  mapViewerDOM.setAttribute('height', '100%');
  mapViewerDOM.setAttribute('style', 'position: fixed; top: 0; left: 0; overflow: hidden; z-index: 99999');
  mapViewerDOM.onload = function(e) {
     sendResponse({
       method: 'RenderMap', 
       data: {
         latitude: latitude,
         longitude: longitude
       }
     });
  }
  document.body.appendChild(mapViewerDOM);
}
