<!DOCTYPE html>

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

<body>
  
<!-- Fixed navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="/" class="navbar-brand"><b>NLA</b></a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Photo Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Happy Endings</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="#">Support Us</a>
                    <ul class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Donate</a></li>
                        <li><a class="dropdown-item" href="#">Adopt</a></li>
                        <li><a class="dropdown-item" href="#">Foster</a></li>
                        <li><a class="dropdown-item" href="#">Feed</a></li>
                        <li><a class="dropdown-item" href="#">Spay/Neuter</a></li>
                        <li><a class="dropdown-item" href="#">Medicines/Equipment</a></li>
                        <li><a class="dropdown-item" href="#">Flight Partner</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="form-inline buttonContainer">
				<a class="btn btn-danger" href="#" role="button">DONATE</a>
			</form>
        </div>
    </div>
</nav>

<!-- Intro -->
<header class="masthead" id="home">
	<div class=row>
    	<h1><strong>NOAH'S LITTLE ARK</strong></h1><br/>
	</div>
	<div class=row>
    	<h2><b>Animal Protection Society of Chania</b></h2>
   	</div>
</header>

<!-- General presentation of NLA -->
<section id="presentation" class="clearfix">

    <div class="container-fluid">
        <div class="row center">
            <img src="img/logo.png" id="logo2" alt="Noah's Little Ark logo">
        </div>
        <div class="row title center">
            <h3>Welcome to Noah's Little Ark!</h3>
        </div>
        <div class="row center" id="quote">
            <p><i>"We can judge the heart of a man by his treatment of animals."</i>
            <br/><br/>
            ~ Immanuel Kant</p>
         </div>
        <div class="row center">
            <div class="col col-md-2">
                <img src="img/silke2.jpg" id="silke" alt="Silke cuddling a kitten">
            </div>
            <div class="col col-md-10 text" id="introNLA">
                <p>Created by Silke Wrobel, NLA is a non-profit organization that deals with animal rescue and welfare in the Chania area of Crete, Greece. With no government subsidies, it relies solely on donations.</p>
                <button type="button" class="btn btn-outline-dark btn-intro">More about us</button>
            </div>
        </div>
    </div>

</section>

<!-- Situations of strays in Crete -->
<section id="situation" class="clearfix">
	<div class="container-fluid">

		<div class="row title center">
        	<h3>The Situation of Animals in Crete</h3>
    	</div>
	
	<!-- Timeline -->
  	<ul class="timeline">
    	<li>
      		<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i>
      		</div>
      		<div class="timeline-panel">
      			<div class="row timeline-heading center">
            		<img class="img-responsive strayCretePic" src="img/trash.jpg" alt="Cats dumped in a trash container" />
        		</div>
        		<div class="timeline-heading subtitle">
          		<h4 class="timeline-title">Strays everywhere</h4>
        		</div>
        		<div class="timeline-body text">
          			<p>If you've been in Crete, you must have noticed that strays are everywhere: in towns, villages, fields, etc. Most of them live in terrible conditions and are affected by malnutrition, diseases and injuries. They're also victims of cruelty: every single day, new cats and dogs are being abandoned, neglected, poisoned or chained in the sun with no food, water or shade. Because many are not sterilized, whole litters of kittens and puppies -sometimes just a few days old!- are frequently dumped like garbage and left to die.</p>
        		</div>
      		</div>
    	</li>
    	<li class="timeline-inverted">
      		<div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i>
      		</div>
      		<div class="timeline-panel">
      			<div class="row timeline-heading center">
            		<img class="img-responsive strayCretePic" src="img/tourist.jpg" alt="Tourist cuddling a stray dog" />
        		</div>      	
        		<div class="timeline-heading subtitle">
          			<h4 class="timeline-title">The tourist season</h4>
        		</div>
        		<div class="timeline-body text">
          			<p>Even though the strays encounter more food and attention during the tourist season thanks to the hotels and holidaymakers, emergency phone calls and Facebook messages from concerned tourists are booming. NLA's volunteers always do their best to answer and help, but there's a constant lack of money and human resources to feed, foster and care for the strays in need.</p>
        		</div>
      		</div>
    	</li>

    	<li>
      		<div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i>
      		</div>
      		<div class="timeline-panel">
      			<div class="row timeline-heading center">
            		<img class="img-responsive strayCretePic" src="img/poisening.jpg" alt="Dead dog poisoned" />
        		</div>
        		<div class="timeline-heading subtitle">
          			<h4 class="timeline-title">When the tourists are gone</h4>
        		</div>
        		<div class="timeline-body text">
          			<p>The situation is even worse when the season is over. When the hotels are closed (meaning less food opportunities for the strays), poisening incidents rise up. Many strays are found dead because of the people trying to clear the streets before and after the holiday season. And again, it's up to pet rescue organizations to provide help to the poor dying strays.</p>
        		</div>
      		</div>
    	</li>
    
    	<li class="timeline-inverted">
      		<div class="timeline-badge"><i class="glyphicon glyphicon-thumbs-up"></i>
      		</div>
      		<div class="timeline-panel">
      			<div class="row timeline-heading center">
            		<img class="img-responsive strayCretePic" src="img/trash2.jpg" alt="Stray dog at a trash container" />
        		</div>
        		<div class="timeline-heading subtitle">
          			<h4 class="timeline-title">What is the government doing?</h4>
        		</div>
        		<div class="timeline-body text">
          			<p>Nothing. Pet rescue in Greece has never been a priority and solely relies on private donations and volunteering. Although the Chania Municipality has an official committee as well as an appointed vet to handle the issue of strays, their lack of involvement and interest usually leads them to call Silke and let her with the emergencies.</p>
        		</div>
      		</div>
    	</li>

        <li>
      		<div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i>
      		</div>
      		<div class="timeline-panel">
      			<div class="row timeline-heading center">
            		<img class="img-responsive strayCretePic" src="img/food.jpg" alt="getting food for the strays" />
        		</div>
        		<div class="timeline-heading subtitle">
          			<h4 class="timeline-title">Help us</h4>
        		</div>
        		<div class="timeline-body text">
          			<p>That's why <b>Noah's Little Ark</b> is in urgent need of your support! Money, pet food and medicines are always welcome. Check the support page for more details.</p>
          			<button type="button" class="btn btn-outline-dark btn-intro">Support us</button>
        		</div>
      		</div>
    	</li>
  	</ul>

	</div>
