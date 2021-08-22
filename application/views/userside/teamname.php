<!DOCTYPE html>
<html>
<head>
	<title>Team Name Generator | NameGenerator-Engine.com</title>
	<meta name="description" content="Team Name Generator. Generate 100000's of team names with a single click. Unique and aggressive team names for your sports teams."/>
	<meta name="keywords" content=""/>
    <meta property="og:title" content="Team Name Generator | NameGenerator-Engine.com" />
    <meta property="og:description" content="Team Name Generator. Generate 100000's of team names with a single click. Unique and aggressive team names for your sports teams."/>
    <meta property="og:url" content="https://namegenerator-engine.com/team-name-generator"/>
    <meta property="og:site_name" content="NameGenerator-Engine"/>
    <meta property="og:type" content="website"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
	<!-- custom style -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css') ?>"/>
   <script>
      function populateSuggestions(){
			var suggestions = new Array();


			suggestions['beginwith']     = new Array('A','X','Y','Z','S','M','M','K','R','L','T','C','J','E','D','H','N','B','F','G','H','I','O','P','Q','S','T','U','V','W');
         suggestions['endwith']       = new Array('A','X','Y','Z','S','M','M','K','R','L','T','C','J','E','D','H','N','B','F','G','H','I','O','P','Q','S','T','U','V','W');
         suggestions['place']         = new Array('Canada','Devon','Cornwall','London','Dubai','Wales','New York','Africa', 'Australia','Kent','Ireland','Scotland');	
         suggestions['adjective']     = new Array(
                'unspeakable',
                'slippery',
                'single',
                'married',
                'divorced',
                'great',
                'spiffing',
                'poor',
                'sexy',
                'stupid',
                'wild',
                'crazy',
                'entertaining',
                'big',
                'little',
                'ample',
                'tiny',
                'full',
                'bright',
                'useful',
                'pointless',
                'pointy',
                'amazing',
                'beautiful',
                'mild',
                'meaty',
                'crazy',
                'stunning',
                'lifeless',
                'hideous',
                'smelly',
                'ugly',
                'bumpy',
                'grubby',
                'rancid',
                'greasy',
                'chewy',
                'smooth',
                'wet',
                'sweaty',
                'moist',
                'hot',
                'cool',
                'super',
                'yummy',
                'scrummy',
                'delightful',
                'crazy',
                'hairy',
                'sharp',
                'strong',
                'lonely',
                'quiet'
            );

            suggestions['color'] = new Array(
													'red', 'yellow', 'green', 'blue', 'purple', 'pink', 'white', 'cream', 'grey', 'blonde', 'blond', 'ginger', 'black', 'brown');
											      
                                       suggestions['animal'] = new Array(
													'kitten',
													'puppy',
													'cat',
													'dog',
													'monkey',
													'snake',
													'bear',
													'rat',
													'gerbil',
													'giraffe',
													'elephant',
													'koala',
													'pigeon',
													'owl',
													'tortoise',
													'toad',
													'tadpol',
													'newt',
													'frog',
													'mouse',
													'ostrich',
													'donkey',
													'horse',
													'goldfish',
													'guppy',
													'rabbit',
													'hamster',
													'lizard',
													'maggot',
													'fox',
													'badger'
													);	
                                       suggestions['group'] = new Array ('cowboys','Yankees','vikings','hotspurs','warriors','saints','raiders','buccaneers','pirates','cardinals', 'angels', 'rangers','wanderers','giants','patriots','titans','independents','dodgers','flyers','mariners','twins','senators','metropolitans');

          return suggestions;	
	}

	shuffle = function(o){ 
			for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
			return o;
		}

    function suggest(whichType,whichBox) {
			suggestions = populateSuggestions();
			shuffle(suggestions[whichType]);
			var newValue=suggestions[whichType][0];
			document.getElementsByName(whichBox)[0].value=newValue;
		}

    function fillAll(){
    var elLength = document.form.elements.length;

    for (i=0; i<elLength; i++)
    {

       var type = form.elements[i].type;
       if (type=="button"){
       			if(form.elements[i].className != "random_ignore"){
	       			if(i !=1){
		           form.elements[i].click();
	            }
       			}
        		
        } else if (form.elements[i].name=='fantasy_types[]'){
        	 	var rand=Math.random();
						if(rand<0.6){
				    	form.elements[i].checked=true;
				    } else {
				    	form.elements[i].checked=false;
				    }
        	} else if (type=="select-one"){
        	if(form.elements[i].name=='location_0'){
        		shuffle(suggestions['common_nats']);
						var newValue=suggestions['common_nats'][0];
        	  form.elements[i].value = newValue;
        	} else if(form.elements[i].name=='title'){
        	  var genderbox = document.getElementById('gender');
        	  var gender=genderbox.value;
        	  suggestions = populateSuggestions();
						shuffle(suggestions[gender+'_title']);
						var newValue=suggestions[gender+'_title'][0];
        	  form.elements[i].value = newValue;
        	 } else {
	        	var items = form.elements[i].getElementsByTagName('option');
						var index = Math.floor(Math.random() * items.length);
						form.elements[i].selectedIndex = index;
					}
				}
		
    }
      document.getElementById('quick_submit').disabled = false;
      document.getElementById('quick_submit').select();
}	
   </script>
