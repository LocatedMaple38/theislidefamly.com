<!-- filepath: /c:/Users/Student/Desktop/code/github/theislidefamly.com/test.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $display_name = htmlspecialchars($_POST['display_name']);
    $password = htmlspecialchars($_POST['password']);
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $zip = htmlspecialchars($_POST['zip']);
    $country = htmlspecialchars($_POST['country']);
    $state = htmlspecialchars($_POST['state']);
    
    $data = "Email: $email, Display Name: $display_name, Password: $password, First Name: $first_name, Last Name: $last_name, Phone: $phone, Address: $address, Zip: $zip, Country: $country, State: $state\n";
    
    $file = fopen("submissions.txt", "a+");
    fwrite(stream: $file, data: $data);
    fclose(stream: $file);
    
    echo "Thank you for signing up!";
}
?>