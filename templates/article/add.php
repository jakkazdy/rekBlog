<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Strona główna</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL_SITE;?>/rescure/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL_SITE;?>/rescure/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Rek<sup>Blog</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo URL_SITE;?>/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Blog</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>
            <?php
                if(isset($_SESSION['logged']) AND $_SESSION['logged']==TRUE){
            ?>
            <!-- Nav Item - User -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_SITE;?>/article/add">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dodaj wpis</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_SITE;?>/logout">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Wyloguj</span></a>
            </li>

            <?php
                }else{
            ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_SITE;?>/login">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Logowanie</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_SITE;?>/register">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Rejestracja</span></a>
            </li>

            <?php
                }
            ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- End of Topbar -->
                <hr>
                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Blog</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">


                        <div class="col-lg-12 mb-4">

                            <!-- Blog -->
                            
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" class="form-group">
                                    Dodaj artykułu
                                </div>
                            </div>
                            <form method="POST">
                                <div class="card shadow mb-4 p-3">
                                    <div class="col-ms-6 py-3" class="form-group">
                                        Tytuł:
                                    </div>
                                    <div class="col-ms-6 py-3" class="form-group">
                                        <input type="text" name="title" value="" class="articleData">
                                    </div>
                                    <div class="col-ms-6 py-3" class="form-group">
                                        Opis:
                                    </div><div class="col-ms-6 py-3" class="form-group">
                                        <textarea name="description" class="articleData"></textarea>
                                    </div>
                                    <div class="col-ms-6 py-3" class="form-group">
                                        Status:
                                    </div>
                                    <div class="col-ms-6 py-3" class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="2" name="status">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            Usuń
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="0" name="status">
                                          <label class="form-check-label" for="flexCheckDefault">
                                            Ukryty
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="1" name="status" checked>
                                          <label class="form-check-label" for="flexCheckChecked">
                                            Aktywny
                                          </label>
                                        </div>
                                    </div>
                                    <div class="col-ms-12 py-3" class="form-group">
                                        <button class="btn btn-success">Zapisz</button>
                                    </div>
                                </div>
                            </form>
                            

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL_SITE;?>/rescure/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL_SITE;?>/rescure/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL_SITE;?>/rescure/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo URL_SITE;?>/rescure/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo URL_SITE;?>/rescure/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo URL_SITE;?>/rescure/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo URL_SITE;?>/rescure/js/demo/chart-pie-demo.js"></script>

</body>

</html>