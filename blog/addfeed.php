<?php 
    include '../conn.php';

    $Story = $_POST['StoryBox'];

    $sql = "INSERT INTO post(content) VALUES('$Story')";

    mysqli_query($conn, $sql);
    

?>
<script>
    alert("New post added!");
    window.location= "feed.php";
</script>

