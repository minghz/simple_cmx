<?php

function invalid_cmx($number){
	$file = "archive/c".$number.".jpg";
	if (file_exists($file)){ return false; }
	else { return true; }
}

$prev;
$next;
$var = array();

$all = glob("archive/*.jpg");
$all_count = sizeof($all);

$cur_page = curPageURL();

preg_match("/(.*)\?(cur=\d)(.*)/", $cur_page, $var);
parse_str($var[2]);

if ($cur){
	$current_link = $var[1]."?".$var[2];
	$prev = (int)$cur - 1;
	$next = (int)$cur + 1;
}else{
	$current_link = $cur_page.$var[1]."?cur=".strval($all_count);
	$prev = $all_count - 1;
	$next = NULL;
}

$oldest_link = $var[1]."?cur="."1";
$newest_link = $var[1]."?cur=".strval($all_count);

$prev_link = $var[1]."?cur=".$prev;
$next_link = $var[1]."?cur=".$next;
if (invalid_cmx($prev)){ $prev_link = NULL; }
if (invalid_cmx($next)){ $next_link = NULL; }

?>
<center>
	
	<div class="fb-like" data-href="<?php echo $current_link; ?>" data-send="true" data-layout="button_count" data-width="50" data-show-faces="true" data-font="verdana" data-colorscheme="dark"></div>
			
</center>

<center>
<div class="nav">
	<a href="<?php echo $oldest_link; ?>">Oldest</a> |
	<a href="<?php echo $prev_link; ?>">Previous</a> | 
	<a href="archive/">All</a> | 
	<a href="<?php echo $next_link; ?>">Next</a> | 
	<a href="<?php echo $newest_link; ?>">Newest</a>	
</div>
</center>

	
