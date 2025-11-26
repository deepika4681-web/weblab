<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    echo "
    <div style='
        background:#f2f2f2;
        padding:30px;
        width:400px;
        margin:50px auto;
        border-radius:10px;
        font-family:Arial;'>
        
        <h2>Message Sent Successfully!</h2>
        <p><b>Name:</b> $name</p>
        <p><b>Email:</b> $email</p>
        <p><b>Message:</b><br>$message</p>

        <a href='index.html' style='display:inline-block;
            margin-top:20px;
            padding:10px 20px;
            background:#1a73e8;
            color:white;
            text-decoration:none;
            border-radius:5px;'>
            Go Back
        </a>
    </div>
    ";
}
?>
