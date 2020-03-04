<?php
namespace App\Controller;
use App\Entity\Resto;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GuideController extends AbstractController {
 public function accueil() {
    $nombre = rand(1,84);
    return $this->render('restaurant/accueil.html.twig',
    array('numero' => $nombre)); // ou ['numero'=>$nombre]);
 }

 public function menu() {
    $nombre = rand(1,84);
    return $this->render('restaurant/menu.html.twig',
    array('numero' => $nombre)); // ou ['numero'=>$nombre]);
 }

 public function voir($id) {
    $resto = $this->getDoctrine()->getRepository(Resto::class)->find($id);
    if(!$resto)
    throw $this->createNotFoundException('Resto[id='.$id.'] inexistante');
    return $this->render('restaurant/afficher.html.twig', 
    array('resto' => $resto));
    }

    
   
   
}
