<?php include 'server/server.php' ?>
<?php
    $query = "SELECT * FROM activity_log ORDER BY id";
    $stmt = $conn->query($query);

    $act = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $act[] = $row; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Add this inside the <head> tag -->
<?php include 'templates/header.php' ?>
	<title>[MIS - CSC]</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/MSD_logo.png" alt="MSD_logo">
  </div>

  <!-- Navbar -->
  <?php include 'templates/mainheader.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'templates/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div>
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-1">
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

          <div class="card">
                <div class="card-header">
                    <div class="col-xs-6">
                    <h3>Activity Logs</h3>
                    </div>
                </div>
              <div class="card-body">
              <table id="iar_table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Action</th>
                    <th>Details</th>
                    <th>Date</th>
                    </tr>
                </thead>
                  <tbody>
                  <?php if(!empty($act)): ?>
                          <?php $no=1; foreach($act as $row): ?>
                          <tr>
                              <td><?= $no ?></td>
                              <td><?= $row['action'] ?></td>
                              <td><span class="text-primary"><b><?= $row['details'] ?></b></span></td>
                              <td><?= date('M d Y / h:ia', strtotime($row['timestamp'])) ?></td>
                          </tr>
                          <?php $no++; endforeach ?>
                  
                      <?php endif ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved. -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Main Footer -->
<?php include 'templates/footer.php' ?>
			<!-- End Main Footer -->
</body>

</html>
