<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Admin | Hotel Ashirwad</title>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= base_url('files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/pages/data-table/css/buttons.dataTables.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>">

</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php  include "asset/header.php"; ?>
                <?php  include "asset/sidebar.php";  ?>

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-inbox bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>All Reviews</h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <!-- <li class="breadcrumb-item">
                                                <a href="<?=  base_url('/admin') ?>"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="<?= base_url('/admin/cabs')  ?>">Insert Cabs</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#">All Cabs</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">

                                        <div class="card">
                                            <div class="card-header">
                                                <h5> Review</h5>
                                            </div>
                                            <!-- Button to Open the Modal -->

                                            <div class="card-block">

                                                <div class="table-responsive dt-responsive">
                                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Sr No.</th>
                                                                <th>Name</th>
                                                                <th>Age</th>
                                                                <th>Email</th>
                                                                <th>Star</th>
                                                                <th>Review</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($data as $key => $value) {
                                                                $count = 1;
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $count++ ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $value['name'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $value['age'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $value['email'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $value['star'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $value['review'] ?>
                                                                    </td>


                                                                </tr>
                                                                <?php
                                                            } ?>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                                        </tbody>

                                                    </table>
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
    </div>
    </div>

    <?php  include "asset/datatablelinks.php"; ?>
</body>

</html>