<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <p>
            <a href="index.php?page=add" class="btn btn-primary">Create new post</a>
        </p>

        <ul class="list-group">
            <?php foreach ($postsData as $postData): ?>
                <li class="list-group-item">
                    <h2 class="mb-1"><a href="index.php?page=view&id=<?php echo $postData['post']->id; ?>"><?php echo $postData['post']->title; ?></a></h2>
                    <span class="text-muted"><?php echo $postData['post']->created; ?></span>
                    <p class="mb-1"><?php echo $postData['post']->teaser; ?></p>
                    <p class="mb-1"><?php echo $postData['name_author']; ?></p>
                    <a href="index.php?page=edit&id=<?php echo $postData['post']->id; ?>" class="btn btn-primary btn-sm">Update</a>
                    <a href="index.php?page=delete&id=<?php echo $postData['post']->id; ?>" class="btn btn-warning btn-sm">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-5">
            <a href="index.php?page=addAuthor" class="btn btn-primary">Create new author</a>
        </p>

        <ul class="list-group">
            <?php foreach ($authors as $author): ?>
                <li class="list-group-item"> 
                    <h2 class="mb-1"><a href="index.php?page=viewAuthor&id=<?php echo $author->id; ?>"><?php echo $author->name; ?></a></h2>
                    <a href="index.php?page=deleteAuthor&id=<?php echo $author->id; ?>" class="btn btn-warning btn-sm">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
