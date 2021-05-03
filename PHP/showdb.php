<html>

<head>
    <title>Database</title>
</head>

<body>
    <?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "employee";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM employee_master";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table cellpadding="4px" cellspacing="2" border="1">
            <tr>
                <td>Employee Id</td>
                <td>Employee Name</td>
                <td>Job title</td>
                <td>Year of experience</td>
                <td></td>
                <td></td>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row["emp_id"] ?></td>
                    <td><?php echo $row["ename"] ?></td>
                    <td><?php echo $row["job"] ?></td>
                    <td><?php echo $row["expe"] ?></td>
                    <?php
                    $en = $row["emp_id"];
                    $que = "en=$en";
                    echo '<td><a href="update.php?' . $que . '"><button>Update</button></a></td>';
                    echo '<td><a href="delete.php?' . $que . '"><button>Delete</button></a></td>';
                    ?>
                </tr>
            <?php
            }
            ?>
        </table>
    <?php
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    <br><br>
    <a href="insert.php"><button>Insert Record</button></a>
</body>

</html>