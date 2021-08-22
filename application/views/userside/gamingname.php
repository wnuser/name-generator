<!DOCTYPE html>
<html>
<head>
	<title>Game Name Generator | NameGenerator-Engine.com</title>
	<meta name="description" content="Game Name Generator. Find the cool names for games. Fortnite name generator, video game name generator, minecraft name generator, xbox name generator & more."/>
    <meta name="keywords" content=""/>
    <meta property="og:title" content="Game Name Generator | NameGenerator-Engine.com" />
    <meta property="og:description" content="Game Name Generator. Find the cool names for games. Fortnite name generator, video game name generator, minecraft name generator, xbox name generator & more."/>
    <meta property="og:url" content="https://namegenerator-engine.com/game-name-generator"/>
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

            suggestions['firstname'] = new Array('Adib', 'Alan', 'Albert', 'Alexander', 'Alfred', 'Alvin', 'Andrew', 'Angelo', 'Angelus', 'Anil', 'Anthony', 'Anton', 'Anuj', 'Ardal', 'Arlen', 'Augustus', 'Barry', 'Benito', 'Bob', 'Brandan', 'Brendan', 'Brian', 'Bronislaw', 'Bryan', 'Burt', 'Carl', 'Charles', 'Charlie', 'Christian', 'Christophe', 'Christopher', 'Claude', 'Claudius', 'Cliff', 'Cosmo', 'Cristiano', 'Damian', 'Daniel', 'David', 'Dean', 'Denis', 'Dennis', 'Derek', 'Donald', 'Edward', 'Emil', 'Emiliano', 'Emmanuel', 'Ernest', 'Esteban', 'Eugene', 'Farzan', 'Faust', 'Faustino', 'Fernando', 'Freddie', 'Frederick', 'Gary', 'George', 'Gerald', 'Hassan', 'Helge', 'Henry', 'Islay', 'Jakob', 'James', 'Jamil', 'Jenkins', 'Jim', 'Jimi', 'Joe', 'Johnny', 'Joseph', 'Juan', 'Judah', 'Judith', 'Judy', 'Julio', 'Julius', 'Justin', 'Keith', 'Kevin', 'Khalil', 'Laurence', 'Leon', 'Leonardo', 'Lewis', 'Liam', 'Louis', 'Marc', 'Marcello', 'Mario', 'Mark', 'Martin', 'Marvin', 'Matt', 'Matthew', 'Maurice', 'Maximus', 'Melvin', 'Michael', 'Mike', 'Neil', 'Nicholas', 'Nick', 'Nicolas', 'Nigel', 'Norman', 'Oliver', 'Paul', 'Peter', 'Philip', 'Robert', 'Ryan', 'Sean', 'Sebastian', 'Simon', 'Sophus', 'Stephen', 'Steve', 'Stevie', 'Taurus', 'Terika', 'Theodore', 'Tom', 'Tony', 'Tyr', 'Vasiliy', 'Victor', 'Wilhelm', 'William', 'Yaroslav', 'Zlatan', 'Adiba', 'Alaina', 'Alana', 'Alanis', 'Alannah', 'Alberte', 'Alessa', 'Alessandra', 'Sandra', 'Zandra', 'Alfreda', 'Elfreda', 'Freda', 'Elvina', 'Andrea', 'Andreia', 'Andrina', 'Ann', 'Angelina', 'Angela', 'Angie', 'Aniela', 'Anila', 'Antoinette', 'Antonia', 'Antonina', 'Anuja', 'Ardala', 'Arlene', 'Augustina', 'Barrie', 'Benita', 'Bobby', 'Brenda', 'Brenna', 'Briana', 'Brianna', 'Bryna', 'Bronislava', 'Bryany', 'Bertha', 'Carla', 'Carlene', 'Carly', 'Carrie', 'Charlene', 'Charlize', 'Sharlene', 'Christel', 'Christina', 'Kirsti', 'Kristina', 'Kristy', 'Stina', 'Christine', 'Claudette', 'Klaudie', 'Cleva', 'Cosima', 'Cosma', 'Cristina', 'Cristine', 'Damiana', 'Danette', 'Daniela', 'Danielle', 'Danita', 'Dayna', 'Davida', 'Davina', 'Deanna', 'Deeanna', 'Denise', 'Denisa', 'Dericka', 'Donalda', 'Donella', 'Donna', 'Edwarda', 'Emelie', 'Emilia', 'Miliana', 'Emmanuella', 'Emmanuelle', 'Erna', 'Estebana', 'Eugina', 'Genie', 'Farzaneh', 'Faustine', 'Faustina', 'Fernanda', 'Fredrica', 'Fredrika', 'Garyn', 'Georgie', 'Geraldine', 'Jerica', 'Hasna', 'Hella', 'Etta', 'Harriet', 'Hattie', 'Hennie', 'Henrietta', 'Henrika', 'Jetta', 'Isla', 'Jakoba', 'Jaime', 'Jaimi', 'Jamesina', 'Jamia', 'Jamilyn', 'Djamila', 'Jennifer', 'Jemima', 'Jo', 'Janey', 'Janie', 'Fifi', 'Josephe', 'Josephine', 'Posy', 'Juana', 'Judith', 'Judy', 'Jude', 'Julia', 'Giulia', 'Juliana', 'Justeen', 'Justeene', 'Justine', 'Justyne', 'Keitha', 'Kevia', 'Khalila', 'Laurie', 'Leona', 'Leondra', 'Leondrea', 'Leonela', 'Louise', 'Wilhelmina', 'Louella', 'Lovisa', 'Lulu', 'Marcia', 'Celina', 'Marcelina', 'Mary', 'Marcie', 'Martina', 'Martine', 'Marva', 'Marvina', 'Mathilda', 'Mathilde', 'Matilda', 'Matilde', 'Maurisa', 'Maxima', 'Maxine', 'Melissa', 'Michaela', 'Michelle', 'Nelly', 'Nicia', 'Nicole', 'Nicoletta', 'Nicolette', 'Nikol', 'Nikolett', 'Nikolia', 'Nicola', 'Nigella', 'Norma', 'Olivia', 'Paula', 'Paulina', 'Pauline', 'Pavlina', 'Peta', 'Petra', 'Petrina', 'Filippa', 'Philippa', 'Roberta', 'Rihanna', 'Ryana', 'Ryanne', 'Shawna', 'Sebastia', 'Simone', 'Sofia', 'Sophie', 'Stephanie', 'Steph', 'Stephie', 'Taura', 'Teresa', 'Fedora', 'Thea', 'Theodora', 'Tam', 'Tammy', 'Thomasina', 'Toni', 'Thyra', 'Vasilisa', 'Latoya', 'Toya', 'Victorine', 'Vitoria', 'Wilma', 'Guillelmina', 'Yaroslava', 'Zlata', 'Zlatica', 'Sue');

			suggestions['beginwith']       = new Array('A','X','Y','Z','S','M','M','K','R','L','T','C','J','E','D','H','N','B','F','G','H','I','O','P','Q','S','T','U','V','W');
         suggestions['endwith']       = new Array('A','X','Y','Z','S','M','M','K','R','L','T','C','J','E','D','H','N','B','F','G','H','I','O','P','Q','S','T','U','V','W');
         suggestions['adjective'] = new Array(
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

            suggestions['bodypart'] = new Array('toes', 'feet', 'hands', 'legs', 'arms', 'lips', 'fingers', 'toenails', 'fingernails', 'eyes', 'elbows', 'fingers', 'eyelashes', 'eyebrows', 'thighs', 'abs', 'ankles', 'spots', 'moles', 'warts');

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
            <h1>Game Name Generator</h1>
            <h2>Generate Game Names Within A Click</h2>
            <p>Generate the 1000's of cool names for games with NameGenerator-Engine's Game Name Generator tool. Fortnite name generator, video game name generator, minecraft name generator, xbox name generator & more.</p>
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

                   <form action="<?= base_url('Gamingname/getNames') ?>" method="post" name="form">
                   <div class="row">
                       <div class="col-12 mb-4">
                        <label>How many examples would you like to generate?</label>
                           <input type="number" name="num" min="10" max="100"  class="form-custom col-6" value="10">
                       </div>

                       <div class="col-12 mb-4">
                         <label>Your first Name </label>
                          <div class="input-group mb-3">
                            <input type="text" name="firstname" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('firstname','firstname')" >Suggest</button>
                            </div>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                         <label>An Adjective that describe the game</label>
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
                         <label>Two bodyparts (e.g. legs, hips)</label>
                          <div class="input-group mb-3">
                            <input type="text" name="bodypart" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('bodypart', 'bodypart')">Suggest</button>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="text" name="bodypart_1" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('bodypart', 'bodypart_1')">Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>An anmial (e.g. sheep, bear)</label>
                          <div class="input-group mb-3">
                            <input type="text" name="animal" class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('animal','animal')" >Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                        <label>Select Country </label>
                            <select class="form-control select" name="country">
                            <option value="">Choose One</option>
                                                                        <optgroup label="Popular">
                                                                            <option value="British" />British</option>
                                                                            <option value="American" />American</option>
                                                                            <option value="Canadian" />Canadian</option>
                                                                            <option value="Austrailian" />Australian</option>
                                                                            <optgroup label="All">
                                                                                <option value="Afghan" />Afghan</option>
                                                                                <option value="Albanian" />Albanian</option>
                                                                                <option value="Algerian" />Algerian</option>
                                                                                <option value="American" />American</option>
                                                                                <option value="American Samoan" />American Samoan</option>
                                                                                <option value="Andorran" />Andorran</option>
                                                                                <option value="Angolan" />Angolan</option>
                                                                                <option value="Anguillian" />Anguillian</option>
                                                                                <option value="Antiguan, Barbudan" />Antiguan, Barbudan</option>
                                                                                <option value="Argentinean" />Argentinean</option>
                                                                                <option value="Armenian" />Armenian</option>
                                                                                <option value="Aruban" />Aruban</option>
                                                                                <option value="Australian" />Australian</option>
                                                                                <option value="Austrian" />Austrian</option>
                                                                                <option value="Azerbaijani" />Azerbaijani</option>
                                                                                <option value="Ålandish" />Ålandish</option>
                                                                                <option value="Bahamian" />Bahamian</option>
                                                                                <option value="Bahraini" />Bahraini</option>
                                                                                <option value="Bangladeshi" />Bangladeshi</option>
                                                                                <option value="Barbadian" />Barbadian</option>
                                                                                <option value="Belarusian" />Belarusian</option>
                                                                                <option value="Belgian" />Belgian</option>
                                                                                <option value="Belizean" />Belizean</option>
                                                                                <option value="Beninese" />Beninese</option>
                                                                                <option value="Bermudian" />Bermudian</option>
                                                                                <option value="Bhutanese" />Bhutanese</option>
                                                                                <option value="Bolivian" />Bolivian</option>
                                                                                <option value="Bosnian, Herzegovinian" />Bosnian, Herzegovinian</option>
                                                                                <option value="Brazilian" />Brazilian</option>
                                                                                <option value="British" />British</option>
                                                                                <option value="Bruneian" />Bruneian</option>
                                                                                <option value="Bulgarian" />Bulgarian</option>
                                                                                <option value="Burkinabe" />Burkinabe</option>
                                                                                <option value="Burmese" />Burmese</option>
                                                                                <option value="Burundian" />Burundian</option>
                                                                                <option value="Cambodian" />Cambodian</option>
                                                                                <option value="Cameroonian" />Cameroonian</option>
                                                                                <option value="Canadian" />Canadian</option>
                                                                                <option value="Cape Verdian" />Cape Verdian</option>
                                                                                <option value="Caymanian" />Caymanian</option>
                                                                                <option value="Central African" />Central African</option>
                                                                                <option value="Chadian" />Chadian</option>
                                                                                <option value="Channel Islander" />Channel Islander</option>
                                                                                <option value="Chilean" />Chilean</option>
                                                                                <option value="Chinese" />Chinese</option>
                                                                                <option value="Christmas Island" />Christmas Island</option>
                                                                                <option value="Cocos Islander" />Cocos Islander</option>
                                                                                <option value="Colombian" />Colombian</option>
                                                                                <option value="Comoran" />Comoran</option>
                                                                                <option value="Congolese" />Congolese</option>
                                                                                <option value="Cook Islander" />Cook Islander</option>
                                                                                <option value="Costa Rican" />Costa Rican</option>
                                                                                <option value="Croatian" />Croatian</option>
                                                                                <option value="Cuban" />Cuban</option>
                                                                                <option value="Cypriot" />Cypriot</option>
                                                                                <option value="Czech" />Czech</option>
                                                                                <option value="Danish" />Danish</option>
                                                                                <option value="Djibouti" />Djibouti</option>
                                                                                <option value="Dominican" />Dominican</option>
                                                                                <option value="Dutch" />Dutch</option>
                                                                                <option value="East Timorese" />East Timorese</option>
                                                                                <option value="Ecuadorean" />Ecuadorean</option>
                                                                                <option value="Egyptian" />Egyptian</option>
                                                                                <option value="Emirati" />Emirati</option>
                                                                                <option value="Equatorial Guinean" />Equatorial Guinean</option>
                                                                                <option value="Eritrean" />Eritrean</option>
                                                                                <option value="Estonian" />Estonian</option>
                                                                                <option value="Ethiopian" />Ethiopian</option>
                                                                                <option value="Falkland Islander" />Falkland Islander</option>
                                                                                <option value="Faroese" />Faroese</option>
                                                                                <option value="Fijian" />Fijian</option>
                                                                                <option value="Filipino" />Filipino</option>
                                                                                <option value="Finnish" />Finnish</option>
                                                                                <option value="French" />French</option>
                                                                                <option value="French Guianese" />French Guianese</option>
                                                                                <option value="French Polynesian" />French Polynesian</option>
                                                                                <option value="Gabonese" />Gabonese</option>
                                                                                <option value="Gambian" />Gambian</option>
                                                                                <option value="Georgian" />Georgian</option>
                                                                                <option value="German" />German</option>
                                                                                <option value="Ghanaian" />Ghanaian</option>
                                                                                <option value="Gibraltar" />Gibraltar</option>
                                                                                <option value="Greek" />Greek</option>
                                                                                <option value="Greenlandic" />Greenlandic</option>
                                                                                <option value="Grenadian" />Grenadian</option>
                                                                                <option value="Guadeloupian" />Guadeloupian</option>
                                                                                <option value="Guamanian" />Guamanian</option>
                                                                                <option value="Guatemalan" />Guatemalan</option>
                                                                                <option value="Guinea-Bissauan" />Guinea-Bissauan</option>
                                                                                <option value="Guinean" />Guinean</option>
                                                                                <option value="Guyanese" />Guyanese</option>
                                                                                <option value="Haitian" />Haitian</option>
                                                                                <option value="Honduran" />Honduran</option>
                                                                                <option value="Hungarian" />Hungarian</option>
                                                                                <option value="I-Kiribati" />I-Kiribati</option>
                                                                                <option value="Icelander" />Icelander</option>
                                                                                <option value="Indian" />Indian</option>
                                                                                <option value="Indonesian" />Indonesian</option>
                                                                                <option value="Iranian" />Iranian</option>
                                                                                <option value="Iraqi" />Iraqi</option>
                                                                                <option value="Irish" />Irish</option>
                                                                                <option value="Israeli" />Israeli</option>
                                                                                <option value="Italian" />Italian</option>
                                                                                <option value="Ivorian" />Ivorian</option>
                                                                                <option value="Jamaican" />Jamaican</option>
                                                                                <option value="Japanese" />Japanese</option>
                                                                                <option value="Jordanian" />Jordanian</option>
                                                                                <option value="Kazakhstani" />Kazakhstani</option>
                                                                                <option value="Kenyan" />Kenyan</option>
                                                                                <option value="Kirghiz" />Kirghiz</option>
                                                                                <option value="Kittian and Nevisian" />Kittian and Nevisian</option>
                                                                                <option value="Kosovar" />Kosovar</option>
                                                                                <option value="Kuwaiti" />Kuwaiti</option>
                                                                                <option value="Laotian" />Laotian</option>
                                                                                <option value="Latvian" />Latvian</option>
                                                                                <option value="Lebanese" />Lebanese</option>
                                                                                <option value="Liberian" />Liberian</option>
                                                                                <option value="Libyan" />Libyan</option>
                                                                                <option value="Liechtensteiner" />Liechtensteiner</option>
                                                                                <option value="Lithuanian" />Lithuanian</option>
                                                                                <option value="Luxembourger" />Luxembourger</option>
                                                                                <option value="Macedonian" />Macedonian</option>
                                                                                <option value="Malagasy" />Malagasy</option>
                                                                                <option value="Malawian" />Malawian</option>
                                                                                <option value="Malaysian" />Malaysian</option>
                                                                                <option value="Maldivan" />Maldivan</option>
                                                                                <option value="Malian" />Malian</option>
                                                                                <option value="Maltese" />Maltese</option>
                                                                                <option value="Manx" />Manx</option>
                                                                                <option value="Marshallese" />Marshallese</option>
                                                                                <option value="Mauritanian" />Mauritanian</option>
                                                                                <option value="Mauritian" />Mauritian</option>
                                                                                <option value="Mexican" />Mexican</option>
                                                                                <option value="Micronesian" />Micronesian</option>
                                                                                <option value="Moldovan" />Moldovan</option>
                                                                                <option value="Monegasque" />Monegasque</option>
                                                                                <option value="Mongolian" />Mongolian</option>
                                                                                <option value="Montenegrin" />Montenegrin</option>
                                                                                <option value="Montserratian" />Montserratian</option>
                                                                                <option value="Moroccan" />Moroccan</option>
                                                                                <option value="Mosotho" />Mosotho</option>
                                                                                <option value="Motswana" />Motswana</option>
                                                                                <option value="Mozambican" />Mozambican</option>
                                                                                <option value="Namibian" />Namibian</option>
                                                                                <option value="Nauruan" />Nauruan</option>
                                                                                <option value="Nepalese" />Nepalese</option>
                                                                                <option value="New Caledonian" />New Caledonian</option>
                                                                                <option value="New Zealander" />New Zealander</option>
                                                                                <option value="Ni-Vanuatu" />Ni-Vanuatu</option>
                                                                                <option value="Nicaraguan" />Nicaraguan</option>
                                                                                <option value="Nigerian" />Nigerian</option>
                                                                                <option value="Nigerien" />Nigerien</option>
                                                                                <option value="Niuean" />Niuean</option>
                                                                                <option value="Norfolk Islander" />Norfolk Islander</option>
                                                                                <option value="North Korean" />North Korean</option>
                                                                                <option value="Norwegian" />Norwegian</option>
                                                                                <option value="Omani" />Omani</option>
                                                                                <option value="Pakistani" />Pakistani</option>
                                                                                <option value="Palauan" />Palauan</option>
                                                                                <option value="Palestinian" />Palestinian</option>
                                                                                <option value="Panamanian" />Panamanian</option>
                                                                                <option value="Papua New Guinean" />Papua New Guinean</option>
                                                                                <option value="Paraguayan" />Paraguayan</option>
                                                                                <option value="Peruvian" />Peruvian</option>
                                                                                <option value="Pitcairn Islander" />Pitcairn Islander</option>
                                                                                <option value="Polish" />Polish</option>
                                                                                <option value="Portuguese" />Portuguese</option>
                                                                                <option value="Puerto Rican" />Puerto Rican</option>
                                                                                <option value="Qatari" />Qatari</option>
                                                                                <option value="Romanian" />Romanian</option>
                                                                                <option value="Russian" />Russian</option>
                                                                                <option value="Rwandan" />Rwandan</option>
                                                                                <option value="Sahrawi" />Sahrawi</option>
                                                                                <option value="Saint Barthélemy Islander" />Saint Barthélemy Islander</option>
                                                                                <option value="Saint Helenian" />Saint Helenian</option>
                                                                                <option value="Saint Lucian" />Saint Lucian</option>
                                                                                <option value="Saint Martin Islander" />Saint Martin Islander</option>
                                                                                <option value="Saint Vincentian" />Saint Vincentian</option>
                                                                                <option value="Salvadoran" />Salvadoran</option>
                                                                                <option value="Sammarinese" />Sammarinese</option>
                                                                                <option value="Samoan" />Samoan</option>
                                                                                <option value="Sao Tomean" />Sao Tomean</option>
                                                                                <option value="Saudi Arabian" />Saudi Arabian</option>
                                                                                <option value="Senegalese" />Senegalese</option>
                                                                                <option value="Serbian" />Serbian</option>
                                                                                <option value="Seychellois" />Seychellois</option>
                                                                                <option value="Sierra Leonean" />Sierra Leonean</option>
                                                                                <option value="Singaporean" />Singaporean</option>
                                                                                <option value="Slovak" />Slovak</option>
                                                                                <option value="Slovene" />Slovene</option>
                                                                                <option value="Solomon Islander" />Solomon Islander</option>
                                                                                <option value="Somali" />Somali</option>
                                                                                <option value="South African" />South African</option>
                                                                                <option value="South Georgia and the South Sandwic" />South Georgia and the South Sandwic</option>
                                                                                <option value="South Korean" />South Korean</option>
                                                                                <option value="South Sudanese" />South Sudanese</option>
                                                                                <option value="Spanish" />Spanish</option>
                                                                                <option value="Sri Lankan" />Sri Lankan</option>
                                                                                <option value="Sudanese" />Sudanese</option>
                                                                                <option value="Surinamer" />Surinamer</option>
                                                                                <option value="Swazi" />Swazi</option>
                                                                                <option value="Swedish" />Swedish</option>
                                                                                <option value="Swiss" />Swiss</option>
                                                                                <option value="Syrian" />Syrian</option>
                                                                                <option value="Tadzhik" />Tadzhik</option>
                                                                                <option value="Taiwanese" />Taiwanese</option>
                                                                                <option value="Tanzanian" />Tanzanian</option>
                                                                                <option value="Thai" />Thai</option>
                                                                                <option value="Togolese" />Togolese</option>
                                                                                <option value="Tokelauan" />Tokelauan</option>
                                                                                <option value="Tongan" />Tongan</option>
                                                                                <option value="Trinidadian" />Trinidadian</option>
                                                                                <option value="Tunisian" />Tunisian</option>
                                                                                <option value="Turkish" />Turkish</option>
                                                                                <option value="Turkmen" />Turkmen</option>
                                                                                <option value="Turks and Caicos Islander" />Turks and Caicos Islander</option>
                                                                                <option value="Tuvaluan" />Tuvaluan</option>
                                                                                <option value="Ugandan" />Ugandan</option>
                                                                                <option value="Ukrainian" />Ukrainian</option>
                                                                                <option value="Uruguayan" />Uruguayan</option>
                                                                                <option value="Uzbekistani" />Uzbekistani</option>
                                                                                <option value="Venezuelan" />Venezuelan</option>
                                                                                <option value="Vietnamese" />Vietnamese</option>
                                                                                <option value="Virgin Islander" />Virgin Islander</option>
                                                                                <option value="Wallis and Futuna Islander" />Wallis and Futuna Islander</option>
                                                                                <option value="Yemeni" />Yemeni</option>
                                                                                <option value="Zambian" />Zambian</option>
                                                                                <option value="Zimbabwean" />Zimbabwean</option>
                                                                            </optgroup>
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
                                      echo "<p>".ucwords($value['name'])."</pre>";                            }
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