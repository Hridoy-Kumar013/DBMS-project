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
        input[type="date"],
        input[type="email"],
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
        .employee-table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 90%;
            text-align: center;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .employee-table th, .employee-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .employee-table th {
            background-color: #41668C;
            color: white;
        }
        .employee-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .employee-table tr:hover {
            background-color: #ddd;
        }
    </style>
    <title>Employees</title>
</head>
<body>

<?php include 'admin-sidebar.php'; ?>

<div class="topnav">
    <a href="logout.php">Logout</a>
</div>

<div class="head">
    <h2>ADD EMPLOYEE DETAILS</h2>
</div>

<div class="form-container">
    <div class="form-content">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <p><label for="eid">Employee ID:</label><input type="number" name="eid" id="eid" required></p>
            <p><label for="efname">First Name:</label><input type="text" name="efname" id="efname" required></p>
            <p><label for="elname">Last Name:</label><input type="text" name="elname" id="elname" required></p>
            <p><label for="ebdate">Date of Birth:</label><input type="date" name="ebdate" id="ebdate" required></p>
            <p><label for="eage">Age:</label><input type="number" name="eage" id="eage" required></p>
            <p><label for="esex">Sex:</label>
                <select id="esex" name="esex" required>
                    <option value="">Select</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Others">Others</option>
                </select>
            </p>
            <p><label for="etype">Employee Type:</label>
                <select id="etype" name="etype" required>
                    <option value="">Select</option>
                    <option value="Pharmacist">Pharmacist</option>
                    <option value="Manager">Manager</option>
                </select>
            </p>
            <p><label for="ejdate">Date of Joining:</label><input type="date" name="ejdate" id="ejdate" required></p>
            <p><label for="esal">Salary:</label><input type="number" step="0.01" name="esal" id="esal" required></p>
            <p><label for="ephno">Phone Number:</label><input type="number" name="ephno" id="ephno" required></p>
            <p><label for="e_mail">Email ID:</label><input type="email" name="e_mail" id="e_mail" required></p>
            <p><label for="eadd">Address:</label><input type="text" name="eadd" id="eadd" required></p>
            <input type="submit" name="add" value="Add Employee">
        </form>
    </div>
</div>

<?php
include "config.php";
if(isset($_POST['add'])) {
    $id = mysqli_real_escape_string($conn, $_REQUEST['eid']);
    $fname = mysqli_real_escape_string($conn, $_REQUEST['efname']);
    $lname = mysqli_real_escape_string($conn, $_REQUEST['elname']);
    $bdate = mysqli_real_escape_string($conn, $_REQUEST['ebdate']);
    $age = mysqli_real_escape_string($conn, $_REQUEST['eage']);
    $sex = mysqli_real_escape_string($conn, $_REQUEST['esex']);
    $etype = mysqli_real_escape_string($conn, $_REQUEST['etype']);
    $jdate = mysqli_real_escape_string($conn, $_REQUEST['ejdate']);
    $sal = mysqli_real_escape_string($conn, $_REQUEST['esal']);
    $phno = mysqli_real_escape_string($conn, $_REQUEST['ephno']);
    $mail = mysqli_real_escape_string($conn, $_REQUEST['e_mail']);
    $add = mysqli_real_escape_string($conn, $_REQUEST['eadd']);
    $sql = "INSERT INTO employee VALUES ($id, '$fname','$lname','$bdate',$age,'$sex','$etype','$jdate','$sal',$phno, '$mail','$add')";
    if(mysqli_query($conn, $sql)) {
        echo "<p class='success-message'>✓ Employee successfully added!</p>";
        echo "<table class='employee-table'>
                <tr>
                    <th>Employee ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Type</th>
                    <th>Joining Date</th>
                    <th>Salary</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
                <tr>
                    <td>{$id}</td>
                    <td>{$fname}</td>
                    <td>{$lname}</td>
                    <td>{$bdate}</td>
                    <td>{$age}</td>
                    <td>{$sex}</td>
                    <td>{$etype}</td>
                    <td>{$jdate}</td>
                    <td>{$sal}</td>
                    <td>{$phno}</td>
                    <td>{$mail}</td>
                    <td>{$add}</td>
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
