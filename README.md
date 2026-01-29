# GeoOffers — Location-Based Offers / Announcements

This repository contains a **SiberianCMS module skeleton** (non-functional by design) for a realistic feature:

- App owners can create **offers/announcements**
- Associate them with **locations** (country / city / geofence)
- The mobile app would display different content based on the **user’s location**


In a complete implementation, the module would:

1. Provide Backoffice/Editor screens to:
   - Create/edit offers (title/body, schedule, active flag)
   - Create/edit locations (country/city/geofence)
   - Attach locations to offers (many-to-many)
2. Expose mobile endpoints:
   - `/geooffers/mobile_geooffers/index/value_id/:value_id` → list matching offers
   - `/geooffers/mobile_geooffers/view/value_id/:value_id/offer_id/:offer_id` → view offer
3. Determine the “best” offers for a user:
   - Resolve a normalized location descriptor from app context (GPS/city/country)
   - Match offers by location
   - Apply priority/schedule/fallback rules

---

## Installation (Theoretical)

1. Copy the module folder into your SiberianCMS installation:

   ```
   app/local/modules/GeoOffers
   ```

2. Ensure the module’s feature declaration exists:

   ```
   app/local/modules/GeoOffers/features/geooffers/feature.json
   ```

3. In a real environment, you may need to clear caches / rebuild assets depending on your setup.

---

## How It Integrates With SiberianCMS

- **Feature registration:** `features/geooffers/feature.json`
  - Declares the feature code `geooffers` and the mobile routes/templates.
- **Assets for the mobile app:** `resources/var/apps/modules/geooffers/...`
  - JS controllers/services, templates, and styles used by the Ionic layer.
  - Registered in `init.php` via `Siberian_Assets::registerAssets` and add* calls (skeleton).
- **Editor/Backoffice views (desktop):** `resources/design/desktop/flat/...`
  - `layout/geooffers.xml` maps routes to `.phtml` templates.
- **PHP MVC:** `controllers/Backoffice` + `controllers/Mobile`
  - Backoffice controller for module settings and dashboard
  - Mobile controller for API responses to the app
- **Persistence layer:** `Model/*` and `resources/db/schema/*`
  - Entities: Offer, Location (+ join table offer_location)

---

## Folder Structure Overview

### Root
- `package.json` — module metadata & dependency constraints (skeleton)
- `init.php` — bootstraps module: registers assets and (optionally) menus (skeleton)
- `uninstall.php` — uninstall placeholder

### PHP MVC
- `controllers/Backoffice/GeooffersController.php` — backoffice entrypoint (skeleton)
- `controllers/Mobile/GeooffersController.php` — mobile endpoints (skeleton)
- `Model/Offer.php`, `Model/Location.php` — entities (skeleton)
- `Model/Db/Table/*` — table definitions (skeleton)
- `Model/Service/*` — business services (selector/resolver) (skeleton)
- `Form/*` — editor/backoffice forms placeholders (skeleton)

### Feature definition
- `features/geooffers/feature.json` — declares the feature, routes, templates, and asset files

### Database schema
- `resources/db/schema/geooffers_offer.php`
- `resources/db/schema/geooffers_location.php`
- `resources/db/schema/geooffers_offer_location.php`

### Desktop editor templates
- `resources/design/desktop/flat/layout/geooffers.xml`
- `resources/design/desktop/flat/template/geooffers/application/list.phtml`
- `resources/design/desktop/flat/template/geooffers/application/edit.phtml`

### Mobile (Ionic) assets
- `resources/var/apps/modules/geooffers/controllers/geooffers.js`
- `resources/var/apps/modules/geooffers/services/geooffers.js`
- `resources/var/apps/modules/geooffers/factory/geooffers.js`
- `resources/var/apps/modules/geooffers/templates/l1/home.html`
- `resources/var/apps/modules/geooffers/templates/l1/view.html`
- `resources/var/apps/modules/geooffers/styles/geooffers.css`

---

## Assumptions & Design Decisions

- **Module name vs feature code**
  - Folder/module: `GeoOffers` (PascalCase)
  - Feature code: `geooffers` (lowercase)
- **Separation of concerns**
  - Controllers: HTTP glue only
  - Services: business logic (resolve location, select offers)
  - Models: persistence / entities
- **Many-to-many mapping**
  - Offers can target multiple locations
  - Locations can be reused across offers
- **Geofence stored as JSON**
  - Future implementation could store circle/polygon definitions in `geofence_json`




