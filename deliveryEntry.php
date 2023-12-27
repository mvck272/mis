<?php include 'server/server.php' ?>

<?php
$query = "SELECT * FROM delivery_entry GROUP BY iar_no ORDER BY id";
$stmt = $conn->query($query);
// $query = "SELECT DISTINCT iar_no FROM delivery_entry ORDER BY id";
// $stmt = $conn->query($query);

$stock = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $iar_no = $row['iar_no'];

    // Fetch the specific stock_no values for the current iar_no
    $stock_no_query = "SELECT stock_no FROM delivery_entry WHERE iar_no = :iar_no ";
    $stock_stmt = $conn->prepare($stock_no_query);
    $stock_stmt->bindParam(':iar_no', $iar_no, PDO::PARAM_STR);
    $stock_stmt->execute();

    $stock_nos = array();
    while ($stock_row = $stock_stmt->fetch(PDO::FETCH_ASSOC)) {
        $stock_nos[] = $stock_row['stock_no'];
    }

    // Assign the array of stock_no values to the row
    $row['stock_no'] = $stock_nos;

    $stock[] = $row;
}
?>

<?php
  $query = "SELECT * FROM ris_entry GROUP BY ris_no ORDER BY id";
  $stmt = $conn->query($query);

  // Initialize the $ris array with an empty array.
  $ris = array();

  // Check if there are rows returned from the query.
  if ($stmt->rowCount() > 0) {
    while ($rowr = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $ris[] = $rowr;
    }
  }
?>
<?php
  $query = "SELECT name, desig FROM employee WHERE status = 1";
  $stmt = $conn->query($query);
  $emp = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $pdo = null;
?>
<?php
  $query = "SELECT acname, rcc FROM dept WHERE status = 1";
  $stmt = $conn->query($query);
  $div = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $pdo = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var fundSelect = document.getElementById("fund");
    var itemSelect = document.getElementById("item-dropdown");

    if (fundSelect) {
      fundSelect.addEventListener("change", function() {
        var fund = this.value;

        // Send AJAX request to fetch item names and stock numbers based on the selected fund
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "itemname.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              itemSelect.innerHTML = xhr.responseText;
              // initializeSelect2(itemSelect);
            } else {
              console.error('Error: ' + xhr.status);
            }
          }
        };
        xhr.send("fund=" + fund);
      });
    }
 
    if (itemSelect) {
      itemSelect.addEventListener("change", function() {
        var item = document.getElementById('itemSelect2').value;
        var fund = document.getElementById('fund').value; // Get the selected fund

        // Send AJAX request to fetch item details based on the selected stock number and fund
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "itemdetails.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              var itemDetails = xhr.responseText;
              document.getElementById('item_table').innerHTML = itemDetails;
            } else {
              console.error('Error: ' + xhr.status);
            }
          }
        };

        // Send both item and fund as parameters
        xhr.send("item=" + item + "&fund=" + fund);
      });
    } else {
      console.error('Error: itemSelect element not found');
    }

  });

  function initializeSelect2(element) {
    $(element).select2({
      theme: 'bootstrap4',
      width: '100%'
    });
  }
  // Clear item dropdown when the modal is closed
  $('#addItem').on('hidden.bs.modal', function() {
    document.getElementById("item-dropdown").innerHTML = "";
  });
  $('#addIar').on('hidden.bs.modal', function() {
    document.getElementById("item-dropdown").innerHTML = "";
  });
</script>

