<html>
  	<head>
    		<title>cmx</title>
    		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    		<link rel="stylesheet" href="/css/default.css" type="text/css" />
    		
    		<script type="text/javascript">
			
			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-37700875-1']);
			  _gaq.push(['_trackPageview']);
			
			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
			
			</script>
    		
  	</head>
  	<body>
  		<div class="box">
  			<h3>
  				All Comics
  			</h3>
<?php
    $home_url = "http://cmx.hostei.com/";

    $all = glob("*.jpg");
    $all_count = sizeof($all);

    for ($i=1; $i <= $all_count; $i++) {
        print "<div class=\"linka\"
                    onclick=\"location.href='$home_url?cur=".strval($i)."';\">";
        print "$i";
        print "</div>";
        
    }

?>
		</div>
	</body>
</html>
