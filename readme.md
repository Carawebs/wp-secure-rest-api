Secure REST API
===============
Disallows access to REST endpoints for non-logged-in users.
Prevents user-enumeration by means of the REST API.
## Usage
- Clone this repo to `mu-plugins`
- Make sure the file is loaded

## Loader
Add this line to a loader in the root `mu-plugins` directory:

~~~php
<?php
// path/mu-plugins/load.php
require WPMU_PLUGIN_DIR.'/secure-rest-api/secure-rest-api.php';
~~~