<script>
   function validateForm() {
    // Get all checked checkboxes in the main table
    var checkedCheckboxes = $('#ditable tbody input[type=checkbox]:checked');

    // Check if any checkboxes are checked
    if (checkedCheckboxes.length > 0) {
      // Additional form validation (you can customize this as per your requirements)
      var fund = document.getElementById('fund').value;
      var req_dept = document.getElementById('req_dept').value;
      var del_no = document.getElementById('del_no').value;
      var del_date = document.getElementById('del_date').value;
      var supplier = document.getElementById('supplier').value;
      var po_no = document.getElementById('po_no').value;
      var po_date = document.getElementById('po_date').value;

      // Check if required fields are empty
      if (fund === '0' || req_dept === '--Please Select--' || del_no === '' || del_date === '' || supplier === '' || po_no === '' || po_date === '') {
        Swal.fire({
          title: 'Error',
          text: 'Please fill out all required fields (*) and select at least one item to save.',
          icon: 'error'
        });
        // Prevent form submission
        return false;
      }

       // Check if qty and unit_cost fields are empty in the main table
    var mainTableQtyInputs = $('#ditable tbody input[name="qty[]"]');
    var mainTableUnitCostInputs = $('#ditable tbody input[name="unit_cost[]"]');
    for (var i = 0; i < mainTableQtyInputs.length; i++) {
      if (mainTableQtyInputs[i].value === '' || mainTableUnitCostInputs[i].value === '') {
        Swal.fire({
          title: 'Error',
          html: 'Please fill out all quantity and unit cost fields in the <strong>Delivery Items Table</strong>.',
          icon: 'error'
        });
        // Prevent form submission
        return false;
      }
    }

    return true;
  } else {
    // Show error message if no items are selected
    Swal.fire({
      title: 'No Items Selected',
      text: 'Please select at least one item to save.',
      icon: 'error'
    });
    // Prevent form submission
    return false;
  }
  }
    $(document).ready(function() {
        // Check All button click event
        $('#checkAll').click(function() {
            var isChecked = $(this).prop('checked');
            $('#sitems input[type=checkbox]').prop('checked', isChecked);
            if (isChecked) {
                $('#sitems tr').addClass('selected');
            } else {
                $('#sitems tr').removeClass('selected');
            }
        });

        $('#addinItem').click(function() {
            var hasCheckedItems = false; // Variable to track if any items are checked

            // Loop through each checkbox in the item details table
            $('#sitems input[type=checkbox]:checked').each(function() {
              // Get the corresponding row data
              var rowData = $(this).closest('tr').find('td');

              // Extract the values from the row data
              var stockNo = rowData.eq(0).text();
              var item = rowData.eq(1).text();
              var description = rowData.eq(2).text();
              var unit = rowData.eq(3).text();
              var qty = $(this).closest('tr').find('input[name="qty[]"]').val();
              var unitCost = $(this).closest('tr').find('input[name="unit_cost[]"]').val();
              var stockID = $(this).attr('id').replace('customCheckbox', '');

              // Check if the row with the same stock number already exists in the main table
              if ($('#ditable tbody td:first-child:contains(' + stockNo + ')').length === 0) {
                // Build the HTML for a new row in the main table
                var newRow =
                  '<tr>' +
                  '<td>' + stockNo + '</td>' +
                  '<td>' + item + '</td>' +
                  '<td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 50px;">' + description + '</td>' + // Adjust the style of the description column
                  '<td>' + unit + '</td>' +
                  '<td><input type="number" class="form-control" id="qty" name="qty[]" value="' + qty + '"></td>' + // Use name="qty[]" to pass qty values as an array
                  '<td><input type="number" class="form-control" id="unit_cost" name="unit_cost[]" step="any" value="' + unitCost + '"></td>' + // Use name="unit_cost[]" to pass unit_cost values as an array
                  '<input type="hidden" name="stock_no[]" value="' + stockNo + '">' + // Add hidden input for stock_no
                  '<td class="text-center"> <div class="custom-control custom-checkbox"><input class="custom-control-input custom-control-input-danger" type="checkbox" id="customCheckbox' + stockNo + '"><label for="customCheckbox' + stockNo + '" class="custom-control-label"></label> </div></td>' +
                  '</tr>';

                // Append the new row to the main table
                $('#ditable tbody').append(newRow);

                hasCheckedItems = true; // At least one item is checked
              }
            });

            // Check if any items were checked or not
            if (hasCheckedItems) {
              // Show success message
              Swal.fire({
                title: 'Items Added',
                text: 'The selected items have been successfully added.',
                icon: 'success'
              });
            } else {
              // Show error message
              Swal.fire({
                title: 'Error',
                text: 'Please select at least one item.',
                icon: 'error'
              });
            }
          });


        // Event listener for the "Remove Items" button
        $('#removeItem').click(function() {
            // Get all checked checkboxes in the main table
            var checkedCheckboxes = $('#ditable tbody input[type=checkbox]:checked');

            // Check if any checkboxes are checked
            if (checkedCheckboxes.length > 0) {
                // Display SweetAlert confirmation prompt
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You are about to remove the selected items.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, remove them!'
                }).then((result) => {
                    // Check if the user confirmed the removal
                    if (result.isConfirmed) {
                        // Loop through the checked checkboxes
                        checkedCheckboxes.each(function() {
                            // Remove the corresponding row
                            $(this).closest('tr').remove();
                        });

                        // Show success message
                        Swal.fire({
                            title: 'Items Removed',
                            text: 'The selected items have been successfully removed.',
                            icon: 'success'
                        });
                    }
                });
            } else {
                // Show error message if no items are selected
                Swal.fire({
                    title: 'No Items Selected',
                    text: 'Please select at least one item to remove.',
                    icon: 'error'
                });
            }
        });

        // Event listener for dynamically generated checkboxes
        $(document).on('change', '#sitems input[type=checkbox]', function() {
            var checked = $(this).is(':checked');
            var row = $(this).closest('tr');

            if (checked) {
                row.addClass('selected');
            } else {
                row.removeClass('selected');
            }
        });
    });
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
                  <h3>Delivery Table</h3>
                </div>
                <div class="col-xs-6" style="float: right;">
                  <button button type="button" data-toggle="modal" data-target="#addIar" id="add_iar" class="btn btn-block btn-primary btn-lg">
                    <i class="fa fa-plus"></i></button>
                </div>
                </div>
                <div class="card-body">
                  
                  <table id="iar_table" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>IAR NO.</th>
                              <th>Division/Field Office</th>
                              <th>Fund</th>
                              <th>JO/PO No.</th>
                              <th>Supplier</th>
                              <th>Date</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php if (!empty($stock)) : ?>
                            <?php $no = 1; foreach ($stock as $row) : ?>
                                <?php
                                // Fetch 'rcc' value from the 'dept' table based on 'req_dept'
                                $req_dept = $row['req_dept'];
                                $rcc = ''; // Default value in case 'rcc' is not found
                                foreach ($div as $dept) {
                                    if ($dept['acname'] === $req_dept) {
                                        $rcc = $dept['rcc'];
                                        break; // Exit the loop once 'rcc' is found
                                    }
                                }
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row['iar_no']; ?></td>
                                    <td><?= $row['req_dept']; ?></td>
                                    <td><?= $row['fund']; ?></td>
                                    <td><?= $row['po_no']; ?></td>
                                    <td><?= $row['supplier']; ?></td>
                                    <td><?= date('M d Y / h:ia', strtotime($row['date'])) ?></td>
                                    <td>
                                        <div class="form-button-action">
                                            <label class="button">
                                                <?php if (isset($row['id'])) : ?>
                                                    <a href="genIAR.php?i=<?= $row['id']; ?>" class="btn btn-info">Generate IAR</a>
                                                <?php endif; ?>
                                                <a type="button" name="addRISmodal" id="addRISButton" data-toggle="modal" data-target="#addRis" class="btn btn-warning" onclick="showData(this)"
                                                  data-id="<?= $row['id'] ?>"
                                                  data-fund="<?= $row['fund'] ?>"
                                                  data-iar_no="<?= $row['iar_no'] ?>"
                                                  data-stock_no="<?= implode(', ', $row['stock_no']) ?>"
                                                  data-req_dept="<?= $row['req_dept'] ?>"
                                                  data-rcc="<?= $rcc ?>">
                                                  <i class="fa fa-minus"></i>
                                                </a>
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

