<?php include 'server/server.php' ?>
<?php
    $query = "SELECT * FROM ris_entry GROUP BY ris_no ORDER BY id";
    $stmt = $conn->query($query);

    $ris = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $ris[] = $row; 
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
                  <h3>Issuance Table</h3>
                </div>
                
              <div class="col-2">
                    <label for="filterFund1">Fund</label>
                    <select class="form-control" id="filterFund" name="filterFund1">
                        <option value="0" selected disabled>Select Fund</option>
                        <option value="F-101">F-101</option>
                        <option value="F-103">F-103</option>
                        <option value="F-103A">F-103A</option>
                        <option value="CFAG">CFAG</option>
                    </select>
                </div>
                </div>
              <div class="card-body">
              <table id="iar_table" class="table table-bordered table-hover">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>RIS NO.</th>
                    <th>Division/ Field Office</th>
                    <th>RCC</th>
                    <th>Fund</th>
                    <th>IAR NO.</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if(!empty($ris)): ?>
                            <?php $no=1; foreach($ris as $row): ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['ris_no'] ?></td>
                                <td><?= $row['dept'] ?></td>
                                <td><?= $row['rcc'] ?></td>
                                <td><?= $row['fund'] ?></td>
                                <td><?= $row['iar_no'] ?></td>
                                <td><?= date('M d Y / h:ia', strtotime($row['date'])) ?></td>
                                <td>
                                    <?php if (isset($row['id'])) :  ?>
                                        <a href="genRIS.php?r=<?= $row['id']; ?>" class="btn btn-primary" >Generate RIS</a>
                                    <?php endif ?>
                                </td>
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
<script>
  $(document).ready(function () {
    // Initialize DataTables
    var table = $('#iar_table').DataTable();

    // Add event listener to the filterFund dropdown
    $('#filterFund').change(function () {
        // Get the selected fund value
        var selectedFund = $(this).val();

        // Use DataTables API with a regular expression for exact match
        table.column(4).search('^' + selectedFund + '$', true, false).draw();
    });
  });

</script>
</html>
