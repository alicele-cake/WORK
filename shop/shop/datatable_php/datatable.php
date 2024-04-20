<?php

// session_start();
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

function store_Connect()
{
    $db_type = 'mysql';
    $db_host = 'localhost';
    $db_name = 'shop';
    $db_user = 'root';
    $db_password = '';
    $dbconnect = "mysql:host=" . $db_host . ";dbname=" . $db_name;
    $db = new PDO($dbconnect, $db_user, $db_password);
    $db->query("SET NAMES UTF8");
    return $db;
}

function store_messageConnect()
{
    $db_type = 'mysql';
    $db_host = 'localhost';
    $db_name = 'shop_message';
    $db_user = 'root';
    $db_password = '';
    $dbconnect = "mysql:host=" . $db_host . ";dbname=" . $db_name;
    $db = new PDO($dbconnect, $db_user, $db_password);
    $db->query("SET NAMES UTF8");
    return $db;
}

function information_Connect() //無資料庫
{
    $db_type = 'mysql';
    $db_host = 'localhost';
    $db_name = 'guestbook_user_information'; //資料庫名稱
    $db_user = 'root';
    $db_password = '';
    $dbconnect = "mysql:host=" . $db_host . ";dbname=" . $db_name;
    $db = new PDO($dbconnect, $db_user, $db_password);
    $db->query("SET NAMES UTF8");
    return $db;
}

function account_Connect()
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




function getUserName()
{
    $db = dbConnect();
    $statement = $db->prepare("SELECT *FROM account");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}





function createComment($commodity_number, $name, $commodity_type_name, $star, $date, $comment)
{
    $db = store_messageConnect();
    $name = $_SESSION["user_name"];
    $statement = $db->prepare("INSERT INTO message(commodity_number,commentator_name, commodity_type_name, date, star, comment) VALUES(?,?,?,?,?,?)"); //??
    $statement->execute([$commodity_number, $name, $commodity_type_name, $date, $star, $comment]);
    return $statement;
}

