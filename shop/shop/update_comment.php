<?php

    include("datatable.php");
$id = $_POST["id"];
// $name=$_POST["name"];
    $comment = $_POST['comment'];
$statement = updateComment($id, $comment);
    header('Location:/Guestbook/index.php');
