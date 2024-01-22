<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <p>
        <a href="index.php" class="btn btn-primary">Return to posts</a>
    </p>

    <h1><?php echo $post->title; ?></h1>
    <p><?php echo $post->created; ?> ngày</p>
    <p><?php echo $post->teaser; ?></p>
    <p><?php echo $post->content; ?></p>
    <p>Author: <?php echo $author_name; ?></p>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