<div class="modal fade" id="addIar" data-backdrop="static" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title"><strong>Delivery Entry</strong></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="controller/add_delivery.php" onsubmit="return validateForm();">
          <section>
            <div class="card-body">
              <div class="row">
                <div class="col-2">
                  <label>Fund <span class="text-danger">*</span></label>
                    <select class="form-control" name="fund" id="fund">
                      <option value = "0" selected disabled>Select Fund</option>
                      <option value="F-101">F-101</option>
                      <option value="F-103">F-103</option>
                      <option value="F-103A">F-103A</option>
                      <option value="CFAG">CFAG</option>
                    </select>
                </div>
                <div class="col-4">
                  <label>Requistioning Department <span class="text-danger">*</span></label>
                  <select class="form-control" name="req_dept" id="req_dept">
                      <option selected disabled value="0">--Please Select--</option>
                      <?php foreach ($div as $title) { ?>
                          <option value="<?php echo $title['acname']; ?>"><?php echo $title['acname']; ?></option>
                      <?php } ?>
                  </select>
                </div>
                <div class="col-3">
                  <label>Delivery No. <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="del_no" name="del_no">
                </div>
                <div class="col-3">
                  <label>Delivery Date <span class="text-danger">*</span></label>
                  <input type="date" class="form-control" id="del_date" name="del_date">
                </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-6">
                    <label>Supplier <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="supplier" name="supplier">
                  </div>
                  <div class="col-3">
                    <label>PO No. <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="po_no" name="po_no">
                  </div>
                  <div class="col-3">
                    <label>PO Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="po_date" name="po_date">
                  </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-12">
                  <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title"><strong>Delivery Items Table</strong></h3>
                      <div class="form-check float-right" >
                          <input class="form-check-input" type="checkbox" id="checkAll">
                          <label class="form-check-label" for="checkAll"><strong>Check All</strong></label>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive table-bordered p-0" style="height: 300px;">

                    <!-- Your existing table -->
                    <table class="table table-head-fixed text-nowrap" id="ditable">
                        <thead>
                            <tr>
                                <th style="width: 50px;">Stock No.</th>
                                <th style="width: 70px;">Item</th>
                                <th style="width: 250px;">Description</th>
                                <th style="width: 50px;">Unit</th>
                                <th style="width: 70px;"> Qty <span class="text-danger">*</span></th>
                                <th style="width: 50px;">Unit Cost <span class="text-danger">*</span></th>
                                <th style="width: 40px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="sitems">
                            <!-- dynamic table here -->
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          </section>
          <div class="modal-footer justify-content-between">
            <label class="button">
              <button type="button" data-toggle="modal" data-target="#addItem" class="btn btn-primary" id="add_item">Add Item</button>
              <button type="button" class="btn btn-danger" id="removeItem">Remove Items</button>
            </label>
            <label class="button">
              <a href="stock.php" type="button" class="btn btn-success">Create Item</a>
              <button type="submit" class="btn btn-primary" id="saveDelivery">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </label>
          </div>
        </form>
      </div>
    </div>
