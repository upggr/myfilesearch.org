<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

function scraplatestsearchesfromkickass()
{
    $theurl = 'https://kat.cr/latest-searches/';
    $var = fread_url($theurl);
    preg_match_all("/a[\s]+[^>]*?href[\s]?=[\s\"\']+".
                    "(.*?)[\"\']+.*?>"."([^<]+|.*?)?<\/a>/",
                    $var, $matches);
    $matches = $matches[1];
    $list = array();
    $i = 0;
    foreach ($matches as $var) {
        if (strpos($var, 'search') !== false) {
            $dtarget = $var;

            $dtarget = str_replace('search/', 'index.php?s=', $dtarget);
            $dtarget = substr($dtarget, 0, -1);
            $dkeyword = substr($dtarget, strpos($dtarget, '=') + 1);
            $sUrl = $dtarget;

            echo '<a href="'.$sUrl.'"><b>'.urldecode($dkeyword).'</b></a> | ';

            ++$i;
        } else {
        }
    }
}

    function scrapmagnetsite($theurl1, $thekeyword, $theurl2)
    {
        $theurl = $theurl1.$thekeyword.$theurl2;
        $var = fread_url($theurl);
        preg_match_all("/a[\s]+[^>]*?href[\s]?=[\s\"\']+".
                    "(.*?)[\"\']+.*?>"."([^<]+|.*?)?<\/a>/",
                    $var, $matches);
        $matches = $matches[1];
        $list = array();
        $i = 0;
        foreach ($matches as $var) {
            if (strpos($var, 'magnet') !== false) {
                $dtarget = $var;
                $dtitle = explode('=', $dtarget);
                $dtitle = $dtitle[2];
                $dtitle = str_replace('+', ' ', $dtitle);
                $dtitle = str_replace('%5D', ']', $dtitle);
                $dtitle = str_replace('%5B', '[', $dtitle);
                $dtitle = str_replace('%28', '(', $dtitle);
                $dtitle = str_replace('%29', ')', $dtitle);
                $dtitle = str_replace('%26amp%3B', ' ', $dtitle);
                $dtitle = str_replace('%40', '@', $dtitle);
                $dtitle = str_replace('%2', '-', $dtitle);
                $dtitle = substr($dtitle, 0, -3);
                $cleantitle = str_replace($thekeyword, '', $dtitle);
                if ($i < 20) {
                    $sUrl = $dtarget;

                    echo '<a href="'.$sUrl.'" title="Download '.$dtitle.' via magnet link">'.$dtitle.'</a><br>';
//echo '<div id="resultsDiv"><div class="pageContainer" style=""><div class="webResult"><h2><a href="'.$sUrl.'" target="_blank">'.$cleantitle.'</a></h2> </div></div>';
                } else {
                    echo '';
                }

                ++$i;
            } else {
            }
        }
    }

    function fread_url($url, $ref = '')
    {
        if (function_exists('curl_init')) {
            $ch = curl_init();
            $user_agent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Safari/7534.48.3';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            if (!ini_get('safe_mode')) {
            }
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_REFERER, $ref);
            curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
            $html = curl_exec($ch);
            curl_close($ch);
        } else {
            $hfile = fopen($url, 'r');
            if ($hfile) {
                while (!feof($hfile)) {
                    $html .= fgets($hfile, 1024);
                }
            }
        }

        return $html;
    }

    function graburl($url, $encoding)
    {
        $ref = '';
        if (function_exists('curl_init')) {
            $ch = curl_init();
            $user_agent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Safari/7534.48.3';
            $ch = curl_init();
   //         curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
            curl_setopt($ch, CURLOPT_ENCODING, $encoding);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            if (!ini_get('safe_mode')) {
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            }

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_REFERER, $ref);
            curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
            $html = curl_exec($ch);
            curl_close($ch);
        } else {
            $hfile = fopen($url, 'r');
            if ($hfile) {
                while (!feof($hfile)) {
                    $html .= fgets($hfile, 1024);
                }
            }
        }

        return $html;
    }

