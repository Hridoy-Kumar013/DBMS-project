<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form4.css">
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
            text-align: right;
        }
        .topnav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .topnav a:hover {
            text-decoration: underline;
        }
        .success-message,
        .error-message {
            margin: 20px auto;
            font-size: 14px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            width: fit-content;
        }
        .success-message {
            color: green;
            background: #e8f5e9;
        }
        .error-message {
            color: red;
            background: #ffebee;
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
        .customer-table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            text-align: center;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .customer-table th, .customer-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .customer-table th {
            background-color: #41668C;
            color: white;
        }
        .customer-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .customer-table tr:hover {
            background-color: #ddd;
        }
    </style>
    <title>Customers</title>
</head>
<body>

<?php include 'admin-sidebar.php'; ?>

<div class="topnav">
    <a href="logout.php">Logout</a>
</div>

<div class="head">
    <h2>ADD CUSTOMER DETAILS</h2>
</div>

<div class="form-container">
    <div class="form-content">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
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
        echo "<table class='customer-table'>
                <tr>
                    <th>Customer ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Phone Number</th>
                    <th>Email ID</th>
                </tr>
                <tr>
                    <td>{$id}</td>
                    <td>{$fname}</td>
                    <td>{$lname}</td>
                    <td>{$age}</td>
                    <td>{$sex}</td>
                    <td>{$phno}</td>
                    <td>{$mail}</td>
                </tr>
              </table>";
    } else {
        echo "<p class='error-message'>✗ Error! Check details.</p>";
    }
}
$conn->close();
?>

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

</body>
</html>
