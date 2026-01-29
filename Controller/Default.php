<?php

class GeoOffers_Controller_Default
{
   
    protected function buildJsonResponse($data = null, $success = true, $error = null)
    {
        return [
            "success" => (bool) $success,
            "data"    => $data,
            "error"   => $error,
            "meta"    => [
                "module" => "geooffers",
                "ts"     => time(),
            ],
        ];
    }

    protected function requireParams(array $source, array $required)
    {
        $missing = [];
        foreach($required as $key) {
            if(!isset($source[$key]) || $source[$key] === "") {
                $missing[] = $key;
            }
        }

        return $missing;
    }
}
