<?php
namespace App\Controller;
use App\Entity\Property;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController{
    
    /**
    * @Route("/biens", name="property.index")
      */
    public function index():Response
    {
        /* tao entity ghi vao DB
        $property = new Property();
        $property->setTitle('Mon premier Appartement')
        ->setPrice(200000)
        ->setRooms(4)
        ->setBedrooms(3)
        ->setDescription('une petite description')
        ->setSurface(60)
        ->setFloor(4)
        ->setHeat(1)
        ->setCity('Montpellier')
        ->setAddress('15 rue de Victor Hugo')
        
        ->setPostalCode('34000');
        $em = $this->getDoctrine()->getManager();
        $em->persist($property);
        $em->flush();*/
        $repository = $this->getDoctrine()->getRepository(Property::class);
        dump($repository);


        return $this->render('property/index.html.twig',['current_menu' => 'properties']);
    }
    /*
     
    private $twig;
    public function __construct($twig){
        $this->twig = $twig;
    }
    /*public function index():Response
    {
        return new  Response($this->twig->render('pages/index.html.twig'));
}*/
}
