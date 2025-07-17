<?php

include '../phpScripts/getSingleBookmark.php';

$id = $_GET['id'];
$dataArr = getBookmarkById($dbs, $id);
$title = $dataArr['title'];
$imageurl = $dataArr['imageurl'];
$page = $dataArr['page'];
$rating = $dataArr['rating'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

   
    if (isset($_POST['Delete'])) {
        $stmt = $dbs->prepare("DELETE FROM bookmarks WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        header("Location: ../index.php");
        exit(); 
    }

    $stmt = $dbs->prepare("UPDATE bookmarks SET title=?, imageurl=?, page=?, rating=? WHERE id=?");
    $stmt->bind_param("ssiii", $_POST['title'], $_POST['imageurl'], $_POST['page'], $_POST['rating'], $id);

    $stmt->execute();
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
    <title>Modify Card</title>

    <link rel="stylesheet" href="../styles/viewCard.css?v=1">
</head>
<body>

    <div class='maincontainer'>

    <p class='title'>Modify Card</p>

        <form class='formcontainer' action="viewCard.php?id=<?php echo $id; ?>" method="POST">
            
            <div class='titleinput'>
            <label for="title">Title:</label>
            <input class = "titleinput-width" type="text" id="title" name="title" value="<?php echo $title; ?>" required>
            </div>

            <div class='pageimage'>
            
                <div class='pageinput'>
                    <label for="page">Page:</label>
                    <input class="pageinput-input" type="number" id="page" name="page" value="<?php echo $page; ?>" required>
                </div>
                
                <div class='imageinput'>
                    <label for="imageurl">ImageURL:</label>
                    <input class="imageinput-input" type="text" id="imageurl" name="imageurl" value="<?php echo $imageurl; ?>" >
                </div>

            </div>

            <div class="rating"> 
                <div class='rating-value'></div>
                    <label class='rating-value-title'  for="rating">Rating </label>
                    <span id="ratingValue"><?php echo htmlspecialchars($rating); ?></span>
                    <p>/10</p>
                </div>
                
                <input 
                    type="range" class="rating-slider"
                    id="rating" 
                    name="rating" 
                    min="0" 
                    max="10" 
                    value="<?php echo htmlspecialchars($rating); ?>" 
                    oninput="document.getElementById('ratingValue').innerText = this.value;">
        
            <div class='buttoncontainer'>
                <input class = "update" type="submit" value="Update">
                <input class = "delete" type="submit" value="Delete" name="Delete">
            </div>

        </form>

        </div>


    <!-- go back to mainmenu -->

    <a href="../index.php" >
        <button class="backButton">Back</button>
    </a>

    </div>

</body>
</html>