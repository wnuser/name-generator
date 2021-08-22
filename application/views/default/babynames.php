<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Admindek | Admin Template</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

</head>

<body>


  
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php   include "asset/header.php"; ?>
                <?php   include "asset/sidebar.php"; ?>

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-clipboard bg-c-blue"></i>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                       
                                            <li class="breadcrumb-item">
                                                <a href="#!">View All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">


                                        <div class="card">
                                            <div class="card-header">
                                                  <h5>Upload all Names By CSV</h5>
                                            </div>
                                            <div class="card-block">
                                            <?php if($this->session->flashdata('success')) {
                                                              echo "<div class='alert alert-success'>".$this->session->flashdata('success')."<button class='close' data-dismiss='alert'>x</div>";
                                                   } ?>
                                                 <form action="<?=base_url('UploadCsv/index')?>" enctype="multipart/form-data" method="POST">
                                                     <div class="form-group row">
                                                          <label for="" class="col-sm-2 col-form-label">Choose csv File  </label>
                                                          <div class="col-sm-10">
                                                          <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
                                                          (gender, religion, country, name)
                                                          <input type="hidden" name="table" value="babyNames">
                                                          <?php   $current_url = current_url(); 
                                                                    $arr = explode('/', $current_url);
                                                                    $url = $arr['4']; 
                                                            ?>
                                                            <input type="hidden" value="<?=$url?>" name="url">
                                                          </div>
                                                     </div>
                                                     <div class="form-group row">
                                                       <label for="" class="col-2"></label>
                                                       <div class="col-10">
                                                       <button class="btn btn-primary m-b-0">submit</button>

                                                       </div>
                                                     </div>
                                                 </form>
                                            </div>
                                        </div> 

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Baby Name form</h5>
                                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                        <?php if($this->session->flashdata('message_success')) {
                                                              echo "<div class='alert alert-success'>".$this->session->flashdata('message_success')."<button class='close' data-dismiss='alert'>x</div>";
                                                        } ?>
                                                    </div>
                                                    <div class="card-block">
                                                        <form id="main" method="post" action="<?= base_url('InsertController/insertData') ?>" novalidate>
                                                            <input type="hidden" value="babyNames" name="table">
                                                            <?php   $current_url = current_url(); 
                                                                    $arr = explode('/', $current_url);
                                                                    $url = $arr['4']; 
                                                            ?>
                                                            <input type="hidden" value="<?=$url?>" name="url">
                
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Gender</label>
                                                                <div class="col-sm-10">
                                                                    <select name="gender" class="form-control" id="">
                                                                        <option value="1">Male</option>
                                                                        <option value="2">Female</option>
                                                                        <option value="3">Unisex</option>
                                                                    </select>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter  Surname</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="password" name="surname" placeholder="Surname">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Your first  name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="password" name="yourfirstname" placeholder="first  name">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Begin With</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="password" name="begingwith" placeholder="Beging with">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter religion</label>
                                                                <div class="col-sm-10">
                                                                    <select name="religion" class="form-control">
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
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Name of favorate film star</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="password" name="filmstar" placeholder="Enter a Name">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">select Country</label>
                                                                <div class="col-sm-10">
                                                                    <select name="country" class="form-control">

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
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Name </label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="password" name="name" placeholder="Enter a Name">
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>

                                        
                                                            

                                                          
                                                            <div class="form-group row">
                                                                <label class="col-sm-2"></label>
                                                                <div class="col-sm-10">
                                                                    <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="styleSelector">
                    </div>
        </div>
    </div>
    </div>
    </div>

    <?php include "asset/footer.php"; ?>
</body>

<!-- Mirrored from colorlib.com//polygon/admindek/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2019 16:39:07 GMT -->

</html>