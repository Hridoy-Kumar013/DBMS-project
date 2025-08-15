<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form4.css">
    <link rel="stylesheet" type="text/css" href="table1.css">
    <style>
        body {
            padding-top: 20px;
            font-family: Arial, sans-serif;
        }
        .form-container {
            margin-left: 200px;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .form-content {
            width: 600px;
            max-width: 100%;
        }
        .head h2 {
            margin-left: 200px;
            text-align: left;
            padding-top: 10px;
            color: #333;
        }
        .topnav {
            margin-left: 200px;
            background: #f8f9fa;
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
        .form-row {
            display: flex;
            gap: 20px;
        }
        .form-column {
            flex: 1;
        }
    </style>
    <title>Customers</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidenav">
        <h2 style="font-family:Arial; color:white; text-align:center;">Pharmacy Management System</h2>
        <a href="pharmmainpage.php">Dashboard</a>
        <a href="pharm-inventory.php">View Inventory</a>
        <a href="pharm-pos1.php">Add New Sale</a>
        <button class="dropdown-btn">Customers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="pharm-customer.php">Add New Customer</a>
            <a href="pharm-customer-view.php">View Customers</a>
        </div>
    </div>

    <?php
    include "config.php";
    session_start();
    
    $sql = "SELECT E_FNAME from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    
    $ename = $row[0];
    ?>

    <div class="topnav">
        <a href="logout1.php">Logout(signed in as <?php echo $ename; ?>)</a>
    </div>
    
    <div class="head">
        <h2>ADD CUSTOMER DETAILS</h2>
    </div>
    
    <div class="form-container">
        <div class="form-content">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <div class="form-row">
                    <div class="form-column">
                        <p>
                            <label for="cid">Customer ID:</label>
                            <input type="number" name="cid" id="cid" required>
                        </p>
                        <p>
                            <label for="cfname">First Name:</label>
                            <input type="text" name="cfname" id="cfname" required>
                        </p>
                        <p>
                            <label for="clname">Last Name:</label>
                            <input type="text" name="clname" id="clname" required>
                        </p>
                        <p>
                            <label for="age">Age:</label>
                            <input type="number" name="age" id="age" required>
                        </p>
                    </div>
                    <div class="form-column">
                        <p>
                            <label for="sex">Sex:</label>
                            <select id="sex" name="sex" required>
                                <option value="">Select</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Others">Others</option>
                            </select>
                        </p>
                        <p>
                            <label for="phno">Phone Number:</label>
                            <input type="number" name="phno" id="phno" required>
                        </p>
                        <p>
                            <label for="emid">Email ID:</label>
                            <input type="text" name="emid" id="emid" required>
                        </p>
                    </div>
                </div>
                <input type="submit" name="add" value="Add Customer">
            </form>
        </div>
    </div>
            
    <?php
    include "config.php";
     
    if(isset($_POST['add'])) {
        $id = mysqli_real_escape_string($conn, $_REQUEST['cid']);
        $fname = mysqli_real_escape_string($conn, $_REQUEST['cfname']);
        $lname = mysqli_real_escape_string($conn, $_REQUEST['clname']);
        $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
        $sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
        $phno = mysqli_real_escape_string($conn, $_REQUEST['phno']);
        $mail = mysqli_real_escape_string($conn, $_REQUEST['emid']);

        $sql = "INSERT INTO customer VALUES ($id, '$fname', '$lname', $age, '$sex', $phno, '$mail')";
        if(mysqli_query($conn, $sql)) {
            echo "<p class='success-message'>✓ Customer successfully added!</p>";
        } else {
            echo "<p class='error-message'>✗ Error! Check details.</p>";
        }
    }
     
    $conn->close();
    ?>
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