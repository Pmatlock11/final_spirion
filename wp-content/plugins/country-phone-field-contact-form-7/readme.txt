=== Country & Phone Field Contact Form 7 ===
Contributors: narinderbisht
Tags: country dropdown, flags, phone extension, form, contact form
Requires at least: 4.8
Tested up to: 5.0.2
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add country drop down with flags and phone number with country phone extensions field in contact form 7.

== Description ==
Plugin is type of addon of wordpress contact form 7 plugin. This plugin add new two fields. Country list and country phone extensions list. This plugin help user create a country drop-down list with country flags. User have no needs manually adding countries name in standard drop-down field of contact form 7.

Requirments:
* Contact form 7 must be active plugin.

= Recommended Plugins =

The following plugins are recommended for Contact Form 7 users:

* [Contact form 7](https://wordpress.org/plugins/contact-form-7/) by takayukister - With Conact form 7, you can use this plugin. Without contact form 7 this plugin have no needs.

== Installation ==

1. Upload the entire `country-phone-field-contact-form-7` folder to the `/wp-content/plugins/` directory.
1. Kindly make sure 'contact form 7' plugin active before activate this plugin.
1. Activate the plugin through the 'Plugins' menu in WordPress.

You will find two new fields type in your contact form 7 field list.

== Frequently Asked Questions ==

= How to set default selected country? =

Plugin have assets folder, there a javascript file custom_script.js. Uncomment the this line defaultCountry: "jp" and add your default country iso code within the double quote values. For mobile extension uncomment this line initialCountry: "auto", and add your default country iso code.

= How to set preferred countries list? =

Ucomment this code line preferredCountries: ['ca', 'gb', 'us'] from custom_script.js file.

= How to set only selected countries list? =

Ucomment this code line onlyCountries: ['ca', 'gb', 'us'] from custom_script.js file.

== Screenshots ==

1. screenshot-1.png
1. screenshot-2.png
1. screenshot-3.png

== Changelog ==

1.0.0

First version of plugin.

1.0.1
* Update FAQs
* Tested with wordpress 5.0