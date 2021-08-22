<!DOCTYPE html>
<html>

<head>
    <title>First Name Generator | NameGenerator-Engine.com</title>
    <meta name="description" content="First Name Generator. Generate 100000's of first male & female names with a single click. A great collection of countrywise first names."/>
	<meta name="keywords" content=""/>
    <meta property="og:title" content="First Name Generator | NameGenerator-Engine.com" />
    <meta property="og:description" content="First Name Generator. Generate 100000's of first male & female names with a single click. A great collection of countrywise first names."/>
    <meta property="og:url" content="https://namegenerator-engine.com/first-name-generator"/>
    <meta property="og:site_name" content="NameGenerator-Engine"/>
    <meta property="og:type" content="website"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- custom style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css') ?>" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        function populateSuggestions() {
            var suggestions = new Array();

            suggestions['surname']    = new Array('Adams', 'Alexander', 'Allen', 'Alvarez', 'Anderson', 'Andrews', 'Armstrong', 'Arnold', 'Bailey', 'Baker', 'Barnes', 'Bell', 'Bennett', 'Berry', 'Black', 'Blaese', 'Bradley', 'Brooks', 'Brown', 'Bryant', 'Burns', 'Butler', 'Campbell', 'Carter', 'Castillo', 'Chapman', 'Chavez', 'Clark', 'Cole', 'Coleman', 'Collins', 'Cook', 'Cooper', 'Cox', 'Crawford', 'Cruz', 'Cunningham', 'Davis', 'Diaz', 'Dixon', 'Duncan', 'Dunn', 'Edwards', 'Elliott', 'Ellis', 'Evans', 'Ferguson', 'Fisher', 'Flores', 'Ford', 'Foster', 'Fox', 'Freeman', 'Garcia', 'Gardner', 'Gibson', 'Gonzales', 'Gonzalez', 'Gordon', 'Graham', 'Grant', 'Gray', 'Green', 'Griffin', 'Gutierrez', 'Hall', 'Hamilton', 'Harper', 'Harris', 'Harrison', 'Hart', 'Hawkins', 'Hayes', 'Henderson', 'Henry', 'Hernandez', 'Herrera', 'Hill', 'Holmes', 'Howard', 'Hudson', 'Hughes', 'Hunt', 'Hunter', 'Jackson', 'James', 'Jenkins', 'Jimenez', 'Johnson', 'Johnston', 'Jones', 'Jordan', 'Kelley', 'Kelly', 'Kennedy', 'Kim', 'King', 'Knight', 'Lane', 'Lawrence', 'Lee', 'Lewis', 'Long', 'Lopez', 'Lynch', 'Marshall', 'Martin', 'Mason', 'Matthews', 'Mcdonald', 'Medina', 'Mendoza', 'Meyer', 'Miller', 'Mills', 'Mitchell', 'Moore', 'Morales', 'Morgan', 'Morris', 'Morrison', 'Murphy', 'Murray', 'Nelson', 'Nguyen', 'O\'Brien', 'O\'Connor', 'O\'Doherty', 'O\'Gallagher', 'O\'Moore', 'O\'Neill', 'O\'Quinn', 'O\'Reilly', 'O\'Ryan', 'O\'Sullivan', 'Olson', 'Ortiz', 'Owens', 'Palmer', 'Parker', 'Patel', 'Patterson', 'Payne', 'Perry', 'Phillips', 'Porter', 'Powell', 'Price', 'Ramirez', 'Ramos', 'Reed', 'Reid', 'Reyes', 'Reynolds', 'Rice', 'Richards', 'Richardson', 'Riley', 'Rivera', 'Roberts', 'Robertson', 'Robinson', 'Rodriguez', 'Rogers', 'Romero', 'Rose', 'Ross', 'Ruiz', 'Russell', 'Ryan', 'Sanchez', 'Sanders', 'Scott', 'Shaw', 'Simmons', 'Simpson', 'Smith', 'Snyder', 'Spencer', 'Stephens', 'Stevens', 'Stewart', 'Stone', 'Sullivan', 'Taylor', 'Thomas', 'Thompson', 'Tucker', 'Turner', 'Vasquez', 'Wagner', 'Walker', 'Wallace', 'Walsh', 'Ward', 'Warren', 'Washington', 'Watson', 'Webb', 'Wells', 'West', 'White', 'Williams', 'Willis', 'Wilson', 'Wood', 'Woods', 'Wright', 'Young', 'Trelawney');
            suggestions['birthyear']  = new Array('1881', '1882', '1883', '1884', '1885', '1886', '1887', '1888', '1889', '1890', '1891', '1892', '1893', '1894', '1895', '1896', '1897', '1898', '1899', '1900', '1901', '1902', '1903', '1904', '1905', '1906', '1907', '1908', '1909', '1910', '1911', '1912', '1913', '1914', '1915', '1916', '1917', '1918', '1919', '1920', '1921', '1922', '1923', '1924', '1925', '1926', '1927', '1928', '1929', '1930', '1931', '1932', '1933', '1934', '1935', '1936', '1937', '1938', '1939', '1940', '1941', '1942', '1943', '1944', '1945', '1946', '1947', '1948', '1949', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '1979', '1979', '1980', '1980', '1981', '1981', '1982', '1982', '1983', '1983', '1984', '1984', '1985', '1985', '1986', '1986', '1987', '1987', '1988', '1988', '1989', '1989', '1990', '1990', '1991', '1991', '1992', '1992', '1993', '1993', '1994', '1994', '1995', '1995', '1996', '1996', '1997', '1997', '1998', '1998', '1999', '1999', '2000', '2000', '2001', '2001', '2002', '2002', '2003', '2003', '2004', '2004', '2005', '2005', '2006', '2006', '2007', '2007', '2008', '2008', '2009', '2009', '2010', '2010', '2011', '2011', '2012', '2012', '2013', '2013', '2014', '2014', '2015', '2015', '2016', '2016', '2017', '2017', '1990', '1990', '1991', '1991', '1992', '1992', '1993', '1993', '1994', '1994', '1995', '1995', '1996', '1996', '1997', '1997', '1998', '1998', '1999', '1999', '2000', '2000', '2001', '2001', '2002', '2002', '2003', '2003', '2004', '2004', '2005', '2005', '2006', '2006', '2007', '2007', '2008', '2008', '2009', '2009', '2010', '2010', '2011', '2011', '2012', '2012', '2013', '2013', '2014', '2014', '2015', '2015', '2016', '2016', '1995', '1995', '1996', '1996', '1997', '1997', '1998', '1998', '1999', '1999', '2000', '2000', '2001', '2001', '2002', '2002', '2003', '2003', '2004', '2004', '2005', '2005', '2006', '2006', '2007', '2007', '2008', '2008', '2009', '2009', '2010', '2010', '2011', '2011', '2012', '2012', '2013', '2013', '2014', '2014', '2015', '2015', '1880');

            suggestions['beginwith']  = new Array('A', 'X', 'Y', 'Z', 'S', 'M', 'M', 'K', 'R', 'L', 'T', 'C', 'J', 'E', 'D', 'H', 'N', 'B', 'F', 'G', 'H', 'I', 'O', 'P', 'Q', 'S', 'T', 'U', 'V', 'W');
            return suggestions;
        }

        shuffle = function(o) {
            for (var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
            return o;
        }

        function suggest(whichType, whichBox) {
            suggestions = populateSuggestions();
            shuffle(suggestions[whichType]);
            var newValue = suggestions[whichType][0];
            document.getElementsByName(whichBox)[0].value = newValue;
        }

        function fillAll() {
            var elLength = document.form.elements.length;

            for (i = 0; i < elLength; i++) {

                var type = form.elements[i].type;
                if (type == "button") {
                    if (form.elements[i].className != "random_ignore") {
                        if (i != 1) {
                            form.elements[i].click();
                        }
                    }

                } else if (form.elements[i].name == 'fantasy_types[]') {
                    var rand = Math.random();
                    if (rand < 0.6) {
                        form.elements[i].checked = true;
                    } else {
                        form.elements[i].checked = false;
                    }
                } else if (type == "select-one") {
                    if (form.elements[i].name == 'location_0') {
                        shuffle(suggestions['common_nats']);
                        var newValue = suggestions['common_nats'][0];
                        form.elements[i].value = newValue;
                    } else if (form.elements[i].name == 'title') {
                        var genderbox = document.getElementById('gender');
                        var gender = genderbox.value;
                        suggestions = populateSuggestions();
                        shuffle(suggestions[gender + '_title']);
                        var newValue = suggestions[gender + '_title'][0];
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
                            <h1>First Name Generator</h1>
                            <h2>Generate The First Names Within A Click</h2>
                            <p>Generate 100000's of first male & female names with a single click with the help of NameGenerator-Engine's First Name Generator tool. A great collection of countrywise first names.</p>
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
                                <form action="<?= base_url('Firstname/getNames') ?>" name="form" method="post">
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <label>How many examples would you like to generate?</label>
                                            <input type="number" name="num" min="10" max="100" class="form-custom col-6" value="10">
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label>Which gender would you like?</label>
                                            <select class="form-control select" name="gender" id="gender">
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">unisex</option>
                                            </select>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label>Surname</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="surname" class="gr-input" >
                                                <div class="input-group-append">
                                                    <button class="btn btn-custom" type="button" onclick="suggest('surname','surname')">Suggest</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label>Birth Year</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="birthyear" class="gr-input" >
                                                <div class="input-group-append">
                                                    <button class="btn btn-custom" type="button" onclick="suggest('birthyear','birthyear')">Suggest</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label>Begin with </label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="beginwith" class="gr-input" >
                                                <div class="input-group-append">
                                                    <button class="btn btn-custom" type="button" onclick="suggest('beginwith','beginwith')">Suggest</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <label>Your Religion ?</label>
                                            <select name="religion" class="form-control select">
                                                <option value="">does not matter</option>
                                                <option value="Christian">Christian</option>
                                                <option value="Muslim">Muslim</option>
                                                <option value="Jewish">Jewish</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Atheist">Atheist</option>
                                                <option value="Agnostic">Agnostic</option>
                                                <option value="Jedi">Jedi</option>
                                                <option value="">None of the above</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label>Nationality?</label>

                                            <select class="form-control select" name="country" >
                                                <option value="">Select Country</option>
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