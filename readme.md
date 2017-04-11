Secure WordPress REST API
=========================
A super-simple plugin that disallows access to REST endpoints for users that are not logged in.

Stops the REST API from being used to enumerate users.

## Usage
- Clone this repo to `mu-plugins` - you may need to create this directory in the designated WordPress content directory (`wp-content` in a standard install)
- Make sure the file is loaded

If you're using [Bedrock](https://roots.io/bedrock/), the built in mu-plugins autoloader will take care of loading for you.

Check it's working:
`https://example.com/wp-json/wp/v2/users` should return a 401 response if the user is not logged in.

## Non Bedrock Loader
Add this line to a loader in the root `mu-plugins` directory:

~~~php
<?php
// path/mu-plugins/load.php
require WPMU_PLUGIN_DIR.'/secure-rest-api/secure-rest-api.php';
~~~
