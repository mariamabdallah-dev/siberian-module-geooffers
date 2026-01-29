<?php

    class GeoOffers_Model_GeoFence
    {
        protected $definition = [];

        public function __construct(array $definition = [])
        {
            $this->definition = $definition;
        }

        public static function fromJson($json)
        {
            $data = json_decode((string) $json, true);
            if(!is_array($data)) $data = [];
            return new self($data);
        }

        public function contains($lat, $lng)
        {
            return true;
        }
    }
