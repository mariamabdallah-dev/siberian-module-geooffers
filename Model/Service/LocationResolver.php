<?php
    /**
   
     * - GPS coordinates from device
     * - Country/city from the OS locale
     * - A user-selected city (if app offers selection)
     */
    class GeoOffers_Model_Service_LocationResolver
    {
        public function resolve(array $context = [])
        {
          
            $descriptor = [
                "coords" => null,
                "country_code" => null,
                "city" => null,
            ];

            if(isset($context["lat"], $context["lng"]) && $context["lat"] !== null && $context["lng"] !== null) {
                $descriptor["coords"] = [
                    "lat" => (float) $context["lat"],
                    "lng" => (float) $context["lng"],
                ];
            }

            if(!empty($context["country_code"])) {
                $descriptor["country_code"] = strtoupper((string) $context["country_code"]);
            }

            if(!empty($context["city"])) {
                $descriptor["city"] = (string) $context["city"];
            }

            return $descriptor;
        }
    }
