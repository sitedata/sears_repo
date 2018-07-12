# SearsHometownStores Templateer

**NOTE: ALL THIS COULD BE COMPLETELY USELESS ONCE WE GET DETAILS ON THE DELIVERABLES**

Crude templating system for building SearsHometownStores.com landing pages.

Quick & dirty.

Not initially intended to be shared but oh well...

## Basic usage instructions
- set up a virtual host pointing to the directory to which you check this out
- copy the `example` directory and give it a unique name
- `cp -R example unique-name`
- build your page content in the file `page-content.php`
- Update the breadcrumb text in the `index.php` file to something appropriate for the page you are building
- visit the directory of your page in your browser
- the processed PHP in the content file will be written out as static HTML to the same directory as the `page-content.php` when the page loads

### More stuff
