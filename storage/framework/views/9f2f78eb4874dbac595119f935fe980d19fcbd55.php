<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-Pengkinian | <?php echo $__env->yieldContent('tittle_bar'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $__env->make('layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php echo $__env->yieldContent('css'); ?>
  <!--<link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>">
  <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <a class="navbar-brand"><strong>AJB</strong> V1.0</a>
        <div class="container">
          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
          <!-- /.navbar-collapse -->
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <!--<img src="<?php echo e(asset('favicon.ico')); ?>" class="user-image" alt="User Image">-->
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="fa fa-user"> <?php echo e(Auth::user()->nopol); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- Menu Footer-->
                  <li class="user-footer">

                    <a href="#" class="btn btn-default btn-flat"                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                      <?php echo csrf_field(); ?>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1
        </div>
        <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Design by AdminLTE</a> Dev AJB</strong> All rights
        reserved.
      </div>
      <!-- /.container -->
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->

  <script src="<?php echo e(asset('assets/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
  <!-- Select2 -->
  <script src="<?php echo e(asset('assets/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo e(asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo e(asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo e(asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo e(asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo e(asset('assets/sweetalert2/dist/sweetalert2.all.min.js')); ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo e(asset('assets/bower_components/fastclick/lib/fastclick.js')); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo e(asset('assets/dist/js/adminlte.min.js')); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo e(asset('assets/dist/js/demo.js')); ?>"></script>
  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()
      //Date picker
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
      });
    });
  </script>
  <?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\pro_bmp\resources\views/layouts/master.blade.php ENDPATH**/ ?>