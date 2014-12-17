<!DOCTYPE html>
<html>
<head>
<?php
include('functions.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>myfilesearch.org - Torrent Magnet Search Engine</title>
<style>
* { margin: 0px; padding: 0px; }
body { font-size: 13px; color: rgb(238, 238, 238); font-family: Arial, Helvetica, sans-serif; background: url(http://www.myfilesearch.org/img/bg.jpg) repeat-x rgb(113, 134, 147); }
#page { width: 620px; margin: 100px auto 0px; }
h1 { font-family: Corbel, 'Myriad Pro', Arial, Helvetica, sans-serif; text-indent: -9999px; overflow: hidden; height: 90px; background: url(http://www.myfilesearch.org/img/heading.png) 50% 0% no-repeat; }
#searchForm { padding: 50px 50px 30px; margin: 80px 0px; position: relative; border-radius: 16px; background-color: rgb(76, 90, 101); }
fieldset { border: none; }
#searchInputContainer { width: 420px; height: 36px; float: left; margin-right: 12px; background: url(http://www.myfilesearch.org/img/searchBox.png) no-repeat; }
#s { border: none; color: rgb(136, 136, 136); float: left; font-family: Arial, Helvetica, sans-serif; font-size: 15px; height: 36px; line-height: 36px; margin-right: 12px; outline: none medium; padding: 0px 0px 0px 35px; text-shadow: white 1px 1px 0px; width: 385px; background: url(http://www.myfilesearch.org/img/searchBox.png) no-repeat; }
#submitButton { width: 83px; height: 36px; text-indent: -9999px; overflow: hidden; text-transform: uppercase; border: none; cursor: pointer; background: url(http://www.myfilesearch.org/img/buttons.png) no-repeat; }
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

<div id="page">

    <a href="index.php"><h1>my file search</h1></a>
    
    <form id="searchForm" method="get" action="index.php">
		<fieldset>
        
           	<input id="s" type="text" name="s"/>
            
            <input type="submit" value="Submit" id="submitButton" />       
        </fieldset>
    </form>

    <div id="resultsDiv">
	

	
	<?php 
	if (isset($_GET["s"])) { ?>
    	<div align="center"><a href="http://www.webtrackerplus.com/?page=flowplayerregister&a_aid=5788g1795s84s&a_bid=f2dddc66&q=<?php echo $_GET["s"]; ?>" target="_top"><img src="https://gs1.wac.edgecastcdn.net/8051D5/affbeat/banners/Movies-Hub/468x60/mov_468x60_2.png" alt="" title="" width="468" height="60" /></a></div>
   <div id="resultsDiv">
<div class="pageContainer" style="">
<div class="webResult">
<h2><a href="http://www.webtrackerplus.com/?page=torrent&a_aid=5788g1795s84s&a_bid=0d823973&q=<?php echo $_GET["s"]; ?>">Download <?php echo $_GET["s"]; ?>  directly here (Verified)</a></h2>
  </div>
</div>     

        <?php
    scrapmagnetsite('https://kickass.so/usearch/',$_GET["s"],'/');
}
	?>
	</div>
    
</div>
<div id="resultsDiv2">
<p>
Latest searches : <?php scraplatestsearchesfromkickass(); ?>
</p>
</div>
<p class="credit"><a href="http://filesearch.org">Powered by filesearch.org</a></p>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
$(document).ready(function(){	
	$('#s').focus();		
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57648878-30', 'auto');
  ga('send', 'pageview');

</script>
<a href="https://github.com/upggr/myfilesearch.org"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/c6625ac1f3ee0a12250227cf83ce904423abf351/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png"></a>
</body>
</html>