function getAllComments()
{
    $db = store_messageConnect();
    $statement = $db->prepare("SELECT *FROM message");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


// function editComment($id)
// {
//     $db = dbConnect();
//     $statement = $db->prepare("SELECT *FROM guestbook WHERE id=?");
//     $statement->execute([$id]);
//     return $statement->fetchAll(PDO::FETCH_ASSOC);
// }

// function updateComment($id, $comment)
// {
//     $db = dbConnect();
//     $statement = $db->prepare("UPDATE guestbook SET COMMENT=? WHERE id=?");
//     $statement->execute([$comment, $id]);
//     return $statement;
// }

// function deleteComment($id)
// {
//     $db = dbConnect();
//     $statement = $db->prepare("DELETE FROM guestbook WHERE id= ?");
//     $statement->execute([$id]);
//     return $statement;
// }






function check_password($user_name, $password)
{
    $db = account_Connect();
    // $statement = $db->prepare("SELECT *FROM account WHERE ce_user_name=?");
    // $statement->execute([$user_name]);

    $account = $db->prepare("SELECT ce_user_name,ce_password FROM account WHERE ce_user_name=?");
    $account->execute([$user_name]);
    // return $account;
    return $account->fetchAll(PDO::FETCH_ASSOC);
    // if($account==$password){
    //     // echo "<h1>". $account." and ".$password."</h1>";
    //     header('Location:/Guestbook/login_view.php');
    //     return $account;
    // }else{
    //     // echo "<h1>" . $account . " and " . $password . "</h1>";
    //     header('Location:/Guestbook/test_account_input.php');
    //     return $account;
    // }
    // return $statement;
}









function register_account($ce_user_name, $ce_password)
{
    $db = account_Connect();
    $statement = $db->prepare("INSERT INTO account(ce_user_name, ce_password) VALUES(?,?)");
    $statement->execute([$ce_user_name, $ce_password]); //??
    return $statement;
}

function check_account($user_name, $password)
{
    $db = account_Connect();

    $account = $db->prepare("SELECT ce_user_name,ce_password FROM account WHERE ce_user_name=?");
    $account->execute([$user_name]);
    return $account->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCommoditys()
{
    $db = store_Connect();
    $statement = $db->prepare("SELECT *FROM commodity_information");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCommoditys_MinPrice($num)
{
    $db = store_Connect();
    $statement = $db->prepare("SELECT MIN(type_price) AS MinPrice FROM commodity_inventory Where commodity_number=" . $num);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCommoditys_MaxPrice($num)
{
    $db = store_Connect();
    $statement = $db->prepare("SELECT MAX(type_price) AS MaxPrice FROM commodity_inventory Where commodity_number=" . $num);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function Seach_Id_to_Commoditys($id)
{
    $db = store_Connect();
    $statement = $db->prepare("SELECT *FROM commodity_inventory WHERE commodity_number=" . $id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function calculate_star($id)
{
    $db = store_messageConnect();
    $statement = $db->prepare("SELECT AVG(star) FROM message Where commodity_number=" . $id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function Seach_Id_to_Commoditys_type($id, $type_id)
{
    $db = store_Connect();
    $statement = $db->prepare("SELECT *FROM commodity_inventory WHERE commodity_number=" . $id . " AND  type_id=" . $type_id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function calculate_sold($commodity_number, $commodity_name, $commodity_type, $commodity_type_name, $commodity_quantity, $price, $date)
{
    $db = store_Connect();
    $name = $_SESSION["user_name"];
    $statement = $db->prepare("INSERT INTO sold(commodity_number,commodity_name,type_id,type_name,type_quantity,price,date) VALUES(?,?,?,?,?,?,?)");
    $statement->execute([$commodity_number, $commodity_name, $commodity_type, $commodity_type_name, $commodity_quantity, $price, $date]);
    return $statement;
}

function updateCommodity($id, $type_id, $commodity_quantity)
{
    $db = store_Connect();
    $type_quantity = Seach_Id_to_Commoditys_type($id, $type_id);
    $type_quantity[0]['type_quantity'] = $type_quantity[0]['type_quantity'] - $commodity_quantity;
    $statement = $db->prepare("UPDATE commodity_inventory SET type_quantity=? WHERE commodity_number=? AND  type_id=?");
    $statement->execute([$type_quantity[0]['type_quantity'], $id, $type_id]);
    return $statement;
}

function updateCommodity_quantity($id, $type_id, $commodity_quantity) //控制後臺用
{
    $db = store_Connect();
    $statement = $db->prepare("UPDATE commodity_inventory SET type_quantity=? WHERE commodity_number=? AND  type_id=?");
    $statement->execute([5, 1, 1]);
    return $statement;
}

function getAllCommoditys_sold($commodity_number)
{
    $db = store_Connect();
    $statement = $db->prepare("SELECT SUM(type_quantity) FROM sold WHERE commodity_number=?");
    $statement->execute([$commodity_number]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getCommoditys_message($commodity_number)
{
    $db = store_messageConnect();
    $statement = $db->prepare("SELECT COUNT(id) FROM message WHERE commodity_number=?");
    $statement->execute([$commodity_number]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function create_commodity_information($commodity_number, $num_of_pictures, $commodity_name, $sales_place)
{
    $db = store_Connect();
    $name = $_SESSION["user_name"];
    $statement = $db->prepare("INSERT INTO commodity_information(commodity_number,seller_name, number_of_pictures, commodity_name, sales_place) VALUES(?,?,?,?,?)");
    $statement->execute([$commodity_number, $name, $num_of_pictures, $commodity_name, $sales_place]);
    return $statement;
}

function get_commodity_number() //問題在commodity_information沒設好，前面要全部改
{
    $db = store_Connect();
    $name = $_SESSION["user_name"];
    $statement = $db->prepare("SELECT MAX(commodity_number) AS num FROM commodity_information;");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function create_commodity_inventory($commodity_number, $seller_name, $commodity_name, $type_id, $type_name, $type_price, $type_quantity)
{
    $db = store_Connect();
    $name = $_SESSION["user_name"];
    $statement = $db->prepare("INSERT INTO commodity_inventory(commodity_number, seller_name, commodity_name, type_id, type_name, type_price, type_quantity) VALUES(?,?,?,?,?,?,?)");
    $statement->execute([$commodity_number, $seller_name, $commodity_name, $type_id, $type_name, $type_price, $type_quantity]);
    return $statement;
}
