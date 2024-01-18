<p>
    <a href="index.php?page=add" class="btn btn-primary">Create new post</a>
</p>

<ul>
    <?php foreach ($postsData as $postData): ?>
        <li>
            <h2><a href="index.php?page=view&id=<?php echo $postData['post']->id; ?>"><?php echo $postData['post']->title; ?></a></h2>
            <span><?php echo $postData['post']->created; ?></span>
            <p><?php echo $postData['post']->teaser; ?></p>
            <p><?php echo $postData['name_author']; ?></p>
            <a href="index.php?page=edit&id=<?php echo $postData['post']->id; ?>" class="btn btn-primary btn-sm">Update</a>
            <a href="index.php?page=delete&id=<?php echo $postData['post']->id; ?>" class="btn btn-warning btn-sm">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>