<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/form/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/form/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7 mx-auto">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class=""></div>
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan isi data berikut</h1>
                                    </div>
                                  

                                   
                                        <div class="form-group">
                                            <input type="nama" class="form-control form-control-user"
                                                id="namacust" 
                                                
                                                placeholder="Nama" name="namacust">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" placeholder="Email">
                                        </div>
                                        
                                        <div></div>
                                        <div class="form-group">
                                            <input type="JumlahTiket" class="form-control form-control-user"
                                                id="JumlahTiket" name="JumlahTiket" placeholder="Jumlah Tiket">
                                        </div>
                                        <tr>
                                        <td>Hari Ke </td>
                                        <td>:</td>
                                        <td><select name="jenis">
                                        <option>--Pilih--</option>
                                        <option>24 Agustus</option>
                                        <option>25 Agustus</option>
                                        </select>
                                        </tr>
                                        
                                        <a href="<?php echo base_url() . "welcome/formorderout" ?>">Submit </a>
                                            
                                        </a>
                                        
                                        
                                    </form>
                                    <hr>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

      <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/form/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/form/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/form/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/form/js/sb-admin-2.min.js')?>"></script>

</body>

</html>