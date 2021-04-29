<html>

<head>
    <title>
        Display Student Data
    </title>
</head>

<body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "db2");
    $query = "SELECT * FROM user";

    echo '<table border="1" cellspacing="2" cellpadding="2">
    <tr>
    <td> <font face="Arial">Student Id</font> </td>
    <td> <font face="Arial">Student Enrollment Number</font> </td>
    <td> <font face="Arial">Student Name</font> </td>
    <td> <font face="Arial">Semester</font> </td>
    <td> <font face="Arial">Gender</font> </td>
    <td> <font face="Arial">Qualification</font> </td>
    </tr>';
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["id"];
            $field2name = $row["er_no"];
            $field3name = $row["sname"];
            $field4name = $row["semester"];
            $field5name = $row["gender"];
            $field6name = $row["qualification"];

            echo '<tr>
                    <td>' . $field1name . '</td>
                    <td>' . $field2name . '</td>
                    <td>' . $field3name . '</td>
                    <td>' . $field4name . '</td>
                    <td>' . $field5name . '</td>
                    <td>' . $field6name . '</td>
                    </tr>';
        }
        $result->free();
    }
    ?>
</body>

</html>