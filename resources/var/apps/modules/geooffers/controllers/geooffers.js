

    App.controller('GeoOffersHomeController', function($scope, $stateParams, GeoOffersService) {
      $scope.is_loading = true;
      $scope.offers = [];

      var value_id = $stateParams.value_id;

      var context = {
        // lat: 33.8938,
        // lng: 35.5018,
        // country_code: "US",
        // city: "New York"
      };

      GeoOffersService.list(value_id, context).then(function(resp) {
        $scope.offers = (resp && resp.data) ? resp.data : [];
      }).finally(function() {
        $scope.is_loading = false;
      });
    });

    App.controller('GeoOffersViewController', function($scope, $stateParams, GeoOffersService) {
      $scope.is_loading = true;
      $scope.offer = null;

      var value_id = $stateParams.value_id;
      var offer_id = $stateParams.offer_id;

      GeoOffersService.view(value_id, offer_id).then(function(resp) {
        $scope.offer = (resp && resp.data) ? resp.data : null;
      }).finally(function() {
        $scope.is_loading = false;
      });
    });
