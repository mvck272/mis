<?php include 'server/server.php' ?>

<?php 
// Retrieve the count for each fund from the database
$stmt_f101 = $conn->prepare("SELECT COUNT(id) AS count FROM stock_tbl WHERE fund = 'F-101'");
$stmt_f101->execute();
$result_f101 = $stmt_f101->fetch(PDO::FETCH_ASSOC);
$count_f101 = $result_f101['count'];

$stmt_f103 = $conn->prepare("SELECT COUNT(id) AS count FROM stock_tbl WHERE fund = 'F-103'");
$stmt_f103->execute();
$result_f103 = $stmt_f103->fetch(PDO::FETCH_ASSOC);
$count_f103 = $result_f103['count'];

$stmt_f103a = $conn->prepare("SELECT COUNT(id) AS count FROM stock_tbl WHERE fund = 'F-103A'");
$stmt_f103a->execute();
$result_f103a = $stmt_f103a->fetch(PDO::FETCH_ASSOC);
$count_f103a = $result_f103a['count'];

$stmt_cfag = $conn->prepare("SELECT COUNT(id) AS count FROM stock_tbl WHERE fund = 'CFAG'");
$stmt_cfag->execute();
$result_cfag = $stmt_cfag->fetch(PDO::FETCH_ASSOC);
$count_cfag = $result_cfag['count'];

// Close the database connection
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>

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
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><?php echo $count_f101; ?></span>

              <div class="info-box-content">
                <span class="info-box-text">
                  <h2><strong>F-101</strong></h2>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><?php echo $count_f103; ?></span>

              <div class="info-box-content">
                <span class="info-box-text">
                  <h2><strong>F-103</strong></h2>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><?php echo $count_f103a; ?></span>

              <div class="info-box-content">
                <span class="info-box-text">
                  <h2><strong>F-103A</strong></h2>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><?php echo $count_cfag; ?></span>

              <div class="info-box-content">
                <span class="info-box-text">
                  <h2><strong>CFAG</strong></h2>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-3 connectedSortable">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Choose Date</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                  <label>From Date:</label>
                    <div class="input-group date" id="fromdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#fromdate"/>
                        <div class="input-group-append" data-target="#fromdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>To Date:</label>
                    <div class="input-group date" id="todate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#todate"/>
                        <div class="input-group-append" data-target="#todate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-9 connectedSortable">
          <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 315px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> -->
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
   $('#fromdate').datetimepicker({
        format: 'L'
    });
    
    $('#todate').datetimepicker({
         format: 'L'
     });
</script>
<script>
  var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', ' September', 'October', 'November', 'December'] ,
      datasets: [
        
        {
          label               : 'F-103',
          backgroundColor     : 'rgb(19, 164, 232)',
          borderColor         : 'rgb(19, 164, 232)',
          pointRadius         : false,
          pointColor          : 'rgb(19, 164, 232)',
          pointStrokeColor    : '#13A4E8',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label               : 'F-101',
          backgroundColor     : 'rgb(11, 222, 57)',
          borderColor         : 'rgb(11, 222, 57)',
          pointRadius          : false,
          pointColor          : '#11E240',
          pointStrokeColor    : 'rgb(11, 222, 57)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'F-103A',
          backgroundColor     : 'rgb(248, 246, 4)',
          borderColor         : 'rgb(248, 246, 4)',
          pointRadius         : false,
          pointColor          : 'rgb(248, 246, 4)',
          pointStrokeColor    : '##F8F604',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label               : 'CFAG',
          backgroundColor     : 'rgb(248, 4, 7)',
          borderColor         : 'rgb(248, 4, 7)',
          pointRadius         : false,
          pointColor          : 'rgb(248, 4, 7)',
          pointStrokeColor    : '#F80407',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }
 var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })
</script>
</html>
