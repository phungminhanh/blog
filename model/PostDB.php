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
        
         $sql = "INSERT `posts` SET `title` = ?, `teaser` = ?, `content` = ?, `author_id` = ? WHERE `id` = ?";
         $statement = $this->connection->prepare($sql);
         $statement->bindParam(1, $post->title);
         $statement->bindParam(2, $post->teaser);
         $statement->bindParam(3, $post->content);
         $statement->bindParam(4, $post->idAuthor); 
         return $statement->execute(); 
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
            JOIN authors ON posts.author_id = authors.id
            WHERE posts.id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->bindParam(1, $id);
    $statement->execute();
    $row = $statement->fetch();

   
        // Tạo đối tượng Post từ dữ liệu bài viết
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
        JOIN authors on posts.author_id = authors.id";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result =$statement->fetchALL();
        $post =[];
        foreach ($result as $row)
        {
            
            $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created'],$row['author_id']);
            $post->id = $row['id'];
            
            $postData = [
                'post' => $post,
                'name_author' => $row['author_name']
            ];
            
            $postsData[] = $postData;

            
            return $postsData;
        }
        
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
}

        