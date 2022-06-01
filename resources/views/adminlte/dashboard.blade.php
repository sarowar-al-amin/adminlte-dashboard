<!DOCTYPE html>
<html lang="en">
  @include('adminlte.header')
  <!--
  `body` tag options:

    Apply one or more of the following classes to to the body tag
    to get the desired effect

    * sidebar-collapse
    * sidebar-mini
  -->
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      @include('adminlte.navbar')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      @include('adminlte.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('adminlte.content.header')
        <!-- /.content-header -->

        <!-- Main content -->
        @include('adminlte.content.main-content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      @include('adminlte.rightsidebar')
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      @include('adminlte.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('adminlte.script')
  </body>
</html>
