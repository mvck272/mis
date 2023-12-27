<?php include 'server/server.php' ?>
<?php
    $query = "SELECT * FROM stock_tbl ORDER BY id";
    $stmt = $conn->query($query);

    $stock = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $stock[] = $row; 
    }
?>
<?php
  $query = "SELECT acct_title FROM uacs_inv";
    $stmt = $conn->query($query);

  $acctTitles = $stmt->fetchAll(PDO::FETCH_COLUMN);
    $pdo = null;
  
?>
<?php
  $query = "SELECT acct_title FROM uacs_exp";
    $stmt = $conn->query($query);

  $acctTitles1 = $stmt->fetchAll(PDO::FETCH_COLUMN);
    $pdo = null;
  
?>
<!DOCTYPE html>
<html lang="en">
<head>

<script>
    function validateForm() {
        var fund = document.getElementById('fund1').value;
        var inv_type = document.getElementById('inv_type1').value;
        var exp_type = document.getElementById('exp_type1').value;
        var unit = document.querySelector('input[name="unit"]').value;
        var item = document.getElementById('item1').value;
        var stock_desc = document.querySelector('textarea[name="stock_desc"]').value;

        if (fund === '0' || inv_type === '0' || exp_type === '0' || unit === '' || item === '' || stock_desc === '') {
            Swal.fire({
                title: 'Error',
                text: 'Please fill out all fields (*) to save.',
                icon: 'error'
            });
            // Prevent form submission
            return false;
        }

        Swal.fire({
            icon: 'success',
            title: 'Successfully Added!',
            showConfirmButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user confirms, manually submit the form
                document.querySelector('form').submit();
            }
        });
        // Form is valid, allow submission
        return false; // Return false here to prevent default form submission.
    }
