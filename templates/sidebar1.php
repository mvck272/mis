<?php include 'server/server.php' ?>
<?php
  function PageName() {
    return substr( $_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") +1);
  }

  $current_page = PageName();
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/MSD_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CSC SAV</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <h5><span class="right badge badge-primary">
        <?= isset($_SESSION['name']) ? ucfirst($_SESSION['name']) : 'Guest User' ?>
        </span>
        </h5>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <?php if(isset($_SESSION['name']) && isset($_SESSION['user_type']) && $_SESSION['user_type']=='admin'): ?>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="index.php" class="nav-link <?= $current_page=='index.php' ? 'active' : null ?>">
            <i class="nav-icon far fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="deliveryEntry.php" class="nav-link <?= $current_page=='deliveryEntry.php' ? 'active' : null ?>">
            <i class="nav-icon fa fa-truck"></i>
              <p>
                Delivery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ris.php" class="nav-link <?= $current_page=='ris.php' ? 'active' : null ?>">
              <i class="nav-icon far fa-minus-square"></i>
              <p>
                RIS
              </p>
            </a>
          </li>
          <li class="nav-item" id="reports">
            <a href="#" class="nav-link <?= $current_page=='ics.php' ? 'active' : null ?>">
              <i class="nav-icon fa fa-folder"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview <?= ($current_page=='ics.php') ? ' show' : null ?>">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    RPCI
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>
                    RSMI
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>
                    SC
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ics.php" class="nav-link <?= $current_page=='ics.php' ? 'active' : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    ICS
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" id="settings">
            <a href="#" class="nav-link <?= $current_page=='stock.php' || $current_page=='uacs_inv.php' || $current_page=='uacs_exp.php' || $current_page=='employee.php' || $current_page=='dept.php' || $current_page=='user.php' || $current_page=='actLog.php' ? 'active' : null ?>">
              <i class="nav-icon fa fa-gear"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview<?= ($current_page=='stock.php' || $current_page=='uacs_inv.php' || $current_page=='uacs_exp.php' || $current_page=='employee.php' || $current_page=='dept.php' || $current_page=='user.php' || $current_page=='actLog.php') ? ' show' : null ?>">
              <li class="nav-item">
                <a href="stock.php" class="nav-link <?= $current_page=='stock.php' ? 'active' : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stocks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="uacs_inv.php" class="nav-link <?= $current_page=='uacs_inv.php' ? 'active' : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UACS-Inventory</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="uacs_exp.php" class="nav-link <?= $current_page=='uacs_exp.php' ? 'active' : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UACS-Expenses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee.php" class="nav-link <?= $current_page=='employee.php' ? 'active' : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dept.php" class="nav-link <?= $current_page=='dept.php' ? 'active' : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Division/ FO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user.php" class="nav-link <?= $current_page=='user.php' ? 'active' : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="actLog.php" class="nav-link <?= $current_page=='actLog.php' ? 'active' : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activity Log</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      <?php endif ?>
      
      <?php if(isset($_SESSION['name']) && isset($_SESSION['user_type']) && $_SESSION['user_type']=='user'): ?>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="index.php" class="nav-link <?= $current_page=='index.php' ? 'active' : null ?>">
            <i class="nav-icon far fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="deliveryEntry.php" class="nav-link <?= $current_page=='deliveryEntry.php' ? 'active' : null ?>">
            <i class="nav-icon fa fa-truck"></i>
              <p>
                Delivery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="ris.php" class="nav-link <?= $current_page=='ris.php' ? 'active' : null ?>">
              <i class="nav-icon far fa-minus-square"></i>
              <p>
                RIS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-folder"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    RPCI
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>
                    RSMI
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>
                    SC
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    ICS
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      <?php endif ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var settingsItem = document.getElementById("settings");
    var settingsSublist = settingsItem.querySelector("ul");

    if (settingsSublist.classList.contains("show")) {
      settingsItem.classList.add("menu-open");
    }
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var settingsItem = document.getElementById("reports");
    var settingsSublist = settingsItem.querySelector("ul");

    if (settingsSublist.classList.contains("show")) {
      settingsItem.classList.add("menu-open");
    }
  });
</script>
