<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <p>
        <a href="index.php" class="btn btn-primary">Return to posts</a>
    </p>

    <h1><?php echo $author->name; ?></h1>
    <p><?php echo $author->age; ?> ngày</p>

    <h1>List Posted</h1>
    <ul class="list-group">
        <?php foreach ($posts as $post): ?>
            <li class="list-group-item">
                <h2><a href="index.php?page=view&id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></h2>
                <span class="text-muted"><?php echo $post->created; ?></span>
                <p><?php echo $post->teaser; ?></p>
                <a href="index.php?page=edit&id=<?php echo $post->id; ?>" class="btn btn-primary btn-sm">Update</a>
                <a href="index.php?page=delete&id=<?php echo $post->id; ?>" class="btn btn-warning btn-sm">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
