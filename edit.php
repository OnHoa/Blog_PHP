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
       <?php foreach($query as $q) {?>
        <form method="GET">
            <input type="text" hidden name="id" value="<?php echo $q['id']; ?>">
            <input type="text" name="title" placeholder="Blog Title" class="form-control my-3 text-center" value="<?php echo $q['title'];?>" >
            <textarea name="content" class="form-control my-3"><?php echo $q['content'];?></textarea>
            <button name="update" class="btn btn-dark">Update</button>
        </form>
        <?php }?>
    </div>

     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>