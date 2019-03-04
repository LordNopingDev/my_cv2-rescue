<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Formation;
use App\Entity\Competence;
use App\Entity\Experience;
use App\Entity\Loisir;
use App\Entity\Personalinfo;

class IndexController extends Controller
{

    public function number()
    {
        $number = random_int(0, 100);
        $profile_pic = "https://css-tricks.com/examples/OnePageResume/images/cthulu.png";
        
        $formations = $this->getDoctrine()->getRepository(Formation::class)->findAll();
        $competences = $this->getDoctrine()->getRepository(Competence::class)->findAll();
        $experiences = $this->getDoctrine()->getRepository(Experience::class)->findAll();
        $loisirs = $this->getDoctrine()->getRepository(Loisir::class)->findAll();
        //$personalinfo = $this->getDoctrine()->getRepository(Personalinfo::class)->findOneBy(['id' => 5]); //ici l'id correspond a la seule instance voulue dans phpmyadmin
        $personalinfos = $this->getDoctrine()->getRepository(Personalinfo::class)->findAll();
        
        return $this->render('cthulhu.html.twig', array(
            'number' => $number,
            'profile_pic' => $profile_pic,
            
            
            'formations' => $formations,
            'competences' => $competences,
            'experiences' => $experiences,
            'loisirs' => $loisirs,
            //'personalinfo' => $personalinfo,  //on retire le pluriel pour n'en selectionner qu'un seul
            'personalinfos' => $personalinfos,
            
        ));
    }
}