<?php
$postRequest = file_get_contents('php://input');
if($postRequest != null) {
    $json = json_decode($postRequest);
    $database = new Database();
    $db = $database->getConnection();
    //Insert every contact
    foreach($json->contacts as contact) {

    }
    //Insert every event
    foreach($json->events as event) {

    }
}
?>
