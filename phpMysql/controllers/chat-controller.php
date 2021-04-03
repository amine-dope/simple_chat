<?php


if (isset($_POST['envoyer'])){
    $user = $_POST['utilisateur'];
    $messag = $_POST['message'];

    $query = "INSERT INTO messages (utilisateur, contenu_message) VALUES ('$user','$messag')";
    $results =mysqli_query($link, $query); 
    header("Location: index.php");
}
