<?php
namespace Controller;

use \model\DBConnection;
use \model\AuthorDB;
use \model\Author;
use \model\PostDB;
use \model\Post;
class AuthorController
{

    public $authorDB;
    public $postDB;
    public function __construct()
    {
        $connection = new DBConnection("mysql:host=127.0.0.1;dbname=blog","root", "1234");
        $this->authorDB = new AuthorDB($connection->connect());
        $this->postDB = new PostDB($connection->connect());
    }
    public function indexa(){
        $authors = $this->authorDB->getAllAuthors();
       
        include 'view/list.php';
    }
    public function adda(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/addAuthor.php';
        } else {
            $author = new author($_POST['name'], $_POST['age']);
            $this->authorDB->create($author);
            $message = 'author created';
            include 'view/addAuthor.php';
        }
    }
    public function deleteAuthor(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $author = $this->authorDB->getAuthor($id);
            include 'view/deleteAuthor.php';
        } else {
            $posts = $authorDB->getAllAuthorsPost($id);

        
        foreach ($posts as $post) {
            
            if (isset($post)) {
                $post->idAuthor=null;
            } else {
                echo "Không tồn tại bài viết để xóa.";
            }
        }
            $id = $_POST['id'];
            $this->authorDB->delete($id);
            header('Location: index.php');
        }
    }

}