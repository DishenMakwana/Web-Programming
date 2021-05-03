<html>

<head>
    <title>Employee Registration Form</title>
</head>

<body>

    <?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "employee";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $emp_id = $_REQUEST['emp_id'];
        $ename = $_REQUEST['ename'];
        $job = $_REQUEST['job'];
        $expe = $_REQUEST['expe'];

        $sql =
            "INSERT INTO `employee_master` (emp_id, ename, job, expe) VALUES ('$emp_id','$ename','$job','$expe')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    ?>
    <br>
    <form action="" method="post">
        Employee Id : <input type="text" name="emp_id">
        <br><br>
        Employee Name : <input type="text" name="ename" placeholder="Enter Your Name">
        <br><br>
        Job title : <input type="text" name="job">
        <br><br>
        Year of experience : <input type="text" name="expe">
        <br><br>
        <input type="submit" value="Register">
    </form>
    <a href="showdb.php"><button>Show Database</button></a>
</body>

</html>