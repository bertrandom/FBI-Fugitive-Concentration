<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<style type="text/css">
    @import "/js/dijit/themes/tundra/tundra.css";
</style>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css"> 

<script type="text/javascript">
    var djConfig = {
        baseUrl: '/js/dojo/',
        parseOnLoad: true,
        isDebug: false
    };
</script>

<script type="text/javascript" src="/js/dojo/dojo.js"></script>

</head>
<body>

<?php echo $sf_data->getRaw('sf_content') ?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8093261-2");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
