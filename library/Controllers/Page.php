<?php

namespace Controllers;


class Page extends Controller
{

    protected $modelName = \Models\Page::class;

    public function index()  
    {        
       $pageTitle = 'Admin sauvegarde';
       \Renderer::render('articles/index', compact('pageTitle'));
    } 
   

 public function menuC()  
 {        
    $pageTitle = 'Admin sauvegarde';
    \Renderer::render('articles/menuC', compact('pageTitle'));
 } 

 public function repartitionCharges()  
 {        
    $pageTitle = 'Admin sauvegarde';
    \Renderer::render('articles/repartitionCharges', compact('pageTitle'));
 } 
 
 public function restitution()  
 {        
    $pageTitle = 'Admin sauvegarde';
    \Renderer::render('articles/restitution', compact('pageTitle'));
 } 
 public function menuCG()  
 {        
    $pageTitle = 'Admin sauvegarde';
    \Renderer::render('articles/menuCG', compact('pageTitle'));
}
public function pageFormulaire()  
{        
   $pageTitle = 'Admin sauvegarde';
   \Renderer::render('articles/pageFormulaire', compact('pageTitle'));
}

public function client()  
{        
   $pageTitle = 'Admin sauvegarde';
   \Renderer::render('articles/client', compact('pageTitle'));
}

public function visualisationDevis()  
{        
   $pageTitle = 'Admin sauvegarde';
   \Renderer::render('articles/visualisationDevis', compact('pageTitle'));
}
}