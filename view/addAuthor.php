<h2>Create new author</h2>
<?php
    if(isset($message)){
        echo "<p class='alert-info'>$message</p>";
    }
?>
<form method="post" action="/index.php?page=addAuthor">
    <div class="form-group">
        <label>name</label>
        <input type="text" name="name" class="form-control"/>
    </div>
    <div class="form-group">
        <label>age</label>
        <textarea name="age" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>