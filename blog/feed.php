<?php 
    include 'menubar.php';
    include '../conn.php';
    include '../header.php';
?>

<html>

<head>
<link rel="stylesheet" href="./css/feed.css">
</head>

<body>
    <div class="story-container">
        <div class="storybox">
            <form method="post" action="addfeed.php">

                <input type="text" name="StoryBox" id="story" placeholder="Wanna share??"><br>
                <button type="submit" id="storybtn">Share it!</button>
            </form>
        </div>
    </div>

    <div class="feed-container">

            <?php
                $sql = "SELECT * from post";
                $query = $conn->query($sql);

                while($box = $query->fetch_assoc()){
                   echo "<div class='feedbox'>
                        <p>".$box['content']."</p>
                   </div>";
                }
            ?>

    </div>
</body>

</html>