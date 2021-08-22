<!DOCTYPE html>
<html>
<head>
	<title>Pirate Name Generator | NameGenerator-Engine.com</title>
	<meta name="description" content="Pirate Name Generator. Generate 100000's of funny pirate names for male and female characters with a single click."/>
    <meta name="keywords" content=""/>
    <meta property="og:title" content="Pirate Name Generator | NameGenerator-Engine.com" />
    <meta property="og:description" content="Pirate Name Generator. Generate 100000's of funny pirate names for male and female characters with a single click"/>
    <meta property="og:url" content="https://namegenerator-engine.com/pirate-name-generator"/>
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

			suggestions['surname']         = new Array('Adams', 'Alexander', 'Allen', 'Alvarez', 'Anderson', 'Andrews', 'Armstrong', 'Arnold', 'Bailey', 'Baker', 'Barnes', 'Bell', 'Bennett', 'Berry', 'Black', 'Blaese', 'Bradley', 'Brooks', 'Brown', 'Bryant', 'Burns', 'Butler', 'Campbell', 'Carter', 'Castillo', 'Chapman', 'Chavez', 'Clark', 'Cole', 'Coleman', 'Collins', 'Cook', 'Cooper', 'Cox', 'Crawford', 'Cruz', 'Cunningham', 'Davis', 'Diaz', 'Dixon', 'Duncan', 'Dunn', 'Edwards', 'Elliott', 'Ellis', 'Evans', 'Ferguson', 'Fisher', 'Flores', 'Ford', 'Foster', 'Fox', 'Freeman', 'Garcia', 'Gardner', 'Gibson', 'Gonzales', 'Gonzalez', 'Gordon', 'Graham', 'Grant', 'Gray', 'Green', 'Griffin', 'Gutierrez', 'Hall', 'Hamilton', 'Harper', 'Harris', 'Harrison', 'Hart', 'Hawkins', 'Hayes', 'Henderson', 'Henry', 'Hernandez', 'Herrera', 'Hill', 'Holmes', 'Howard', 'Hudson', 'Hughes', 'Hunt', 'Hunter', 'Jackson', 'James', 'Jenkins', 'Jimenez', 'Johnson', 'Johnston', 'Jones', 'Jordan', 'Kelley', 'Kelly', 'Kennedy', 'Kim', 'King', 'Knight', 'Lane', 'Lawrence', 'Lee', 'Lewis', 'Long', 'Lopez', 'Lynch', 'Marshall', 'Martin', 'Mason', 'Matthews', 'Mcdonald', 'Medina', 'Mendoza', 'Meyer', 'Miller', 'Mills', 'Mitchell', 'Moore', 'Morales', 'Morgan', 'Morris', 'Morrison', 'Murphy', 'Murray', 'Nelson', 'Nguyen', 'O\'Brien', 'O\'Connor', 'O\'Doherty', 'O\'Gallagher', 'O\'Moore', 'O\'Neill', 'O\'Quinn', 'O\'Reilly', 'O\'Ryan', 'O\'Sullivan', 'Olson', 'Ortiz', 'Owens', 'Palmer', 'Parker', 'Patel', 'Patterson', 'Payne', 'Perry', 'Phillips', 'Porter', 'Powell', 'Price', 'Ramirez', 'Ramos', 'Reed', 'Reid', 'Reyes', 'Reynolds', 'Rice', 'Richards', 'Richardson', 'Riley', 'Rivera', 'Roberts', 'Robertson', 'Robinson', 'Rodriguez', 'Rogers', 'Romero', 'Rose', 'Ross', 'Ruiz', 'Russell', 'Ryan', 'Sanchez', 'Sanders', 'Scott', 'Shaw', 'Simmons', 'Simpson', 'Smith', 'Snyder', 'Spencer', 'Stephens', 'Stevens', 'Stewart', 'Stone', 'Sullivan', 'Taylor', 'Thomas', 'Thompson', 'Tucker', 'Turner', 'Vasquez', 'Wagner', 'Walker', 'Wallace', 'Walsh', 'Ward', 'Warren', 'Washington', 'Watson', 'Webb', 'Wells', 'West', 'White', 'Williams', 'Willis', 'Wilson', 'Wood', 'Woods', 'Wright', 'Young', 'Trelawney');
         suggestions['color']           = new Array(
												                	'red', 'yellow', 'green', 'blue', 'purple', 'pink', 'white', 'cream', 'grey', 'blonde', 'blond', 'ginger', 'black', 'brown');
											
         suggestions['firstname']       = new Array('Adib', 'Alan', 'Albert', 'Alexander', 'Alfred', 'Alvin', 'Andrew', 'Angelo', 'Angelus', 'Anil', 'Anthony', 'Anton', 'Anuj', 'Ardal', 'Arlen', 'Augustus', 'Barry', 'Benito', 'Bob', 'Brandan', 'Brendan', 'Brian', 'Bronislaw', 'Bryan', 'Burt', 'Carl', 'Charles', 'Charlie', 'Christian', 'Christophe', 'Christopher', 'Claude', 'Claudius', 'Cliff', 'Cosmo', 'Cristiano', 'Damian', 'Daniel', 'David', 'Dean', 'Denis', 'Dennis', 'Derek', 'Donald', 'Edward', 'Emil', 'Emiliano', 'Emmanuel', 'Ernest', 'Esteban', 'Eugene', 'Farzan', 'Faust', 'Faustino', 'Fernando', 'Freddie', 'Frederick', 'Gary', 'George', 'Gerald', 'Hassan', 'Helge', 'Henry', 'Islay', 'Jakob', 'James', 'Jamil', 'Jenkins', 'Jim', 'Jimi', 'Joe', 'Johnny', 'Joseph', 'Juan', 'Judah', 'Judith', 'Judy', 'Julio', 'Julius', 'Justin', 'Keith', 'Kevin', 'Khalil', 'Laurence', 'Leon', 'Leonardo', 'Lewis', 'Liam', 'Louis', 'Marc', 'Marcello', 'Mario', 'Mark', 'Martin', 'Marvin', 'Matt', 'Matthew', 'Maurice', 'Maximus', 'Melvin', 'Michael', 'Mike', 'Neil', 'Nicholas', 'Nick', 'Nicolas', 'Nigel', 'Norman', 'Oliver', 'Paul', 'Peter', 'Philip', 'Robert', 'Ryan', 'Sean', 'Sebastian', 'Simon', 'Sophus', 'Stephen', 'Steve', 'Stevie', 'Taurus', 'Terika', 'Theodore', 'Tom', 'Tony', 'Tyr', 'Vasiliy', 'Victor', 'Wilhelm', 'William', 'Yaroslav', 'Zlatan', 'Adiba', 'Alaina', 'Alana', 'Alanis', 'Alannah', 'Alberte', 'Alessa', 'Alessandra', 'Sandra', 'Zandra', 'Alfreda', 'Elfreda', 'Freda', 'Elvina', 'Andrea', 'Andreia', 'Andrina', 'Ann', 'Angelina', 'Angela', 'Angie', 'Aniela', 'Anila', 'Antoinette', 'Antonia', 'Antonina', 'Anuja', 'Ardala', 'Arlene', 'Augustina', 'Barrie', 'Benita', 'Bobby', 'Brenda', 'Brenna', 'Briana', 'Brianna', 'Bryna', 'Bronislava', 'Bryany', 'Bertha', 'Carla', 'Carlene', 'Carly', 'Carrie', 'Charlene', 'Charlize', 'Sharlene', 'Christel', 'Christina', 'Kirsti', 'Kristina', 'Kristy', 'Stina', 'Christine', 'Claudette', 'Klaudie', 'Cleva', 'Cosima', 'Cosma', 'Cristina', 'Cristine', 'Damiana', 'Danette', 'Daniela', 'Danielle', 'Danita', 'Dayna', 'Davida', 'Davina', 'Deanna', 'Deeanna', 'Denise', 'Denisa', 'Dericka', 'Donalda', 'Donella', 'Donna', 'Edwarda', 'Emelie', 'Emilia', 'Miliana', 'Emmanuella', 'Emmanuelle', 'Erna', 'Estebana', 'Eugina', 'Genie', 'Farzaneh', 'Faustine', 'Faustina', 'Fernanda', 'Fredrica', 'Fredrika', 'Garyn', 'Georgie', 'Geraldine', 'Jerica', 'Hasna', 'Hella', 'Etta', 'Harriet', 'Hattie', 'Hennie', 'Henrietta', 'Henrika', 'Jetta', 'Isla', 'Jakoba', 'Jaime', 'Jaimi', 'Jamesina', 'Jamia', 'Jamilyn', 'Djamila', 'Jennifer', 'Jemima', 'Jo', 'Janey', 'Janie', 'Fifi', 'Josephe', 'Josephine', 'Posy', 'Juana', 'Judith', 'Judy', 'Jude', 'Julia', 'Giulia', 'Juliana', 'Justeen', 'Justeene', 'Justine', 'Justyne', 'Keitha', 'Kevia', 'Khalila', 'Laurie', 'Leona', 'Leondra', 'Leondrea', 'Leonela', 'Louise', 'Wilhelmina', 'Louella', 'Lovisa', 'Lulu', 'Marcia', 'Celina', 'Marcelina', 'Mary', 'Marcie', 'Martina', 'Martine', 'Marva', 'Marvina', 'Mathilda', 'Mathilde', 'Matilda', 'Matilde', 'Maurisa', 'Maxima', 'Maxine', 'Melissa', 'Michaela', 'Michelle', 'Nelly', 'Nicia', 'Nicole', 'Nicoletta', 'Nicolette', 'Nikol', 'Nikolett', 'Nikolia', 'Nicola', 'Nigella', 'Norma', 'Olivia', 'Paula', 'Paulina', 'Pauline', 'Pavlina', 'Peta', 'Petra', 'Petrina', 'Filippa', 'Philippa', 'Roberta', 'Rihanna', 'Ryana', 'Ryanne', 'Shawna', 'Sebastia', 'Simone', 'Sofia', 'Sophie', 'Stephanie', 'Steph', 'Stephie', 'Taura', 'Teresa', 'Fedora', 'Thea', 'Theodora', 'Tam', 'Tammy', 'Thomasina', 'Toni', 'Thyra', 'Vasilisa', 'Latoya', 'Toya', 'Victorine', 'Vitoria', 'Wilma', 'Guillelmina', 'Yaroslava', 'Zlata', 'Zlatica', 'Sue');
         suggestions['adjective']        = new Array(
													'gentle', 'compassionate', 'modest', 'adorable', 'brave', 'helpful','loving', 'special', 'hopeful', 'optimistic', 'charming','kind', 'grateful', 'gracious', 'delightful', 'patient','generous', 'energetic', 'down to earth', 'admirable', 'friendly','smart', 'considerate','noble', 'articulate', 'caring','intuitive', 'sympathetic','clever', 'daring', 'courageous','hilarious', 'understanding', 'incredible','funny', 'popular', 'virtuous', 'lovable', 'remarkable', 'cute', 'sweet', 'splendid','stable', 'witty', 'admirable', 'giving', 'intelligent', 'brave', 'bold'
													);

         suggestions['place']           = new Array('Canada', 'Devon', 'Cornwall', 'London', 'Dubai', 'Wales', 'New York', 'Africa', 'Australia', 'Kent', 'Ireland', 'Scotland');
                              
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
            <h1>Pirate Name Generator</h1>
            <h2>Generate The Pirate Names Within A Click</h2>
            <p>Generate 100000's of funny pirate names for male and female characters within seconds. NameGenerator-Engine's Pirate Name Generator lets you create pirate names for all types of works of fiction.</p>
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
                   <form action="<?= base_url('Piratename/getNames') ?>" name="form" method="post">
                   <div class="row">
                       <div class="col-12 mb-4">
                        <label>How many examples would you like to generate?</label>
                           <input type="number" name="num" min="10" max="100"  class="form-custom col-6" value="10">
                       </div>

                       <div class="col-12 mb-4">
                         <label>First name</label>
                          <div class="input-group mb-3">
                            <input type="text" name="firstname"  class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('firstname','firstname')">Suggest</button>
                            </div>
                          </div>
                       </div>
                       <div class="col-12 mb-4">
                         <label>Any color </label>
                          <div class="input-group mb-3">
                            <input type="text" name="color"  class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('color','color')">Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>Any Adjective  </label>
                          <div class="input-group mb-3">
                            <input type="text" name="adjective"  class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('adjective','adjective')">Suggest</button>
                            </div>
                          </div>
                       </div>

                       <div class="col-12 mb-4">
                         <label>Any Place  </label>
                          <div class="input-group mb-3">
                            <input type="text" name="place"  class="gr-input" >
                            <div class="input-group-append">
                              <button class="btn btn-custom" type="button" onclick="suggest('place','place')">Suggest</button>
                            </div>
                          </div>
                       </div>
                      
                    
                        <div class="col-12 mb-4">
                           <button type="submit" class="btn btn-custom">Generate</button>
                       </div>
                   </div>
                </form>
                </div>
                <?php include "assets/reviewmodal.php"; ?>
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
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
<script src="<?= base_url('js/custom.js') ?>"></script>

</body>
</html>