<!-- /.modal-content -->
  </div>
<!-- /.modal-dialog -->
</div>

  <div class="modal fade" id="addItem" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Search Items</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <section>
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <label>FUND</label>
                  <input type="text" id="fundS" class="form-control" placeholder="" disabled>
                </div>
                <div class="col-6 col-md-6">
                  <div class="form-group">
                    <label>Item Name</label>
                    <div id="item-dropdown">
                      <!-- The fetched item select dropdown will be inserted here -->
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              </div>
              <hr>
              <div class="row">
                <div class="col-12">
                  <div id="item_table">
                  
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <label class="button">
              </label>
              <label class="button">
                <button type="button" class="btn btn-primary" id="addinItem">Add-in</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </label>
            </div>
          </div>
          </section>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

<div class="modal fade" id="addRis">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h4 class="modal-title"><strong>Requisition & Issuance Slip Form</strong></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="controller/add_ris.php" id="risForm">
          <section>
            <div class="card-body">
              <div class="row">
                <div class="col-2">
                  <label>FUND</label>
                  <input type="text" class="form-control" id="funds" name="fund" readonly>
                </div>
                <div class="col-3">
                  <label>Division/ FO's</label>
                  <input type="text" class="form-control" id="req_depts" name="dept" readonly>
                </div>
                <div class="col-4">
                  <label>Responsibility Code Center</label>
                  <input type="text" class="form-control" id="rccs" name="rcc" readonly>
                </div>
                <div class="col-3">
                  <label>RIS No.</label>
                  <input type="text" class="form-control" id="risno" name="ris_no" readonly>
                </div>
              </div>
              <hr>
              <hr>
              <div class="row">
                <div class="col-12">
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title" style="margin-left:220px; width:50%;">Requisition</h3>
                      <h3 class="card-title"><i>Issuance</i></h3>
                      <div class="form-check float-right" >
                          <input class="form-check-input" type="checkbox" id="checkAll1">
                          <label class="form-check-label" for="checkAll1"><strong>Check All</strong></label>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive table-bordered p-0" style="height: 300px;">

                    <!-- Your existing table -->
                    <table class="table table-head-fixed text-nowrap" id="ristable">
                        <thead>
                            <tr>
                                <th style="width: 5px;">Stock No.</th>
                                <th style="width: 0px;">Item</th>
                                <th style="width: 200px;">Description</th>
                                <th style="width: 5px;">Quantity</th>
                                <th style="width: 5px;"><i>Quantity</i></th>
                                <th style="width: 50px;"><i>Remarks</i></th>
                                <th style="width: 40px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="risDetails">
                            <!-- dynamic table here -->
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                <label>Purpose</label><input type="text" class="form-control" id="purposes" name="purpose" placeholder="">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-4">
                  <label>Requested By:</label>
                  <select class="form-control" id="requested" name="req_by">
                    <option value="0" selected disabled>Please Select</option>
                    <?php foreach ($emp as $title) { ?>
                      <option value="<?php echo $title['name']; ?>"><?php echo $title['name']; ?></option>
                    <?php } ?>
                  </select>
                  <input type="hidden" id="req_desig" name="req_desig">
                </div>
                <div class="col-4">
                  <label>Approved By:</label>
                  <select class="form-control" id="approved" name="app_by">
                    <option value="0" selected disabled>Please Select</option>
                    <?php foreach ($emp as $title) { ?>
                      <option value="<?php echo $title['name']; ?>"><?php echo $title['name']; ?></option>
                    <?php } ?>
                  </select>
                  <input type="hidden" id="app_desig" name="app_desig">
                </div>
                <div class="col-4">
                  <label>Issued By:</label>
                  <select class="form-control" id="issued" name="iss_by">
                    <option value="0" selected disabled>Please Select</option>
                    <?php foreach ($emp as $title) { ?>
                      <option value="<?php echo $title['name']; ?>"><?php echo $title['name']; ?></option>
                    <?php } ?>
                  </select>
                  <input type="hidden" id="iss_desig" name="iss_desig">
                </div>
              </div>
              <br>
            </div>
          </section>
          <div class="modal-footer justify-content-between">
            <label class="button">
              
            </label>
            <label class="button">
              <!-- <input type="hidden" id="stock_nos" name="stock_no"> -->
              <input type="hidden" id="selectedStockData" name="selectedStockData">
              <input type="hidden" id="iar_nos" name="iar_no">
              <button type="submit" class="btn btn-primary" id="saveButton">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </label>
          </div>
        </form>
       </div>
    </div>
