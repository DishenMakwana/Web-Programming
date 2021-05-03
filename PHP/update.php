<html>

<head>
    <title>Employee Update Data Form</title>
</head>

<body>

    <?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "employee";
    $en = $_GET["en"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $emp_id = $_REQUEST['emp_id'];
        $ename = $_REQUEST['ename'];
        $job = $_REQUEST['job'];
        $expe = $_REQUEST['expe'];

        $sql = "UPDATE employee_master SET emp_id='$emp_id',ename='$ename',job='$job',expe='$expe' WHERE emp_id=$en";
        if (mysqli_query($conn, $sql)) {
            echo "One record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    $sql = "SELECT * FROM employee_master where emp_id=$en";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
    ?>
        <form action="" method="post">
            Employee Id : <input type="text" name="emp_id" value="<?php echo $row["emp_id"] ?>">
            <br><br>
            Employee Name : <input type="text" name="ename" placeholder="Enter Your Name" value="<?php echo $row["ename"] ?>">
            <br><br>
            Job title : <input type="text" name="job" value="<?php echo $row["job"] ?>">
            <br><br>
            Year of experience : <input type="text" name="expe" value="<?php echo $row["expe"] ?>">
            <br><br>
            <input type="submit" value="Update Record">
        </form>
    <?php } ?>
    <a href="showdb.php"><button>Show Database</button></a>
</body>

</html>