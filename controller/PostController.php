<?php
namespace Controller;

use \model\DBConnection;
use \model\PostDB;
use \model\Post;

class PostController
{
    public $postDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=127.0.0.1;dbname=blog","root", "1234");
        $this->postDB = new PostDB($connection->connect());
    }

    public function index(){
        $postsData = $this->postDB->getAll();
        include 'view/list.php';
    }

    public function add(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/add.php';
        } else {
            $post = new Post($_POST['title'], $_POST['teaser'], $_POST['content'], $_POST['created'],$_POST['id_author']);
            $this->postDB->create($post);
            $message = 'Post created';
            include 'view/add.php';
        }
    }

    public function view(){
        $id = $_GET['id'];
        $data = $this->postDB->get($id);
        $post = $data['post'];
        $author_name=$data['author_name'];
        include 'view/view.php';
    }

    public function delete(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $post = $this->postDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->postDB->delete($id);
            header('Location: index.php');
        }
    }

    public function edit(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $data = $this->postDB->get($id);
            $post = $data['post'];
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $post = new Post($_POST['title'], $_POST['teaser'], $_POST['content'], $_POST['created'],$_POST['id_author']);
            $this->postDB->update($id, $post);
            header('Location: index.php');
        }
    }
}