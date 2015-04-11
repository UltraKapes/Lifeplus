
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    
        <link href="css/indexstyle.css" rel="stylesheet">
      
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="css/lightbox.css" rel="stylesheet" />
		<title id="dynamicTitle">Life+</title>
		<script type="text/javascript">
		$(window).scroll(function() {    
   		 var scroll = $(window).scrollTop();

    	 //>=, not <=
				if (scroll >= 100) {
        //clearHeader, not clearheader - caps H
        $("#header").addClass("fixednav");
    }else{$("#header").removeClass("fixednav"); }
});
		</script>
		
	</head>
	<body >
	<div class="col-xs-12"id="header">
		    <div id="logo">
				<img class="setImage" src="images/logo.gif">
			</div>
			<div id="nav">
				<ul>
				
					<li><a href="categories.php">Explore</a></li>
					<li><a href="#">Login</a></li>
				
				</ul>
			</div>
		
	    </div>
	<div class="col-xs-12" id="body-container">
	    <div class="fixed-bg bg-1">
	    	
	    </div>
	    <div class="fixed-bg bg-2 header">
			<div class ="header-content">
			<h1>Some Title</h1>
			</div>
		</div>
	    <div class="scrolling-bg bg-color1">
			<div class="body-content">Content</div>
	    </div>
	    <div class="fixed-bg bg-3 header" >
	   		<div class="header-content">
	   		<h1>Some Title 2</h1>
	   		</div>
		</div>
	    <div class="scrolling-bg bg-color1">
	    	<div class="body-content">Content</div>
	    </div>
	    <div class="fixed-bg bg-4 header">
	    	<div class="header-content">
	    		<h1>Some Title 3</h1>
	    	</div>
		</div>
	    <div class="scrolling-bg bg-color1">
	    	<div class="body-content">Content</div>
	    </div>
   	</div>
	

	

	</body>
 
</html>



