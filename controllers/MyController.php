<?php

namespace app\controllers;

class MyController extends AppController
{

public function actionIndex($id = null)
    {
        $hi = 'Hello, World!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
        if(!$id) $id = 'Значение ID не задано';
//        return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }
    
public function actionBlogPost()
    {
        // my/blog-post
        return 'Blog Post';
    }
}