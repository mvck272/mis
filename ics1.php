<?php include 'server/server.php' ?>
<?php
    $query = "SELECT * FROM ics_category ORDER BY id";
    $stmt = $conn->query($query);

    $ics1 = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $ics1[] = $row; 
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
                  <h3>INVENTORY CUSTODIAN SLIP (ICS)</h3>
                </div>
                <div class="col-xs-6" style="float: right;">
                  <button button type="button" data-toggle="modal" data-target="#addICS" class="btn btn-block btn-primary btn-lg">
                    <i class="fa fa-plus"></i></button>
                </div>
                </div>
              <div class="card-body">
              <table id="iar_table" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>ICS code</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Action</th>
                    </tr>
                </thead>
                  <tbody>
                  <?php if(!empty($ics1)): ?>
                        <?php $no=1; foreach($ics1 as $row): ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td style="text-transform:uppercase"><?= $row['ics_code'] ?></td>
                                <td style="text-transform:uppercase"><?= $row['category'] ?></td>
                                <td><?= date('M d Y / h:ia', strtotime($row['date'])) ?></td>
                                <td>
                                    <div class="form-button-action">
                                        <label class="button">
                                            <button type="button" href="#editICScateg" data-toggle="modal" class="btn btn-primary" onclick="editICScateg(this)"
                                              data-id="<?= $row['id'] ?>"
                                              data-ics_code="<?= $row['ics_code'] ?>" 
                                              data-category="<?= $row['category'] ?>" >Edit</button>
                                            <button type="button" class="btn btn-danger" onclick="confirmDelete(event, <?php echo $row['id']; ?>)">Delete</button>
                                        </label>
                                    </div>
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

<div class="modal fade" id="addICS" data-backdrop="static">
    <div class="modal-dialog modal-s">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Input Catergories</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="controller/add_icsCategory.php" >
                <section>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <label>ICS Code</label>
                                <input type="text" class="form-control" id="ics_code" name="ics_code" style="text-transform:uppercase">
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control" id="category" name="category" style="text-transform:uppercase">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <label class="button">
                        </label>
                        <label class="button">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </label>
                    </div>
                </section>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="editICScateg" data-backdrop="static">
    <div class="modal-dialog modal-s">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Input Catergories</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="controller/edit_icsCategory.php">
            <input type="hidden" id="id" name="id">
                <section>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <label>ICS Code</label>
                                <input type="text" class="form-control" id="ics_code1" name="ics_code" style="text-transform:uppercase">
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control" id="category1" name="category" style="text-transform:uppercase">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <label class="button">
                        </label>
                        <label class="button">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </label>
                    </div>
                </section>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
      function editICScateg(that){
          id = $(that).attr('data-id');
          ics_code = $(that).attr('data-ics_code');
          category = $(that).attr('data-category');
          
          $('#id').val(id);
          $('#ics_code1').val(ics_code);
          $('#category1').val(category);

      } 
  </script>
</html>
