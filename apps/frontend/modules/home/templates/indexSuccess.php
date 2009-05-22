<script>

    dojo.require("dojox.fx.flip");
    dojo.require("bert.YouWin");
    dojo.require("bert.Card");

    var cardsTurned = 0;
    var matchesFound = 0;
    var activeCards = [];
    var readyToTurn = true;
    
        
</script>

<div id="custom-doc" class="yui-t7" style="background: #cae9ff;">
	<div id="hd">
        <img dojoType="bert.YouWin" src="/images/logo.png" href="/images/youwin.png" id="logo" jsId="youwin" />
	</div>
	<div id="bd">
        <?php foreach ($images as $image): ?>
            <div dojoType="bert.Card" style="display: block; float: left; background: #cae9ff; width:100px; height:133px;" src="<?php echo $image['img']; ?>"><img src="/images/card.png" width="100" /></div>
        <?php endforeach; ?>
    </div>
	<div id="ft">
        <h2>How it works</h2>
        <p>The FBI provides Fugitive RSS Feeds for the following categories: 
        <ul>
            <li><a href="http://www.fbi.gov/rss/topten.xml">Top Ten Fugitives</a></li>
            <li><a href="http://www.fbi.gov/rss/terrorists.xml">Most Wanted Terrorists</a></li>
            <li><a href="http://www.fbi.gov/rss/murder.xml">Wanted for Violent Crimes (Murder) </a></li>
            <li><a href="http://www.fbi.gov/rss/violent.xml">Wanted for Violent Crimes</a></li>
            <li><a href="http://www.fbi.gov/rss/cyber.xml">Wanted for Cyber Crimes </a></li>
            <li><a href="http://www.fbi.gov/rss/cac.xml">Wanted for Crimes Against Children</a></li>
            <li><a href="http://www.fbi.gov/rss/criment.xml">Wanted in Criminal Enterprise Investigations</a></li>
            <li><a href="http://www.fbi.gov/rss/white.xml">Wanted for White Collar Crimes</a></li>
        </ul>
        <p>F.B.I. Fugitive Concentration parses those feeds and extracts an image of each fugitive and then randomly selects 12 fugitives for you to play with.
        <h2>Why</h2>
        <p>This is my entry to <a href="http://sunlightlabs.com/contests/appsforamerica2/">Sunlight Labs Apps for America 2 contest</a>. It uses information extracted from the <a href="http://www.data.gov/details/117">FBI Content Widget on data.gov</a>.
        <h2>Source code</h2>
        <p>All the code for this application can be found on <a href="http://github.com/bertrandom/FBI-Fugitive-Concentration/tree">github</a>. It's written in PHP and uses symfony v1.0.20 and dojo v1.3.0 for most of the heavy lifting.
        <h2>Credits</h2>
        <p>Created by <a href="mailto:%62%65%72%74%72%61%6e%64@%66%61%6e.%6e%65%74">Bertrand Fan</a>.
    </div>
</div>