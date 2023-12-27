<?php include 'server/server.php' ?>
<?php
    $query = "SELECT * FROM uacs_exp ORDER BY id";
    $stmt = $conn->query($query);

    $uacsExp = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $uacsExp[] = $row; 
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
                  <h3>UACS- Expenses</h3>
                </div>
                <div class="col-xs-6" style="float: right;">
                  <button button type="button" data-toggle="modal" data-target="#uacsExp" class="btn btn-block btn-primary btn-lg">
                    <i class="fa fa-plus"></i></button>
                </div>
                </div>
              <div class="card-body">
              <table id="iar_table" class="table table-bordered table-hover">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Account Title</th>
                    <th>UACS Object Code</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($uacsExp)): ?>
                            <?php $no=1; foreach($uacsExp as $row): ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td style="text-transform:uppercase"><?= $row['acct_title'] ?></td>
                                <td><?= $row['code'] ?></td>
                                <td>
                                    <div class="form-button-action">
                                        <label class="button">
                                            <button type="button" href="#editUacsExp" data-toggle="modal" class="btn btn-primary" onclick="editUacsExp(this)"
                                              data-id="<?= $row['id'] ?>"
                                              data-acct_title="<?= $row['acct_title'] ?>" 
                                              data-code="<?= $row['code'] ?>" >Edit</button>
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

    <div class="modal fade" id="uacsExp" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">UACS-Expenses Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
              <form method="POST" action="controller/add_uacs_exp.php" id="uacsForm" onsubmit="confirmSubmit1(event);">
              <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                            <label>Account Title</label>
                            <input type="text" class="form-control" style="text-transform:uppercase" id="acct_title" name="acct_title" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <label>UACS Code</label>
                            <input type="text" class="form-control" id="code" name="code" required>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
          </div>
            
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="editUacsExp" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">UACS-Inventory Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
              <form method="POST" action="controller/edit_uacs_exp.php" onsubmit="confirmSubmit(event);">
                <input type="hidden" id="id" name="id">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                            <label>Account Title</label>
                            <input type="text" class="form-control" style="text-transform:uppercase" id="acct_title1" name="acct_title" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <label>UACS Code</label>
                            <input type="text" class="form-control" id="code1" name="code" required>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
            
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div> 
    <script>
      function confirmSubmit1(event) {
        event.preventDefault(); // Prevent the default form submission
        Swal.fire({
        icon: 'success',
        title: 'Successfully Added!',
        showConfirmButton: true,
        }).then((result) => {
          if (result.isConfirmed) {
            // If the user confirms, manually submit the form
            event.target.submit();
          }
        });
      }
    </script>
    <script>
      function editUacsExp(that){
          id = $(that).attr('data-id');
          acct_title = $(that).attr('data-acct_title');
          code = $(that).attr('data-code');
          
          $('#id').val(id);
          $('#acct_title1').val(acct_title);
          $('#code1').val(code);
      }
  </script>
    <script>
    function confirmSubmit(event) {
      event.preventDefault(); // Prevent the default form submission

      Swal.fire({
        title: 'Are you sure?',
        text: 'Do you want to update the stock entry?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Update',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          // If the user confirms, manually submit the form
          event.target.submit();
        }
      });
    }
  </script>
  <script>
    function confirmDelete(event, id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Prevent default form submission behavior
                event.preventDefault();

                // Send AJAX request to delete the record
                $.ajax({
                    url: 'controller/delete_uacs_exp.php',
                    type: 'POST',
                    data: {id: id},
                    success: function (response) {
                        // Handle the response from the server
                        console.log(response)
                            Swal.fire(
                                'Deleted!',
                                'The record has been deleted.',
                                'success'
                            ).then(() => {
                                // Refresh the page or update the table
                                location.reload();
                            });
                    }
                });
            }
        });
    }
</script>

</html>