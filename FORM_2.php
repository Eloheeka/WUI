<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['nm']);
    $student = htmlspecialchars($_POST['id_number']);
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $dob = htmlspecialchars($_POST['dob']);
    $bio = htmlspecialchars($_POST['bio']);
    $education = isset($_POST['education']) ? htmlspecialchars(implode(", ", $_POST['education'])) : "None";
    $time = htmlspecialchars($_POST['appointment_time']);
    
    echo <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Information</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: 20px auto;
                background-color:powderblue;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f4f4f4;
            }
        </style>
    </head>
    <body>
        <h1 text-align="center";>Here's your form information</h1>
        <table>
            <tr background-color="green";>
                <th>Field</th>
                <th>Information</th>
            </tr>
            <tr>
                <td>Names</td>
                <td>$name</td>
            </tr>
            <tr>
                <td>ID Number</td>
                <td>$student</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>$gender</td>
            </tr>
            <tr>
                <td>Country</td>
                <td>$country</td>
            </tr>
            <tr>
                <td>Email Account</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>$password</td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>$dob</td>
             </tr>
                <td>BIO</td>
                <td>$bio</td>
            </tr>
            <tr>
                <td>Education Background</td>
                <td>$education</td>
            </tr>
            <tr>
                <td>Submission Time</td>
                <td>$time</td>
        </tr>
        </table>
    </body>
    </html>
    HTML;
} else {
    echo "<p>Incomplete Information</p>";
}
