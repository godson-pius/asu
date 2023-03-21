<?php

require_once '../prepared/prepared.php';

if (isset($_GET['pending'])) {
    $id = $_GET['pending'];

    $sql = "UPDATE requests SET status = 1 WHERE request_id = $id";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM posts WHERE post_id = $id";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

if (isset($_GET['deleteall'])) {
    $status = $_GET['deleteall'];

    $sql = "DELETE FROM posts";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

// Events =================================================
if (isset($_GET['deleteallevent'])) {
    $status = $_GET['deleteallevent'];

    $sql = "DELETE F ROM events";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

if (isset($_GET['deleteevent'])) {
    $id = $_GET['deleteevent'];

    $sql = "DELETE FROM events WHERE event_id = $id";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

// fOR Messages =================================================================

if (isset($_GET['deleteMessage'])) {
    $id = $_GET['deleteMessage'];

    $sql = "DELETE FROM messages WHERE message_id = $id";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

if (isset($_GET['deleteallmessage'])) {
    $status = $_GET['deleteallmessage'];

    $sql = "DELETE FROM messages";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}


//for teams=============================
if (isset($_GET['delete_team'])) {
    $id = $_GET['delete_team'];

    $sql = "DELETE FROM teams WHERE team_id = $id";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}


//for partners =============================
if (isset($_GET['delete-partner'])) {
    $id = $_GET['delete-partner'];

    $sql = "DELETE FROM partners WHERE partner_id = $id";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}