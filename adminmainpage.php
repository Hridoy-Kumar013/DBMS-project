<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="nav2.css">
  <style>
    .dashboard-icons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 40px;
    }

    .dashboard-icons a img {
      width: 160px;
      height: 160px;
      border: 2px solid #ccc;
      border-radius: 10px;
      padding: 10px;
      transition: transform 0.2s ease;
      background-color: white;
    }

    .dashboard-icons a img:hover {
      transform: scale(1.05);
      border-color: #1abc9c;
    }

    .head {
      margin-left: 200px;
      padding: 20px;
      margin-top: 80px;
      font-size: 24px;
      font-weight: 600;
      color: #003366;
      text-align: -webkit-center;
    }

    .welcome-message {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      color: #1abc9c;
      margin-top: 20px;
      padding: 10px;
      background-color: #f8f9fa;
      border-radius: 5px;
    }
  </style>
</head>

<body>

  <!-- Sidebar -->
  <div class="sidenav">
    <h2 style="color:white; text-align:center;">Pharmacy Management System</h2>

    <a href="adminmainpage.php">Dashboard</a>

    <button class="dropdown-btn">Inventory <i class="down"></i></button>
    <div class="dropdown-container">
      <a href="inventory-add.php">Add New Medicine</a>
      <a href="inventory-view.php">Manage Inventory</a>
    </div>

    <button class="dropdown-btn">Employees <i class="down"></i></button>
    <div class="dropdown-container">
      <a href="employee-add.php">Add New Employee</a>
      <a href="employee-view.php">Manage Employees</a>
    </div>

    <button class="dropdown-btn">Customers <i class="down"></i></button>
    <div class="dropdown-container">
      <a href="customer-add.php">Add New Customer</a>
      <a href="customer-view.php">Manage Customers</a>
    </div>

    <a href="sales-view.php">View Sales Invoice Details</a>
    <a href="salesitems-view.php">View Sold Products Details</a>
  </div>

  <!-- Top Bar -->
  <div class="topnav">
    <a href="logout.php">Logout (Admin)</a>
  </div>

  <!-- Dashboard Header -->
  <div class="head">
    ADMIN DASHBOARD
  </div>

  <!-- Welcome Message -->
  <div class="welcome-message">
    <p>Welcome to Admin Panel</p>
  </div>

  <!-- Dashboard Shortcuts -->
  <div class="dashboard-icons">
    <a href="inventory-view.php" title="View Inventory">
      <img src="new1.png" alt="Inventory">
    </a>

    <a href="employee-view.php" title="View Employees">
      <img src="emp12.png" alt="Employees">
    </a>
  </div>

  <!-- Dropdown Toggle Script -->
  <script>
    const dropdown = document.getElementsByClassName("dropdown-btn");
    for (let i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        const content = this.nextElementSibling;
        content.style.display = content.style.display === "block" ? "none" : "block";
      });
    }
  </script>

</body>

</html>
