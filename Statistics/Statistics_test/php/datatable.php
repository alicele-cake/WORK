<?php
function dbConnect()
{
    $db_type = 'mysql';
    $db_host = 'localhost';
    $db_name = 'shop_account';
    $db_user = 'root';
    $db_password = '';
    $dbconnect = "mysql:host=" . $db_host . ";dbname=" . $db_name;
    $db = new PDO($dbconnect, $db_user, $db_password);
    $db->query("SET NAMES UTF8");
    return $db;
}
function getData($name)
{
    $db = dbConnect();
    $statement = $db->prepare("SELECT *FROM account where ce_user_name=?");
    $statement->execute([$name]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
