<?php

  include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Personal Blog</title>
</head>
<body>
     <div class="container mt-5">


     <?php
    if (isset($_REQUEST['info'])) {
        if ($_REQUEST['info'] == "logged-in") {
        echo '
        <div id="notification" class="alert alert-success" role="alert">
            Welcome to your blog!
        </div>
        ';
        }
    else if ($_REQUEST['info'] == "added") {
        echo '
        <div id="notification" class="alert alert-success" role="alert">
            Post has been added successfully!
        </div>
        ';
    } else if ($_REQUEST['info'] == "updated") {
        echo '
        <div id="notification" class="alert alert-success" role="alert">
            Post has been updated successfully!
        </div>
        ';
    } else if ($_REQUEST['info'] == "deleted") {
        echo '
        <div id="notification" class="alert alert-danger" role="alert">
            Post has been deleted successfully!
        </div>
        ';
    }
}
?>


<script>
    var notification = document.getElementById('notification');
    setTimeout(function() {
        notification.style.display = 'none';
    }, 3000);
</script>

        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
            <a href="logout.php" type="button" class="btn btn-danger">Logout</a>

        </div>

        <div class="row">
            <?php foreach($query as $q) {?>
                <div class="col-4 d-flex justify-content-center ">
                    <div class="card text-white bg-dark mt-5">
                    <div class="card-body" style="width: 18rem">
                        <h5 class="card-tittle" style="overflow: hidden; white-space: nowrap;"></h5><?php echo $q['title'];?></h5>
                        <p class="card-text" style="overflow: hidden; white-space: nowrap;"><?php echo $q['content'];?></p>
                        <a href="view.php?id=<?php echo $q['id']; ?>" class="btn btn-light">Read more <span class="text-danger">&rarr;</span></a>
                    </div>
                    </div>

                </div>
                <?php }?>
        </div>
            </div>


    
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    
</body>
</html>