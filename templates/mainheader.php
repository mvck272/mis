<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="controller/logout.php" type="button" id="logoutButton">
            Logout
        </a>
    </li>
    </ul>
  </nav>
<script>
  // Select the Logout link by its ID
  const logoutButton = document.getElementById('logoutButton');

  // Attach a click event listener to the Logout link
  logoutButton.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent the default behavior of the link

    // Show the SweetAlert confirmation dialog
    Swal.fire({
      title: 'Logout',
      text: 'Are you sure you want to log out?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, log me out!',
    }).then((result) => {
      // If the user clicks the "Yes, log me out!" button, proceed with the logout
      if (result.isConfirmed) {
        // Redirect to the logout.php page
        window.location.href = 'controller/logout.php';
      }
    });
  });
</script>