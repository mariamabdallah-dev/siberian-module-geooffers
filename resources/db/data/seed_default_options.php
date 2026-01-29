<?php


// 1) Acquire DB adapter 
$db = null;
if(class_exists("Zend_Db_Table")) {
    $db = Zend_Db_Table::getDefaultAdapter();
}

if(!$db) {
    
    return;
}

// 2) Check if seed already applied (using a stable marker)
$markerTitle = "WELCOME_GEOOFFERS";
$already = $db->fetchOne("SELECT offer_id FROM geooffers_offer WHERE title = ?", [$markerTitle]);
if($already) {
    return; // seed already applied
}

// 3) Insert example locations (country + city).
$now = date("Y-m-d H:i:s");

// Country: US
$db->insert("geooffers_location", [
    "type" => "country",
    "country_code" => "US",
    "city" => null,
    "geofence_json" => null,
    "created_at" => $now,
    "updated_at" => $now,
]);
$usLocationId = (int) $db->lastInsertId();

// City: New York
$db->insert("geooffers_location", [
    "type" => "city",
    "country_code" => "US",
    "city" => "New York",
    "geofence_json" => null,
    "created_at" => $now,
    "updated_at" => $now,
]);
$nyLocationId = (int) $db->lastInsertId();

// 4) Insert a demo offer
$db->insert("geooffers_offer", [
    "title" => $markerTitle,
    "body"  => "Welcome! This is a demo offer seeded by the GeoOffers module skeleton.",
    "starts_at" => null,
    "ends_at" => null,
    "is_active" => 1,
    "created_at" => $now,
    "updated_at" => $now,
]);
$offerId = (int) $db->lastInsertId();

// 5) Link offer <-> locations (many-to-many)
foreach([$usLocationId, $nyLocationId] as $locationId) {
    $db->insert("geooffers_offer_location", [
        "offer_id" => $offerId,
        "location_id" => $locationId,
        "created_at" => $now,
        "updated_at" => $now,
    ]);
}


