<?php include('header.php'); ?>

<ul id="nav">
    <li><a href="#intro" title="Next Section"><img src="../img/dot.png" alt="Link" /></a></li>
    <li><a href="#second" title="Next Section"><img src="../img/dot.png" alt="Link" /></a></li>
    <li><a href="#third" title="Next Section"><img src="../img/dot.png" alt="Link" /></a></li>
    <li><a href="#fifth" title="Next Section"><img src="../img/dot.png" alt="Link" /></a></li>
</ul>

<div id="intro">
    <div class="story">
        <div class="float-left">
        <h2>(Almost) Static Background</h2>
        <p>This section has a background that moves slightly slower than the user scrolls. This is achieved by changing the top position of the background for every pixel the page is scrolled.</p>
        </div>
    </div> <!--.story-->
</div> <!--#intro-->

<div id="second">
    <div class="story"><div class="bg"></div>
        <div class="float-right">
            <h2>Multiple Backgrounds</h2>
            <p>The multiple backgrounds applied to this section are moved in a similar way to the first section -- every time the user scrolls down the page by a pixel, the positions of the backgrounds are changed.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio. Donec egestas aliquet facilisis. Nunc eu nunc eget neque ornare fringilla. Nam vel sodales lectus. Nulla in pellentesque eros. Donec ultricies, enim vitae varius cursus, risus mauris iaculis neque, euismod sollicitudin metus erat vitae sapien. Sed pulvinar.</p>
        </div>
    </div> <!--.story-->
    
</div> <!--#second-->

<div id="third">
    <div class="story">
        <div class="float-left">
            <h2>What Happens When JavaScript is Disabled?</h2>
            <p>The user gets a slap! Actually, all that jQuery does is moves the backgrounds relative to the position of the scrollbar. Without it, the backgrounds simply stay put and the user would never know they are missing out on the awesome! CSS2 does a good enough job to still make the effect look cool.</p>
        </div>
    </div> <!--.story-->
</div> <!--#third-->

<div id="fifth">
    <div class="story">
        <p>Check out my new plugin <a href="http://www.sequencejs.com" title="Sequence.js">Sequence.js</a> for parallax effects and a whole lot more!</p>
        
        <h2>Ian Lunn</h2>
        <ul>
            <li><strong>Twitter</strong>: <a href="http://www.twitter.com/IanLunn" title="Follow Ian on Twitter">@IanLunn</a></li>
            <li><strong>GitHub</strong>: <a href="http://www.github.com/IanLunn" title="Follow Ian on GitHub">IanLunn</a></li>
            <li><strong>Website</strong>: <a href="http://www.ianlunn.co.uk/" title="Ian Lunn Design">www.ianlunn.co.uk</a></li>
        </ul>
        
        <p>This demo is based on the <a href="http://www.nikebetterworld.com" title="Nike Better World">Nikebetterworld.com</a> website.</p>
        
        <h2>Credits</h2>
        <p>This plugin makes use of some scripts and images made by others:</p>
        <ul>
            <li><a href="http://flesler.blogspot.com/2007/10/jqueryscrollto.html" title="jQuery ScrollTo">jQuery ScrollTo</a></li>
            <li><a href="http://downloads.dvq.co.nz/" title="Background Textures">Wooden and Pyschedlic Background Textures</a></li>
            <li><a href="http://www.sxc.hu/photo/931435" title="Trainers Image">Trainers Image</a></li>
            <li><a href="http://www.sxc.hu/photo/1015485" title="Basketball Image">Basketball Image</a></li>
            <li><a href="http://www.sxc.hu/photo/563767" title="Bottles Image">Bottles Image</a></li>
        </ul>
    </div> <!--.story-->
</div> <!--#fifth-->
<script data-main="js/slider" src="js/lib/require.js"></script>
<?php include('footer.php'); ?>