<?php


function register() {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $register=$_POST['register'];
        echo "<h2>Profile Page</h2>";
        echo "<p><strong>First Name:</strong> $firstname</p>";
        echo "<p><strong>Last Name:</strong> $lastname</p>";
        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Email:</strong> $email</p>";

}

function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login=$_POST['login'];
        echo "<p><strong>hello $email</strong></p>";
}

// if (isset($_POST['username'])) {
//     register();
// } else {
//     login();
// }
if (isset($_POST['register'])) {
    register();
} else if(isset($_POST['login'])) {
    login();
}
?>
