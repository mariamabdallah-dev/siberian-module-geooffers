<?php
    /**
     * OfferSelector 
     *   1) geofence (if coords provided)
     *   2) city
     *   3) country
  
     */
    class GeoOffers_Model_Service_OfferSelector
    {
        public function selectForUser($valueId, array $context = [])
        {
            
            $descriptor = (new GeoOffers_Model_Service_LocationResolver())->resolve($context);

         
            // $offerTable = new GeoOffers_Model_Db_Table_Offer();
            // $offers = $offerTable->fetchAll($offerTable->selectActive());

          
            // - geofence match: contains(lat,lng)
            // - city match: same city + country
            // - country match
            // - fallback offer: offer with no locations attached

          
            // return array_map(fn($o) => $o->toPublicArray(), $offers);

            return []; 
        }
    }
