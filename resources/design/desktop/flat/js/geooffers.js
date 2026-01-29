
    (function() {
      function onReady(fn) {
        if (document.readyState === 'complete' || document.readyState === 'interactive') return fn();
        document.addEventListener('DOMContentLoaded', fn);
      }

      onReady(function() {
        var buttons = document.querySelectorAll('.geooffers .btn');
        for (var i = 0; i < buttons.length; i++) {
          buttons[i].addEventListener('click', function(e) {
            e.preventDefault();
            console.log('GeoOffers skeleton action:', this.textContent.trim());
          });
        }
      });
    })();