function gzdecode2($data)
{
    $len = strlen($data);
    if ($len < 18 || strcmp(substr($data, 0, 2), "\x1f\x8b")) {
        return;
    }
    $method = ord(substr($data, 2, 1));
    $flags = ord(substr($data, 3, 1));
    if ($flags & 31 != $flags) {
        return;
    }
    $mtime = unpack('V', substr($data, 4, 4));
    $mtime = $mtime[1];
    $xfl = substr($data, 8, 1);
    $os = substr($data, 8, 1);
    $headerlen = 10;
    $extralen = 0;
    $extra = '';
    if ($flags & 4) {
        if ($len - $headerlen - 2 < 8) {
            return false;
        }
        $extralen = unpack('v', substr($data, 8, 2));
        $extralen = $extralen[1];
        if ($len - $headerlen - 2 - $extralen < 8) {
            return false;
        }
        $extra = substr($data, 10, $extralen);
        $headerlen += 2 + $extralen;
    }

    $filenamelen = 0;
    $filename = '';
    if ($flags & 8) {
        if ($len - $headerlen - 1 < 8) {
            return false;
        }
        $filenamelen = strpos(substr($data, 8 + $extralen), chr(0));
        if ($filenamelen === false || $len - $headerlen - $filenamelen - 1 < 8) {
            return false;
        }
        $filename = substr($data, $headerlen, $filenamelen);
        $headerlen += $filenamelen + 1;
    }
    $commentlen = 0;
    $comment = '';
    if ($flags & 16) {
        if ($len - $headerlen - 1 < 8) {
            return false;
        }
        $commentlen = strpos(substr($data, 8 + $extralen + $filenamelen), chr(0));
        if ($commentlen === false || $len - $headerlen - $commentlen - 1 < 8) {
            return false;
        }
        $comment = substr($data, $headerlen, $commentlen);
        $headerlen += $commentlen + 1;
    }

    $headercrc = '';
    if ($flags & 1) {
        if ($len - $headerlen - 2 < 8) {
            return false;
        }
        $calccrc = crc32(substr($data, 0, $headerlen)) & 0xffff;
        $headercrc = unpack('v', substr($data, $headerlen, 2));
        $headercrc = $headercrc[1];
        if ($headercrc != $calccrc) {
            return false;
        }
        $headerlen += 2;
    }

    $datacrc = unpack('V', substr($data, -8, 4));
    $datacrc = $datacrc[1];
    $isize = unpack('V', substr($data, -4));
    $isize = $isize[1];
    $bodylen = $len - $headerlen - 8;
    if ($bodylen < 1) {
        return;
    }
    $body = substr($data, $headerlen, $bodylen);
    $data = '';
    if ($bodylen > 0) {
        switch ($method) {
      case 8:
        $data = gzinflate($body);
        break;
      default:
        return false;
    }
    } else {
    }
    if ($isize != strlen($data) || crc32($data) != $datacrc) {
        return false;
    }

    return $data;
}

function startapi()
{
    if (isset($_GET['type'])) {
        switch ($_GET['type']) {
            case 'ripurl':
            header('Content-Type: text/plain');
                        if (isset($_GET['url'])) {
                            converturl($_GET['url']);
                        } else {
                                echo 'no url defined';
                            }
                break;
    case 'Select api response':
        echo '';
        break;
}
    } else {
        echo "<form>
	<select name='type' onchange='this.form.submit()'>
		<option selected>Select api response</option>
    <option>ripurl</option>
	</select>
	<noscript><input type='submit' value='Submit'></noscript>
	</form>";
    }
}

function converturl($url)
{
    $var = fread_url($url);
    preg_match_all("/a[\s]+[^>]*?href[\s]?=[\s\"\']+".
                  "(.*?)[\"\']+.*?>"."([^<]+|.*?)?<\/a>/",
                  $var, $matches);
    $matches = $matches[1];
    $list = array();
    foreach ($matches as $var) {
        $link = $url.$var;
        $dtitle = $var;
        $dtitle = str_replace('+', ' ', $dtitle);
        $dtitle = str_replace('.', ' ', $dtitle);
        $dtitle = str_replace(' TehMovies com ', '', $dtitle);
        $dtitle = str_replace('%5D', ']', $dtitle);
        $dtitle = str_replace('%5B', '[', $dtitle);
        $dtitle = str_replace('%28', '(', $dtitle);
        $dtitle = str_replace('%29', ')', $dtitle);
        $dtitle = str_replace('%26amp%3B', ' ', $dtitle);
        $dtitle = str_replace('%40', '@', $dtitle);
        $dtitle = str_replace('%2', '-', $dtitle);
        $dtitle = substr($dtitle, 0, -3);
        if ($dtitle != '') {
            echo  "<item>\r\n<title>".$dtitle."</title>\r\n<link>".$link."</link>\r\n<thumbnail></thumbnail>\r\n</item>\r\n\r\n";
        }
    //    echo '<a href="'.$sUrl.'" title="Download '.$dtitle.' via magnet link">'.$dtitle.'</a><br>';
    }
}
