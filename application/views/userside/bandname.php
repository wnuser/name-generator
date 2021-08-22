<!DOCTYPE html>
<html>
<head>
	<title>Band Name Generator | NameGenerator-Engine.com</title>
	<meta name="description" content="Band Name Generator. 100000's of modern band names are available with a single click for Rock, POP, Hip-Hop, EDM, Dance, Heavy Metal and more."/>
	<meta name="keywords" content=""/>
    <meta property="og:title" content="Band Name Generator | NameGenerator-Engine.com" />
    <meta property="og:description" content="Band Name Generator. 100000's of modern band name ideas are available with a single click for Rock, POP, Hip-Hop, EDM, Dance, Heavy Metal and more."/>
    <meta property="og:url" content="https://namegenerator-engine.com/band-name-generator"/>
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

			suggestions['adjective']         = new Array(
													      'gentle', 'compassionate', 'modest', 'adorable', 'brave', 'helpful','loving', 'special', 'hopeful', 'optimistic', 'charming','kind', 'grateful', 'gracious', 'delightful', 'patient','generous', 'energetic', 'down to earth', 'admirable', 'friendly','smart', 'considerate','noble', 'articulate', 'caring','intuitive', 'sympathetic','clever', 'daring', 'courageous','hilarious', 'understanding', 'incredible','funny', 'popular', 'virtuous', 'lovable', 'remarkable', 'cute', 'sweet', 'splendid','stable', 'witty', 'admirable', 'giving', 'intelligent', 'brave', 'bold'
													     );
         suggestions['noun']              = new Array ('book','heart','head','sausage','banana','key', 'teddy', 'toothbrush', 'joystick', 'soap', 'towel', 'stick', 'pineapple', 'fishing rod', 'torch', 'rock', 'apple', 'teddy bear', 'knight', 'angel', 'fairy', 'pixie', 'compass', 'map', 'light','chord','box' );
         suggestions['place']             = new Array(
                                                      'Venus',
                                                      'England',
                                                      'Scotland',
                                                      'The High Street',
                                                      'Ramsay Street',
                                                      'Wales',
                                                      'Mars',
                                                      'my hotel',
                                                      'London',
                                                      'the pub',
                                                      'my space rocket',
                                                      'America',
                                                      'Australia',
                                                      'Japan',
                                                      'Tesco\'s',
                                                      'hospital',
                                                      'jail',
                                                      'Canada',
                                                      'The North Pole',
                                                      'my bedroom',
                                                      'the police station',
                                                      'my office',
                                                      'my bed',
                                                      'Brazil',
                                                      'Ireland',
                                                      'Cornwall',
                                                      'France',
                                                      'America',
                                                      'Cardiff',
                                                      'Weston-super-Mare',
                                                      'Devon',
                                                      'the golf course',
                                                      'Jupiter',
                                                      'the moon',
                                                      'Sidney',
                                                      'the beach',
                                                      'New York',
                                                      'Oslo',
                                                      'Miami',
                                                      'Berlin',
                                                      'Prague',
                                                      'Russia',
                                                      'Japan',
                                                      'Skegness',
                                                      'Hull',
                                                      'Cape Town',
                                                      'Glasgow'
													);
         suggestions['leadfirstName']     = new Array('Jim','Bob','Arthur','Augustus','Violet',
                                                      'Charlie',
                                                      'Veruca',
                                                      'Matilida',
                                                      'Ron',
                                                      'Nigel',
                                                      'Maggie',
                                                      'Lisa',
                                                      'Duddley',
                                                      'Rubeus',
                                                      'Lynette',
                                                      'Bree',
                                                      'Gabrielle',
                                                      'Edie',
                                                      'Mavis',
                                                      'Donald',
                                                      'Keanu',
                                                      'Monica',
                                                      'Rachel',
                                                      'Pheobe',
                                                      'Chandler',
                                                      'Joey',
                                                      'Ross',
                                                      'Elliot',
                                                      'Chris',
                                                      'Carla',
                                                      'Walter',
                                                      'Maddie',
                                                      'Rosie',
                                                      'Perry'
													);
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
            <h1>Band Name Generator</h1>
            <h2>Generate Band Names With A Single Click</h2>
            <p>With NameGenerator-Engine's Band Name Generator tool you can generate the band names for rock, orchestra, concert, symphonic, marching, jazz & many more.</p>
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
                  <h4>Fill the Form </h4>
                  <button type="button" class="btn btn-custom mb-2" onclick="fillAll()" id="fill_all">fill Randomly</button>
                   <form action="<?= base_url('Bandname/getNames') ?>" method="post" name="form">
                   <div class="row">
                       <div class="col-12 mb-4">
                        <label>How many examples would you like to generate?</label>
                           <input type="number" name="num" min="1" max="100" value="5" class="form-custom col-6">
                       </div>
                       <div class="col-12 mb-4">
                         <label>An Adjective that describe exactly band .</label>
                          <div class="input-group mb-3">
                            <input type="text" name="adjective" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('adjective','adjective')">Suggest</button>
                            </div>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                         <label>First Letter of Lead person name</label>
                          <div class="input-group mb-3">
                            <input type="text" name="leadfirstName" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('leadfirstName','leadfirstName')">Suggest</button>
                            </div>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                         <label>A place that has special significance to your band</label>
                          <div class="input-group mb-3">
                            <input type="text" name="place" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('place','place')">Suggest</button>
                            </div>
                          </div>
                       </div>
                       
                       <div class="col-12 mb-4">
                         <label>A singular noun </label>
                          <div class="input-group mb-3">
                            <input type="text" name="noun" class="gr-input">
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('noun','noun')">Suggest</button>
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
                                    echo ucwords($value['names']); echo "<br>";
                            }
                   }  ?>
                   <?php   if(!$status){
                       echo "<h3>No Name Found !</h3>";
                   } ?>
                </div>
           
           </div>
           <div class="col-md-4 col-lg-4 col-12">
              <?= include "assets/namelist.php" ?>
           </div>
        </div>
     </div>
  </section>
<!-- /Form section -->
<section class="about-sec py-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-9 text-center">
            <h4></h4>
            <span class="seperator"></span>
            <p></p>
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