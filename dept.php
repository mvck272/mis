<?php include 'server/server.php' ?>
<?php
    $query = "SELECT * FROM dept ORDER BY id";
    $stmt = $conn->query($query);

    $emp = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $emp[] = $row; 
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
                  <h3>Division/ FO's Table</h3>
                </div>
                <div class="col-xs-6" style="float: right;">
                  <button button type="button" data-toggle="modal" data-target="#addDiv" class="btn btn-block btn-primary btn-lg">
                    <i class="fa fa-plus"></i></button>
                </div>
                </div>
              <div class="card-body">
              <table id="iar_table" class="table table-bordered table-hover">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Division/ FO's Name</th>
                    <th>Acronym</th>
                    <th>Responsibility Code Center</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($emp)): ?>
                            <?php $no=1; foreach($emp as $row): ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td style="text-transform:uppercase"><?= $row['name'] ?></td>
                                <td style="text-transform:uppercase"><?= $row['acname'] ?></td>
                                <td><?= $row['rcc'] ?></td>
                                <td>
                                  <?php
                                    $selectedStatus = $row['status'];
                                    if ($selectedStatus == 1) {
                                        echo '<span class="right badge badge-success">ACTIVE</span>';
                                    } elseif ($selectedStatus == 2) {
                                        echo '<span class="right badge badge-danger">NOT ACTIVE</span>';
                                    } elseif ($selectedStatus) {
                                        echo '<span class="right badge badge-warning">ERROR</span>';
                                    }
                                  ?>
                                <td>
                                    <div class="form-button-action">
                                        <label class="button">
                                            <button type="button" href="#editEmployee" data-toggle="modal" class="btn btn-primary" onclick="editEmployee(this)"
                                              data-id="<?= $row['id'] ?>"
                                              data-name="<?= $row['name'] ?>" 
                                              data-acname="<?= $row['acname'] ?>"
                                              data-rcc="<?= $row['rcc'] ?>" 
                                              data-status="<?= $row['status'] ?>" >Edit</button>
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

<div class="modal fade" id="addDiv" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Division/ FO Form</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="controller/add_div.php" onsubmit="confirmSubmit1(event);">
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <label>Name</label>
                <input type="text" class="form-control" style="text-transform:uppercase" id="name" name="name" required>
              </div>
              <div class="col-md-4">
                <label>Acronym</label>
                <input type="text" style="text-transform:uppercase" class="form-control" id="acname" name="acname" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-8">
                <label>RCC</label>
                <input type="text" style="text-transform:uppercase" class="form-control" id="rcc" name="rcc" required>
              </div>
              <div class="col-md-4">
                <label>Status</label>
                <select class="form-control" id="status" name="status" required>
                  <option value="0" selected disabled>Please Select</option>
                  <option value="1">Active</option>
                  <option value="2">Not Active</option>
                </select>
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


    <div class="modal fade" id="editEmployee" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Employee Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
              <form method="POST" action="controller/edit_div.php" onsubmit="confirmSubmit(event);">
                <input type="hidden" id="id" name="id">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <label>Name</label>
                                <input type="text" class="form-control" style="text-transform:uppercase" id="name1" name="name" required>
                            </div>
                            <div class="col-md-4">
                                <label>Acronym</label>
                                <input type="text" class="form-control" style="text-transform:uppercase" id="acname1" name="acname" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <label>RCC</label>
                                <input type="text" class="form-control" style="text-transform:uppercase" id="rcc1" name="rcc" required>
                            </div>
                            <div class="col-md-4">
                                <label>Status</label>
                                    <select class="form-control" id="status1" name="status" required>
                                        <option value="0" selected disabled>Please Select</option>
                                        <option value="1">Active</option>
                                        <option value="2">Not Active</option>
                                    </select>
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
      function editEmployee(that){
          id = $(that).attr('data-id');
          name = $(that).attr('data-name');
          acname = $(that).attr('data-acname');
          rcc = $(that).attr('data-rcc');
          status = $(that).attr('data-status');
          
          $('#id').val(id);
          $('#name1').val(name);
          $('#acname1').val(acname);
          $('#rcc1').val(rcc);
          $('#status1').val(status);

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
  <!-- JavaScript code -->
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
                    url: 'controller/delete_div.php',
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
