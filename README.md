# FBI Fugitive Concentration

Play Concentration with FBI Fugitive photos parsed from FBI Fugitive RSS feeds.

This is an entry for Sunlight Labs Apps for America 2 contest using data from data.gov.

## Technical Details

This is actually a really simple web app but there's a lot of boilerplate code in here.

It uses symfony v1.0.20 and dojo v1.3.0.

Heavy lifting for the RSS feeds is done by sfFeed2Plugin and sfWebBrowserPlugin.
Heavy lifting for the client-side JS is done by dojox.fx.flip and a hacked version of dojox.image.LightboxNano.

There is no database, data is stored in serialized php arrays in a file-based cache.

Currently the app must be manually updated by running batch/updateImages.php and then copying the data into apps/frontend/modules/home/actions/actions.class.php, I'll probably change this so it can 
be run from a cron job

And now a quick overview of where the bulk of the code is written:
* *batch/updateImages.php* - Parses the RSS feeds and extracts the images from each wanted page (FBI wanted pages are not valid HTML so regexes must be used, they're actually made in Adobe Pagemill!)
* *apps/frontend/modules/home/actions/actions.class.php* - Grabs 12 random images from the dataset, then creates an array with 24 images randomly placed
* *apps/frontend/modules/home/templates/indexSuccess.php* - This is the View of the MVC, pretty straightfoward use of YUI for CSS, dojo widgets to instantiate the JS
* *web/js/bert/Card.js* - This is the widget for the Card itself, handles the gameplay and the flipping
* *web/js/bert/YouWin.js* - This is a hacked version of dojox.image.LightboxNano to display the You Win! image when you win.
