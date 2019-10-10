<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class PropertyController{
    /**
     * @var Environment
     */
    private $twig;
    public function __construct($twig){
        $this->twig = $twig;
    }
    public function index():Response
    {
        return new Response($this->twig->render('property/index.html.twig'));
    }
}
