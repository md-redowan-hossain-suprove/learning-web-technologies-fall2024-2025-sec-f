<?php

if (isset($_POST['submit']))
{
    $email = $_POST['email'];

    if ($email == null) 
    {
        echo "No Input";
    } 
    else 
    {
        header('location: Email.html');
    }
} 
else 
{
    header('location: Email.html');
}