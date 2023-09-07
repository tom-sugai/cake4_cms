<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function initialize(): void
    {
        parent ::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $this->paginate = [
            'limit' => 10,
            'order' => ['Articles.id' => 'asc']
        ];

        $articles = $this->paginate($this->Articles->find());
        $this->set(compact('articles'));        
    }

    public function view($slug = null)
    {
        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        $this->set(compact('article'));
    }
}