<h1>Do you want to delete this author?</h1>

<h3><?php echo $author->name; ?></h3>

<form action="index.php?page=deleteAuthor" method="post">
    <input type="hidden" name="id" value="<?php echo $author->id; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>