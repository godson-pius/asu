<?php
require_once '../manager/prepared/prepared.php';

if (isset($_GET['like'])) {
    $liked_id = $_GET['liked'];
    $type = $_GET['type'];
    $member_id = $_GET['member'];

    $sql = "SELECT * FROM likes WHERE type = '$type' AND member_id = $member_id AND liked_id = $liked_id";
    $execute = EXECUTE_SINGLE_ROW_QUERY($sql);

    if ($execute) {
        echo "liked";
    } else {
        $sql = "INSERT INTO likes (member_id, type, liked_id) VALUES ($member_id, '$type', $liked_id)";
        $result = VALIDATE_QUERY($sql);

        if ($result) {
            echo "true";
        } else {
            echo false;
        }
    }
}

if (isset($_GET['count'])) {
    $total = GET_TOTAL_WHERE("likes", "liked_id", $_SESSION['devotionId']);
    echo $total;
}
