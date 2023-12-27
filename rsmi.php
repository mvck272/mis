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
                    <h3> REPORT OF SUPPLIES AND MATERIALS ISSUED (RSMI)</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="genRSMI.php">
                        <div class="row">
                            <div class="col-1">
                                <div class="form-group">
                                    <label for="fund">Select Fund: </label>
                                    <select class="custom-select rounded-0" id="fund" name="fund">
                                        <option value = "0" selected disabled>Select Fund</option>
                                        <option value="F-101">F-101</option>
                                        <option value="F-103">F-103</option>
                                        <option value="F-103A">F-103A</option>
                                        <option value="CFAG">CFAG</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <label> Select Date:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control float-right" id="dateFilter">
                                </div>
                            </div>
                            <div class="col-1">
                            <label>&nbsp;</label>
                            <input type="hidden" name="selectedDate" id="selectedDate" value="">
                                <button id="filterButton" name="filterButton1" type="button" class="btn btn-block btn-outline-success">Filter</button>
                            </div>

                            <div class="col-2">
                            <label>&nbsp;</label>
                                <button type="submit" name="generateRSMIButton" class="btn btn-block btn-outline-primary">Generate RSMI</button>
                            </div>
                        </div>
                        <hr>
                            <table id="showData" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <!-- <th width="6%">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="checkAll">
                                                <label for="checkAll" class="custom-control-label">Check All</label>
                                            </div>
                                        </th> -->
                                        <th width="10%">RIS NO</th>
                                        <th width="6%">Fund</th>
                                        <th width="15%">Division / FOs - Responsibitily Center Code</th>
                                        <th width="10%">Stock No</th>
                                        <th width="20%">Item - Description</th>
                                        <th width="8%">QTY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                    </form>
                </div>
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
    $(document).ready(function() {
        $('#dateFilter').daterangepicker();

        $('#filterButton').click(function() {
            var selectedDateRange = $('#dateFilter').val();
            var selectedFund = $('#fund').val();
            $('#selectedDate').val(selectedDateRange);
            var formData = new FormData();
            formData.append('dateRange', selectedDateRange);
            formData.append('fund', selectedFund);
            $.ajax({
                url: 'filter_ris.php',
                type: 'POST',
                data: { dateRange: selectedDateRange, fund: selectedFund },
                dataType: 'json', // Ensure that the response is treated as JSON
                success: function(response) {
                    if (response.success) {
                        // Log filtered data to the console
                        console.log(response.data);

                        var output = '';
                        $.each(response.data, function(ris_no, risEntries) {
                            $.each(risEntries, function(index, row) {
                                output += '<tr>';
                                output += '<td>' + ris_no + '</td>';
                                output += '<td>' + row.fund + '</td>';
                                output += '<td>' + row.dept + ' - ' + row.rcc + '</td>';
                                output += '<td>' + row.stock_no + '</td>';
                                output += '<td>' + row.item + ' - ' + row.stock_desc + '</td>';
                                output += '<td>' + row.qty + '</td>';
                                output += '</tr>';
                            });
                        });
                        $('#showData tbody').html(output);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: response.message,
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Error while fetching filtered data: ' + error,
                        confirmButtonText: 'OK'
                    });
                }
            });
        });

    });
</script>

<script> 
function showNoDataValidation() {
    Swal.fire({
        icon: 'error',  // You can use 'warning', 'error', or other icons as needed
        title: 'No Data',
        text: 'There is no data to display.',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    });
}
</script>
</html>