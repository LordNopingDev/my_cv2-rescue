<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class cv1Controller extends Controller
{

    public function number()
    {
        $number = random_int(0, 100);
        $name = "Mickael" ;
        $presentation = "HEY Vsauce, mickael here. Do you like cookies? Because I do.";
        $company1 = "Walmart";
        $company2 = "Lidl";
        $company3 = "Intermarché";
        $job1 = "Salesman";
        $job2 = "Webdesigner";
        $job3 = "Vendor";
        $profile_pic = "https://metrobiography.com/wp-content/uploads/2018/05/Michael-Stevens.jpeg";

        return $this->render('cv1_temp.html.twig', array(
            'number' => $number,
            'name' => $name,
            'profile_pic' => $profile_pic,
            'presentation' => $presentation,
            'company1' => $company1,
            'company2' => $company2,
            'company3' => $company3,
            'job1' => $job1,
            'job2' => $job2,
            'job3' => $job3
        ));
    }
}