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
                                                          (string)
                                                          <input type="hidden" name="table" value="userNameStrings">
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