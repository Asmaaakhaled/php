<?php

function register() {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        echo "<h2>Profile Page</h2>";
        echo "<p><strong>First Name:</strong> $firstname</p>";
        echo "<p><strong>Last Name:</strong> $lastname</p>";
        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Email:</strong> $email</p>";

}

function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo "<p><strong>hello Asmaa</strong></p>";
}

if (isset($_POST['username'])) {
    register();
} else {
    login();
}
?>
