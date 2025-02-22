<?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$message = $_POST["message"];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contact</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        table {
            width: 50%; /* Or a specific width */
            border-collapse: collapse; /* Collapse table borders */
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<table>
        <tr>
            <th>Nom</th>
            <td><?php echo $nom; ?></td>
        </tr>
        <tr>
            <th>Prénom</th>
            <td><?php echo $prenom; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Message</th>
            <td><?php echo $message; ?></td>
        </tr>
    </table>

</body>
</html>