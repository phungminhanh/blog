<?php
namespace Model;

class PostDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($author){
        
         
        $sql = "INSERT INTO `authors`(`name`, `age`) VALUES (?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $author->name);
        $statement->bindParam(2, $author->age);
        return $statement->execute();
    }

    public function update($id, $author){
        $sql = "UPDATE `authors` SET `name = ?, `age` = ? WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $author->name);
        $statement->bindParam(2, $author->age);
        $statement->bindParam(3, $id);
        return $statement->execute();
       
    }

    public function getAllAuthorsPost($authorId)
    {
        
        $sql = "SELECT * FROM `posts` WHERE `author_id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $posts = [];
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created'],$row['author_id']);
            $post->id = $row['id'];
            $posts[] = $post;
        }
        return $posts;
    }

    public function delete($id){
        $posts = $this->getAllAuthorsPost($id);

        // Nếu có bài viết, xóa chúng trước
        foreach ($posts as $post) {
            $post->idAuthor=null;
        }
        $sql = "DELETE FROM `authors` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function get($id){
       
        $sql = "SELECT * FROM `author` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $author = new Author($row['name'], $row['age']);
        $author->id = $row['id'];
        return $author;
    }

    public function getAll()
    {
        
        $sql = "SELECT * FROM `authors`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $authors = [];
        foreach ($result as $row) {
            $author = new Author($row['name'], $row['age']);
            $author->id = $row['id'];
            $authors[] = $author;
        }
        return $authors;
    }
}