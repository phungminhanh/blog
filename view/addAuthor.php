<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Author</title>

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Create new author</h2>
    <?php
        if(isset($message)){
            echo "<p class='alert-info'>$message</p>";
        }
    ?>
    <form method="post" action="/index.php?page=addAuthor">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Age</label>
            <textarea name="age" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Create" class="btn btn-primary"/>
            <a href="index.php" class="btn btn-default">Cancel</a>
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
