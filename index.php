<?php
require "model/DBConnection.php";
require "model/PostDB.php";
require "model/Post.php";
require "controller/PostController.php";
<<<<<<< HEAD
require "model/AuthorDB.php ";
require "model/Author.php";
require "controller/AuthorController.php";
use Controller\AuthorController;
=======

>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
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
<<<<<<< HEAD
             <?php
            $controller = new \Controller\PostController();
            $controllera = new \Controller\AuthorController();
=======
            <?php
            $controller = new \Controller\PostController();
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
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
<<<<<<< HEAD
                case 'addAuthor':
                    $controllera->adda();
                    break;
                case 'deleteAuthor':
                    $controllera->deleteAuthor();
                    break;
                default:
                    {
                    $controller->index();
                     $controllera->indexa();
                    }
                    break;
            }
            ?>
            
           
           
           
             
=======
                default:
                    $controller->index();
                    break;
            }
            ?>
>>>>>>> 1fc53212bc0db9f13cbdc52917127630abed3c76
        </div>
    </body>
</html>