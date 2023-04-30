<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <?php include 'navigation.php'; ?>
    <form method="post">
        <input type="text" name="pseudo" id="pseudo" placeholder="votre identifiant"required><br/>>
        <input type="text" name="email" id="email" placeholder="votre email"required><br/>>
        <input type="passwords" name="passwords" id="passwords" placeholder="votre mots de passe">
        <input type="submit" name="formsend" id="formsend"value="ok">
        
        
</form>

<?php

if (isset($_POST['formsend'])){

    extract($_POST);
        $options = [
            'cost' => 12,
        ];
