<?php
    include_once 'functionDB.php';
    if(isset($_POST["function"])){
        switch ($_POST["function"]) {
            case "verifyUser":
                verifyUser();
                break;
            case "createUser":
                createUser();
                break;
            case "excQuery":
                excQuery();
                break;
            case "getListData":
                getListData();
                break;
            case "getCartItem":
                getCartItem();
                break;
        }
    }
?>
