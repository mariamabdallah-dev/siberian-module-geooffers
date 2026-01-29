<?php

class Geooffers_Mobile_GeooffersController extends Core_Controller_Mobile_Default
{
    public function indexAction()
    {
       
        // - value_id: the feature instance in the app
        // - lat/lng: optional GPS coordinates from device
        // - country/city: optional fallback strings
        //
        // $valueId = $this->getRequest()->getParam("value_id");
        // $context = [
        //   "lat" => $this->getRequest()->getParam("lat"),
        //   "lng" => $this->getRequest()->getParam("lng"),
        //   "country_code" => $this->getRequest()->getParam("country_code"),
        //   "city" => $this->getRequest()->getParam("city"),
        // ];

      
        $example = [
            [
                "offer_id" => 1,
                "title"    => "WELCOME_GEOOFFERS",
                "body"     => "Welcome! This is a location-based offer (example payload).",
                "starts_at"=> null,
                "ends_at"  => null,
                "locations"=> [
                    ["type" => "country", "country_code" => "US"],
                    ["type" => "city", "country_code" => "US", "city" => "New York"],
                ],
            ],
        ];

       
        // $offers = (new GeoOffers_Model_Service_OfferSelector())->selectForUser($valueId, $context);
        // $this->_sendJson($offers);

    }

    public function viewAction()
    {
      
        // $valueId = $this->getRequest()->getParam("value_id");
        // $offerId = $this->getRequest()->getParam("offer_id");

        $example = [
            "offer_id" => 1,
            "title" => "WELCOME_GEOOFFERS",
            "body"  => "Detailed offer view (example payload).",
            "cta"   => ["label" => "Learn more", "url" => "https://example.com"],
        ];

    }
}
