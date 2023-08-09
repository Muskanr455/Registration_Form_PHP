<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => Project
        $conn = mysqli_connect("localhost", "root", "", "Mussu_Resume");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking Name, Age, Mobile, Email, Gender, School, Work Experience, Skills
        $name = $_REQUEST['name'];
        $roll_no = $_REQUEST['roll_no'];
        $email = $_REQUEST['email'];
        $Gender = $_POST['Gender'];
        $Message = $_POST['Message'];



        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO 'registration form' VALUES ('$name',
			'$roll_no','$email','$Gender','$Message')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the Database Successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            // echo nl2br("\n$first_name\n $last_name\n "
            //     . "$gender\n $address\n $email");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
