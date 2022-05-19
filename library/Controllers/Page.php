<?php

namespace Controllers;


class Page extends Controller
{

    protected $modelName = \Models\Page::class;

       // ===================================================================================================
    // ===============================        listeDevis    ===========================================
    // ===================================================================================================

    public function listeDevis()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/index', compact('pageTitle'));
    }

       // ===================================================================================================
    // ===============================        menuC    ===========================================
    // ===================================================================================================

    public function menuC()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/index', compact('pageTitle'));
    }
           // ===================================================================================================
    // ===============================        menuCG    ===========================================
    // ===================================================================================================

    public function menuCG()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/index', compact('pageTitle'));
    }
           // ===================================================================================================
    // ===============================        pageCharges    ===========================================
    // ===================================================================================================

    public function pageCharges()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/index', compact('pageTitle'));
    }

               // ===================================================================================================
    // ===============================        pageFormulaire    ===========================================
    // ===================================================================================================

    public function pageFormulaire()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/index', compact('pageTitle'));
    }
               // ===================================================================================================
    // ===============================        pageClient    ===========================================
    // ===================================================================================================

    public function pageClient()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/index', compact('pageTitle'));
    }

}

