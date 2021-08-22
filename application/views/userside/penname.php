<!DOCTYPE html>
<html>
<head>
	<title>Pen Name Generator | NameGenerator-Engine.com</title>
	<meta name="description" content="Pen Name Generator. Generate 100000's of pen names with a single click. Now it's easy to start with this pseudonym generator by finding legitimate names."/>
    <meta name="keywords" content="pen name generator, Online pen name generator, pseudonym generator"/>
    <meta property="og:title" content="Pen Name Generator | NameGenerator-Engine.com" />
    <meta property="og:description" content="Pen Name Generator. Generate 100000's of pen names with a single click. Now it's easy to start with this pseudonym generator by finding legitimate names."/>
    <meta property="og:url" content="https://namegenerator-engine.com/pen-name-generator"/>
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
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
   <script>
function populateSuggestions(){
			var suggestions = new Array();

			suggestions['adjective']        = new Array(
													'gentle', 'compassionate', 'modest', 'adorable', 'brave', 'helpful','loving', 'special', 'hopeful', 'optimistic', 'charming','kind', 'grateful', 'gracious', 'delightful', 'patient','generous', 'energetic', 'down to earth', 'admirable', 'friendly','smart', 'considerate','noble', 'articulate', 'caring','intuitive', 'sympathetic','clever', 'daring', 'courageous','hilarious', 'understanding', 'incredible','funny', 'popular', 'virtuous', 'lovable', 'remarkable', 'cute', 'sweet', 'splendid','stable', 'witty', 'admirable', 'giving', 'intelligent', 'brave', 'bold'
													);
			suggestions['weapon']            = new Array('knife','spoon','gun','razor','blade','rope','arrow', 'sword','pistol','rifle','paperweight','candlestick');			
			suggestions['firstcharacter']    = new Array('A','X','Y','Z','S','M','M','K','R','L','T','C','J','E','D','H','N','B','F','G','H','I','O','P','Q','S','T','U','V','W');

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
             <h1>Pen Name Generator</h1>
            <h2>Generate Pen Names Within Seconds</h2>
            <p>You have written something amazing and you need a pen name?  A pen name is also known as a pseudonym name is used to give yourself a unique name. Generate 100000's of perfect pen names with NameGenerator-Engine's Pen Name Generator within seconds. Now it's easy to start with this pseudonym generator by finding legitimate names.</p>
    
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
                   <form action="<?= base_url('Penname/getNames')?>" method="post" name="form">
                   <div class="row">
                       <div class="col-12 mb-4">
                        <label>How many examples would you like to generate?</label>
                           <input type="number" name="num" min="1" max="100" value="5" class="form-custom col-6">
                       </div>
                       <div class="col-12 mb-4">
                        <label>Which gender would you like?</label>
                            <select class="form-control select" name="gender">
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                            </select>
                       </div>
                       <div class="col-12 mb-4">
                         <label>Positive Adjective</label>
                          <div class="input-group mb-3">
                            <input type="text" name="adjective" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('adjective','adjective')">Suggest</button>
                            </div>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                         <label>A Weapon Name</label>
                          <div class="input-group mb-3">
                            <input type="text" name="weapon" class="gr-input" > 
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('weapon','weapon')">Suggest</button>
                            </div>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                         <label>First Character</label>
                          <div class="input-group mb-3">
                            <input type="text" name="firstcharacter" class="gr-input">
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('firstcharacter','firstcharacter')">Suggest</button>
                            </div>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                        <label>Language Origin?</label>
                            <select class="form-control select" name="language">
                              <option value="French">French</option>
                              <option value="German">German</option>
                              <option selected="selected" value="Hindi">Hindi</option>
                              <option value="Italian">Italian</option>
                              <option value="Japanese">Japanese</option>
                              <option value="Korean">Korean</option>
                              <option value="Mandarin Chinese">Mandarin Chinese</option>
                              <option value="Spanish">Spanish</option>
                              <option value="Swahili">Swahili</option>
                              <option value="Arabic">Arabic</option>
                            </select>
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
                            echo ucwords($value['names']);echo "<br>";
                        }
                        }  ?>
                        <?php   if(!$status){
                            echo "<h3>No Name Found !</h3>";
                    } ?>
                </div>
          
            </div>
            <div class="col-md-4 col-lg-4 col-12">
                <?php include "assets/namelist.php";  ?>
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