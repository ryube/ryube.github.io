<?php
define('ROOT', '../..');
define('CRLF', "\n");
define('TAB', "\t");
define('TITLE', 'Health Care');
define('CUSTOMER', 'megazone');

function getDirectoryItems($path, $baseURL) {
	$path = rtrim($path, '/');
	$baseURL = rtrim($baseURL, '/');
	if (is_file($path) && !file_exists($path))
		return array();
	$tempFiles = array();
	$handle = opendir($path);
	while ($currentItem = readdir($handle)) {
		if ($currentItem == '.' || $currentItem == '..') {
			continue;
		} else if (is_file($path . '/' . $currentItem)) {
			array_push($tempFiles, $baseURL . '/' . $currentItem);
		} else {
			$temp = getDirectoryItems($path . '/' . $currentItem, $baseURL . '/' . $currentItem);
			$tempFiles = array_merge($tempFiles, $temp);
		}
	}
	return $tempFiles;
}

function findCode() {
	$Contents = ob_get_contents();
	ob_end_clean();
	$search = "/(\t+)(?:\<!--\[code\slang=\")(.*?)\"\]--\>(.*?)(?:\<!--\[\/code\]--\>)/is";
	$Contents = preg_replace_callback($search, create_function('$matches', 'return codeHtmlentities("$matches[1]", "$matches[2]", "$matches[3]");'), $Contents);
	print $Contents;
}

function codeHtmlentities($tab, $lang = 'xml', $data) {
	if ($lang == 'xhtml' || $lang == 'xslt' || $lang == 'html' || $lang == 'xhtml') $lang = 'xml';
	else if ($lang == 'js' || $lang == 'jscript' || $lang == 'javascript') $lang = 'jscript';
	if (trim($data) === '')
		return '';
	$tablen = strlen($tab);
	$data = htmlentities($data, ENT_NOQUOTES, "UTF-8");
	$data = preg_replace("/\n\t{" . $tablen . "}/", "", $data);
	$Contents = str_repeat(TAB, $tablen) . '<div class="codeViewer">' . CRLF;
	$Contents .= '<pre class="brush: ' . $lang . ';">';
	$Contents .= $data;
	$Contents .= '</pre>' . CRLF;  
	$Contents .= str_repeat(TAB, $tablen) . '</div>';
	return $Contents;
}

function callHeadCnt() {
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title> <?php echo TITLE ?> </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi" />
<link rel="stylesheet" media="screen" href="<?php echo ROOT ?>/common/css/style.css" />
<script src="/healthcare/scripts/lib/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/healthcare/scripts/fakescroll.js"></script>
<script src="<?php echo ROOT ?>/common/js/ui.js"></script>
<?php
}

function callFootCnt() {
?>
	<footer id="SA_footer">
		<address>&copy; Megazone, <?php echo CUSTOMER ?> by <a href="http://www.sateam.co.kr/">S.A Team(web Standards and Accessibility team)</a></address>
	</footer>
</div>
</body>
</html>
<?php
	findCode();
	ob_end_flush();
}

function callMainMenu() {
	global $rootIndex;
	$data = array(
		'Guide' => '/healthcare/guide/contents/guide/',
		'Pettern' => '/healthcare/guide/contents/pattern/item1.php',
		'IPC - Admin' => '/healthcare/guide/contents/directory/item1.php',
		'mEMR - Admin' => '/healthcare/guide/contents/directory/item2.php'
	);

	$subdata = array();
	$subdata['Guide'] = array(
		'html' => '/healthcare/guide/contents/guide/guide1.html',
		'css' => '/healthcare/guide/contents/guide/guide2.html',
		'naming' => '/healthcare/guide/contents/guide/guide3.html'
	);
	$subdata['Pettern'] = array(
		'Common' => '/healthcare/guide/contents/pattern/item1.php',
		'Layout Eaxmple' => '/healthcare/guide/contents/pattern/item2.php'
	);

	$count1 = 1;
	echo str_repeat(TAB, 3) . '<ul class="depth1">' . CRLF;
	foreach ($data as $text1 => $value1) {
		if ($count1 == $rootIndex)
			$visible = ' visible';
		else
			$visible = '';

		echo str_repeat(TAB, 4) . "<li class=\"item{$count1}{$visible}\"><a href=\"{$value1}\"><span>{$text1}</span></a>";
		if (isset($subdata[$text1]) && count($subdata[$text1]) > 0 && $count1 == $rootIndex) {
			$count2 = 1;
			echo CRLF . str_repeat(TAB, 5) . '<ul class="depth2">' . CRLF;
			foreach ($subdata[$text1] as $text2 => $value2) {
				echo str_repeat(TAB, 6) . "<li class=\"item{$count2}\"><a href=\"{$value2}\"><span>{$text2}</span></a></li>" . CRLF;
				++$count2;
			}
			echo str_repeat(TAB, 5) . '</ul>' . CRLF . str_repeat(TAB, 4);
		}
		echo "</li>" . CRLF;
		++$count1;
	}
	echo str_repeat(TAB, 3) . '</ul>' . CRLF;
}
ob_start();
?>

<!-- global $rootIndex;
	$data = array(
		'Guide' => '/healthcare/guide/contents/pattern/item1.php',
		'IPC - Admin' => '/healthcare/guide/contents/directory/item1.php',
		'mEMR - Admin' => '/healthcare/guide/contents/directory/item2.php'
	);

	$subdata = array();
	$subdata['Guide'] = array(
		'Button' => '/healthcare/guide/contents/image/?depth=button',
		'Icon' => '/healthcare/guide/contents/image/?depth=icon',
		'Text' => '/healthcare/guide/contents/image/?depth=text'
	);
	$subdata['IPC - Admin'] = array(
		'Button' => '/healthcare/guide/contents/image/?depth=button',
		'Icon' => '/healthcare/guide/contents/image/?depth=icon',
		'Text' => '/healthcare/guide/contents/image/?depth=text'
	);
 -->