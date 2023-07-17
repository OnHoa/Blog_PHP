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
        <div class="bg-dark p-5 rounded-lg text-white text-center">
            <h1><?php echo $q['title']; ?></h1>
            <div class="d-flex mt-2 justify-content-center align-items-center">
                <a href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm">Edit</a>

                <form method="POST">
                    <input type="text" hidden name="id" value="<?php echo $q['id']; ?>">
                    <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>

                </form>
            </div>
        </div>
        <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content']; ?></p>

 
     <?php }?>      
     </div>


    
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    
</body>
</html>