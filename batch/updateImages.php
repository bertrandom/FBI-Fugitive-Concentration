<?php
 
    define('SF_ROOT_DIR',    realpath(dirname(__FILE__).'/..'));
    define('SF_APP',         'frontend');
    define('SF_ENVIRONMENT', 'prod');
    define('SF_DEBUG',       false);
     
    require_once(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'apps'.DIRECTORY_SEPARATOR.SF_APP.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php'); 

    sfContext :: getInstance();
    
	$cache = new sfArrayCache(sfConfig::get('sf_cache_dir'));
	$cache->setLifeTime(86400); // convert to seconds
	
	$pages = $cache->get('pages', 'my_cache_dir');
	
	// test for empty or timed out cache
	if ($pages === null) {

        $pages = array();
        
/*        $feeds = array(
            'http://www.fbi.gov/rss/topten.xml',
            'http://www.fbi.gov/rss/terrorists.xml'
        );*/

        $feeds = array(
            'http://www.fbi.gov/rss/topten.xml',
            'http://www.fbi.gov/rss/terrorists.xml',
            'http://www.fbi.gov/rss/murder.xml',
            'http://www.fbi.gov/rss/violent.xml',
            'http://www.fbi.gov/rss/cyber.xml',
            'http://www.fbi.gov/rss/cac.xml',
            'http://www.fbi.gov/rss/criment.xml',
            'http://www.fbi.gov/rss/white.xml'                    
        );


	    foreach ($feeds as $feedurl) {
	    
		    $feed = sfFeedPeer::createFromWeb($feedurl);
			
			$items = $feed->getItems();
				
			foreach ($items as $item) {
				$pages[] = $item->getLink();
			}

        }

        $cache->set('pages', 'my_cache_dir', $pages);

    }

    $images = $cache->get('images', 'my_cache_dir');
	
	if ($images === null) {

        $images = array();

        $numofpages = count($pages);
        foreach ($pages as $pageindex => $url) {

            $path = substr($url, 0, strrpos($url, '/') + 1);
    
            $b = new sfWebBrowser();
            $b->get($url);
            
            echo "Parsing " . $url . " [" . $pageindex . " of " . $numofpages . "]\n";
            
            $result = preg_match_all('/\<img src="(.*?)"/is', $b->getResponseText(), $matches);
            
            if ($result !== FALSE && $result > 0) {
    
                foreach ($matches[1] as $matchindex => $match) {

                    if ($matchindex == 0) continue;
                    
                    $match = strtolower($match);
                    
                    $images[$url][] = $path . $match;
                       
                }
                   
            }
        
        }
        
        $cache->set('images', 'my_cache_dir', $images);
    
    }