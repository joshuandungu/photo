<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'photography';

$con = mysqli_connect($servername, $username, $password, $db_name);

if (!$con) {
    echo "Connection failed";
} else {
    echo "Connection successful";
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $number = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);

    if (empty($name) || empty($email) || empty($number)) {
        echo "<script>alert('All fields are required. Please fill them in.');</script>";
    } else {
        $query = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number')";
        $result = mysqli_query($con, $query);

        if ($result == TRUE) {
            echo "<script>alert('Thank You for contacting us. We shall attend to you shortly');</script>";
            header("location: index.php");
            exit();
        } else {
            echo "<script>alert('Failed. Something went wrong. Please try again later');</script>";
            header("location: index.php#contact");
            exit();
        }
    }
} else {
    echo "<script>alert('All fields are required. Please fill them in.');</script>";
}
?>
