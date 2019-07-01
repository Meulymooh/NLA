
<?php
	ini_set("error_reporting", 1);
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	if($_GET['rel']!='tab'){
?>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!--My CSS-->
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <!--Other-->
    <title>Noah's Little Ark - Animal Protection Society of Chania</title>
</head>

   <script>
	$(function(){
		$("a[rel='tab']").click(function(e){
			pageurl = $(this).attr('href');
			$.ajax({url:pageurl+'?rel=tab',success: function(data){
				$('#content').html(data);
			}});
			if(pageurl!=window.location){
				window.history.pushState({path:pageurl},'',pageurl);	
			}
			return false;  
		});
	});
	$(window).bind('popstate', function() {
		$.ajax({url:location.pathname+'?rel=tab',success: function(data){
			$('#content').html(data);
		}});
	});
   </script>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top text-center">
    <div class="navbrandWrapper">
        <a class="navbar-brand" href="index.php">NLA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

  <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="info.php">Tourist info <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="gallery.php">Photo Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="happyendings.php">Happy Endings</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="support" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Support Us
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Donate</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Adopt/Foster</a>
                <a class="dropdown-item" href="#">Feed</a>
                <a class="dropdown-item" href="#">Gift Vouchers</a>
                <a class="dropdown-item" href="#">Spay/Neuter</a>
                <a class="dropdown-item" href="#">Medicines/Equipment</a>
                <a class="dropdown-item" href="#">Flight Partner</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="links.php">Links</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-danger" href="donate.php" role="button">DONATE</a>
        </li>
    </ul>

  </div>
</nav>

<div id='content'>

<?php } ?>