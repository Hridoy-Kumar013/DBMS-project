<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form4.css">
    <style>
        body {
            font-family: Arial;
            padding-top: 20px;
        }
        .form-container {
            margin-left: 200px;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .form-content {
            width: 400px;
            max-width: 100%;
        }
        .head h2 {
            margin-left: 200px;
            text-align: left;
            padding-top: 10px;
            color: #333;
        }
        .topnav {
            margin-left: 150px;
            background: #41668C;
            padding: 10px;
        }
        .success-message {
            margin-left: 200px;
            font-size: 14px;
            color: green;
            padding: 10px;
            background: #e8f5e9;
            width: fit-content;
            border-radius: 4px;
        }
        .error-message {
            margin-left: 200px;
            font-size: 14px;
            color: red;
            padding: 10px;
            background: #ffebee;
            width: fit-content;
            border-radius: 4px;
        }
        input[type="number"], 
        input[type="text"], 
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        label {
            font-weight: bold;
            color: #555;
        }
    </style>
    <title>Purchases</title>
</head>

<body>

    <div class="sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;"> Pharmacy Management System </h2>
        <a href="adminmainpage.php">Dashboard</a>
        <button class="dropdown-btn">Inventory
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="inventory-add.php">Add New Medicine</a>
            <a href="inventory-view.php">Manage Inventory</a>
        </div>
        <button class="dropdown-btn">Suppliers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="supplier-add.php">Add New Supplier</a>
            <a href="supplier-view.php">Manage Suppliers</a>
        </div>
        <button class="dropdown-btn">Stock Purchase
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="purchase-add.php">Add New Purchase</a>
            <a href="purchase-view.php">Manage Purchases</a>
        </div>        
        <button class="dropdown-btn">Employees
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="employee-add.php">Add New Employee</a>
            <a href="employee-view.php">Manage Employees</a>
        </div>            
        <button class="dropdown-btn">Customers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="customer-add.php">Add New Customer</a>
            <a href="customer-view.php">Manage Customers</a>
        </div>
        <a href="sales-view.php">View Sales Invoice Details</a>
        <a href="salesitems-view.php">View Sold Products Details</a>
        <a href="pos1.php">Add New Sale</a>            
        <button class="dropdown-btn">Reports
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="stockreport.php">Medicines - Low Stock</a>
            <a href="expiryreport.php">Medicines - Soon to Expire</a>
            <a href="salesreport.php">Transactions - Last Month</a>                
        </div>            
    </div>

    <div class="topnav">
        <a href="logout.php">Logout</a>
    </div>
    
    <div class="head">
        <h2>ADD PURCHASE DETAILS</h2>
    </div>
    
    <div class="form-container">
        <div class="form-content">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <p>
                    <label for="pid">Purchase ID:</label>
                    <input type="number" name="pid" id="pid" required>
                </p>
                <p>
                    <label for="sid">Supplier ID:</label>
                    <input type="number" name="sid" id="sid" required>
                </p>
                <p>
                    <label for="mid">Medicine ID:</label>
                    <input type="number" name="mid" id="mid" required>
                </p>
                <p>
                    <label for="pqty">Purchase Quantity:</label>
                    <input type="number" name="pqty" id="pqty" required>
                </p>
                <p>
                    <label for="pcost">Purchase Cost:</label>
                    <input type="number" step="0.01" name="pcost" id="pcost" required>
                </p>
                <p>
                    <label for="pdate">Date of Purchase:</label>
                    <input type="date" name="pdate" id="pdate" required>
                </p>
                <p>
                    <label for="mdate">Manufacturing Date:</label>
                    <input type="date" name="mdate" id="mdate" required>
                </p>
                <p>
                    <label for="edate">Expiry Date:</label>
                    <input type="date" name="edate" id="edate" required>
                </p>
                
                <input type="submit" name="add" value="Add Purchase">
            </form>
            
            <?php
            include "config.php";
             
            if(isset($_POST['add']))
            {
                $pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
                $sid = mysqli_real_escape_string($conn, $_REQUEST['sid']);
                $mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
                $qty = mysqli_real_escape_string($conn, $_REQUEST['pqty']);
                $cost = mysqli_real_escape_string($conn, $_REQUEST['pcost']);
                $pdate = mysqli_real_escape_string($conn, $_REQUEST['pdate']);
                $mdate = mysqli_real_escape_string($conn, $_REQUEST['mdate']);
                $edate = mysqli_real_escape_string($conn, $_REQUEST['edate']);

                $sql = "INSERT INTO purchase VALUES ($pid, $sid, $mid,'$qty','$cost','$pdate','$mdate','$edate')";
                if(mysqli_query($conn, $sql)){
                    echo "<p class='success-message'>✓ Purchase details successfully added!</p>";
                } else{
                    echo "<p class='error-message'>✗ Error! Check details.</p>";
                }
            }
             
            $conn->close();
            ?>
        </div>
    </div>
        
</body>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

</html>