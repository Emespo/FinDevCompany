<?php

namespace Controllers;


class Article extends Controller
{

    protected $modelName = \Models\Article::class;



    // ===================================================================================================
    // ===============================        index    ===========================================
    // ===================================================================================================

    public function index()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Accueil';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/index', compact('pageTitle'));
    }
   
}
