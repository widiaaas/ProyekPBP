<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bagian Akademik</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <style>
    body, h1, h2, h3, h4, h5 { font-family: "Poppins", sans-serif; }
    body { font-size: 16px; }
    .w3-half img { margin-bottom: -6px; margin-top: 16px; opacity: 0.8; cursor: pointer; }
    .w3-half img:hover { opacity: 1; }

    /* CSS for header */
    .w3-header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    /* Adding some top margin for the main content */
    .w3-main {
      margin-top: 80px;
      background-color: #f4f4f4;
      padding: 20px;
    }

    /* Custom marina color for navbar */
    .w3-marina {
      background-color: #003f5c;
      color: white;
    }

    /* Styling for active button */
    .active-button {
      background-color: #c0c0c0; /* Light grey color for active state */
    }
  </style>
</head>
<body>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer; display:none;" title="close side menu" id="myOverlay"></div>

<!-- Navbar -->
<header class="w3-container w3-marina w3-large w3-header">
  <a href="javascript:void(0)" class="w3-button w3-margin-right sidebar-toggle-btn" onclick="toggleSidebar()">☰</a>
  <span>Back to Menu</span>
</header>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-dark-gray w3-collapse w3-top w3-large w3-padding" style="z-index:3; width:300px; font-weight:bold; display:none;" id="mySidebar">
  <br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-display-topleft" style="width:100%; font-size:22px">Close Menu</a>
  <br><br>
  <p class="w3-center">
    <div class="circle-background">
      <img src="/img/avatar.png" class="w3-circle" style="height:106px; width:106px;" alt="Avatar">
    </div>
  </p>
  <h4 class="w3-center w3-orange w3-hover-white">Lihat Profil</h4>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Dashboard</a> 
    <a href="#ruangkelas" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Ruang Kelas</a> 
    <a href="#kapasitas" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kapasitas</a> 
    <a href="#aksespengguna" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Akses Pengguna</a> 
  </div>
</nav>

<!-- Main Content -->
<div class="w3-main" style="margin-left:340px; margin-right:40px;">
  <h1 class="w3-text-gray"><b>RUANG KELAS</b></h1>
  <!-- Your content goes here -->
</div>

<script>
let isSidebarOpen = false;

function toggleSidebar() {
  const toggleButton = document.querySelector('.sidebar-toggle-btn');
  if (isSidebarOpen) {
    w3_close();
    toggleButton.classList.remove('active-button');
  } else {
    w3_open();
    toggleButton.classList.add('active-button');
  }
}

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
  isSidebarOpen = true;
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
  isSidebarOpen = false;
}

// Close the sidebar when the overlay is clicked
document.getElementById("myOverlay").onclick = function() {
  w3_close();
};
</script>

</body>
</html>
