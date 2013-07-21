<?php

    function curPageURL() {
        $pageURL = 'http';
        if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }

    $all = glob("archive/*.jpg");
    $newest = array_pop($all);

    $cur_page = curPageURL();

    #nav.php?cur=current_file&othervar=othervalue
    $var = array();
    preg_match("/(.*)\?(.*)/", $cur_page, $var);

    parse_str($var[2]);

    if ($cur){
        $img_src = "archive/c".$cur.".jpg";
    }else{
        $img_src = $newest;
    }

?>

<div class="cmx">
<center>
    <img src="<?php echo $img_src ?>"  width="800px" height="400px"/>
</center>

</div>
