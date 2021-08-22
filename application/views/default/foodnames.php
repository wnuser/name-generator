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
                                                          (name, typeoffood, country, lifestyle )
                                                          <input type="hidden" name="table" value="foodNames">

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
                                                        <h5>Food  Name form</h5>
                                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                        <?php if($this->session->flashdata('message_success')) {
                                                              echo "<div class='alert alert-success'>".$this->session->flashdata('message_success')."<button class='close' data-dismiss='alert'>x</div>";
                                                        } ?>
                                                    </div>
                                                    <div class="card-block">
                                                        <form id="main" method="post" action="<?= base_url('InsertController/insertData') ?>" novalidate>
                                                            <input type="hidden" value="foodNames" name="table">
                                                            <?php   $current_url = current_url(); 
                                                                    $arr = explode('/', $current_url);
                                                                    $url = $arr['4']; 
                                                            ?>
                                                            <input type="hidden" value="<?=$url?>" name="url">

                                            
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Type of Food </label>
                                                                <div class="col-sm-10">

                                                                 <select name="typeoffood" id="" class="form-control">
                                                                     <option value="Starters">Starters</option>
                                                                     <option value="Main Meals">Main Meals</option>
                                                                     <option value="Puddings">Puddings</option>
                                                                     <option value="Snacks">Snacks</option>
                                                                 </select>

                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Type of Food </label>
                                                                <div class="col-sm-10">

                                                                 <select name="lifestyle" id="" class="form-control">
                                                                     <option value="Vegan">Vegan</option>
                                                                     <option value="Vegetarian">Vegetarian</option>
                                                                     <option value="Meat eater">Meat eater</option>
                                                                 </select>

                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select ingredients</label>
                                                                <div class="col-sm-10">
                                                                    <select name="ingredients" class="form-control" id="">
                                                                    <option value=""></option>
                                                                    <option value="allspice">allspice</option>
                                                                    <option value="almond">almond</option>
                                                                    <option value="almond milk">almond milk</option>
                                                                    <option value="anchovy">anchovy</option>
                                                                    <option value="angelica">angelica</option>
                                                                    <option value="anise">anise</option>
                                                                    <option value="aniseed">aniseed</option>
                                                                    <option value="apple">apple</option>
                                                                    <option value="apricot">apricot</option>
                                                                    <option value="arrowroot">arrowroot</option>
                                                                    <option value="artichoke">artichoke</option>
                                                                    <option value="asafoetida">asafoetida</option>
                                                                    <option value="aubergine">aubergine</option>
                                                                    <option value="avocado">avocado</option>
                                                                    <option value="bacon">bacon</option>
                                                                    <option value="baking soda">baking soda</option>
                                                                    <option value="banana">banana</option>
                                                                    <option value="barley">barley</option>
                                                                    <option value="basil">basil</option>
                                                                    <option value="bay leaf">bay leaf</option>
                                                                    <option value="bean">bean</option>
                                                                    <option value="beef">beef</option>
                                                                    <option value="beef stock">beef stock</option>
                                                                    <option value="beetroot">beetroot</option>
                                                                    <option value="bergamot">bergamot</option>
                                                                    <option value="bilberry">bilberry</option>
                                                                    <option value="bison">bison</option>
                                                                    <option value="black pepper">black pepper</option>
                                                                    <option value="black pudding">black pudding</option>
                                                                    <option value="blackberry">blackberry</option>
                                                                    <option value="blackcurrant">blackcurrant</option>
                                                                    <option value="blueberry">blueberry</option>
                                                                    <option value="boar">boar</option>
                                                                    <option value="bocconcini">bocconcini</option>
                                                                    <option value="bok choi">bok choi</option>
                                                                    <option value="bouquet garni">bouquet garni</option>
                                                                    <option value="boysenberry">boysenberry</option>
                                                                    <option value="bran">bran</option>
                                                                    <option value="breadfruit">breadfruit</option>
                                                                    <option value="bresaola">bresaola</option>
                                                                    <option value="brie">brie</option>
                                                                    <option value="brill">brill</option>
                                                                    <option value="brisket">brisket</option>
                                                                    <option value="broccoli">broccoli</option>
                                                                    <option value="buckwheat">buckwheat</option>
                                                                    <option value="buckwheat flour">buckwheat flour</option>
                                                                    <option value="buffalo">buffalo</option>
                                                                    <option value="bulgur wheat">bulgur wheat</option>
                                                                    <option value="butter">butter</option>
                                                                    <option value="butterbean">butterbean</option>
                                                                    <option value="buttermilk">buttermilk</option>
                                                                    <option value="cabbage">cabbage</option>
                                                                    <option value="caerphilly">caerphilly</option>
                                                                    <option value="cajun seasoning">cajun seasoning</option>
                                                                    <option value="calamari">calamari</option>
                                                                    <option value="camembert">camembert</option>
                                                                    <option value="candied peel">candied peel</option>
                                                                    <option value="cannellini">cannellini</option>
                                                                    <option value="canola oil">canola oil</option>
                                                                    <option value="caper">caper</option>
                                                                    <option value="caramel">caramel</option>
                                                                    <option value="caramel sauce">caramel sauce</option>
                                                                    <option value="caraway">caraway</option>
                                                                    <option value="caraway seed">caraway seed</option>
                                                                    <option value="cardamom">cardamom</option>
                                                                    <option value="carob">carob</option>
                                                                    <option value="cashew">cashew</option>
                                                                    <option value="cassia bark">cassia bark</option>
                                                                    <option value="cauliflower">cauliflower</option>
                                                                    <option value="caviar">caviar</option>
                                                                    <option value="cayenne pepper">cayenne pepper</option>
                                                                    <option value="celeriac">celeriac</option>
                                                                    <option value="celery">celery</option>
                                                                    <option value="chaat masala">chaat masala</option>
                                                                    <option value="chamomile">chamomile</option>
                                                                    <option value="chard">chard</option>
                                                                    <option value="cheddar">cheddar</option>
                                                                    <option value="cheddar cheese">cheddar cheese</option>
                                                                    <option value="cheese">cheese</option>
                                                                    <option value="cherry tomato">cherry tomato</option>
                                                                    <option value="chervil">chervil</option>
                                                                    <option value="cheshire cheese">cheshire cheese</option>
                                                                    <option value="chestnut">chestnut</option>
                                                                    <option value="chicken">chicken</option>
                                                                    <option value="chicken stock">chicken stock</option>
                                                                    <option value="chickpea">chickpea</option>
                                                                    <option value="chickpea flour">chickpea flour</option>
                                                                    <option value="chicory">chicory</option>
                                                                    <option value="chili powder">chili powder</option>
                                                                    <option value="chilli">chilli</option>
                                                                    <option value="chilli oil">chilli oil</option>
                                                                    <option value="chilli powder">chilli powder</option>
                                                                    <option value="chilli sauce">chilli sauce</option>
                                                                    <option value="chinese cabbage">chinese cabbage</option>
                                                                    <option value="chocolate">chocolate</option>
                                                                    <option value="chorizo">chorizo</option>
                                                                    <option value="cider vinegar">cider vinegar</option>
                                                                    <option value="cinnamon">cinnamon</option>
                                                                    <option value="clementine ">clementine </option>
                                                                    <option value="cockle">cockle</option>
                                                                    <option value="cocoa">cocoa</option>
                                                                    <option value="coconut">coconut</option>
                                                                    <option value="coconut cream">coconut cream</option>
                                                                    <option value="coconut milk">coconut milk</option>
                                                                    <option value="coconut oil">coconut oil</option>
                                                                    <option value="cod">cod</option>
                                                                    <option value="coffee">coffee</option>
                                                                    <option value="condensed milk">condensed milk</option>
                                                                    <option value="coriander">coriander</option>
                                                                    <option value="coriander seed">coriander seed</option>
                                                                    <option value="corn">corn</option>
                                                                    <option value="corn oil">corn oil</option>
                                                                    <option value="corned beef">corned beef</option>
                                                                    <option value="cornflour">cornflour</option>
                                                                    <option value="cornmeal">cornmeal</option>
                                                                    <option value="cornstarch">cornstarch</option>
                                                                    <option value="cottage cheese">cottage cheese</option>
                                                                    <option value="courgette">courgette</option>
                                                                    <option value="crab">crab</option>
                                                                    <option value="cranberry">cranberry</option>
                                                                    <option value="crayfish">crayfish</option>
                                                                    <option value="cream">cream</option>
                                                                    <option value="cream cheese">cream cheese</option>
                                                                    <option value="cream of tartar">cream of tartar</option>
                                                                    <option value="creamed coconut">creamed coconut</option>
                                                                    <option value="creme fraiche">creme fraiche</option>
                                                                    <option value="cucumber">cucumber</option>
                                                                    <option value="cumin">cumin</option>
                                                                    <option value="cumin seed">cumin seed</option>
                                                                    <option value="curd cheese">curd cheese</option>
                                                                    <option value="curly kale">curly kale</option>
                                                                    <option value="currant">currant</option>
                                                                    <option value="curry leaf">curry leaf</option>
                                                                    <option value="custard">custard</option>
                                                                    <option value="cuttlefish">cuttlefish</option>
                                                                    <option value="daikon">daikon</option>
                                                                    <option value="dark chocolate">dark chocolate</option>
                                                                    <option value="date">date</option>
                                                                    <option value="dill">dill</option>
                                                                    <option value="dolcelatte">dolcelatte</option>
                                                                    <option value="dragon fruit">dragon fruit</option>
                                                                    <option value="duck">duck</option>
                                                                    <option value="duck fat">duck fat</option>
                                                                    <option value="durum wheat flour">durum wheat flour</option>
                                                                    <option value="edam">edam</option>
                                                                    <option value="eel">eel</option>
                                                                    <option value="egg">egg</option>
                                                                    <option value="elderberry">elderberry</option>
                                                                    <option value="elderflower">elderflower</option>
                                                                    <option value="emmental">emmental</option>
                                                                    <option value="emu">emu</option>
                                                                    <option value="evaporated milk">evaporated milk</option>
                                                                    <option value="falafel">falafel</option>
                                                                    <option value="fennel">fennel</option>
                                                                    <option value="fennel seed">fennel seed</option>
                                                                    <option value="fenugreek">fenugreek</option>
                                                                    <option value="feta">feta</option>
                                                                    <option value="filo pastry">filo pastry</option>
                                                                    <option value="fish">fish</option>
                                                                    <option value="fish sauce">fish sauce</option>
                                                                    <option value="flaxseed">flaxseed</option>
                                                                    <option value="flaxseed oil">flaxseed oil</option>
                                                                    <option value="flour">flour</option>
                                                                    <option value="fontina cheese">fontina cheese</option>
                                                                    <option value="food colouring">food colouring</option>
                                                                    <option value="freekeh">freekeh</option>
                                                                    <option value="galangal">galangal</option>
                                                                    <option value="game">game</option>
                                                                    <option value="gammon">gammon</option>
                                                                    <option value="garam masala">garam masala</option>
                                                                    <option value="garlic">garlic</option>
                                                                    <option value="gherkin">gherkin</option>
                                                                    <option value="ginger">ginger</option>
                                                                    <option value="ginger beer">ginger beer</option>
                                                                    <option value="glucose">glucose</option>
                                                                    <option value="goat">goat</option>
                                                                    <option value="goat cheese">goat cheese</option>
                                                                    <option value="goji berry">goji berry</option>
                                                                    <option value="golden syrup">golden syrup</option>
                                                                    <option value="goose">goose</option>
                                                                    <option value="goose fat">goose fat</option>
                                                                    <option value="gorgonzola">gorgonzola</option>
                                                                    <option value="gram flour">gram flour</option>
                                                                    <option value="granola">granola</option>
                                                                    <option value="grapefruit">grapefruit</option>
                                                                    <option value="grapeseed oil">grapeseed oil</option>
                                                                    <option value="green cabbage">green cabbage</option>
                                                                    <option value="green tea">green tea</option>
                                                                    <option value="grouse">grouse</option>
                                                                    <option value="gruyere">gruyere</option>
                                                                    <option value="guava">guava</option>
                                                                    <option value="guinea fowl">guinea fowl</option>
                                                                    <option value="haddock">haddock</option>
                                                                    <option value="hake">hake</option>
                                                                    <option value="halibut">halibut</option>
                                                                    <option value="halloumi">halloumi</option>
                                                                    </select>
                                                                    <span class="messages"></span>
                                                                </div>
                                                            </div>
                                        


                                                            
 
                                                           
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="password" name="name" placeholder="Enter  Name">
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