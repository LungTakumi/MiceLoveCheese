<?php
include_once 'DBConnect.php';
            $level = $_POST["level"];
            $query = "SELECT * FROM level_scores where level='$level'";
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
?>
