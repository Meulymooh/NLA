<?php include 'header.php'; ?>

<!-- Home -->
<section class="masthead" id="home">
	<div class=row>
    	<h1><strong>NOAH'S LITTLE ARK</strong></h1><br/>
	</div>
	<div class="row">
    	<h2><b>Animal Protection Society of Chania</b></h2>
   	</div>
</section>

<!-- General presentation of NLA -->
<section id="presentation" class="clearfix">

    <div class="container-fluid">
        <div class="row center">
            <img src="img/logo.png" id="logo2" alt="Noah's Little Ark logo" class="img-responsive">
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
                <img src="img/silke2.jpg" id="silke" alt="Silke Wrobel cuddling a kitten" class="img-responsive">
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
              <div class="hovereffect">
                <img class="img-responsive strayCretePic" src="img/trash.jpg" alt="Cats dumped in a trash container" />
              </div>
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
              <div class="hovereffect">
            		<img class="img-responsive strayCretePic" src="img/tourist.jpg" alt="Tourist cuddling a stray dog" />
              </div>
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
              <div class="hovereffect">
            		<img class="img-responsive strayCretePic" src="img/poisening.jpg" alt="Dead dog poisoned" />
              </div>
        		</div>
        		<div class="timeline-heading subtitle">
          			<h4 class="timeline-title">When the tourists are gone</h4>
        		</div>
        		<div class="timeline-body text">
          			<p>The situation is even worse when the season is over. When the hotels are closed (meaning less food opportunities for the strays), poisoning incidents rise up. Many strays are found dead because of the people trying to clear the streets before and after the holiday season. And again, it's up to pet rescue organizations to provide help to the poor dying strays.</p>
        		</div>
      		</div>
    	</li>
    
    	<li class="timeline-inverted">
      		<div class="timeline-badge"><i class="glyphicon glyphicon-thumbs-up"></i>
      		</div>
      		<div class="timeline-panel">
      			<div class="row timeline-heading center">
              <div class="hovereffect">
            		<img class="img-responsive strayCretePic" src="img/trash2.jpg" alt="Stray dog at a trash container" />
              </div>
        		</div>
        		<div class="timeline-heading subtitle">
          			<h4 class="timeline-title">What is the government doing?</h4>
        		</div>
        		<div class="timeline-body text">
          			<p>Nothing. Pet rescue in Greece has never been a priority and solely relies on private donations and volunteering. Silke usually gets all the emergency calls and has to deal with the most difficult cases.</p>
        		</div>
      		</div>
    	</li>

        <li>
      		<div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i>
      		</div>
      		<div class="timeline-panel">
      			<div class="row timeline-heading center">
              <div class="hovereffect">
            		<img class="img-responsive strayCretePic" src="img/food.jpg" alt="Getting food for the strays" />
              </div>
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

<?php if($_GET['rel']!='tab'){ echo "</div>";} ?>
<?php include('footer.php'); ?>