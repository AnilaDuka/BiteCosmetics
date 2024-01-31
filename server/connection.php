<?php

$conn = mysqli_connect("localhost","root","","bitecosmetics");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); //returns the error description from the last connection error, if any.
}
?>