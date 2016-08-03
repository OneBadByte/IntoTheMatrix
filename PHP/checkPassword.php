<?php
echo "checking";

if($_POST["userName"] == "brody" && $_POST["password"] == bro){

    header('Location: http://192.168.1.15/html/home.php');


}else{

    header('Location: http://192.168.1.15/html/index.php');


}


?>