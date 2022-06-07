<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("USERS1");
$dbpwd = getenv("");
$dbname = getenv("ecs417");
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
$conn = mysqli_connect($servername,$dbname, $username ,$password);   /*  new */
    $conn = new PDO(
        "mysql:host=$servername; dbname=loginPage",
        $username, $password

    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 

