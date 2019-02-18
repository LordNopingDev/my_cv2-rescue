<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{

    public function number()
    {
        $number = random_int(0, 100);
        $name = "Cthulhu" ;
        $profile_pic = "https://css-tricks.com/examples/OnePageResume/images/cthulu.png";
        
        
        return $this->render('cthulhu.html.twig', array(
            'number' => $number,
            'name' => $name,
            'profile_pic' => $profile_pic,
        ));
    }
}