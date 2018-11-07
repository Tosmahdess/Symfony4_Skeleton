<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class LuckyController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function number()
    {
        $number = random_int(0, 100);
        return $this->render('base.html.twig');

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );


    }
}