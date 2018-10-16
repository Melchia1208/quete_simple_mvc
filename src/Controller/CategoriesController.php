<?php

namespace Controller;

// src/Controller/CategoriesController.php

use Model\CategoriesManager;


use Model\Category;
use Model;
use Twig_Loader_Filesystem;
use Twig_Environment;



class CategoriesController extends AbstractController
{

    public function index()
    {

        $categorieManager = new CategoriesManager($this->pdo);
        $categories = $categorieManager->selectAll();

        return $this->twig->render('categories.html.twig', ['categories' => $categories]);



    }

    public function show(int $id)
    {
        $categorieManager = new \Model\CategoriesManager($this->pdo);
        $categorie = $categorieManager->selectOneById($id);

        return $this->twig->render('showCategories.html.twig', ['categories' => $categorie]);

    }

    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Item et hydratation avec les données du formulaire
            $category = new Category();
            $category->setName($_POST['name']);

            $categoryManager = new Model\CategoriesManager($this->pdo);
            // l'objet $item hydraté est simplement envoyé en paramètre de insert()
            $categoryManager->insert($category);
            // si tout se passe bien, redirection
            header('Location: /category');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('addCategory.html.twig');
    }

}


?>