</head>
<body>
	<main>
     <?php  include "assets/header.php";  ?>

<section class="site-name">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center ">
            <h1>Team Name Generator</h1>
            <h2>Generate Team Names Within A Click</h2>
         </div>
      </div>
   </div>
</section>

<!-- Form section -->
  <section class="form-sec pb-5 ">
     <div class="container">
        <div class="row">
         
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="white-box">
                   <h4>Fill the Form</h4>
                   <button type="button" class="btn btn-custom mb-2" onclick="fillAll()" id="fill_all">fill Randomly</button>

                   <form action="<?= base_url('Teamname/getNames') ?>" method="post" name="form">
                   <div class="row">
                       <div class="col-12 mb-4">
                        <label>How many examples would you like to generate?</label>
                           <input type="number" name="num" min="10" max="100"  class="form-custom col-6" value="10">
                       </div>

                   
                       <div class="col-12 mb-4">
                         <label>A Color</label>
                          <div class="input-group mb-3">
                            <input type="text" name="color" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('color','color')" >Suggest</button>
                            </div>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                         <label>Some Adjectives that Describe vision of team </label>
                          <div class="input-group mb-3">
                            <input type="text" name="adjective" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('adjective', 'adjective')">Suggest</button>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="text" name="adjective_1" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('adjective', 'adjective_1')">Suggest</button>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="text" name="adjective_2" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('adjective', 'adjective_2')">Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>A Place</label>
                          <div class="input-group mb-3">
                            <input type="text" name="place" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('place', 'place')">Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>Some Animals</label>
                          <div class="input-group mb-3">
                            <input type="text" name="animal" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('animal', 'animal')">Suggest</button>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="text" name="animal_1" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('animal', 'animal_1')">Suggest</button>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="text" name="animal_2" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('animal', 'animal_2')">Suggest</button>
                            </div>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                         <label>A group of people</label>
                          <div class="input-group mb-3">
                            <input type="text" name="group" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('group', 'group')">Suggest</button>
                            </div>
                          </div>
                       </div>
                     
                      
                        <div class="col-12 mb-4">
                           <button type="submit" class="btn btn-custom">Generate</button>
                       </div>
                   </div>
                </form>
                </div>
             
            </div>
             <div class="col-lg-4 col-md-4 col-12 mb-4">
                <div class="white-box">
                <h4>Result</h4>
                   <?php if($data){
                                foreach($data as $key => $value){
                                      echo "<p>".ucfirst($value['name'])."</pre>";                            }
                   }  ?>
                   <?php   if(!$status){
                       echo "<h3>No Name Found !</h3>";
                   } ?>
                </div>
            </div>
       
           <div class="col-md-4 col-lg-4 col-12">
              <?php  include "assets/namelist.php"; ?>
           </div>
        </div>
     </div>
  </section>
<!-- /Form section -->
<section class="about-sec py-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-9 text-center">
            <h4>Quick Names</h4>
            <span class="seperator"></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
      </div>
   </div>
</section>



  </main>

<!-- footer section starts -->
   <?php  include "assets/footer.php"; ?>
<!-- footer section ends -->



<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="<?= base_url('js/custom.js') ?>"></script>

</body>
</html>