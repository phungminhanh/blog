<?php
namespace Model;

class PostDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($post){
        
<<<<<<< HEAD
        $sql = "INSERT INTO `posts` (`title`, `teaser`, `content`, `author_id`) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post->title);
        $statement->bindParam(2, $post->teaser);
        $statement->bindParam(3, $post->content);
        
        // Kiểm tra nếu idAuthor có giá trị thì bind giá trị, ngược lại bind giá trị NULL
        if ($post->idAuthor !== null) {
            $statement->bindParam(4, $post->idAuthor);
        } else {
            $statement->bindValue(4, null);
        }
    
        return $statement->execute();
=======
         $sql = "INSERT `posts` SET `title` = ?, `teaser` = ?, `content` = ?, `author_id` = ? WHERE `id` = ?";
         $statement = $this->connection->prepare($sql);
         $statement->bindParam(1, $post->title);
         $statement->bindParam(2, $post->teaser);
         $statement->bindParam(3, $post->content);
         $statement->bindParam(4, $post->idAuthor); 
         return $statement->execute(); 
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
        /*$sql = "INSERT INTO `posts`(`title`, `teaser`, `content`) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post->title);
        $statement->bindParam(2, $post->teaser);
        $statement->bindParam(3, $post->content);
        return $statement->execute();*/
    }

    public function update($id, $post){/*
        $sql = "UPDATE `posts` SET `title` = ?, `teaser` = ?, `content` = ? WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post->title);
        $statement->bindParam(2, $post->teaser);
        $statement->bindParam(3, $post->content);
        $statement->bindParam(4, $id);
        return $statement->execute();*/
        $sql = "UPDATE `posts` SET `title` = ?, `teaser` = ?, `content` = ?, `author_id` = ? WHERE `id` = ?";
         $statement = $this->connection->prepare($sql);
         $statement->bindParam(1, $post->title);
         $statement->bindParam(2, $post->teaser);
         $statement->bindParam(3, $post->content);
         $statement->bindParam(4, $post->idAuthor);  // Thay đổi giá trị author_id
         $statement->bindParam(5, $id);
         return $statement->execute(); 
    }

    public function delete($id){
        $sql = "DELETE FROM `posts` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function get($id){
        $sql = "SELECT posts.*, authors.name AS author_name
            FROM posts
<<<<<<< HEAD
            LEFT JOIN authors ON posts.author_id = authors.id
=======
            JOIN authors ON posts.author_id = authors.id
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
            WHERE posts.id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $id);
    $statement->execute();
    $row = $statement->fetch();

   
<<<<<<< HEAD
=======
        // Tạo đối tượng Post từ dữ liệu bài viết
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
        $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created'],$row['author_id']);
        $post->id = $row['id'];
        $data['post'] = $post;
        $data['author_name'] = $row['author_name'];
        return $data;
    
       /* $sql = "SELECT * FROM `posts` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created']);
        $post->id = $row['id'];
        return $post;*/
    }

    
        
    public function getAll()
    {
        $sql="SELECT posts.* , authors.name as author_name 
        FROM posts 
<<<<<<< HEAD
        LEFT JOIN authors on posts.author_id = authors.id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result =$statement->fetchALL();
        $postsData =[];
=======
        JOIN authors on posts.author_id = authors.id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result =$statement->fetchALL();
        $post =[];
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
        foreach ($result as $row)
        {
            
            $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created'],$row['author_id']);
            $post->id = $row['id'];
            
<<<<<<< HEAD
            $postData =  [
=======
            $postData = [
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
                'post' => $post,
                'name_author' => $row['author_name']
            ];
            
            $postsData[] = $postData;

            
<<<<<<< HEAD
           
        }
        return $postsData;
=======
            return $postsData;
        }
        
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
        /*$sql = "SELECT * FROM `posts`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $posts = [];
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created']);
            $post->id = $row['id'];
            $posts[] = $post;
        }
        return $posts;
    }*/
}
<<<<<<< HEAD
 
=======
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
}

        