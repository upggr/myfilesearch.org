<!DOCTYPE html>
<html>
<head>
<?php
include('functions.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Torrent Magnet Search Engine</title>
<style>
* { margin: 0px; padding: 0px; }
body { font-size: 13px; color: rgb(238, 238, 238); font-family: Arial, Helvetica, sans-serif; background: url(http://www.x-mad.com/img/bg.jpg) repeat-x rgb(113, 134, 147); }
#page { width: 620px; margin: 100px auto 0px; }
h1 { font-family: Corbel, 'Myriad Pro', Arial, Helvetica, sans-serif; text-indent: -9999px; overflow: hidden; height: 90px; background: url(http://www.x-mad.com/img/heading.png) 50% 0% no-repeat; }
#searchForm { padding: 50px 50px 30px; margin: 80px 0px; position: relative; border-radius: 16px; background-color: rgb(76, 90, 101); }
fieldset { border: none; }
#searchInputContainer { width: 420px; height: 36px; float: left; margin-right: 12px; background: url(http://www.x-mad.com/img/searchBox.png) no-repeat; }
#s { border: none; color: rgb(136, 136, 136); float: left; font-family: Arial, Helvetica, sans-serif; font-size: 15px; height: 36px; line-height: 36px; margin-right: 12px; outline: none medium; padding: 0px 0px 0px 35px; text-shadow: white 1px 1px 0px; width: 385px; background: url(http://www.x-mad.com/img/searchBox.png) no-repeat; }
#submitButton { width: 83px; height: 36px; text-indent: -9999px; overflow: hidden; text-transform: uppercase; border: none; cursor: pointer; background: url(http://www.x-mad.com/img/buttons.png) no-repeat; }
#submitButton:hover { background-position: 0% 100%; }
#searchInContainer { float: left; margin-top: 12px; width: 330px; }
label { color: rgb(221, 221, 221); cursor: pointer; font-size: 11px; position: relative; right: -2px; top: -2px; margin-right: 10px; white-space: nowrap; }
input[type="radio"] { cursor: pointer; }
.pageContainer { border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(94, 116, 129); -webkit-box-shadow: rgb(121, 142, 156) 0px 1px 0px; box-shadow: rgb(121, 142, 156) 0px 1px 0px; }
.webResult { text-shadow: rgb(88, 106, 117) 1px 1px 0px; margin-bottom: 20px; }
.webResult h2 { font-size: 18px; font-weight: normal; padding: 8px 20px; border-radius: 18px; background-color: rgb(93, 111, 123); }
.webResult h2 b { color: rgb(255, 255, 255); }
.webResult h2 a { color: rgb(238, 238, 238); border: none; }
.webResult p { line-height: 1.5; padding: 15px 20px; }
.webResult p b { color: white; }
.webResult > a { margin-left: 20px; }
p.credit { margin: 20px 0px; text-align: center; }
p.credit a { border-width: 1px; border-style: solid; border-color: rgb(61, 77, 87) rgb(120, 142, 155) rgb(120, 142, 155) rgb(61, 77, 87); color: rgb(192, 208, 216); font-size: 10px; padding: 4px 8px; text-shadow: rgb(56, 70, 79) 1px 1px 0px; background-color: rgb(75, 90, 100); }
p.credit a:hover { border-color: rgb(56, 70, 79) rgb(120, 142, 155) rgb(120, 142, 155) rgb(56, 70, 79); background-color: rgb(56, 70, 79); }
a, a:visited { text-decoration: none; outline: none; border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(151, 202, 230); color: rgb(151, 202, 230); }
a:hover { border-bottom-width: 1px; border-bottom-style: dashed; border-bottom-color: transparent; }
#resultsDiv2{width:620px; margin:40px auto;	}
</style>
</head>

<body>



    <a href="index.php"><h1>my file search</h1></a>
    <form id="searchForm" method="post" action="index.php">
		<fieldset>

           	<input id="s" type="text" name="s"/>

            <input type="submit" value="Submit" id="submitButton" />
        </fieldset>
    </form>
    <div id="resultsDiv">
	<?php
	if (isset($_POST["s"])) { ?>
   <div id="resultsDiv">
<div class="pageContainer" style="">
<div class="webResult">
  </div>
</div>
        <?php
    scrapmagnetsite('https://kat.cr/usearch/',$_POST["s"],'/');
}
	?>
	</div>

</div>

<p class="credit"></p>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('#s').focus();
});
</script>

<!-- Start Open Web Analytics Tracker -->
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'http://analytics.upg.gr/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', '3e90e6906a8821300255652113a6ab0e']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
owa_cmds.push(['trackDomStream']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
	_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End Open Web Analytics Code -->



</body>

<script>
var poplink = 'http://www.howtogetnetflix.com';
var popheight = 768;
var popwidth = 1200;
</script>
<script type="text/javascript" src="popunder/src/jquery.min.js"></script>
<script type="text/javascript" src="popunder/jquery-cookie/jquery.cookie.js"></script>
<script type="text/javascript" src="popunder/src/jquery.popunder.js"></script>
<script type="text/javascript" src="popunder/ad.js.php"></script>

</html>
