<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | NameGenerator-Engine.com</title>
	<meta name="description" content="Fantasy Name Generator. Generate 100000's of male and female fantasy names with a single click for angel, dragons, aliens, fairies, goblins, unicorns & more."/>
	<meta name="keywords" content=""/>
    <meta property="og:title" content="Fantasy Name Generator | NameGenerator-Engine.com" />
    <meta property="og:description" content="Fantasy Name Generator. Generate 100000's of male and female fantasy names with a single click for angel, dragons, aliens, fairies, goblins, unicorns & more."/>
    <meta property="og:url" content="https://namegenerator-engine.com/fantasy-name-generator"/>
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
            suggestions['birthyear']       = new Array( '1881', '1882', '1883', '1884', '1885', '1886', '1887', '1888', '1889', '1890', '1891', '1892', '1893', '1894', '1895', '1896', '1897', '1898', '1899', '1900', '1901', '1902', '1903', '1904', '1905', '1906', '1907', '1908', '1909', '1910', '1911', '1912', '1913', '1914', '1915', '1916', '1917', '1918', '1919', '1920', '1921', '1922', '1923', '1924', '1925', '1926', '1927', '1928', '1929', '1930', '1931', '1932', '1933', '1934', '1935', '1936', '1937', '1938', '1939', '1940', '1941', '1942', '1943', '1944', '1945', '1946', '1947', '1948', '1949', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '1979', '1979', '1980', '1980', '1981', '1981', '1982', '1982', '1983', '1983', '1984', '1984', '1985', '1985', '1986', '1986', '1987', '1987', '1988', '1988', '1989', '1989', '1990', '1990', '1991', '1991', '1992', '1992', '1993', '1993', '1994', '1994', '1995', '1995', '1996', '1996', '1997', '1997', '1998', '1998', '1999', '1999', '2000', '2000', '2001', '2001', '2002', '2002', '2003', '2003', '2004', '2004', '2005', '2005', '2006', '2006', '2007', '2007', '2008', '2008', '2009', '2009', '2010', '2010', '2011', '2011', '2012', '2012', '2013', '2013', '2014', '2014', '2015', '2015', '2016', '2016', '2017', '2017', '1990', '1990', '1991', '1991', '1992', '1992', '1993', '1993', '1994', '1994', '1995', '1995', '1996', '1996', '1997', '1997', '1998', '1998', '1999', '1999', '2000', '2000', '2001', '2001', '2002', '2002', '2003', '2003', '2004', '2004', '2005', '2005', '2006', '2006', '2007', '2007', '2008', '2008', '2009', '2009', '2010', '2010', '2011', '2011', '2012', '2012', '2013', '2013', '2014', '2014', '2015', '2015', '2016', '2016', '1995', '1995', '1996', '1996', '1997', '1997', '1998', '1998', '1999', '1999', '2000', '2000', '2001', '2001', '2002', '2002', '2003', '2003', '2004', '2004', '2005', '2005', '2006', '2006', '2007', '2007', '2008', '2008', '2009', '2009', '2010', '2010', '2011', '2011', '2012', '2012', '2013', '2013', '2014', '2014', '2015', '2015', '1880');			

			suggestions['beginwith']       = new Array('A','X','Y','Z','S','M','M','K','R','L','T','C','J','E','D','H','N','B','F','G','H','I','O','P','Q','S','T','U','V','W');
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
	<style>
	  .social{
		   padding : 5px;
		   color   : black;
		   font-size : 25px;
	  }
	</style>
</head>
<body>
	<main>
     <?php  include "assets/header.php";  ?>

<section class="site-name">
   <div class="container">
      <div class="row">
         <div class="col-12 text-center ">
              <h1>About - Us </h1>
            <p>			Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore vel ea, eos cumque sint animi illo maxime cupiditate, fuga, odio quaerat! Quo et perferendis repellat earum error tenetur a magnam?
</p>
         </div>
      </div>
   </div>
</section>

<!-- Form section -->
<section class="form-sec pb-5 ">
     <div class="container">
        <div class="row">
           <div class="col-7">
                 <h1>Our Journey</h1>
		        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nemo laudantium veniam blanditiis, alias expedita doloribus porro voluptates impedit illo ipsa, optio accusantium corrupti in vitae. Consequatur eveniet quis laborum? </p>
		   </div>
		   <div class="col-5 p-5 text-center">
		       <p> <i  class="fa fa-map-marker pr-5" aria-hidden="false" style="font-size:25px;"></i> <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
		       <hr>
			   <p> <i class="fa fa-phone" style="font-size:25px;"></i> <br>   <a href="tell:+9891462644" style="color:black;">+91 9891462644</a>  </p>
			   <hr>

			   <p> <i class="fa fa-envelope" style="font-size:25px;"> </i> <br> <a href="mailto:wn11group@gmail.com" style="color:black">wn11group@gmail.com</a>  </p>
			   <hr>
			   <div class="d-flex justify-content-center">
			      <a href="" class="social" target="blank"> <i class="fab fa-facebook-square"></i> </a>
				  <a href="" class="social" target="blank"> <i class="fab fa-twitter-square"></i> </a>
				  <a href="" class="social" target="blank"> <i class="fab fa-instagram"></i> </a>
			      <a href="" class="social" target="blank"> <i class="fab fa-youtube-square"></i> </a>
                
			   </div>
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