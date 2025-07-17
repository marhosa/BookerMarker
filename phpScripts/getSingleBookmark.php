<?php

include '../db/config.php';

function getBookmarkById($db, $id) {
    if (!is_numeric($id)) {
        return null; 
    }

    $stmt = $db->prepare("SELECT title, imageurl, page, rating FROM bookmarks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $bookmark = $result->fetch_assoc();

    $stmt->close();

    return $bookmark; 
}

?>