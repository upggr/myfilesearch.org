<?php
function GetBetween($content,$start,$end)
{
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}
function safe($value)
{
   return mysql_real_escape_string($value);
}
$host = "localhost";
$user = "pagebin_main";
$pass = "C-X?p?_GKplD";
$db = "pagebin_main";

mysql_connect( $host, $user, $pass)
    or die ( 'Unable to connect to server.' );

mysql_select_db( $db ) 
    or die ( 'Unable to select database.' );
    
$p = safe($_GET['p']);
$timestamp = time();
$ip = $_SERVER['REMOTE_ADDR'];
$agent = safe($_SERVER['HTTP_USER_AGENT']);
$referer = safe($_SERVER['HTTP_REFERER']);
$keywords = array('virus','games','movies','money');
$keywordRand = rand(0,3);
$keywordRand = 0;

$userIpLocation = file("http://api.ipinfodb.com/v2/ip_query.php?key=616f645399ea5ca4d2c8db913b7c81225551c9358d2d0d06ec42b2dbee91001d&ip=99.173.156.124&timezone=false");
$userCountry = GetBetween($userIpLocation[4],"<CountryName>","</CountryName>");

if($userCountry == 'United States')
{
	$adurl = "http://superaffiliatemedia.com/track.asp?p=10519&c=1448&t=";
}elseif($userCountry == 'Canada')
{
	$adurl = 'http://superaffiliatemedia.com/track.asp?p=10519&c=1448&t=';
}else
{
	$adurl = "http://11164034.cpv.cpview.com/ptrack?pid=11164034&v_url=pagebin.com/$p&feed=0&said=1";
}
$adurl = "http://11164034.cpv.cpview.com/ptrack?pid=11164034&v_url=pagebin.com/$p&feed=0&said=1&keyword=".$keywords[$keywordRand];
$adurl = "http://www.pagebin.com";

mysql_query("INSERT INTO `pophits` SET `adurl` = '$adurl', `timestamp` = '$timestamp', `ip` = '$ip', `agent` = '$agent', `referer` = '$referer', `ustring` = '$p', `country` = '$userCountry'");



header( "Location: $adurl" ) ;

?>
