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
        \Renderer::render('articles/listeDevis', compact('pageTitle'));
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
        \Renderer::render('articles/menuC', compact('pageTitle'));
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
        \Renderer::render('articles/menuCG', compact('pageTitle'));
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
        \Renderer::render('articles/pageCharges', compact('pageTitle'));
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
        \Renderer::render('articles/pageFormulaire', compact('pageTitle'));
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
        \Renderer::render('articles/pageClient', compact('pageTitle'));
    }
               // ===================================================================================================
    // ===============================        restitutionDonnée    ===========================================
    // ===================================================================================================

    public function restitutionDonnee()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/restitutionDonnee', compact('pageTitle'));
    }
               // ===================================================================================================
    // ===============================        repartitionCharge    ===========================================
    // ===================================================================================================

    public function repartitionCharge()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/repartitionCharge', compact('pageTitle'));
    }
                   // ===================================================================================================
    // ===============================     client      ===========================================
    // ===================================================================================================

    public function client()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/client', compact('pageTitle'));
    }
                       // ===================================================================================================
    // ===============================     visualisationDevis      ===========================================
    // ===================================================================================================

    public function visualisationDevis()
    {
        //si pas de session lance une session
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $pageTitle = 'Business Intelligence Tool';
        //avec le renderer je gere les vu la ba pour eviter de repeter le code
        \Renderer::render('articles/visualisationDevis', compact('pageTitle'));
    }
}
