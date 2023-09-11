<?php
$array = array(
    [
        "start_id" => 151,
        "end_id" => 170,
        "subject_id" => 1,
        "creator_id" => 0,    
    ],
    [
        "start_id" => 171,
        "end_id" => 190,
        "subject_id" => 2,
        "creator_id" => 1,    
    ],
    [
        "start_id" => 191,
        "end_id" => 210,
        "subject_id" => 3,
        "creator_id" => 2,    
    ],
    [
        "start_id" => 211,
        "end_id" => 230,
        "subject_id" => 4,
        "creator_id" => 3,    
    ],
    [
        "start_id" => 231,
        "end_id" => 250,
        "subject_id" => 5,
        "creator_id" => 4,    
    ]
);

echo json_encode($array);
?>