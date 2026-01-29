
    App.service('GeoOffersService', function($http) {
      this.list = function(value_id, context) {
        // /geooffers/mobile_geooffers/index/value_id/<value_id>?lat=...&lng=...
        // return $http.get(url, { params: context }).then(r => r.data);
        return Promise.resolve({
          success: true,
          data: [
            {
              offer_id: 1,
              title: "WELCOME_GEOOFFERS",
              body: "Welcome! Example offer payload from GeoOffersService.list()."
            }
          ]
        });
      };

      this.view = function(value_id, offer_id) {
        // /geooffers/mobile_geooffers/view/value_id/<value_id>/offer_id/<offer_id>
        return Promise.resolve({
          success: true,
          data: {
            offer_id: offer_id,
            title: "WELCOME_GEOOFFERS",
            body: "Example offer payload from GeoOffersService.view()."
          }
        });
      };
    });
