<?php

/**
 * General Configuration (mostly meta) for the Microsite.
 */

// Current version of the website.
// Will be used to control css and js caching.
// Mind to also update the version number within the serviceworker-cache.js!
$version_nr = '1.2.3';

// Multilanguage.
$language['default'] = 'en'; // Use a value from the array below.
$language['available'] = array( // Needs to be an array! Key needs to be the language code, while value needs to be the name of the language as spelled in its own language. See https://support.google.com/webmasters/answer/189077 for details about language codes.
  'en' => 'English', 
  'de' => 'Deutsch',
  'es' => 'Español'
);

// Deployment hook definition.
// Adjust to a file of yours, where you run a Git pull command and maybe more. Mind to do some checksum test there and do NOT include this file within the repo (or use secured variables). A sample file is included in this repo.
$the_deployment_slug = 'deployment'; // The URL slug, which triggers the deployment script.
$the_deployment_script = './deploy.php'; // File name of the deployment script - must be a php file (e.g. "./deploy.php").

// Google Tag Manager Integration.
$the_gtm_id = ''; // Set empty to not use it.
$the_gtm_id_amp = ''; // Set empty to not use it (mind the correct AMP setup of your GTM container).
$amp_cookie_consent = false; // If set to false, there will be no cookie banner on AMP pages and data-block-on-consent won't work. If set to true, add data-block-on-consent to every cookie using element (https://amp.dev/documentation/components/amp-consent/) and mind to have an option to adjust the choice through a link somewhere.

// Directus (8+) integration.
// This is a basic integration. You can define a collection and item id at the routing and get a variable, which holds all meta information. You can than use this variable within the respective page code.
// Mind that you need to provide public read access to the respective collections.
// Directus is quite flexible and can be used in many styles and for many purposes. Feel free to extend this to your needs.
$directus_url = ''; // URL to your directus API instance. If not set, directus connection will be disabled. (Usual scheme: PATH-TO-DIRECTUS/:project/ - PATH-TO-DIRECTUS can be a domain pointing to /public or something like https://www.domain.com/directus/public/:project/ - depending on your setup.)
$directus_user = ''; // Set user email and password only, if you need to access content, which is not set to public at you Directus instance. Make sure to have a seperate user for this and that this user has respective rights and no 2FA enabled.
$directus_password = ''; // If you store your code in a repo, consider using a masked environment variable here.

// Base URL of your microsite.
$the_page_url = 'https://www.cellashaving.com/';

// PWA settings.
$the_webapp_name = 'Cella SHaving'; // Mind manifest.json too.
$the_webapp_status = true; // Set false to disable PWA (does not impact the serviceworker cache). Also delete the manifest.json to make sure it is not recognized as potential PWA.
$the_theme_color = '#008c48'; // Mind manifest.json too.

// Default page meta settings.
// Can be partly overridden per page at the routing.
$the_page_meta_defaults = array();
$the_page_meta_defaults['title'] = 'Put your default page title here.';
$the_page_meta_defaults['description'] = 'Put your default meta description here.';
$the_page_meta_defaults['keywords'] = 'Keyword1, Keyword2, Keyword3, Up to 10';
$the_page_meta_defaults['author'] = 'YOUR NAME';
$the_page_meta_defaults['publisher'] = 'YOUR NAME';
$the_page_meta_defaults['twitter'] = ''; // your twitter name (without any @)
$the_page_meta_defaults['robots'] = 'index,follow';



?>