<!-- /.modal-content -->
  </div>
<!-- /.modal-dialog -->
</div>

<script>
  var serialNumber = 1;
  function showData(that) {
    var iar_no = $(that).data('iar_no');
    var id = $(that).data('id');
    var fund = $(that).data('fund');
    var req_dept = $(that).data('req_dept');
    var rcc = $(that).data('rcc');
    var stock_no_str = $(that).data('stock_no');
    var stock_no_array = stock_no_str.split(', ').map(function(item) {
        return item.trim();
    });
    console.log(stock_no_array)

    $('#funds').val(fund);
    $('#req_depts').val(req_dept);
    $('#rccs').val(rcc);
    $('#iar_nos').val(iar_no);
    // $('#risno').val(risNumber);

    // Create an object to store selected stock data
    var selectedStockData = {};

    stock_no_array.forEach(function(stock_no) {
        var checkboxId = 'customCheckbox' + stock_no;
        var isChecked = $('#' + checkboxId).is(':checked');
        var qtyInput = $('input[name="qty[' + stock_no + '"]');
        var remarksInput = $('input[name="remarks[' + stock_no + '"]');
        var unitCostInput = $('input[name="unit_cost[' + stock_no + '"]'); // Add this line


        if (isChecked) {
            var quantity = qtyInput.val();
            var remarks = remarksInput.val();
            var unitCost = unitCostInput.val(); // Add this line

        selectedStockData[stock_no] = { quantity: quantity, remarks: remarks, unit_cost: unitCost }; // Modify this line
        }
    });

    // Use JSON.stringify to convert the object to a JSON string
    var selectedStockDataJSON = JSON.stringify(selectedStockData);

    // Add the selected stock data to a hidden input field in the form
    $('#selectedStockData').val(selectedStockDataJSON);

    $.ajax({
        url: 'risdetails.php',
        method: 'POST',
        data: {
            iar_no: iar_no,
            selectedStockData: selectedStockDataJSON
        },
        success: function(response) {
            if (response.trim() != "No data found") {
                $('#risDetails').html(response);
            } else {
                $('#risDetails').html('<p>No data available.</p>');
            }
        }
    });
}

</script>

