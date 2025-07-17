# 📘BookerMarker
A minimalistic personal bookmarking web-app using Xampp Server. 
<br>
a Mini 3-day project.

## Stack:
#### Front End:
- HTML, CSS, JS, React
#### Back End:
- MySql, Php


## Downloads:
[Click THIS](https://github.com/user-attachments/files/21294915/Bookermarker.Setup.Files.zip) to download the WebApp and its Database.

## Setup Guide with Xampp


### 1. Install XAMPP
- Download and install XAMPP.  
- You can [watch this video guide](https://youtu.be/G2VEf-8nepc?si=9lqOYYrzZFrUuaKz).

### 2. Open XAMPP Directory
- Right-click the XAMPP shortcut/desktop-icon > **Open file location**
- By now, you should be on the **Xampp** Folder.

### 3. Move Project Files
- Copy `BookerMarkerWebApp` folder to:  
  `Xampp\htdocs`
- Copy `bookermarker` folder to:  
  `Xampp\mysql\data`

### 4. Turn on Xampp Server
- Open the `Xampp Control Panel` program.
- Start `Apache` and `MySql`.
### 5. Launch the App
- Open your browser and go to:  
  `http://localhost/BookerMarkerWebApp`

<br>

## How to Use
### Main Page
- Below will be your Main Page.
<img src="https://github.com/user-attachments/assets/5a9a1913-4941-4a90-873f-08e23bb4481b" width = "500px">

- Click on ADD to add a bookmark.
- You can search and sort by rating or alphabetically.
- Click on a Card if you wan't to Delete or Update it.


### Adding Bookmarks
- If you clicked on the `ADD` button on the main menu, this will appear.
<img src="https://github.com/user-attachments/assets/20f53456-2cd8-4bc5-87be-20e3e6ca5fa1" width = "500px">

- Simply input your Title and Page.
- You can use the slider to give your own personal rating.

#### Adding Bookmarks — Image URL
- You can paste direct image links online to add an image to your Bookmark.
- First just search online a cool image you want to add.
- Then `Rightclick` and click on `copy image address`.

<img src ="https://github.com/user-attachments/assets/ac5f4a40-875b-4457-b593-bda6e1b7e0fc" width = "500px">

- Then simply paste the image on the `ImageURL` text box.

<img src = "https://github.com/user-attachments/assets/e93dd064-ef4d-4f4b-953b-6c7e34ea4f7e" width = "170px">

- If the image URL is invalid or If you did not add any image URL, then it will simply display an empty image.

<img src = "https://github.com/user-attachments/assets/b7b85327-ffe7-4951-9998-5f60c71899b7" width = "150px">



<br>
<br>




### Updating/Deleting Cards
- First, go to the `Main Menu`
- Then Simply click on a card that you wan't to select for deletion/update.
- Below would be something that you should encounter.
<img src="https://github.com/user-attachments/assets/fb929512-f4b9-460a-ae3a-768bcfe577f4" width = "500px">

- Then you can simply click on update after you have done saving some changes such as Changing the Rating, Title, ImageURL.
- Or click on Delete to fully delete the Bookmark


### Errors
- If you encounter errors because of the database despite doing everything, you can try creating your own database.
 
 #### making your own database
- First, simply follow the steps in [THIS tutorial Video.](https://www.youtube.com/watch?v=Y77SRDhWu0Q)
- Except, make sure to name the Database as `bookermarker`
- and run the query below to make the database:

<pre> ```sql 
CREATE TABLE bookmarks ( 
  id INT AUTO_INCREMENT PRIMARY KEY, 
  title VARCHAR(255), 
  imageurl TEXT, 
  page INT, 
  rating VARCHAR(255) ); 
  ``` </pre>
