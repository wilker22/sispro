<?php

namespace App\Controller;

use App\Controller\AppController;


class PostsController extends AppController
{
   public function initialize(){
       //   die('Initializing...');
   }

    public function index(){
        die('este é o controller posts/index');
    }

    public function create(){
        die('Criando o post...');
    }

    public function view($id){
        die('this view post ' .$id);
    }

    public function edit($id){
        die('this edit post ' .$id);
    }

}
