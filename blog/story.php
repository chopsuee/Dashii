<?php
include 'menubar.php';
include '../conn.php';
include '../header.php';
?>

<html>

<head>
    <link rel="stylesheet" href="./css/story.css">
</head>

<body>

    <div class="story-container">

            <?php
            $sql = "SELECT * from post";
            $query = $conn->query($sql);

            while ($box = $query->fetch_assoc()) {
                echo "
                <div class='story'>
                <button class='btn btn-success btn-sm edit btn-flat' data-id='" . $box['id'] . "'><i class='fa fa-edit'></i> Edit</button>
                <button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $box['id'] . "'><i class='fa fa-trash'></i> Delete</button>
                <div class='box-story'>
                    <p>" . $box['content'] . "</p>
                </div>
                
                </div>";
            }
            ?>
      
    </div>
    <?php include './modal/story_modal.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".delete").on('click', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $('#delete').modal('show');
                $('.decid').val(id);
            });

            $(".edit").on('click', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $('#edit').modal('show');
                getRow(id);
            });

            function getRow(id) {
                $.ajax({
                    type: 'POST',
                    url: 'story_row.php',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        $('.decid').val(response.id);
                        $('#edit_story').val(response.content);
                    }
                });
            }
        });
    </script>
</body>

</html>
