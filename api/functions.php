<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

function startapi()
{
    if (isset($_GET['type'])) {
        switch ($_GET['type']) {
        case 'ripurl':
        header('Content-Type: text/plain');
        converturl($_GET['url']);
        break;
    case 'Select api response':
        echo '';
        break;

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
