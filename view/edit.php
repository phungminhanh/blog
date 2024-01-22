<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit post</h2>
    <form method="post" action="/index.php?page=edit">
        <input type="hidden" name="id" value="<?php echo $post->id; ?>"/>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="<?php echo $post->title; ?>" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Teaser</label>
            <textarea name="teaser" class="form-control"><?php echo $post->teaser; ?></textarea>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea name="content" class="form-control"><?php echo $post->content; ?></textarea>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Update" class="btn btn-primary"/>
            <a href="index.php" class="btn btn-default">Cancel</a>
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
