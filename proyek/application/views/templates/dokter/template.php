<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dokter Jamil</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/';?>plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="<?php echo base_url().'assets/';?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- NProgress -->
    <link href="<?php echo base_url().'assets/';?>plugins/nprogress/nprogress.css" rel="stylesheet" type="text/css">
    <!-- iCheck -->
    <link href="<?php echo base_url().'assets/';?>plugins/iCheck/skins/flat/green.css" rel="stylesheet" type="text/css">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url().'assets/';?>plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" type="text/css">
    <!-- JQVMap -->
    <link href="<?php echo base_url().'assets/';?>plugins/jqvmap/dist/jqvmap.min.css" rel="stylesheet" type="text/css">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url().'assets/';?>plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">

    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url().'assets/';?>plugins/google-code-prettify/bin/prettify.min.css" rel="stylesheet" type="text/css">
    <!-- Select2 -->
    <link href="<?php echo base_url().'assets/';?>plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
    <!-- Switchery -->
    <link href="<?php echo base_url().'assets/';?>plugins/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css">
    <!-- starrr -->
    <link href="<?php echo base_url().'assets/';?>plugins/starrr/dist/starrr.css" rel="stylesheet" type="text/css">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url().'assets/';?>layout/css/custom.min.css" rel="stylesheet" type="text/css">

    <!-- Datatables -->
    <link href="<?php echo base_url().'assets/'; ?>plugins/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/'; ?>plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/'; ?>plugins/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/'; ?>plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/'; ?>plugins/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url().'assets/';?>plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
    <!-- Validator -->
    <!-- <link href="<?php echo base_url().'assets/';?>plugins/validator/fv.css" rel="stylesheet" type="text/css"> -->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url('Dashboard/datapasien'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Dokter Jamil</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url().'assets/';?>layout/images/dokter.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> Dokter</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('dokter'); ?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                  <li><a href="#"><i class="fa fa-database"></i> Data Pasien <span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('dokter/pasien'); ?>">Belum Di Periksa</a></li>
                      <li><a href="<?php echo base_url('dokter/pasien_periksa'); ?>">Sudah Di Periksa</a></li>
                    </ul>
                  </li>
                </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-smal">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('Auth');?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url().'assets/';?>layout/images/dokter.png" alt="">Dokter
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url('login');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        
        <?php $this->load->view($content); ?>
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Rancang Bangun Aplikasi Pasien Pada Study Kasus Dr. Jamil by <a href="#">Kelompok 3</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/';?>plugins/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url().'assets/';?>plugins/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url().'assets/';?>plugins/fastclick/lib/fastclick.js" type="text/javascript"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url().'assets/';?>plugins/nprogress/nprogress.js" type="text/javascript"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url().'assets/';?>plugins/Chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url().'assets/';?>plugins/gauge.js/dist/gauge.min.js" type="text/javascript"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url().'assets/';?>plugins/bootstrap-progressbar/bootstrap-progressbar.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url().'assets/';?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url().'assets/';?>plugins/skycons/skycons.js" type="text/javascript"></script>
    <!-- Flot -->
    <script src="<?php echo base_url().'assets/';?>plugins/Flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/Flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/Flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/Flot/jquery.flot.stack.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/Flot/jquery.flot.resize.js" type="text/javascript"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url().'assets/';?>plugins/flot.orderbars/js/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/flot-spline/js/jquery.flot.spline.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/flot.curvedlines/curvedLines.js" type="text/javascript"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url().'assets/';?>plugins/DateJS/build/date.js" type="text/javascript"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url().'assets/';?>plugins/jqvmap/dist/jquery.vmap.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/jqvmap/dist/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/jqvmap/examples/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url().'assets/';?>plugins/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url().'assets/';?>plugins/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/jquery.hotkeys/jquery.hotkeys.js" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/';?>plugins/google-code-prettify/src/prettify.js" type="text/javascript"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url().'assets/';?>plugins/jquery.tagsinput/src/jquery.tagsinput.js" type="text/javascript"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url().'assets/';?>plugins/switchery/dist/switchery.min.js" type="text/javascript"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url().'assets/';?>plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url().'assets/';?>plugins/parsleyjs/dist/parsley.min.js" type="text/javascript"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url().'assets/';?>plugins/autosize/dist/autosize.min.js" type="text/javascript"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url().'assets/';?>plugins/devbridge-autocomplete/dist/jquery.autocomplete.min.js" type="text/javascript"></script>
    <!-- starrr -->
    <script src="<?php echo base_url().'assets/';?>plugins/starrr/dist/starrr.js" type="text/javascript"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url().'assets/';?>plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url().'assets/';?>layout/js/custom.min.js" type="text/javascript"></script>

    <!-- jquery.inputmask -->
    <script src="<?php echo base_url().'assets/';?>plugins/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/validator/validator.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>plugins/validator/multifield.js"></script>
  </body>
</html>
