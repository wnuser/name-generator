<!DOCTYPE html>
<html>
<head>
	<title>House Name Generator | NameGenerator-Engine.com</title>
	<meta name="description" content="House Name Generator. Generate 100000's of random house names with a single click. Choose from a very extensive list of house names."/>
    <meta name="keywords" content=""/>
    <meta property="og:title" content="House Name Generator | NameGenerator-Engine.com" />
    <meta property="og:description" content="House Name Generator. Generate 100000's of random house names with a single click. Choose from a very extensive list of house names."/>
    <meta property="og:url" content="https://namegenerator-engine.com/house-name-generator"/>
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


			suggestions['beginwith']    = new Array('A','X','Y','Z','S','M','M','K','R','L','T','C','J','E','D','H','N','B','F','G','H','I','O','P','Q','S','T','U','V','W');
         suggestions['endwith']      = new Array('A','X','Y','Z','S','M','M','K','R','L','T','C','J','E','D','H','N','B','F','G','H','I','O','P','Q','S','T','U','V','W');
		   suggestions['color']        = new Array('red', 'yellow', 'green', 'blue', 'purple', 'pink', 'white', 'cream', 'grey', 'blonde', 'blond', 'ginger', 'black', 'brown');
         suggestions['street']       = new Array('Seventh Avenue', 'St Luke\'s Terrace', 'Golden Bank Road', 'Market Hill', 'The Old Church Lane', 'Edward\'s Street', 'Greenlane', 'Northern Terrace', 'Regent Street', 'Cowley Lane', 'Manor Hill', 'Oxford Road', 'Iffly Street', 'School Road', 'Hawthorn Avenue');
         suggestions['previously']   = new Array( 'post office', 'bank', 'lighthouse', 'school', 'rectory', 'vicarage', 'woodlands', 'barn', 'corner shop', 'gatehouse', 'police station', 'bakery');
         suggestions['view']         = new Array('meadow', 'orchard', 'lake', 'primrose', 'river', 'sea', 'woodlands');
         suggestions['weather_adj']  = new Array('windy', 'snowy', 'sunny', 'frosty', 'chilly', 'nippy', 'frozen', 'breezy', 'icy', 'cold', 'sweltering');
         suggestions['plant']        = new Array('rose', 'willow', 'apple', 'pear', 'cherry', 'beech', 'fir', 'ivy', 'honeysuckle', 'oak', 'primrose');
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
            suggestions['street'] = new Array(
                'High Street', 'Station Road', 'Church Street', 'Church Lane', 'Mill Lane', 'Church Road', 'Green Lane', 'New Road', 'Park Road', 'School Lane', 'The Crescent', 'The Avenue', 'The Green', 'Victoria Road', 'Queen Street', 'Manor Road', 'Bridge Street', 'Chapel Street', 'Chapel Lane', 'Park Lane', 'Orchard Close', 'King Street', 'Main Street', 'George Street', 'Back Lane', 'West Street', 'Park Avenue', 'North Street', 'New Street', 'Cross Street', 'Victoria Street', 'The Close', 'Grange Road', 'Market Street', 'London Road', 'The Grove', 'South Street', 'School Road', 'Sandy Lane', 'Church Close', 'Meadow Close', 'Mill Road', 'North Road', 'Mill Street', 'John Street', 'Ash Grove', 'The Drive', 'Park Street', 'Castle Street', 'Alexandra Road',
            );
            suggestions['village'] = new Array(
                'Upton', 'Middleton', 'Broughton', 'Milton', 'Sutton', 'Newton', 'Norton', 'Ford', 'Carlton', 'Weston', 'Wootton', 'Marton', 'Linton', 'Ashley', 'Hilton', 'Aston', 'Horton', 'Drayton', 'Newtown', 'Clifton', 'Charlton', 'Compton', 'Easton', 'Preston', 'Whittington', 'Walton', 'Kingswood', 'Buckland', 'Newbridge', 'Thornton', 'Higham', 'Sandford', 'Elton', 'Newbiggin', 'Newport', 'Knowle', 'Newnham', 'Twyford', 'Leigh', 'Brampton', 'Doddington', 'Church End', 'Marston', 'Houghton', 'Littleworth', 'Bishopstone', 'Seaton', 'Murton', 'Stone', 'Kingston',
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
            <h1>House Name Generator</h1>
            <h2>Generate House Names Within A Click</h2>
            <p>100000's of random house names are available for inspiration with a single click. Generate the house names with NameGenerator-Engine's House Name Generator tool and choose from a very extensive list of names.</p>
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

                   <form action="<?= base_url('HousenameGenerater/getNames') ?>" method="post" name="form">
                   <div class="row">
                     
                       <div class="col-12 mb-4">
                         <label>How would you describe the house's location?</label>
                          <div class="input-group mb-3">
                            <select name="location" id="" class="form-control select">
                            <option value="urban">urban</option>
                                 <option value="rural">rural</option>
                                 <option value="suburban">suburban</option>
                            </select>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                         <label>How big is the house?</label>
                          <div class="input-group mb-3">
                            <select name="size" id="" class="form-control select">
                            <option value="small">small</option>
                                 <option value="medium">medium</option>
                                 <option value="large">large</option>
                            </select>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>What was the building/plot used for before it was a personal home?</label>
                          <div class="input-group mb-3">
                            <input type="text" name="previously" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('previously', 'previously')">Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>Two things you can see from the house</label>
                          <div class="input-group mb-3">
                            <input type="text" name="view_1" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('view', 'view_1')">Suggest</button>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="text" name="view_2" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('view', 'view_2')">Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>What's the weather like? An adjective. (e.g. windy, sunny)</label>
                          <div class="input-group mb-3">
                            <input type="text" name="weather_adj" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('weather_adj', 'weather_adj')">Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>Color of House</label>
                          <div class="input-group mb-3">
                            <input type="text" name="color" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('color', 'color')">Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>Street Name</label>
                          <div class="input-group mb-3">
                            <input type="text" name="street" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('street', 'street')">Suggest</button>
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
                                     foreach ($value as $key => $valuee) {
                                        # code...
                                        echo "<p>".ucwords($valuee['name'])."</pre>";                            
                                     }
                                 }
                   }  ?>
                   <?php   if(!$status){
                       echo "<h3>No Name Found !</h3>";
                   } ?>
                </div>
            </div>
       
           <div class="col-md-4 col-lg-4 col-12">
              <?php include "assets/namelist.php"; ?>
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