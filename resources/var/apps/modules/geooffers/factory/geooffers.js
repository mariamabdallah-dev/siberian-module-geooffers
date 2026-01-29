
    App.factory('GeoOffersFactory', function() {
      return {
        formatSchedule: function(starts_at, ends_at) {
          if(!starts_at && !ends_at) return "Always";
          if(starts_at && !ends_at) return "From " + starts_at;
          if(!starts_at && ends_at) return "Until " + ends_at;
          return starts_at + " → " + ends_at;
        }
      };
    });
