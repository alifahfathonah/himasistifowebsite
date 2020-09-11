<!DOCTYPE html>
<html lang="en">
<title>Halaman Ubah Foto Profile Kabinet - HIMASISTIFO</title>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <link rel="shortcut icon" href="<?php echo base_url('assetshz/images/si.png')?>">

    <?php
    $this->load->view('etcdashboard/css');
    ?>
        
</head>

<body>
<div class="wrapper">
        <?php
        $this->load->view('etcdashboard/header');
        ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-12">
                                    <h4 class="page-title text-center">Formulir Ubah Foto Profile Kabinet</h4>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="m-b-30">
                                        <?php echo form_open_multipart('ProfileKabinet/ubahfoto');?>
                                        <input type="hidden" name="id" class="form-control form-control-user" 
                                        value="<?php if(isset($profilekabinet->id)){echo $profilekabinet->id;}?>">
                                        <div class="form-group">
                                        <label>Foto Sebelumnya : </label><br>
                                        <img src="<?php echo base_url('upload/profilekabinet/'); echo $profilekabinet->nama_foto?>" widht="800" height="600">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="file" name="nama_foto">
                                        </div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Kirim</button>
                                        <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->  

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- content -->
        <?php
        $this->load->view('etc/footer');
        ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <?php
    $this->load->view('etcdashboard/js');
    ?>
</body>
</html>