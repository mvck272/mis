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
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-12 connectedSortable">
              <div class="card card-success">
                <div class="card-header">
                  <label for="year">Select a Year:</label>
                  <select id="year" onchange="updateChart()"></select>

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
                    <canvas id="barChart" style="min-height: 315px; height: 250px; max-height: 250px; max-width: 100%;"
                            data-f101="<?php echo $count_f101; ?>"
                            data-f103="<?php echo $count_f103; ?>"
                            data-f103a="<?php echo $count_f103a; ?>"
                            data-cfag="<?php echo $count_cfag; ?>"></canvas>
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
  // Your initial chart data
  var areaChartData = {
    labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] ,
    datasets: [
      // Your datasets here
    ]
  };

  const currentYear = new Date().getFullYear();
const yearDropdown = document.getElementById('year');

for (let year = currentYear; year >= 2010; year--) {
  const option = document.createElement('option');
  option.value = year;
  option.text = year;
  yearDropdown.add(option);
}

// Create the initial chart
var barChartCanvas = $('#barChart').get(0).getContext('2d');
var barChart = new Chart(barChartCanvas, {
  type: 'bar',
  data: areaChartData,
  options: {
    responsive: true,
    maintainAspectRatio: false,
    datasetFill: false
  }
});

// Function to update the chart based on the selected year
function updateChart() {
    var selectedYear = document.getElementById('year').value;

    // Fetch data dynamically using AJAX
    $.ajax({
        url: 'barData.php',
        type: 'POST',
        data: { year: selectedYear },
        dataType: 'json',
        success: function (data) {
            // Assuming the structure of the returned data is { datasets: [...], months: [...] }
            areaChartData.labels = data.months;
            barChart.data.datasets = data.datasets;
            barChart.update();
        },
        error: function (error) {
            console.log('Error fetching data:', error);
        }
    });
}

updateChart();
</script>
</html>
