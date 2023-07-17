<?php

  include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Blog</title>
</head>
<body>
    <div class="container mt-5">
        <form method="GET">
            <input type="text" name="title" placeholder="Blog Title" class="form-control my-3 text-center">
            <textarea name="content" class="form-control my-3"></textarea>
            <button name="new_post" class="btn btn-dark">Add Post</button>
        </form>
    </div>

     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>