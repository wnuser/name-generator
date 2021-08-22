 <!DOCTYPE html>
<html>

<head>
    <title>Character Name Generator | NameGenerator-Engine.com</title>
    <meta name="description" content="Character Name Generator. generate 100000's of male character names and female character names with a single click for your stories."/>
	<meta name="keywords" content=""/>
    <meta property="og:title" content="Character Name Generator | NameGenerator-Engine.com" />
    <meta property="og:description" content="Character Name Generator. generate 100000's of male character names and female character names with a single click for your stories."/>
    <meta property="og:url" content="https://namegenerator-engine.com/character-name-generator"/>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    <script>
            function populateSuggestions() {
            var suggestions = new Array();

            suggestions['year'] = new Array('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1881', '1882', '1883', '1884', '1885', '1886', '1887', '1888', '1889', '1890', '1891', '1892', '1893', '1894', '1895', '1896', '1897', '1898', '1899', '1900', '1901', '1902', '1903', '1904', '1905', '1906', '1907', '1908', '1909', '1910', '1911', '1912', '1913', '1914', '1915', '1916', '1917', '1918', '1919', '1920', '1921', '1922', '1923', '1924', '1925', '1926', '1927', '1928', '1929', '1930', '1931', '1932', '1933', '1934', '1935', '1936', '1937', '1938', '1939', '1940', '1941', '1942', '1943', '1944', '1945', '1946', '1947', '1948', '1949', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '1979', '1979', '1980', '1980', '1981', '1981', '1982', '1982', '1983', '1983', '1984', '1984', '1985', '1985', '1986', '1986', '1987', '1987', '1988', '1988', '1989', '1989', '1990', '1990', '1991', '1991', '1992', '1992', '1993', '1993', '1994', '1994', '1995', '1995', '1996', '1996', '1997', '1997', '1998', '1998', '1999', '1999', '2000', '2000', '2001', '2001', '2002', '2002', '2003', '2003', '2004', '2004', '2005', '2005', '2006', '2006', '2007', '2007', '2008', '2008', '2009', '2009', '2010', '2010', '2011', '2011', '2012', '2012', '2013', '2013', '2014', '2014', '2015', '2015', '2016', '2016', '2017', '2017', '1990', '1990', '1991', '1991', '1992', '1992', '1993', '1993', '1994', '1994', '1995', '1995', '1996', '1996', '1997', '1997', '1998', '1998', '1999', '1999', '2000', '2000', '2001', '2001', '2002', '2002', '2003', '2003', '2004', '2004', '2005', '2005', '2006', '2006', '2007', '2007', '2008', '2008', '2009', '2009', '2010', '2010', '2011', '2011', '2012', '2012', '2013', '2013', '2014', '2014', '2015', '2015', '2016', '2016', '1995', '1995', '1996', '1996', '1997', '1997', '1998', '1998', '1999', '1999', '2000', '2000', '2001', '2001', '2002', '2002', '2003', '2003', '2004', '2004', '2005', '2005', '2006', '2006', '2007', '2007', '2008', '2008', '2009', '2009', '2010', '2010', '2011', '2011', '2012', '2012', '2013', '2013', '2014', '2014', '2015', '2015', '1880');

            suggestions['first_names_f'] = new Array('Aaliyah', 'Abbie', 'Abigail', 'Aimee', 'Aisha', 'Alex', 'Alexandra', 'Alice', 'Alicia', 'Alisha', 'Alyssa', 'Amanda', 'Amber', 'Amelia', 'Amy', 'Angela', 'Anna', 'Annabel', 'Annabelle', 'Annie', 'Anya', 'April', 'Ava', 'Beatrice', 'Beth', 'Bethan', 'Bethany', 'Bonnie', 'Brooke', 'Caitlin', 'Cara', 'Casey', 'Catherine', 'Cerys', 'Charley', 'Charlie', 'Charlotte', 'Chelsea', 'Chloe', 'Christina', 'Clara', 'Connie', 'Courtney', 'Crystal', 'Daisy', 'Danielle', 'Darcy', 'Deborah', 'Demi', 'Diana', 'Ebony', 'Eden', 'Edith', 'Eleanor', 'Elena', 'Elise', 'Eliza', 'Elizabeth', 'Ella', 'Ellen', 'Ellie', 'Eloise', 'Elsie', 'Emilia', 'Emily', 'Emma', 'Erin', 'Esme', 'Esther', 'Eva', 'Eve', 'Evelyn', 'Evie', 'Faith', 'Fannie', 'Fatima', 'Faye', 'Ffion', 'Florence', 'Frances', 'Francesca', 'Freya', 'Gabriella', 'Gabrielle', 'Georgia', 'Georgina', 'Grace', 'Hannah', 'Harriet', 'Hazel', 'Heather', 'Heidi', 'Hollie', 'Holly', 'Imogen', 'India', 'Isabel', 'Isabella', 'Isabelle', 'Isla', 'Isobel', 'Jade', 'Jamie', 'Jasmine', 'Jemima', 'Jenna', 'Jennifer', 'Jessica', 'Jessie', 'Joel', 'Josephine', 'Julia', 'Kate', 'Katherine', 'Kathleen', 'Kathryn', 'Katie', 'Kayla', 'Kayleigh', 'Keira', 'Kelly', 'Kelsey', 'Kiera', 'Lara', 'Laura', 'Lauren', 'Layla', 'Leah', 'Lena', 'Libby', 'Lillian', 'Lillie', 'Lilly', 'Lily', 'Lisa', 'Lois', 'Lola', 'Lottie', 'Louise', 'Lucy', 'Lydia', 'Maddison', 'Madeleine', 'Madison', 'Mae', 'Maisie', 'Margaret', 'Margie', 'Maria', 'Marie', 'Martha', 'Mary', 'Maryam', 'Matilda', 'Max', 'Maya', 'Megan', 'Melissa', 'Mia', 'Michelle', 'Millie', 'Mollie', 'Molly', 'Morgan', 'Nancy', 'Nannie', 'Naomi', 'Natalie', 'Natasha', 'Niamh', 'Nicole', 'Olivia', 'Paige', 'Patricia', 'Phoebe', 'Poppy', 'Rachel', 'Rebecca', 'Rhonda', 'Robyn', 'Rosa', 'Rose', 'Rosie', 'Ruby', 'Ruth', 'Sadie', 'Samantha', 'Sara', 'Sarah', 'Savannah', 'Scarlett', 'Shannon', 'Skye', 'Sofia', 'Sophia', 'Sophie', 'Stella', 'Stephanie', 'Summer', 'Tara', 'Taylor', 'Tegan', 'Tia', 'Tiffany', 'Tilly', 'Tommy', 'Traci', 'Tyler', 'Vanessa', 'Velma', 'Victoria', 'Willie', 'Yasmin', 'Zahra', 'Zainab', 'Zara', 'Zoe', 'Belinda');

            suggestions['first_names_m'] = new Array('Aaron', 'Abdul', 'Abdullah', 'Adam', 'Ahmed', 'Alan', 'Albert', 'Alex', 'Alexander', 'Alfred', 'Andrew', 'Anthony', 'Archie', 'Arthur', 'Austin', 'Ben', 'Benjamin', 'Bradley', 'Brandon', 'Brian', 'Brooke', 'Caleb', 'Callum', 'Carl', 'Casey', 'Charles', 'Charley', 'Charlie', 'Christian', 'Christopher', 'Cole', 'Connor', 'Conor', 'Craig', 'Curtis', 'Daniel', 'Danny', 'Darcy', 'David', 'Dean', 'Declan', 'Dennis', 'Dewey', 'Dominic', 'Douglas', 'Ebony', 'Eddie', 'Eden', 'Edward', 'Edwin', 'Elena', 'Eliza', 'Eric', 'Erin', 'Esme', 'Ethan', 'Euan', 'Ewan', 'Faith', 'Frances', 'Frank', 'Fraser', 'Fred', 'Frederick', 'Garfield', 'Gary', 'George', 'Gregory', 'Grover', 'Hamza', 'Harrison', 'Harry', 'Harvey', 'Hassan', 'Henry', 'Homer', 'Hugh', 'Hugo', 'Ibrahim', 'Isaac', 'Jack', 'Jackson', 'Jacob', 'Jade', 'Jake', 'James', 'Jamie', 'Jared', 'Jason', 'Jasper', 'Jenna', 'Jeremy', 'Jessie', 'Jimmy', 'Joe', 'Joel', 'John', 'Johnny', 'Jonathan', 'Joseph', 'Josh', 'Joshua', 'Julia', 'Justin', 'Kelly', 'Kelsey', 'Kenneth', 'Kevin', 'Kyle', 'Lara', 'Lawrence', 'Leo', 'Leon', 'Leonard', 'Lewis', 'Liam', 'Lloyd', 'Louis', 'Lucas', 'Luis', 'Luke', 'Maddison', 'Madison', 'Mae', 'Marcus', 'Mark', 'Martin', 'Matthew', 'Max', 'Maximilian', 'Maxwell', 'Maya', 'Michael', 'Miles', 'Mitchell', 'Mohamed', 'Mohammad', 'Mohammed', 'Morgan', 'Muhammad', 'Muhammed', 'Myles', 'Nathan', 'Nathaniel', 'Nicholas', 'Noah', 'Oliver', 'Omar', 'Oscar', 'Owen', 'Patrick', 'Paul', 'Peter', 'Philip', 'Phillip', 'Ralph', 'Raymond', 'Reuben', 'Rhys', 'Richard', 'Robert', 'Robyn', 'Roosevelt', 'Roy', 'Russell', 'Ryan', 'Samuel', 'Sara', 'Scott', 'Sean', 'Sebastian', 'Seth', 'Shannon', 'Skye', 'Sonny', 'Stanley', 'Stella', 'Stephen', 'Steven', 'Taylor', 'Tegan', 'Theo', 'Theodore', 'Thomas', 'Tia', 'Timothy', 'Tobias', 'Tom', 'Tommy', 'Travis', 'Tristan', 'Tyler', 'Victor', 'Vincent', 'Walter', 'Warren', 'Will', 'William', 'Willie', 'Yusuf', 'Zac', 'Zachary', 'Zack', 'Zak', 'Tristan');

            suggestions['surnames'] = new Array('Adams', 'Alexander', 'Allen', 'Alvarez', 'Anderson', 'Andrews', 'Armstrong', 'Arnold', 'Bailey', 'Baker', 'Barnes', 'Bell', 'Bennett', 'Berry', 'Black', 'Blaese', 'Bradley', 'Brooks', 'Brown', 'Bryant', 'Burns', 'Butler', 'Campbell', 'Carter', 'Castillo', 'Chapman', 'Chavez', 'Clark', 'Cole', 'Coleman', 'Collins', 'Cook', 'Cooper', 'Cox', 'Crawford', 'Cruz', 'Cunningham', 'Davis', 'Diaz', 'Dixon', 'Duncan', 'Dunn', 'Edwards', 'Elliott', 'Ellis', 'Evans', 'Ferguson', 'Fisher', 'Flores', 'Ford', 'Foster', 'Fox', 'Freeman', 'Garcia', 'Gardner', 'Gibson', 'Gonzales', 'Gonzalez', 'Gordon', 'Graham', 'Grant', 'Gray', 'Green', 'Griffin', 'Gutierrez', 'Hall', 'Hamilton', 'Harper', 'Harris', 'Harrison', 'Hart', 'Hawkins', 'Hayes', 'Henderson', 'Henry', 'Hernandez', 'Herrera', 'Hill', 'Holmes', 'Howard', 'Hudson', 'Hughes', 'Hunt', 'Hunter', 'Jackson', 'James', 'Jenkins', 'Jimenez', 'Johnson', 'Johnston', 'Jones', 'Jordan', 'Kelley', 'Kelly', 'Kennedy', 'Kim', 'King', 'Knight', 'Lane', 'Lawrence', 'Lee', 'Lewis', 'Long', 'Lopez', 'Lynch', 'Marshall', 'Martin', 'Mason', 'Matthews', 'Mcdonald', 'Medina', 'Mendoza', 'Meyer', 'Miller', 'Mills', 'Mitchell', 'Moore', 'Morales', 'Morgan', 'Morris', 'Morrison', 'Murphy', 'Murray', 'Nelson', 'Nguyen', 'O\'Brien', 'O\'Connor', 'O\'Doherty', 'O\'Gallagher', 'O\'Moore', 'O\'Neill', 'O\'Quinn', 'O\'Reilly', 'O\'Ryan', 'O\'Sullivan', 'Olson', 'Ortiz', 'Owens', 'Palmer', 'Parker', 'Patel', 'Patterson', 'Payne', 'Perry', 'Phillips', 'Porter', 'Powell', 'Price', 'Ramirez', 'Ramos', 'Reed', 'Reid', 'Reyes', 'Reynolds', 'Rice', 'Richards', 'Richardson', 'Riley', 'Rivera', 'Roberts', 'Robertson', 'Robinson', 'Rodriguez', 'Rogers', 'Romero', 'Rose', 'Ross', 'Ruiz', 'Russell', 'Ryan', 'Sanchez', 'Sanders', 'Scott', 'Shaw', 'Simmons', 'Simpson', 'Smith', 'Snyder', 'Spencer', 'Stephens', 'Stevens', 'Stewart', 'Stone', 'Sullivan', 'Taylor', 'Thomas', 'Thompson', 'Tucker', 'Turner', 'Vasquez', 'Wagner', 'Walker', 'Wallace', 'Walsh', 'Ward', 'Warren', 'Washington', 'Watson', 'Webb', 'Wells', 'West', 'White', 'Williams', 'Willis', 'Wilson', 'Wood', 'Woods', 'Wright', 'Young', 'Trelawney');

            suggestions['first_names'] = new Array('Adib', 'Alan', 'Albert', 'Alexander', 'Alfred', 'Alvin', 'Andrew', 'Angelo', 'Angelus', 'Anil', 'Anthony', 'Anton', 'Anuj', 'Ardal', 'Arlen', 'Augustus', 'Barry', 'Benito', 'Bob', 'Brandan', 'Brendan', 'Brian', 'Bronislaw', 'Bryan', 'Burt', 'Carl', 'Charles', 'Charlie', 'Christian', 'Christophe', 'Christopher', 'Claude', 'Claudius', 'Cliff', 'Cosmo', 'Cristiano', 'Damian', 'Daniel', 'David', 'Dean', 'Denis', 'Dennis', 'Derek', 'Donald', 'Edward', 'Emil', 'Emiliano', 'Emmanuel', 'Ernest', 'Esteban', 'Eugene', 'Farzan', 'Faust', 'Faustino', 'Fernando', 'Freddie', 'Frederick', 'Gary', 'George', 'Gerald', 'Hassan', 'Helge', 'Henry', 'Islay', 'Jakob', 'James', 'Jamil', 'Jenkins', 'Jim', 'Jimi', 'Joe', 'Johnny', 'Joseph', 'Juan', 'Judah', 'Judith', 'Judy', 'Julio', 'Julius', 'Justin', 'Keith', 'Kevin', 'Khalil', 'Laurence', 'Leon', 'Leonardo', 'Lewis', 'Liam', 'Louis', 'Marc', 'Marcello', 'Mario', 'Mark', 'Martin', 'Marvin', 'Matt', 'Matthew', 'Maurice', 'Maximus', 'Melvin', 'Michael', 'Mike', 'Neil', 'Nicholas', 'Nick', 'Nicolas', 'Nigel', 'Norman', 'Oliver', 'Paul', 'Peter', 'Philip', 'Robert', 'Ryan', 'Sean', 'Sebastian', 'Simon', 'Sophus', 'Stephen', 'Steve', 'Stevie', 'Taurus', 'Terika', 'Theodore', 'Tom', 'Tony', 'Tyr', 'Vasiliy', 'Victor', 'Wilhelm', 'William', 'Yaroslav', 'Zlatan', 'Adiba', 'Alaina', 'Alana', 'Alanis', 'Alannah', 'Alberte', 'Alessa', 'Alessandra', 'Sandra', 'Zandra', 'Alfreda', 'Elfreda', 'Freda', 'Elvina', 'Andrea', 'Andreia', 'Andrina', 'Ann', 'Angelina', 'Angela', 'Angie', 'Aniela', 'Anila', 'Antoinette', 'Antonia', 'Antonina', 'Anuja', 'Ardala', 'Arlene', 'Augustina', 'Barrie', 'Benita', 'Bobby', 'Brenda', 'Brenna', 'Briana', 'Brianna', 'Bryna', 'Bronislava', 'Bryany', 'Bertha', 'Carla', 'Carlene', 'Carly', 'Carrie', 'Charlene', 'Charlize', 'Sharlene', 'Christel', 'Christina', 'Kirsti', 'Kristina', 'Kristy', 'Stina', 'Christine', 'Claudette', 'Klaudie', 'Cleva', 'Cosima', 'Cosma', 'Cristina', 'Cristine', 'Damiana', 'Danette', 'Daniela', 'Danielle', 'Danita', 'Dayna', 'Davida', 'Davina', 'Deanna', 'Deeanna', 'Denise', 'Denisa', 'Dericka', 'Donalda', 'Donella', 'Donna', 'Edwarda', 'Emelie', 'Emilia', 'Miliana', 'Emmanuella', 'Emmanuelle', 'Erna', 'Estebana', 'Eugina', 'Genie', 'Farzaneh', 'Faustine', 'Faustina', 'Fernanda', 'Fredrica', 'Fredrika', 'Garyn', 'Georgie', 'Geraldine', 'Jerica', 'Hasna', 'Hella', 'Etta', 'Harriet', 'Hattie', 'Hennie', 'Henrietta', 'Henrika', 'Jetta', 'Isla', 'Jakoba', 'Jaime', 'Jaimi', 'Jamesina', 'Jamia', 'Jamilyn', 'Djamila', 'Jennifer', 'Jemima', 'Jo', 'Janey', 'Janie', 'Fifi', 'Josephe', 'Josephine', 'Posy', 'Juana', 'Judith', 'Judy', 'Jude', 'Julia', 'Giulia', 'Juliana', 'Justeen', 'Justeene', 'Justine', 'Justyne', 'Keitha', 'Kevia', 'Khalila', 'Laurie', 'Leona', 'Leondra', 'Leondrea', 'Leonela', 'Louise', 'Wilhelmina', 'Louella', 'Lovisa', 'Lulu', 'Marcia', 'Celina', 'Marcelina', 'Mary', 'Marcie', 'Martina', 'Martine', 'Marva', 'Marvina', 'Mathilda', 'Mathilde', 'Matilda', 'Matilde', 'Maurisa', 'Maxima', 'Maxine', 'Melissa', 'Michaela', 'Michelle', 'Nelly', 'Nicia', 'Nicole', 'Nicoletta', 'Nicolette', 'Nikol', 'Nikolett', 'Nikolia', 'Nicola', 'Nigella', 'Norma', 'Olivia', 'Paula', 'Paulina', 'Pauline', 'Pavlina', 'Peta', 'Petra', 'Petrina', 'Filippa', 'Philippa', 'Roberta', 'Rihanna', 'Ryana', 'Ryanne', 'Shawna', 'Sebastia', 'Simone', 'Sofia', 'Sophie', 'Stephanie', 'Steph', 'Stephie', 'Taura', 'Teresa', 'Fedora', 'Thea', 'Theodora', 'Tam', 'Tammy', 'Thomasina', 'Toni', 'Thyra', 'Vasilisa', 'Latoya', 'Toya', 'Victorine', 'Vitoria', 'Wilma', 'Guillelmina', 'Yaroslava', 'Zlata', 'Zlatica', 'Sue');

            suggestions['fullnames'] = new Array('Elise Butler', 'Hannah Reid', 'Eddie Lee', 'Lillie Jackson', 'Ibrahim Diaz', 'George Cox', 'Darcy Romero', 'Daisy King', 'Caitlin Snyder', 'Jenna Turner', 'Mollie Cruz', 'Paige Hernandez', 'Sara Bradley', 'Tommy Miller', 'Jackson Tucker', 'Grover Palmer', 'Gabrielle Thomas', 'Skye Roberts', 'Adam Blaese', 'Samantha Black', 'Nicholas Scott', 'Eden Sanders', 'Jade Brown', 'Nannie O\'Moore', 'Madison Lynch', 'Annabelle Cunningham', 'Georgina Chavez', 'Theodore Bailey', 'Rose Fisher', 'William Hall', 'Vincent Smith', 'April Murray', 'Madison Hunter', 'Imogen O\'Sullivan', 'Frank Elliott', 'Sean Jones', 'Omar Murphy', 'Lillie Howard', 'Eleanor Ross', 'Niamh Jenkins', 'Warren Anderson', 'Reuben Price', 'Gabriella Ryan', 'Julia Harrison', 'Matthew Bennett', 'Hugo Gray', 'Chloe Holmes', 'Hassan Hart', 'Michelle Morrison', 'Mohammad Morris', 'Kevin Lawrence', 'Alexander Gibson', 'Dennis Webb', 'Anna Willis', 'Ella Patterson', 'Erin Grant', 'Lydia Graham', 'Poppy Patel', 'Isabella Gonzalez', 'Maxwell Nelson', 'Fraser Dunn', 'Alexandra Ramos', 'Annabel Riley', 'Samantha Gutierrez', 'Holly Brooks', 'Skye Wilson', 'Jamie Mason', 'Hugh Hunt', 'Taylor Stewart', 'Tobias Nguyen', 'Gabriella Kelly', 'Muhammed Sullivan', 'Tilly Hill', 'Marie Freeman', 'Christopher Washington', 'Darcy Richards', 'Jackson Garcia', 'Sadie Allen', 'Mia Warren', 'Harrison Chapman', 'Jade Armstrong', 'Joshua Harris', 'Frank Mitchell', 'Freya White', 'Craig Wells', 'Edward Rogers', 'Lloyd Stevens', 'Matilda O\'Ryan', 'Traci Johnston', 'Tia Reed', 'James Long', 'Sara Mills', 'Rosa Woods', 'Olivia Edwards', 'Charles Green', 'Amy Johnson', 'Morgan James', 'Tegan Perry', 'Maya O\'Gallagher', 'Isobel O\'Quinn', 'Imogen Adams', 'Skye Jordan', 'Declan Kim', 'Leonard Wright', 'Nancy Wagner', 'Margie O\'Brien', 'Alyssa O\'Doherty', 'Christian Duncan', 'Joshua Robertson', 'Tara Bell', 'Casey Alvarez', 'Kayla Reyes', 'Traci Harper', 'Joe Russell', 'Mohammed Davis', 'Kiera Shaw', 'Grover Robinson', 'Katherine Evans', 'Maddison Arnold', 'Tommy Rivera', 'Alexandra Griffin', 'Tommy Kelley', 'Marie Ramirez', 'Ben Hayes', 'Hollie Barnes', 'Tara Carter', 'Fred Ford', 'Roosevelt O\'Neill', 'Kathleen Mcdonald', 'Charley Henderson', 'Christopher Owens', 'Theo Morales', 'Aaliyah Mendoza', 'Joshua Castillo', 'Tommy Jimenez', 'Joel Powell', 'Joel Flores', 'Ibrahim Ferguson', 'Angela Wood', 'Faye Walsh', 'Brooke Cole', 'Jessie Kennedy', 'Leo Gonzales', 'Tommy Medina', 'Michael Rose', 'Lillie Burns', 'Katherine Berry', 'Tara Foster', 'Heather Hughes', 'Charlie Spencer', 'Nathaniel Knight', 'Aisha Phillips', 'Alexander Lopez', 'Gary Watson', 'Joe Taylor', 'Vincent Hudson', 'Layla Gardner', 'Robert O\'Reilly', 'Lois Cooper', 'Adam Reynolds', 'Lloyd Simpson', 'Charley Cook', 'Nicole Dixon', 'Nathaniel Meyer', 'Tristan Walker', 'Joel Sanchez', 'Matilda Payne', 'Liam Campbell', 'Angela Fox', 'Frances Vasquez', 'Daisy Ward', 'Annie Stephens', 'Dewey Ellis', 'Caleb Morgan', 'Zara Marshall', 'Joel Martin', 'Sophia Rice', 'Keira O\'Connor', 'Sadie Matthews', 'Rebecca Lewis', 'Amanda Herrera', 'Sara West', 'Esme Coleman', 'Alfred Rodriguez', 'Maddison Hamilton', 'Marie Gordon', 'Frank Henry', 'Hassan Bryant', 'Lisa Alexander', 'Nannie Ortiz', 'Cerys Baker', 'Zac Hawkins', 'Tegan Stone', 'Casey Lane', 'Luke Wallace', 'Nicole Crawford', 'Esme Williams', 'Evie Porter', 'Abbie Parker', 'April Moore', 'Ellie Simmons', 'Archie Richardson', 'Kevin Clark', 'Eva Olson', 'Sara Ruiz', 'Freya Thompson', 'Olivia Young', 'Fred Bloggs');

            suggestions['name_count'] = new Array('1', '2', '3', '5', '10', '12', '15', '16', '20', '21', '11', '30', '4', '7');

            suggestions['begins_with'] = new Array('A', 'A', 'A', 'S', 'S', 'S', 'M', 'M', 'M', 'K', 'R', 'L', 'T', 'C', 'J', 'E', 'D', 'H', 'N', 'B', '', '', '', '', '', '', '', '', '', '', '', '');

            suggestions['contains'] = new Array('a', 'b', 'a', 's', 's', 's', 'm', 'm', 'c', 'k', 'r', 'l', 't', 'f', 'j', 'e', 'd', 'h', 'n', 'b', '', '', '', '', '', '', '', '', '', '', '', '');

            suggestions['ends_in'] = new Array('a', 'a', 'a', 'a', 'n', 'n', 'n', 'n', 'e', 'e', 'e', 'h', 'i', 'y', 's', 's', 'l', 'r', 'r', 'o', '', '', '', '', '', '', '', '', '', '');
            suggestions['unisex_name'] = new Array(
                'Sam', 'Bob', 'Morgan', 'Jamie', 'Jody', 'Robin', 'Alex', 'Lee', 'Ash'
            );
            suggestions['weapon'] = new Array('knife', 'spoon', 'gun', 'razor', 'blade', 'rope', 'arrow', 'sword', 'pistol', 'rifle', 'paperweight', 'candlestick');
            suggestions['obj_adj'] = new Array(
                'bendy', 'giant', 'tiny', 'stripy', 'spotty', 'warped', 'minuscule', 'peculiar', 'ribbed', 'ripped', 'crumpled', 'tattered', 'solid', 'weathered', 'damp', 'squidgy', 'silver', 'enchanted');
            suggestions['dangerous'] = new Array('murderer', 'demon', 'hand-glider', 'motorbike', 'blade', 'armed robber', 'lion', 'wolf', 'tiger', 'bear', 'barbed wire', 'monster');
            suggestions['planet'] = new Array(
                'Pluto', 'Mars', 'Jupiter', 'Earth', 'Uranus', 'Venus', 'Abydos', 'Saturn', 'Byss', 'Klendathu', 'Ocampa', 'Tatooine', 'Neptune', 'Epsilon Eridani', 'Solaris', 'Dune', 'Dagobah', 'Mooyani', 'Scoboni', 'Lavalulu',
                'Kubasulu', 'Frabenesh');
            suggestions['physical'] = new Array(
                'short', 'tall', 'strong', 'weak', 'muscular', 'puny', 'ugly', 'hot', 'sexy', 'fat',
                'thin', 'slim', 'curvy', 'slender', 'handsome', 'stunning', 'beautiful', 'pale', 'hairy', 'bald', 'porky', 'podgy',
                'grubby', 'scruffy', 'smart', 'flabby'
            );
            suggestions['petnames'] = new Array('Queenie', 'Rover', 'Sootie', 'Scamp', 'Rusty', 'Snowie', 'Tilly', 'Fluffy', 'Cottontail', 'Fuzz', 'Mr Kitten', 'Kitty the Stink', 'Charlie', 'Oscar', 'Alfie', 'Gizmo', 'Millie', 'Poppy', 'Molly', 'Smudge', 'Jasper', 'Tigger', 'Simba', 'Little Lola', 'Max', 'Buster', 'Harvey', 'Daisy', 'Ruby', 'Roxie');

            suggestions['disasters'] = new Array('global warming', 'earthquakes', 'tsunamis', 'volcanic eruptions', 'tidal waves', 'sand storms', 'hurricanes', 'twisters', 'storms');

            suggestions['streets'] = new Array(
                'Seventh Avenue', 'St Luke\'s Terrace', 'Golden Bank Road', 'Market Hill', 'The Old Church Lane', 'Edward\'s Street', 'Greenlane', 'Northern Terrace', 'Regent Street', 'Cowley Lane', 'Manor Hill', 'Oxford Road', 'Iffly Street', 'School Road', 'Hawthorn Avenue');
            suggestions['adjectives'] = new Array(
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
            suggestions['cat_adjectives'] = new Array(
                'great',
                'playful',
                'mischievous',
                'spiffing',
                'stupid',
                'wild',
                'crazy',
                'entertaining',
                'snooty',
                'snobby',
                'superior',
                'offish',
                'haughty',
                'bright',
                'dim',
                'lovable',
                'aloof',
                'amazing',
                'timid',
                'mild',
                'scared',
                'crazy',
                'smelly',
                'scratchy',
                'bright',
                'grubby',
                'clean',
                'muddy',
                'impatient',
                'patient',
                'weird',
                'cool',
                'super',
                'delightful',
                'strong',
                'lonely',
                'quiet',
                'loving',
                'aristocratic',
                'aloof',
                'social',
                'friendly',
                'quiet',
                'loud',
                'funny',
                'impressive',
                'agile',
                'playful',
                'intelligent',
                'inquisitive',
                'persnickety',
                'emotional',
                'watchful',
                'disdainful',
                'interesting',
                'intuitive',
                'sensitive',
                'faithful',
                'loyal',
                'judgmental',
                'bashful',
                'proud',
                'clever',
                'lovable',
                'neurotic',
                'wise',
                'watchful',
                'wonderful'
            );
            suggestions['personadj_pos'] = new Array(
                'sexy',
                'pretty',
                'unique',
                'exciting',
                'jolly',
                'fragrant',
                'clean',
                'amusing',
                'funny',
                'kind',
                'lovable',
                'terrific',
                'super',
                'beautiful',
                'muscular',
                'intelligent',
                'helpful',
                'strong',
                'brave',
                'remarkable',
                'stunning',
                'charming',
                'down to earth',
                'tasty',
                'yummy',
                'optimistic',
                'smart',
                'adorable',
                'slender',
                'generous',
                'loving'
            );
            suggestions['personadj_neg'] = new Array(
                'smelly',
                'pooey',
                'ugly',
                'boring',
                'grumpy',
                'stinky',
                'dirty',
                'grubby',
                'miserable',
                'horrible',
                'rank',
                'rotten',
                'awful',
                'manky',
                'rough',
                'stupid',
                'immoral',
                'jaded',
                'bitter',
                'rude',
                'slimy',
                'lonely',
                'grubby',
                'muddy',
                'greasy',
                'obnoxious',
                'arrogant',
                'freaky',
                'condescending',
                'patronising',
                'interfering',
                'naive'
            );

            suggestions['people_group'] = new Array('cowboys', 'Yankees', 'vikings', 'hotspurs', 'warriors', 'saints', 'raiders', 'buccaneers', 'pirates', 'cardinals', 'angels', 'rangers', 'wanderers', 'giants', 'patriots', 'titans', 'independents', 'dodgers', 'flyers', 'mariners', 'twins', 'senators', 'metropolitans');

            suggestions['common_nats'] = new Array('British', 'American', 'French', 'Australian', 'Canadian', 'Irish', 'New Zealander');
            suggestions['f_title'] = new Array('Miss', 'Ms', 'Mrs', 'Prof', 'Dr', 'Lady');
            suggestions['m_title'] = new Array('Mr', 'Master', 'Dr', 'Lord');
            suggestions['e_title'] = new Array('Dr', 'Prof', 'Mx');

            suggestions['foods'] = new Array('onions, peppers, chillis', 'sugar, butter, eggs', 'squash, aubergine', 'chocolate, sugar', 'coconut, peppers');

            suggestions['flavour'] = new Array(
                'werewolf', 'vampire', 'mermaid', 'wizard', 'angel', 'demon', 'alien', 'ghost', 'loch ness monster', 'phantom cat',
                'goblin', 'pixie', 'unicorn', 'yeti', 'gremlin', 'zombie', 'dragon', 'serpent', 'fairy', 'elf', 'fallen angel',
                'gargoyle', 'siren', 'shape shifter', 'yeti'
            );
            suggestions['vulnerable'] = new Array(
                'old lady',
                'chicken',
                'baby',
                'toddler',
                'old man',
                'kitten',
                'puppy',
                'blind person',
                'deaf person',
                'injured bird',
                'disabled person',
                'baby bird',
                'owl'
            );
            suggestions['firstnames'] = new Array(
                'Jim',
                'Bob',
                'Arthur',
                'Augustus',
                'Violet',
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
            suggestions['pos_character'] = new Array(
                'gentle', 'compassionate', 'modest', 'adorable', 'brave', 'helpful', 'loving', 'special', 'hopeful', 'optimistic', 'charming', 'kind', 'grateful', 'gracious', 'delightful', 'patient', 'generous', 'energetic', 'down to earth', 'admirable', 'friendly', 'smart', 'considerate', 'noble', 'articulate', 'caring', 'intuitive', 'sympathetic', 'clever', 'daring', 'courageous', 'hilarious', 'understanding', 'incredible', 'funny', 'popular', 'virtuous', 'lovable', 'remarkable', 'cute', 'sweet', 'splendid', 'stable', 'witty', 'admirable', 'giving', 'intelligent', 'brave', 'bold'
            );
            suggestions['neg_character'] = new Array('greedy', 'callous', 'selfish', 'spiteful', 'mean', 'cowardly', 'stupid', 'spiteful', 'scheming', 'wild', 'tactless', 'peculiar', 'creepy', 'sinister', 'arrogant', 'proud', 'ruthless', 'cold-blooded', 'smelly', 'vile', 'snotty', 'hungry', 'predatory', 'malicious', 'deranged', 'snooty', 'violent', 'cowardly', 'brutal', 'controlling', 'clumsy', 'forgetful', 'thoughtless', 'stingy', 'rude', 'tight-fisted');

            suggestions['phys_adj'] = new Array('sloppy', 'slimy', 'spiky', 'greasy', 'ginger', 'brunette', 'brown', 'blonde', 'red', 'tall', 'short', 'fat', 'squat', 'chubby', 'skinny', 'pointy', 'scrawny', 'wobbly', 'wide', 'vast', 'solid', 'fragile', 'fluffy', 'hairy', 'grubby', 'dirty', 'moist', 'ugly', 'pretty', 'charming', 'handsome', 'beautiful', 'sticky', 'curvaceous', 'curvy', 'ample', 'ruddy');

            suggestions['phys_adj_pos'] = new Array('pretty', 'charming', 'handsome', 'beautiful', 'sticky', 'curvaceous', 'curvy', 'ample', 'pleasing', 'smooth', 'adorable', 'perfect');
            suggestions['phys_adj_neg'] = new Array('sloppy', 'slimy', 'spiky', 'greasy', 'scrawny', 'wobbly', 'fragile', 'hairy', 'grubby', 'ugly', 'sticky', 'ruddy');

            suggestions['love_adj'] = new Array('passionate', 'sizzling', 'magical', 'tender', 'sensational', 'frantic', 'deep', 'important', 'splendid', 'incredible', 'hot');

            suggestions['nationality'] = new Array('French', 'German', 'English', 'American', 'Japanese', 'Chinese', 'Canadian', 'Australian', 'Irish', 'Scottish', 'Welsh', 'Mexican', 'Spanish', 'Italian', 'Russsian');

            suggestions['bodypart'] = new Array('toes', 'feet', 'hands', 'legs', 'arms', 'lips', 'fingers', 'toenails', 'fingernails', 'eyes', 'elbows', 'fingers', 'eyelashes', 'eyebrows', 'thighs', 'abs', 'ankles', 'spots', 'moles', 'warts');

            suggestions['bodyPartsPlural'] = new Array(
                'arms',
                'legs',
                'lips',
                'ears',
                'teeth',
                'eyes',
                'feet',
                'hairs',
                'eyebrows',
                'fingers',
                'hands',
                'elbows',
                'knees',
                'hips',
                'toes',
                'shoulders',
                'thighs',
                'cheeks',
                'nipples',
                'chins',
                'arm pits',
                'ankles',
                'brains',
                'insides'
            )

            suggestions['tv_character'] = new Array('Mickey Mouse', 'Kermit the Frog', 'Miss Piggy', 'Big Bird', 'Gonzo', 'The Fonz', 'Homer Simpson', 'Marge Simpson', 'Bart Simpson', 'Dale Cooper', 'Tony Soprano', 'Fox Mulder', 'Dana Scully', 'Eric Cartman', 'Captain Kirk', 'Chandler Bing', 'Gob Bluth', 'Frasier Crane', 'Niles Crane', 'Peppa Pig');

            suggestions['criminal'] = new Array('Al Capone', 'Charles Manson', 'Ted Kaczynski', 'Tom Horn', 'Adam Lanza', 'Ted Bundy', 'Jack the Ripper', 'Ronnie Kray', 'Reggie Kray', 'Harold Shipman', 'Darth Vadar', 'Tommy DeVito', 'Keyser Soze', 'Frank Booth', 'Alex DeLarge', 'Norman Bates');

            suggestions['pleasant'] = new Array('roses', 'flowers', 'kittens', 'puppy', 'puppies', 'kitten', 'candy', 'jelly', 'primrose', 'cotton', 'cloud', 'sugar', 'pony', 'love', 'kindness', 'strawberry', 'cherry');

            suggestions['rock_star'] = new Array('Prince', 'Bob Dylan', 'Madonna', 'Elvis Presley', 'Jimi Hendrix', 'David Bowie', 'Paul McCartney', 'Keith Richards', 'Jim Morrison', 'Jarvis Cocker', 'Kurt Cobain', 'Freddie Mercury', 'Liam Gallagher', 'Pete Doherty', 'Ozzy Osbourne', 'Johnny Cash', 'Axl Rose', 'Courtney Love', 'Debbie Harry', 'Rihanna', 'Celine Dion', 'Whitney Houston', 'Taylor Swift', 'Garth Brooks', 'Billy Joel', 'Frank Sinatra', 'Barbra Streisand', 'Kanye West', 'Bruce Springsteen', 'Lady Gaga', 'Justin Bieber', 'Rod Stewart', 'Neil Diamond', 'Paul McCartney', 'Janet Jackson', 'Julio Iglesias', 'Bryan Adams', 'James Taylor', 'Olivia Newton-John', 'Stevie Wonder', 'Barry White', 'George Michael', 'Tom Petty', 'Johnny Hallyday', 'Robbie Williams', 'Bob Marley', 'Mike Posner', 'Rihanna Drake', 'Justin Timberlake', 'James Arhur', 'Alan Walker');

            suggestions['film_star'] = new Array('Brad Pitt', 'Bruce Willis', 'Angelina Jolie', 'Matthew Goode', 'Uma Thurman', 'Nicole Kidman', 'Tom Cruise', 'Ryan Renolds', 'Felicity Jones', 'Simon Pegg', 'Courtney Cox', 'Kevin Spacey', 'James Spader', 'Zach Braff', 'Isla Fisher', 'Carrie Fisher', 'Fred Astaire', 'Humphrey Bogart', 'Marlon Brando', 'James Cagney', 'Charles Chaplin', 'Gary Cooper', 'James Dean', 'Kirk Douglas', 'Henry Fonda', 'Clark Gable', 'Cary Grant', 'William Holden', 'Buster Keaton', 'Gene Kelly', 'Burt Lancaster', 'Robert Mitchum', 'Laurence Olivier', 'Gregory Peck', 'Sidney Poitier', 'Edward Robinson', 'James Stewart', 'Spencer Tracy', 'John Wayne', 'Orson Welles', 'Lauren Bacall', 'Ingrid Bergman', 'Claudette Colbert', 'Joan Crawford', 'Bette Davis', 'Marlene Dietrich', 'Greta Garbo', 'Ava Gardner', 'Judy Garland', 'Lillian Gish', 'Jean Harlow', 'Rita Hayworth', 'Audrey Hepburn', 'Katharine Hepburn', 'Grace Kelly', 'Vivien Leigh', 'Carole Lombard', 'Sophia Loren', 'Marilyn Monroe', 'Mary Pickford', 'Ginger Rogers', 'Barbara Stanwyck', 'Elizabeth Taylor', 'Shirley Temple', 'Mae West', 'Dwayne Johnson', 'Jackie Chan', 'Matt Damon', 'Tom Cruise', 'Johnny Depp', 'Jennifer Lawrence', 'Ben Affleck', 'Vin Diesel', 'Melissa McCarthy', 'Shah Rukh Khan', 'Robert Downey Jr', 'Akshay Kumar', 'Brad Pitt', 'Adam Sandler', 'Mark Wahlberg', 'Salman Khan', 'Leonardo Dicaprio', 'Chris Pratt', 'Scarlett Johansson', 'Will Smith', 'Amitabh Bachchan', 'Jennifer Aniston', 'Matthew McConaughey', 'Fan Bingbing', 'Harrison Ford', 'Charlize Theron', 'Amy Adams', 'Julia Roberts', 'Mila Kunis', 'Deepika Padukone');

            suggestions['sports_star'] = new Array('Zlatan Ibrahimovic', 'Cristiano Ronaldo', 'Muhammad Ali', 'Serena Williams', 'Martina Navratilova', 'Lionel Messi', 'David Beckham', 'Ian Black', 'Ian Botham', 'David Broome', 'Joe Calzaghe', 'Mark Cavendish', 'Christopher Chataway', 'Linford Christie', 'Sebastian Coe', 'Henry Cooper', 'Robin Cousins', 'Steve Cram', 'John Curry', 'Steve Davis', 'Christopher Dean', 'Jonathan Edwards', 'Nick Faldo', 'Andrew Flintoff', 'Brendan Foster', 'Paul Gascoigne', 'Ryan Giggs', 'Lewis Hamilton', 'David Hemery', 'Damon Hill', 'Kelly Holmes', 'Chris Hoy', 'Dorothy Hyman', 'Ann Jones', 'Jim Laker', 'Lennox Lewis', 'Anita Lonsbrough', 'Nigel Mansell', 'Liz McColgan', 'Tony McCoy', 'Barry McGuigan', 'Bobby Moore', 'Stirling Moss', 'Andy Murray', 'Steve Ovett', 'Michael Owen', 'Mary Peters', 'Gordon Pirie', 'Paula Radcliffe', 'Mary Rand', 'Steve Redgrave', 'Dai Rees', 'Greg Rusedski', 'Tom Simpson', 'David Steele', 'Jackie Stewart', 'John Surtees', 'Daley Thompson', 'Zara Tindall', 'Jayne Torvill', 'Virginia Wade', 'Fatima Whitbread', 'Bradley Wiggins', 'Jonny Wilkinson');

            suggestions['car_brand'] = new Array('Mercedes', 'Lamborghini', 'Audi', 'Ferrari', 'Porsche', 'Ford', 'Volkswagen', 'Toyota', 'Chevrolet', 'Honda', 'Nissan', 'Jaguar', 'Cadillac', 'Mazda', 'Bentley', 'Subaru', 'Mustang', 'Volvo', 'Lexus', 'Lotus', 'Maserati', 'Peugeot', 'Vauxhall', 'Skoda', 'Mitsubishi', 'Corvette');

            suggestions['phone_brand'] = new Array('Apple', 'Nokia', 'Motorola', 'Blackberry', 'Google', 'Asus', 'Lenovo', 'Micromax', 'Nexus', 'Panasonic', 'Vivo', 'Microsoft', 'Acer', 'Android', 'Gingerbread', 'Honeycomb', 'Cupcake', 'Donut', 'Eclair', 'Froyo', 'Kitkat', 'Lollipop', 'Marshmallow', 'Nougat', 'Snapchat', 'Instagram', 'Twitter', 'Facebook', 'Tinder', 'Whatsapp');

            suggestions['place'] = new Array('Canada', 'Devon', 'Cornwall', 'London', 'Dubai', 'Wales', 'New York', 'Africa', 'Australia', 'Kent', 'Ireland', 'Scotland');
            suggestions['places'] = new Array(
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
            suggestions['conceived'] = new Array(
                'Venus',
                'England',
                'Scotland',
                'Russia',
                'Paris',
                'Wales',
                'Mars',
                'India',
                'London',
                'Sweden',
                'San Francisco',
                'America',
                'Australia',
                'Japan',
                'Seattle',
                'Tesco\'s',
                'jail',
                'Canada',
                'The North Pole',
                'Lapland',
                'Berlin',
                'Prague',
                'Amsterdam',
                'Brazil',
                'Ireland',
                'Cornwall',
                'France',
                'America',
                'Cardiff',
                'Weston-super-Mare',
                'Devon',
                'Plymouth',
                'Jupiter',
                'Exeter',
                'Sidney',
                'Newton Abbott',
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
            suggestions['country'] = new Array('Canada', 'Devon', 'Cornwall', 'London', 'Wales', 'New York', 'Africa', 'Australia', 'Kent', 'Ireland', 'Scotland');

            suggestions['when'] = new Array(
                'Sunday',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December',
                'spring',
                'summer',
                'autumn',
                'winter',
                'spring',
                'summer',
                'autumn',
                'winter'
            );

            suggestions['verb'] = new Array(
                'singing',
                'kissing',
                'dancing',
                'laughing',
                'swinging',
                'joking',
                'acting',
                'skipping',
                'flying',
                'snuggling',
                'collapsing',
                'walking',
                'running',
                'smiling',
                'punching',
                'kicking',
                'drinking',
                'smoking',
                'loving',
                'munching',
                'bashing',
                'crashing',
                'running',
                'sailing',
                'spinning',
                'working',
                'shouting',
                'smooching',
                'prancing',
                'bouncing',
                'juggling',
                'skipping',
                'daring',
                'complaining'
            );

            suggestions['pretty'] = new Array('flower', 'rose', 'kitten', 'sunset', 'mountain', 'violet', 'lake', 'sunrise', 'dress', 'apron', 'lace', 'eye');

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
            suggestions['animals'] = new Array(
                'kittens',
                'puppies',
                'cats',
                'dogs',
                'monkeys',
                'snakes',
                'bears',
                'rats',
                'gerbils',
                'giraffes',
                'elephants',
                'koalas',
                'humming birds',
                'pigeons',
                'owls',
                'tortoises',
                'toads',
                'tadpols',
                'newts',
                'frogs',
                'mice',
                'ostriches',
                'donkeys',
                'horses',
                'goldfish',
                'guppies',
                'rabbits',
                'hamsters',
                'lizards',
                'maggots',
                'blue bottles',
                'foxes',
                'badgers',
                'butterflies',
                'cockroaches',
                'spiders',
                'blue bottles',
                'monkeys',
                'tigers',
                'lions',
                'goats',
                'hippos',
                'moths'
            );

            suggestions['group'] = new Array(
                'builders',
                'pixies',
                'plumbers',
                'Germans',
                'Americans',
                'zombies',
                'English people',
                'sprites',
                'doctors',
                'jockies',
                'preachers',
                'students',
                'singers',
                'rappers',
                'spacemen',
                'goblins',
                'surgeons',
                'nurses',
                'policemen',
                'firemen',
                'teachers',
                'librarians',
                'footballers',
                'vandals',
                'street artists',
                'painters'
            );

            suggestions['onomatopoeia'] = new Array(
                'crash', 'smash', 'drip', 'boom', 'moo', 'clatter', 'growl', 'mumble', 'chatter'
            );
            suggestions['clothing'] = new Array(
                'tutu', 'trousers', 'hat', 'trilby', 'berret', 'skirt', 'dress', 'tights', 'kilt'
            );
            suggestions['previously'] = new Array(
                'post office', 'bank', 'lighthouse', 'school', 'rectory', 'vicarage', 'woodlands', 'barn', 'corner shop', 'gatehouse', 'police station', 'bakery'
            );

            suggestions['view'] = new Array(
                'meadow', 'orchard', 'lake', 'primrose', 'river', 'sea', 'woodlands'
            );
            suggestions['plant'] = new Array(
                'rose', 'willow', 'apple', 'pear', 'cherry', 'beech', 'fir', 'ivy', 'honeysuckle', 'oak', 'primrose'
            );
            suggestions['weather_adj'] = new Array(
                'windy', 'snowy', 'sunny', 'frosty', 'chilly', 'nippy', 'frozen', 'breezy', 'icy', 'cold', 'sweltering');
            
            suggestions['street'] = new Array(
                'High Street', 'Station Road', 'Church Street', 'Church Lane', 'Mill Lane', 'Church Road', 'Green Lane', 'New Road', 'Park Road', 'School Lane', 'The Crescent', 'The Avenue', 'The Green', 'Victoria Road', 'Queen Street', 'Manor Road', 'Bridge Street', 'Chapel Street', 'Chapel Lane', 'Park Lane', 'Orchard Close', 'King Street', 'Main Street', 'George Street', 'Back Lane', 'West Street', 'Park Avenue', 'North Street', 'New Street', 'Cross Street', 'Victoria Street', 'The Close', 'Grange Road', 'Market Street', 'London Road', 'The Grove', 'South Street', 'School Road', 'Sandy Lane', 'Church Close', 'Meadow Close', 'Mill Road', 'North Road', 'Mill Street', 'John Street', 'Ash Grove', 'The Drive', 'Park Street', 'Castle Street', 'Alexandra Road',
            );
            suggestions['village'] = new Array(
                'Upton', 'Middleton', 'Broughton', 'Milton', 'Sutton', 'Newton', 'Norton', 'Ford', 'Carlton', 'Weston', 'Wootton', 'Marton', 'Linton', 'Ashley', 'Hilton', 'Aston', 'Horton', 'Drayton', 'Newtown', 'Clifton', 'Charlton', 'Compton', 'Easton', 'Preston', 'Whittington', 'Walton', 'Kingswood', 'Buckland', 'Newbridge', 'Thornton', 'Higham', 'Sandford', 'Elton', 'Newbiggin', 'Newport', 'Knowle', 'Newnham', 'Twyford', 'Leigh', 'Brampton', 'Doddington', 'Church End', 'Marston', 'Houghton', 'Littleworth', 'Bishopstone', 'Seaton', 'Murton', 'Stone', 'Kingston',
            );

            suggestions['job'] = new Array(
                'housekeeper', 'doctor', 'author', 'painter', 'homemaker', 'lawyer', 'cleaner', 'nurse', 'gardener', 'teacher', 'actor', 'psychiatrist', 'fishmonger', 'shopkeeper', 'hairdresser', 'computer programmer', 'detective', 'police officer', 'private detective', 'mechanic', 'swordsman', 'scout', 'navigator');
            suggestions['skills'] = new Array(
                'washing dishes', 'cooking', 'saving lives', 'surfing sniffles', 'writing', 'drawing', 'painting', 'looking after people', 'planting trees', 'watering plants', 'resourcefulness', 'intelligence', 'patience', 'bravery', 'diligence', 'kindness', 'leadership', 'teaching', 'acting', 'public speaking', 'selling kippers', 'cutting hair', 'programming computers', 'arresting bad guys', 'investigating crooks', 'fixing cars', 'wielding weapons');
            suggestions['job_help'] = new Array(
                'children', 'old ladies', 'patients', 'readers', 'criminals', 'victims', 'old people', 'consumers', 'clients', 'students', 'viewers', 'women', 'customers', 'disabled people', 'sick children', 'end users', 'the public', 'teenagers', 'blind people', 'vulnerable adults');
            suggestions['passion'] = new Array(
                'dancing', 'life', 'love', 'bird watching', 'trainspotting', 'booze', 'books', 'comedy', 'star gazing', 'kite flying', 'music', 'playing the piano', 'cookery', 'cats', 'making birthday cards', 'food', 'jam doughnuts');

            suggestions['hobby'] = new Array(
                'choir', 'stamp collecting', 'golf', 'reading', 'baking', 'hiking', 'football', 'socialising', 'writing', 'knitting', 'star gazing', 'boxing');

            suggestions['not_afraid_to'] = new Array(
                'speak their mind', 'have a good time', 'be open and honest', 'meet my parents', 'spend time with my friends', 'dance', 'laugh', 'cry', 'be themselves', 'stand up to me');
            suggestions['respected'] = new Array(
                'danger', 'monogamy', 'personal freedom', 'marriage', 'friendship', 'the environment', 'life', 'cars', 'perfection', 'honesty');

            suggestions['vehicle'] = new Array(
                'space rocket', 'car', 'boat', 'lorry', 'van', 'fire engine', 'bicycle', 'tandem', 'scooter', 'motor bike', 'tractor', 'digger', 'truck');
            suggestions['name_of_pet'] = new Array(
                'Rover', 'Max', 'Charlie', 'Buddy', 'Rocky', 'Morgan', 'Alex', 'Bertie', 'Buster', 'Tigger', 'Orea', 'Smokey', 'Gizmo');
            suggestions['activities'] = new Array(
                'sewing', 'painting', 'cycling', 'swimming', 'running', 'writing', 'singing', 'cooking', 'eating', 'drawing', 'parenting', 'travelling', 'quilting', 'knitting', 'baking', 'gaming', 'computing', 'blogging', 'sailing', 'reading', 'texting', 'drumming', 'dancing', 'walking', 'hiking', 'photographing', 'programming', 'coding');
            suggestions['bis_activities'] = new Array(
                'decorating', 'law', 'accounting', 'sewing', 'painting', 'technology', 'web design', 'handywork', 'teaching', 'tutoring', 'catering', 'plumbing', 'fitting', 'building', 'editing', 'fund raising', 'entertainment', 'coding', 'posting', 'mailing', 'delivering', 'advertising', 'coaching', 'sales', 'engineering', 'cleaning', 'advising', 'support', 'care', 'nursing', 'medicine');

            suggestions['colour'] = new Array(
                'red', 'yellow', 'green', 'blue', 'purple', 'pink', 'white', 'cream', 'grey', 'blonde', 'blond', 'ginger', 'black', 'brown');
            
            suggestions['vegetable'] = new Array(
                'carrot', 'potato', 'aubergine', 'courgette', 'cauliflower', 'cabbage', 'parsnip', 'sprout', 'turnip');
            suggestions['special_chars'] = new Array(
                '.-_', '._', '_', '-_');
            suggestions['birth_year'] = new Array(
                '1940', '1950', '1955', '1960', '1963', '1966', '1970', '1973', '1976', '1980', '1982',
                '1984', '1986', '1988', '1990', '1992', '1994', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2010', '2012', '2017');
            suggestions['number'] = new Array(
                'two',
                'three',
                'four',
                'five',
                'ten',
                'a dozen',
                'twenty',
                'one hundred',
                'one thousand',
                'one zillion'
            );

            suggestions['celebrity'] = new Array(
                'Johnny Depp',
                'David Beckham',
                'Donald Trump',
                'Hilary Clintonn',
                'Margaret Thatcher',
                'Paul McCartney',
                'Dustin the Turkey',
                'David Bowie',
                'Jack Duckworth',
                'Cliff Richard',
                'Julie Andrews',
                'J.K. Rowling',
                'Richard Branson',
                'Harold Bishop',
                'Adam Sandler',
                'Brad Pitt',
                'Jack Nicholson',
                'Keanu Reeves',
                'Michael Caine',
                'Orlando Bloom',
                'Will Smith',
                'Tom Cruise',
                'Teri Hatcher',
                'Paris Hilton',
                'Big Bird',
                'Natalie Portman',
                'Kermit the Frog',
                'Kim Kardashian',
                'Anthony Hopkins',
                'Tom Cruise',
                'Rihanna',
                'Yogi Bear',
                'Luke Skywalker',
                'Bart Simpson',
                'Indiana Jones',
                'Robin Hood',
                'Ronald McDonald',
                'George Bush',
                'Tony Blair',
                'Rio Ferdinand',
                'Wayne Rooney',
                'Ricky Gervais',
                'Steve Merchant',
                'James Corden',
                'Stephen Hawking',
                'Richard Dawkins',
                'Boris Johnson',
                'Albert Einstein',
                'Michael Palin',
                'Walter Raleigh',
                'Trevor MacDonald',
                'Stephen Fry'
            );

            suggestions['car_make'] = new Array(
                'Ford',
                'Audi',
                'Rover',
                'Aston Martin',
                'Mini',
                'Morgan',
                'Jaguar',
                'Bentley',
                'Vauxhall',
                'Fiat',
                'Mercedes-Benz',
                'Porche',
                'Opel',
                'Saab',
                'Honda'
            );
            suggestions['all_person'] = suggestions['pos_character'].concat(suggestions['neg_character']).concat(suggestions['phys_adj']);

            return suggestions;
        }

        shuffle = function(o){ 
			for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
			return o;
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
                    if (form.elements[i].name == 'country') {
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
                            <h1>Character Name Generator</h1>
                            <h2>Generate Character Names Within A Click</h2>
                            <p>Generate the perfect character names with NameGenerator-Engine's Character Name Generator tool by specifying the gender, title, flavour, character type, and nationality. This tool helps you generate interesting and unique names.</p>
                        </div>
                    </div>
                </div>
            </section>

                <div class="container">
                    <div class="row">
                        <div class="col-8 pt-5">
                        <?php if($this->session->flashdata('message_success')) {
                                                              echo "<div class='alert alert-success'>".$this->session->flashdata('message_success')."<button class='close' data-dismiss='alert'>x</div>";
                                                        } ?>
                        </div>
                    </div>
                </div>
        

            <!-- Form section -->
            <section class="form-sec pb-5 ">
                <div class="container">
                   <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mb-4">
                            <div class="white-box">
                                <h4>Fill the Form</h4>
                                <button type="button" class="btn mb-4 btn-custom" onclick="fillAll()" id="fill_all">fill Randomly</button>
                                <form action="<?= base_url('Charactername/getNames') ?>" method="post" name="form">
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <label>How many examples would you like to generate?</label>
                                            <input type="number" name="num" min="1" class="form-custom col-6" max="100" value="5">
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label>Which gender would you like?</label>
                                            <select class="form-control select" name="gender" id="gender">
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label>Title</label>
                                            <select name="title" id="" class="form-control select">
                                                <option value="">Choose Title </option>
                                                <option value="Ms">Ms</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Mx">Mx</option>
                                                <option value="Master">Master</option>
                                                <option value="Dr">Dr</option>
                                                <option value="Prof">Prof</option>
                                                <option value="P.C.">P.C.</option>
                                                <option value="D.C.">D.C.</option>
                                                <option value="D.C.I.">D.C.I.</option>
                                                <option value="Sir">Sir</option>
                                                <option value="Rev">Rev</option>
                                                <option value="Rabbi">Rabbi</option>
                                                <option value="Imam">Imam</option>
                                                <option value="Lord">Lord</option>
                                                <option value="Lady">Lady</option>
                                                <option value="Dame">Dame</option>
                                                <option value="Madame">Madame</option>
                                                <option value="Mistress">Mistress</option>
                                                <option value="Queen">Queen</option>
                                                <option value="King">King</option>
                                                <option value="Prince">Prince</option>
                                                <option value="Princess">Princess</option>
                                                <option value="Count">Count</option>
                                                <option value="Countess">Countess</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label>Flavour</label>
                                            <select class="form-control select" name="flavour">
                                                <option value="human">human</option>
                                                <option value="zombie">zombie</option>
                                                <option value="vampire">vampire</option>
                                                <option value="witch/wizard">witch/wizard</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label>What type of character He/She?</label>
                                            <select class="form-control select" name="character">
                                                <option value="">show all</option>
                                                <option value="leader">great leader</option>
                                                <option value="poetic">poetic</option>
                                                <option value="virtuous">virtuous</option>
                                                <option value="evil">evil</option>
                                            </select>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label>Nationality?</label>
                                            <select class="form-control select" name="country" id="country">
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
                                        echo "<p>".$title.' '.ucwords($value['name'])."</pre>";                                               
                                    }
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