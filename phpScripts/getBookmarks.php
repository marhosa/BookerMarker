<?php
// getBookmarks then convert to JSON

include '../db/config.php';


$result = $dbs->query("SELECT * FROM bookmarks");


$bookmarks = [];

while ($row = $result->fetch_assoc()) {
    $bookmarks[] = $row;
}




header('Content-Type: application/json');
echo json_encode($bookmarks);


?>