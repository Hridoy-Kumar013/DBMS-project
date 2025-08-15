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
    </style>
    <title>Medicines</title>
</head>

<body>

    <!-- Sidebar -->
    <?php include 'admin-sidebar.php'; ?>

    <div class="topnav">
        <a href="logout.php">Logout</a>
    </div>
    
    <div class="head">
        <h2>ADD MEDICINE DETAILS</h2>
    </div>
    
    <div class="form-container">
        <div class="form-content">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <p>
                    <label for="medid">Medicine ID:</label>
                    <input type="number" name="medid" required>
                </p>
                <p>
                    <label for="medname">Medicine Name:</label>
                    <input type="text" name="medname" required>
                </p>
                <p>
                    <label for="qty">Quantity:</label>
                    <input type="number" name="qty" min="1" required>
                </p>
                <p>
                    <label for="cat">Category:</label>
                    <select id="cat" name="cat" required>
                        <option value="">Select Category</option>
                        <option value="Tablet">Tablet</option>
                        <option value="Capsule">Capsule</option>
                        <option value="Syrup">Syrup</option>
                        <option value="Injection">Injection</option>
                        <option value="Ointment">Ointment</option>
                    </select>
                </p>
                <p>
                    <label for="sp">Price (Tk):</label>
                    <input type="number" step="0.01" min="0" name="sp" required>
                </p>
                <p>
                    <label for="loc">Location (Shelf):</label>
                    <input type="text" name="loc" required placeholder="e.g., A12, B5">
                </p>
                <input type="submit" name="add" value="Add Medicine">
            </form>
        </div>
    </div>
            
    <?php
    include "config.php";
     
    if(isset($_POST['add'])) {
        $id = mysqli_real_escape_string($conn, $_REQUEST['medid']);
        $name = mysqli_real_escape_string($conn, $_REQUEST['medname']);
        $qty = mysqli_real_escape_string($conn, $_REQUEST['qty']);
        $category = mysqli_real_escape_string($conn, $_REQUEST['cat']);
        $sprice = mysqli_real_escape_string($conn, $_REQUEST['sp']);
        $location = mysqli_real_escape_string($conn, $_REQUEST['loc']);

        $sql = "INSERT INTO meds VALUES ($id, '$name', $qty, '$category', $sprice, '$location')";
        if(mysqli_query($conn, $sql)) {
            echo "<p class='success-message'>✓ Medicine details successfully added!</p>";
        } else {
            echo "<p class='error-message'>✗ Error! Please check all details.</p>";
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