<?php
	include '../conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$story = $_POST['story'];

		$sql = "UPDATE post SET content = '$story' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Story Updated";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "ID not set";
    }

?>
<script>
    window.location="story.php";
</script>