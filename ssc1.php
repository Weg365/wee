
<!DOCTYPE html>
<html>
<head>
<style>#header,body,html{width:100%}
#header,.dropbtn,li a{position:relative;z-index:99999}
.dropbtn,li a,li.dropdown{display:inline-block}
.dropdown-content a,a{text-decoration:none}
*{margin:0;padding:0;border:0;outline:0}
h1,ul.menu{margin-bottom:10px}
body,html{background-color:#1b1b1b;height:100%;font-family:Arial,Helvetica Neue,Helvetica,sans-serif}
ul.menu,ul.menu li{background-color:#333}
ul.menu{list-style-type:none;overflow:hidden;border-bottom:1px solid #424242;box-shadow:0 3px 6px 0 rgba(0,0,0,.6)}
li{float:left}
.dropbtn,li a{color:#fff;text-align:center;padding:14px 16px}
.dropdown-content{display:none;position:absolute;z-index:99999;background-color:#323232;min-width:160px}
.dropdown-content a{position:relative;z-index:99999;border-top:1px solid #424242;color:#fff;padding:12px 16px;display:block;text-align:left}
.dropdown-content a:hover,.dropdown:hover .dropbtn,ul.menu li a:hover{position:relative;z-index:99999;background-color:#2f3640}
.dropdown:hover .dropdown-content{display:block}
.dropdown-content a:hover,.dropdown:hover .dropbtn,li a:hover{position:relative;z-index:99999;-webkit-transition:background-color .3s linear;-moz-transition:background-color .3s linear;-o-transition:background-color .3s linear;-ms-transition:background-color .3s linear;transition:background-color .3s linear}
#bfind,.hqtvx{position:absolute}
input#find[type=text]{box-sizing:border-box;border:1px solid #666;border-radius:4px;font-size:16px;margin-top:4px;margin-left:16px;background-color:#1b1b1b;color:#fff;background-image:url(/css/searchicon2.png);background-position:5px 4px;background-repeat:no-repeat;padding:8px 20px 8px 40px;-webkit-transition:width .4s ease-in-out;transition:width .4s ease-in-out}
input#find[type=text]:focus{width:88%}
#bfind{height:40px;width:40px;top:4px;cursor:pointer}
.hqtvx{top:0;right:0;bottom:0;left:0;margin:auto;max-height:100%;max-width:100%}
</style>
</head>
<body>
<div id="header" style=" display:none">
<ul class="menu">
<li>
<a href="http://extension.oui9.com/">Home</a>
</li>
<li>
<a href="http://extension.oui9.com/contact">Contact</a>
</li>
</ul>
</div>
  <script src="clappr.min.js"></script>
  <script src="level-selector.min.js"></script>
  <script src="clappr-chromecast-plugin.min.js"></script>
  <script src="clappr-pip.min.js"></script>
  <script src="oui9-playback.js"></script>
<div class="hqtvx" id="player"></div>
<script src="player.js"></script>
</body>
</html>

