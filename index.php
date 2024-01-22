<?php
require "model/DBConnection.php";
require "model/PostDB.php";
require "model/Post.php";
require "controller/PostController.php";
require "model/AuthorDB.php ";
require "model/Author.php";
require "controller/AuthorController.php";
use Controller\AuthorController;
use \Controller\PostController;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Personal Blog</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <div class="container">
            <div class="navbar navbar-default">
                <a class="navbar-brand" href="index.php">My Blog</a>
            </div>
             <?php
            $controller = new \Controller\PostController();
            $controllera = new \Controller\AuthorController();
            $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;

            switch ($page){
                case 'add':
                    $controller->add();
                    break;
                case 'view':
                    $controller->view();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'edit':
                    $controller->edit();
                    break;
                case 'addAuthor':
                    $controllera->adda();
                    break;
                case 'deleteAuthor':
                    $controllera->deleteAuthor();
                    break;
                case'viewAuthor':
                    $controllera->viewAuthor();
                    break;
                default:
                    {
                    $controller->index();
                    
                    }
                    break;
            }
            ?>
            
           
           
           
             
        </div>
    </body>
</html>