<?php
//mysql tunnukset haetaan configista
include('/home2-1/t/tuomakuh/config/config.php');

//erotellaan URL:stä parametrit
$url = $_SERVER['REQUEST_URI'];
$url_comps = parse_url($url);
parse_str($url_comps['query'], $params);

//muodostetaan yhteys tietokantaan haetuilla tunnuksilla
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pw, $mysql_db);

// jos yhteys onnistui
if($con){
    switch($params['action']) {
    case "get":
        $sql = "SELECT * FROM `ParliamentMembers` WHERE `hetekaID` = " . intval($params['id']);
        $res = mysqli_query($con,$sql);
        if($res){
            header("Content-Type: JSON");
            $row = mysqli_fetch_assoc($res);
            echo json_encode($row,JSON_PRETTY_PRINT);
        }
        break;
    case "minus":
        $sql = "UPDATE ParliamentMembers SET score = score - 1 WHERE hetekaID = " . intval($params['id']);
        $res =  mysqli_query($con,$sql);
        if($res){
            echo json_encode(array("message" => "success"));
        }
        break;

    case "plus":
        $sql = "UPDATE ParliamentMembers SET score = score + 1 WHERE hetekaID = " . intval($params['id']);
        $res = mysqli_query($con,$sql);
        if($res){
            echo json_encode(array("message" => "success"));
        }
        break;
    }



} else {
    echo "Failed to connect";
}
?>