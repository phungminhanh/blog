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
<<<<<<< HEAD
    </ul>
    <p>
    <a href="index.php?page=addAuthor" class="btn btn-primary">Create new author</a>
</p>
    <ul>
        <?php foreach ($authors as $author): ?>
        <li> 
             <p><?php echo $author->name ; ?></p>
             <a href="index.php?page=deleteAuthor&id=<?php echo $author->id; ?>" class="btn btn-warning btn-sm">Delete</a>
        </li>
        <?php endforeach; ?>
    </ul>

=======
</ul>
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
