<?php
    function verifyUser(){
        include_once 'DBConnect.php';
        if(isset($_POST["name"]) && isset($_POST["password"])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $query = "SELECT * FROM user where name='$name'";
            $result = $conn->query($query, MYSQLI_STORE_RESULT);
            
            $query2 = "SELECT pass FROM user where pass=md5('$password')";
            $result2 = $conn->query($query2, MYSQLI_STORE_RESULT);
            $isCorrectPass = false;
            if($result2){
                if($data = $result2->fetch_object()){
                    $isCorrectPass = true;
                }
            }else{
                echo 'Error'. $password;
            }
            // Cycle through the result set
            if($result) {
                if ($data = $result->fetch_object()) {
                    if($data->isOnline == 1){
                        echo "userOnline";
                    }else if($isCorrectPass){
                       echo "loginSuccess";
                       $query = "update user set isOnline=1 where name='$name'";
                       $result = $conn->query($query);
                   }else
                       echo "incorrectPassword";
                }else{
                    echo "noUserName";
                }
            }else {
                echo 'Error'. $name;
            }
        }
        $conn->close();
    }
    
    function createUser(){
        include_once 'DBConnect.php';
        if(isset($_POST["name"]) && isset($_POST["password"])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $query = "insert into user set name='$name',pass=md5('$password')";
            $result = $conn->query($query);
            $query2 = "insert into cart set name='$name',hideItem=10,invisible=9,accShoe=8,banana=7";
            $result2 = $conn->query($query2);
            // Cycle through the result set
            if($result) {
                echo 'createUserSuccess';
            }else {
                echo 'existUsername';
            }
        }
        $conn->close();
    }
    function excQuery(){
        echo "excQuery";
        include_once 'DBConnect.php';
        if(isset($_POST["query"])){
            $query = $_POST["query"];
            $result = $conn->query($query);
        }
        $conn->close();
    }
    
    function getListData(){
        include_once 'DBConnect.php';
            $level = $_POST["level"];
            $query = "SELECT * FROM level_scores where level='$level' order by scores";
            $result = $conn->query($query, MYSQLI_STORE_RESULT);
            // Cycle through the result set
            if($result) {
                $send = "";
                while ($data = $result->fetch_object()) {
                    $send = $send. $data->name." ".$data->scores." ";
                }
                echo $send;
            }else {
                echo 'Error'. $level;
            }
        $conn->close();
    }
    
    function getCartItem(){
        include_once 'DBConnect.php';
            $name = $_POST["name"];
            $query = "SELECT * FROM cart where name='$name'";
            $result = $conn->query($query, MYSQLI_STORE_RESULT);
            // Cycle through the result set
            if($result) {
                if ($data = $result->fetch_object()) {
                    echo $data->hideItem." ".$data->invisible." ".$data->accShoe." ".$data->banana;
                }
            }else {
                echo 'Error'. $name;
            }
        $conn->close();
    }
?>
