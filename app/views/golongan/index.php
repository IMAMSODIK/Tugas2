<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Administrator | PLN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="layouts/assets/images/pln.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="layouts/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="layouts/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="layouts/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="layouts/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="admin" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-warning"><img src="layouts/assets/images/pln.png" alt="" srcset="" style="width:35px !important;"> PLN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="layouts/assets/images/admin.png" alt="" style="width: 50px; height: 50px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">
                        <?php echo $_SESSION['user_nama']; ?>
                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin" class="nav-item nav-link" ><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="golongan" class="nav-item nav-link active"><i class="fa fa-th-large me-2"></i>Golongan</a>
                    <a href="pelanggan" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Pelanggan</a>
                    <a href="laporan_admin" class="nav-item nav-link"><i class="fa fa-newspaper me-2"></i>Laporan</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-warning mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4" action="golongan/cariData" method="post">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search" name="txtcari" value="cari">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Pesan</span>
                        </a>
                        <!-- <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div> -->
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Pemberitahuan</span>
                        </a>
                        <!-- <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div> -->
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="layouts/assets/images/admin.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">
                            <?php echo $_SESSION['user_nama']; ?>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Profil Ku</a>
                            <a href="#" class="dropdown-item">Pengaturan</a>
                            <a href="login" class="dropdown-item">Keluar</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            
            <div class="col-12">   
            <div class="bg-secondary rounded h-100 p-4">
                <h5 class="m-0 text-light">Golongan Pelanggan</h5>
                        <button type="button" class="btn btn-warning mb-2" style="margin-left:1050px !important;" data-bs-toggle="modal" data-bs-target="#tambahgolongan"><i class="fa fa-fw fa-plus"></i> Tambah Golongan</button>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col" style="text-align:center !important;">Kode Golongan</th>
                                            <th scope="col">Nama Golongan</th>
                                            <th scope="col" style="text-align:center !important;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 0;
                                    foreach ($data['row_index'] as $row){
                                        $no++;
                                        echo"
                                    <tbody>
                                        <tr>
                                            <th>$no</th>
                                            <td style='text-align:center !important;'>$row[gol_kode]</td>
                                            <td>$row[gol_nama]</td>
                                            <td style='text-align:center !important;'>
                                            <a href='#' data-bs-toggle='modal' data-bs-target='#editGolongan_$no' class='btn btn-info' style='width:100px !important;'><i class='fa fa-paper-plane'></i> Edit</a> 
                                            <a href='".URL."/golongan/hapusGolongan/$row[gol_id]' class='btn btn-warning' style='width:100px !important;'><i class='fa fa-trash'></i> Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody> 
                                            <div class='modal fade' id='editGolongan_$no' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content bg-secondary'>
                                                    <form action='Golongan/editGolongan' method='post' enctype='multipart/form-data'>
                                                        <div class='modal-header'>
                                                            <h5 class='modal-title text-warning' id='exampleModalLabel'>Golongan | PLN</h5>
                                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <div class='mb-3'>
                                                                <label for='gol_kode' class='form-label text-warning' style='text-align:left !important;'>Kode Golongan</label>
                                                                <input type='hidden' class='form-control' id='gol_id' name='gol_id' value='$row[gol_id]'>
                                                                <input type='text' class='form-control' id='gol_kode' name='gol_kode' value='$row[gol_kode]'>
                                                            </div>
                                                            <div class='mb-3'>
                                                            <label for='golongan' class='form-label text-warning'>Golongan</label>
                                                            <select class='form-select' aria-label='Default select example' name='gol_nama' id='gol_nama'>
                                                                <option>-Pilih Golongan-</option>
                                                                ";
                                                                if($row['gol_nama'] == 'Pascabayar'){
                                                                echo "
                                                                    <option value='Pascabayar' selected>Pascabayar</option>
                                                                    <option value='Prabayar'>Prabayar</option>
                                                                ";
                                                                }
                                                                elseif($row['gol_nama'] == 'Prabayar'){
                                                                    echo "
                                                                    <option value='Pascabayar'>Pascabayar</option>
                                                                    <option value='Prabayar' selected>Prabayar</option>
                                                                    ";
                                                                }
                                                                else{
                                                                echo"
                                                                    <option value='Pascabayar'>Pascabayar</option>
                                                                    <option value='Prabayar'>Prabayar</option>
                                                                    ";
                                                                }
                                                                echo "
                                                            </select>
                                                            </div>
                                                        </div>
                                                            <div class='modal-footer'>
                                                                <button type='button' class='btn btn-info' data-bs-dismiss='modal'>Batal</button>
                                                                <input class='btn btn-warning' type='submit' name='Golongan/editGolongan' value='Update'>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                                     
                                    
                                </div>
                            </div>
                        </div>
                        ";
                    }
                    ?>
                        </table>
                        
          
            <!-- start modal input -->
            <div class="modal fade" id="tambahgolongan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-secondary">
                        <form action="Golongan/saveGolongan" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title text-warning" id="exampleModalLabel">Golongan | PLN</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="gol_kode" class="form-label text-warning">Kode Golongan</label>
                                    <input type="text" class="form-control" id="gol_kode" name="gol_kode">
                                </div>
                                <div class="mb-3">
                                <label for="golongan" class="form-label text-warning">Golongan</label>
                                <select class="form-select" aria-label="Default select example" name="gol_nama" id="gol_nama">
                                    <option selected>-Pilih Golongan-</option>
                                    <option>Pascabayar</option>
                                    <option>Prabayar</option>
                                </select>
                                </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Batal</button>
                                    <input class="btn btn-warning" type="submit" name="Golongan/saveGolongan" value="Simpan">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal input -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="https://www.facebook.com/rizky.a.situmeang.3">Rizky Akbar</a>, All Right Reserved. 
                        </div>
                        <!-- <div class="col-12 col-sm-6 text-center text-sm-end"> -->
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="layouts/assets/lib/chart/chart.min.js"></script>
    <script src="layouts/assets/lib/easing/easing.min.js"></script>
    <script src="layouts/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="layouts/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="layouts/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="layouts/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="layouts/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="layouts/assets/js/main.js"></script>
</body>

</html>