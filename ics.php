<?php include 'server/server.php' ?>

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
                    <th>Fund</th>
                    <th>Item - Description</th>
                    <th>Stock No.</th>
                    <th>Qty</th>
                    <th>Action</th>
                    </tr>
                </thead>
                  <tbody>

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
    <div class="modal-dialog modal-xl">
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
                    <select class="form-control" name="fund" id="fund">
                      <option value = "0" selected disabled>Select Fund</option>
                      <option value="F-101">F-101</option>
                      <option value="F-103">F-103</option>
                      <option value="F-103A">F-103A</option>
                      <option value="CFAG">CFAG</option>
                    </select>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>Item Name</label>
                    <div id="item-dropdown">
                      <!-- The fetched item select dropdown will be inserted here -->
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label>Estimate Life</label>
                    <input type="text" class="form-control" id="est_life" name="est_life">
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
                <button type="button" class="btn btn-primary" id="addinItem">Add</button>
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
        // var selectedItem = this.value;
        var item = document.getElementById('itemSelect2').value;

        // Send AJAX request to fetch item details based on the selected stock number
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "itemicsdetails.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              var itemDetails = xhr.responseText ;
              document.getElementById('item_table').innerHTML = itemDetails;
            } else {
              console.error('Error: ' + xhr.status);
            }
          }
        };
        xhr.send("item=" + item);
      });
    } else {
      console.error('Error: itemSelect element not found');
    }
  });
</script>

</html>
