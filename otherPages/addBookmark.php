<?php
// database
include '../db/config.php'; 

// handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $imageurl = $_POST['imageurl'];
    $page = $_POST['page'];
    $rating = $_POST['rating'];

    $stmt = $dbs->prepare("INSERT INTO bookmarks (title, imageurl, page, rating) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $title, $imageurl, $page, $rating);

    if ($stmt->execute()) {
        echo "Bookmark added successfully!";
    } else {
        echo "Error adding bookmark.";
    }

    $stmt->close();
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bookmark</title>

    <!-- Reusing CSS -->
    <link rel="stylesheet" href="../styles/viewCard.css?v=1">
</head>
<body>

<div class='maincontainer'>
    <p class='title'>Add Bookmark</p>

    <form class='formcontainer' method="POST" action="">

        <div class='titleinput'>
            <label for="title">Title:</label>
            <input class="titleinput-width" type="text" 
            id="title" name="title" 
            placeholder="Enter Book Title"
            required>
        </div>

        <div class='pageimage'>
            <div class='pageinput'>
                <label for="page">Page:</label>
                <input class="pageinput-input" type="number" id="page" 
                required
                name="page" min="0"
                value="1"
                placeholder="eg. 123">

            </div>

            <div class='imageinput'>
                <label for="imageurl">Image URL:</label>
                <input class="imageinput-input" type="text" id="imageurl" 
                name="imageurl" placeholder="eg. https://example.com/image.jpg"
                onclick="this.value='';">
            </div>
        </div>

        <div class="rating"> 
            <div class='rating-value'></div>
            <label class='rating-value-title' for="rating">Rating</label>
            <span id="ratingValue">5</span>
            <p>/10</p>
        </div>

        <input 
            type="range" class="rating-slider"
            id="rating" 
            name="rating" 
            min="0" 
            max="10" 
            value="5" 
            oninput="document.getElementById('ratingValue').innerText = this.value;">

        <div class='buttoncontainer'>
            <input class="update" type="submit" value="Add">
        </div>

    </form>

    <a href="../index.php">
        <button class="backButton">Back</button>
    </a>
</div>

</body>
</html>
