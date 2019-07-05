<?php include 'header.php'; ?>

<!-- About -->

<header class="infohead">
</header>

<section class="clearfix">

	<div class="container-fluid">

		<div class="row title center" id="aboutTitle">
        	<h3> Practical Information for Tourists </h3>
    	</div>

    	<div class="alert alert-danger text" role="alert">
  			During the tourist season, Noah's Little Ark receives dozens of phone calls and messages every day from tourists reporting strays in distress. Before you contact us, please read the tips below, as some cases can be solved without NLA's intervention.
		</div>

		<div class="accordion" id="accordionExample">

  			<div class="card">
    			<div class="card-header" id="headingOne">
      				<h5 class="mb-0">
        				<button class="btn btn-link question" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Befriending and feeding strays
        				</button>
      				</h5>
    			</div>
    			<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      				<div class="card-body text">
        				<ul>
        					<li><p>Don't bring a stray to your hotel.</p></li>
							<li><p>Don’t let the strays follow you around and don't let them get attached to you. They will be on their own and miss you after you leave.</p></li>
							<li><p>Don't feed the strays if they look okay. Not all pets wandering the streets are abandoned, and they might as well be fed by someone already.</p></li>
							<li><p>If you feed a stray anyway, do it at some distance from the hotels, as many owners don't like having pets hanging around too close.</p></li>
							<li><p>Give the strays appropriate food. Eg: don't feed them with bread or cow milk, as they won't digest it well.</p></li>
						</ul>
      				</div>
    			</div>
  			</div>		

  			<div class="card">
    			<div class="card-header" id="headingTwo">
      				<h5 class="mb-0">
        				<button class="btn btn-link collapsed question" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">If you find an injured animal
        				</button>
      				</h5>
    			</div>
    			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      				<div class="card-body text">
      					<p>If you find an injured or ill animal that requires medical attention:
							<ul>
								<li><p>Contact a local vet and see with him/her what can be done. Check the <a href="links.php">Links</a> page to find a vet, or use Google Maps.</p></li>
								<li><p>Pets are not allowed in public transports. If you don't have a car to bring the animal to the vet, call the pet taxi:</p>
									<ul>
										<li><p>Pet taxi: Chania Pet Transport</p></li>
										<li><p>URL: <a href="http://chaniapettransport.com/en/">http://chaniapettransport.com/en/</a></p></li>
										<li><p>Email: <a href="url ou mailto:">chaniapettransport@gmail.com</a></p></li> 
										<li><p>Phone: +30 698 744 5010</p></li>
									</ul> 
								<li><p>Report the animal to the police and/or the Municipality of Chania.</p>
									<ul>
										<li><p>Municipality of Chania: xxxxxx</p></li>
										<li><p>Police: xxxxx</p></li>
									</ul>
								</li>
								<li><p>Depending on the level of emergency and if no solution is found, contact Noah's Little Ark via the <a href="https://www.facebook.com/groups/littlenoahsark/">Facebook</a> page, or give us a call (+30 6946881155).</p></li>
							<ul>
						</p>
      				</div>
    			</div>
  			</div>

  			<div class="card">
    			<div class="card-header" id="headingThree">
      				<h5 class="mb-0">
        				<button class="btn btn-link collapsed question" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">If you witness animal cruelty or abuse
        				</button>
      				</h5>
    			</div>
    			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      				<div class="card-body text">
      					<p>Animal abuse is very common in Greece. If you witness animal cruelty, follow the steps below:
							<ul>
								<li><p>Try to communicate politely with the owner and offer a solution to ease the situation of the animal.</p></li>
								<li><p>If possible, take pictures and gather information (address, names, etc.).</p></li>
								<li><p>Report the incident to the nearest police station and file a complaint. Give them the info that you got as evidence, and provide them with a copy of the government directive that requires them to investigate:</p>
									<ul>
								 		<li><p><a href="https://greekanimalrescue.com/assets/pdf/police_letter.pdf">Greek version</a> (to be given to the police)</p></li>
								 		<li><p><a href="https://greekanimalrescue.com/assets/doc/police_letter.doc">Translation</a> (in English)</p></li>
								 	</ul>
							</ul>
						</p>
      				</div>
    			</div>
  			</div>

  			<div class="card">
    			<div class="card-header" id="headingFour">
      				<h5 class="mb-0">
        				<button class="btn btn-link collapsed question" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Raise your voice during and after your visit
        				</button>
      				</h5>
    			</div>
    			<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      				<div class="card-body text">
      					<p>The situation of the strays in Greece is alarming and only relies on a few pet rescue organizations and indivudals. It is very important that, as a tourist, you raise your voice and encourage the government to act, even after your stay.</p>
							<ul>
								<li><p>Complain to the Ministry of Culture and Tourism: <a href = "mailto: mintourismgr@gmail.com">mintourismgr@gmail.com</a></p></li>
								<li><p>Complain to the travel agency that organized your stay. They also have a role to play in pressuring the government!</p></li>
								<li><p>Go public as much as possible: write blog posts or newspaper articles, spread the word on Facebook and Twitter, etc. The world needs to know how bad it is for the strays in Greece, and how desperately in need of support Silke Wrobel and Noah's Little Ark are.</p></li>
							</ul>
						</p>
      				</div>
    			</div>
  			</div>

  		</div> <!--End of FAQ-->

    </div>
</section>

<?php if($_GET['rel']!='tab'){ echo "</div>";} ?>
<?php include('footer.php'); ?>