<?php

$mongo = new MongoClient();
$db = $mongo -> local;
    $collection = $db -> help;
    if($_POST)
    {
        $insert = array (
            contact => $_POST['contact'];
            dob => $_POST['dob'];
            contact => $_POST['contact'];
            gender => $_POST['gender'];
            location => $_POST['location'];
        )
    }

    if  ($ $collection => insert($insert))
    echo "Data is inserted";
    else
    echo "Data nnot inserted";

?>