</section>

<!-- Contact -->
<section id="contact" class="clearfix">
	<div class="container-fluid">

		<div class="row title center">
        	<h3>Contact Us</h3>
    	</div>
			
			<div class="row">

            	<div class="col col-sm-4"> 
            		<div class="row NLA_details NLA_detailsTitle">
            			<p><b>Noah's Little Ark (Silke Wrobel):</b></p>
            		</div>
            		<div class="row NLA_details">
            			<p>Daskalogiannis 39 <br>Chania, 73100<br>Crete, Greece</p>
            		</div>
            		<div class="row NLA_details">
            			<p>+30 6946881155</p>
            		</div>  
            		 <div class="row NLA_details">
            			<p><b>In case of emergency:</b></p>
            		</div> 
            		<div class="row NLA_details">
            				<p>Visit our <a href="https://www.facebook.com/groups/littlenoahsark/" target="_blank">Facebook</a> page.</p>
            		</div> 
            		<div class="row NLA_details">
            			<a href="https://www.facebook.com/groups/littlenoahsark/#" target="_blank" id="facebookIcon"><i class="fab fa-facebook"></i></a>
            		</div>

            	</div>

      		<div class="col col-sm-2">
    		</div>

      		<div class="col col-sm-6">
        		<form action="" method="post" id="form-box" class="p-2">
          			<div class="form-group input-group">
            			<div class="input-group-prepend">
              				<span class="input-group-text"><i class="fas fa-user"></i>
              				</span>
            			</div>
            			<input type="text" name="name" class="form-control" placeholder="Enter your name" required>
          			</div>
          			<div class="form-group input-group">
            			<div class="input-group-prepend">
              				<span class="input-group-text"><i class="fas fa-envelope"></i>
              				</span>
            			</div>
            			<input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          			</div>
          			<div class="form-group input-group">
            			<div class="input-group-prepend">
              				<span class="input-group-text"><i class="fas fa-underline"></i>
              				</span>
            			</div>
            			<input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
          			</div>
          			<div class="form-group input-group">
            			<div class="input-group-prepend">
              				<span class="input-group-text"><i class="fas fa-comment-alt"></i>
              				</span>
            			</div>
            			<textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
          			</div>
          			<div class="form-group">
            			<input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
          			</div>
        		</form>

      		</div><!-- End of form column -->

   		</div><!-- End of row -->
	</div><!-- End of container -->
</section>

<!-- Footer -->
<footer class="page-footer font-small grey darken-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-4"><p>© <?php echo date("Y"); ?> Copyright
    <a href="https://emiliemesureur.com/" target="_blank"> Emilie Mesureur</a> for <a href="http://emilie.watlock.be/nla/index.php" target="_blank"> Noah's Little Ark</a></p>
  </div>
  <!-- Copyright -->

</footer>

</body>

</html>