</script>

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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <div class="col-6">
                    <h3>Stock Items Table</h3>
                  </div>
                </div>
                <div class="card-body">
                  
                <div class="col-xs-6" style="float: right;">
                  <button button type="button" data-toggle="modal" data-target="#stockItems" class="btn btn-block btn-primary btn-lg">
                    <i class="fa fa-plus"></i></button>
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
                <table id="iar_table" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Fund</th>
                      <th>Inventory Type</th>
                      <th>Expenses Type</th>
                      <th>Item</th>
                      <th>Unit</th>
                      <th>Stock No.</th>  
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php if(!empty($stock)): ?>
                            <?php $no=1; foreach($stock as $row): ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['fund'] ?></td>
                                <td><?= $row['inv_type'] ?></td>
                                <td><?= $row['exp_type'] ?></td>
                                <td><?= $row['item'] ?></td>
                                <td><?= $row['unit'] ?></td>
                                <td><?= $row['stock_no'] ?></td>
                                <td><?= $row['stock_desc'] ?></td>
                                <td> 
                                    <div class="form-button-action">
                                        <label class="button">
                                            <button type="button" href="#editStock" data-toggle="modal" class="btn btn-primary" onclick="editStock(this)" 
                                                data-id="<?= $row['id'] ?>"
                                                data-fund="<?= $row['fund'] ?>" 
                                                data-inv_type="<?= $row['inv_type'] ?>" 
                                                data-exp_type="<?= $row['exp_type'] ?>" 
                                                data-item="<?= $row['item'] ?>"
                                                data-unit="<?= $row['unit'] ?>"
                                                data-stock_no="<?= $row['stock_no'] ?>"
                                                data-stock_desc="<?= $row['stock_desc'] ?>">Edit</button>
                                                <button type="button" onclick="confirmDelete(event, <?php echo $row['id']; ?>)" class="btn btn-danger">Delete</button>
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

    <div class="modal fade" id="stockItems" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Stock Entry Form</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form method="POST" action="controller/add_stock.php" onsubmit="return validateForm();">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <label for="fund">FUND<span class="text-danger">*</span></label>
                            <select class="form-control" id="fund1" name="fund" onchange="generateStockNumber()">
                                <option value="0" selected disabled>Select Fund</option>
                                <option value="F-101">F-101</option>
                                <option value="F-103">F-103</option>
                                <option value="F-103A">F-103A</option>
                                <option value="CFAG">CFAG</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <label>Inventory Type<span class="text-danger">*</span></label>
                            <select class="form-control" id="inv_type1" name="inv_type">
                                <option value="0" selected disabled>--Please Select--</option>
                                <option value="N/A"> N/A</option>
                                <?php foreach ($acctTitles as $title) { ?>
                                    <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <label>Unit<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="unit1" name="unit" placeholder="unit">
                        </div>
                        <div class="col-8">
                            <label>Expenses Type<span class="text-danger">*</span></label>
                            <select class="form-control" id="exp_type1" name="exp_type">
                                <option value="0" selected disabled>--Please Select--</option>
                                <option value="N/A"> N/A</option>
                                <?php foreach ($acctTitles1 as $title) { ?>
                                    <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <label>Item<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="item1" name="item" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                        </div>
                        <label for="stock_no" hidden>Stock No.</label>
                        <input type="text" name="stock_no" class="form-control" readonly hidden>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <label>Description<span class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" id="stock_desc1" name="stock_desc" placeholder="Description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="editStock" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Stock Entry Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body">
                <form method="POST" action="controller/edit_stock.php" onsubmit="confirmSubmit(event);">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                        <label for="fund">FUND</label>
                        <select class="form-control" id="funds" name="fund">
                            <option value = "0" selected disabled>Select Fund</option>
                            <option value="F-101">F-101</option>
                            <option value="F-103">F-103</option>
                            <option value="F-103A">F-103A</option>
                            <option value="CFAG">CFAG</option>
                        </select>
                        </div>
                        <div class="col-8">
                        <label>Inventory Type</label>
                            <select class="form-control" id="inv_types" name="inv_type">
                                <option value="0" selected disabled>--Please Select--</option>
                                <option value="N/A" >N/A</option>
                                <?php foreach ($acctTitles as $title) { ?>
                                    <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                          <label>Unit</label>
                          <input type="text" class="form-control" id="units" name="unit">
                        </div>
                        <div class="col-8">
                        <label>Expenses Type</label>
                            <select class="form-control" id="exp_types" name="exp_type">
                                <option value="0" selected disabled>--Please Select--</option>
                                <option value="N/A" >N/A</option>
                                <?php foreach ($acctTitles1 as $title) { ?>
                                    <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                          <label>Item</label>
                          <input type="text" class="form-control" id="item" name="item">
                      </div>
                    </div>
                        <input type="text" id="stock_no" name="stock_no" class="form-control" hidden>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                        <label>Description</label>
                        <textarea type="text" class="form-control" id="stock_desc" name="stock_desc" placeholder="Description"></textarea>
                        </div>
                    </div>
                </div>
              </div>
                <div class="modal-footer justify-content-between">
                <input type="hidden" id="stock_id" name="id">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
          </div>
            
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script>
      $(document).ready(function () {
        // Initialize DataTables
        var table = $('#iar_table').DataTable();

        // Add event listener to the filterFund dropdown
        $('#filterFund').change(function () {
            // Get the selected fund value
            var selectedFund = $(this).val();

            // Use DataTables API with a regular expression for exact match
            table.column(1).search('^' + selectedFund + '$', true, false).draw();
        });
      });

    </script>
    
    <script>
      function confirmSubmit1(event) {
        event.preventDefault(); // Prevent the default form submission
        
      }
    </script>
    
  <script>
    function generateStockNumber() {
      // Get the selected fund value
      var selectedFund = document.querySelector('select[name="fund"]').value;

      // Define the prefix for each fund option
      var fundPrefix = {
        "F-101": "101-",
        "F-103": "103-",
        "F-103A": "103A-",
        "CFAG": "CFAG-"
      };

      // Generate the stock number
      var stockNo = "";
      if (fundPrefix.hasOwnProperty(selectedFund)) {
        stockNo = fundPrefix[selectedFund];

        // Retrieve the latest stock number from the input field
        var latestStockNo = document.querySelector('input[name="stock_no"]').value;

        // Check if the latest stock number starts with the selected fund prefix
        if (latestStockNo.startsWith(stockNo)) {
          // Extract the numeric part of the stock number
          var numericPart = parseInt(latestStockNo.slice(stockNo.length));

          // Decrement the numeric part by 1 and format it with leading zeros
          var newNumericPart = (numericPart - 1).toString().padStart(4, '0');

          stockNo += newNumericPart;
        } else {
          stockNo += "0001"; // Reset to default if the prefix has changed
        }
      }

      // Set the generated stock number in the input field
      document.querySelector('input[name="stock_no"]').value = stockNo;
    }
  </script>

  <script>
      function editStock(that){
          id = $(that).attr('data-id');
          fund = $(that).attr('data-fund');
          inv_type = $(that).attr('data-inv_type');
          exp_type = $(that).attr('data-exp_type');
          item = $(that).attr('data-item');
          unit = $(that).attr('data-unit');
          stock_no = $(that).attr('data-stock_no');
          stock_desc = $(that).attr('data-stock_desc');
          
          $('#stock_id').val(id);
          $('#funds').val(fund);
          $('#inv_types').val(inv_type);
          $('#exp_types').val(exp_type);
          $('#item').val(item);
          $('#units').val(unit);
          $('#stock_no').val(stock_no);
          $('#stock_desc').val(stock_desc);
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
                    url: 'controller/delete_stock.php',
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


  <script>
      // Using jQuery document ready event to ensure the DOM is fully loaded
    $(document).ready(function() {
      // Function to reset the input field when the modal is hidden
      $('#stockItems').on('hidden.bs.modal', function () {
        $('#item1').val('');
        $('#unit1').val('');
        $('#fund1').val('0');
        $('#inv_type1').val('0');
        $('#exp_type1').val('0');
        $('#stock_desc1').val('');
      });
    });
  </script>
</html>