<script> 
  $(document).ready(function() {
    // Check All button click event
    $('#checkAll1').click(function() {
        var isChecked = $(this).prop('checked');
        $('#risDetails input[type=checkbox]').prop('checked', isChecked);
        if (isChecked) {
            $('#risDetails tr').addClass('selected');
        } else {
            $('#risDetails tr').removeClass('selected');
        }
    });
  })
</script>

<script>
  var designations = <?php echo json_encode(array_column($emp, 'desig', 'name')); ?>;
    function updateDesignation(selectedName, designationFieldId) {
    if (designations.hasOwnProperty(selectedName)) {
      document.getElementById(designationFieldId).value = designations[selectedName];
    } else {
      document.getElementById(designationFieldId).value = '';
    }
  }

  document.getElementById('requested').addEventListener('change', function() {
    var selectedName = this.value;
    updateDesignation(selectedName, 'req_desig');
  });

  document.getElementById('approved').addEventListener('change', function() {
    var selectedName = this.value;
    updateDesignation(selectedName, 'app_desig');
  });

  document.getElementById('issued').addEventListener('change', function() {
    var selectedName = this.value;
    updateDesignation(selectedName, 'iss_desig');
  });
</script>
</script>


<script>
  function confirmSubmit1(event) {
    event.preventDefault();
    Swal.fire({
    icon: 'success',
    title: 'Successfully Added!',
    showConfirmButton: true,
    }).then((result) => {
      if (result.isConfirmed) {

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
                  event.preventDefault();
                  $.ajax({
                      url: 'controller/delete_delivery.php',
                      type: 'POST',
                      data: {id: id},
                      success: function (response) {
                          console.log(response)
                              Swal.fire(
                                  'Deleted!',
                                  'The record has been deleted.',
                                  'success'
                              ).then(() => {
                                  location.reload();
                              });
                      }
                  });
              }
          });
      }
</script>

<script>
  document.getElementById('add_iar').addEventListener('click', function() {
    Swal.fire({
      title: 'Note: Adding Item is disabled',
      text: 'Please Select a Fund to enabled',
      icon: 'warning',
      confirmButtonText: 'OK'
    });
  });
</script>

<script>
  const dropdown = document.getElementById('fund');
  const myButton = document.getElementById('add_item');

  dropdown.addEventListener('change', function() {
    if (dropdown.value !== "0") {
      myButton.disabled = false;
    } else {
      myButton.disabled = true;
    }
  });
  myButton.disabled = true;
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var fundSelect = document.getElementById("fund");
    
    fundSelect.addEventListener("change", function() {
      var selectedFund = this.value;
      
      var fundInput = document.querySelector("#addItem .modal-body .row .col-3 input[type='text']");
      fundInput.value = selectedFund;
    });
  });
</script>

<script>
  function openNewPage() {
    var url = "printIAR.php";
    
    window.open(url, "_blank");
  }
</script>

<script>
  $(document).ready(function() {
    $('#addIar').on('hidden.bs.modal', function () {
      $('#delivery_no').val('');
      $('#data_delivery').val('');
      $('#supplier').val('');
      $('#po_no').val('');
      $('#po_date').val('');
      $('#del_no').val('');
      $('#del_date').val('');
      $('#ditable').val('');
      $('#fund').val('0');
      $('#req_dept').val('0');
      $('#ditable tbody').empty();
    });

    $('#addItem').on('hidden.bs.modal', function () {
      $('#itemSelect2').val('0');
      $('#item_table').empty();
    });
  });
</script>
<script>
    $(document).ready(function () {
        function checkIARExistence(iarNo) {
            console.log("JavaScript code is running");
            console.log("iarNo: ", iarNo); // Add this line to check the value of iarNo
            $.ajax({
                type: "POST",
                url: "check_iar_existence.php",
                data: { iar_no: iarNo },
                success: function (response) {
                    console.log("Response from check_iar_existence.php: ", response); // Add this line to check the response
                    if (response === "exists") {
    // IAR exists in the database, disable the button
    console.log("IAR exists in the database. Disabling the button.");
    document.getElementById("addRISButton").disabled = true;
} else {
    // IAR doesn't exist in the database, enable the button (if it was disabled)
    console.log("IAR doesn't exist in the database. Enabling the button.");
    document.getElementById("addRISButton").disabled = false;
}

                }
            });
        }

    });
</script>

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

</html>
