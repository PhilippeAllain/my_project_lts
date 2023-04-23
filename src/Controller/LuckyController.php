<?php
// src/Controller/LuckyController.php
namespace App\Controller; // Symfony takes advantage of PHP's namespace functionality to namespace the entire controller class

use Symfony\Component\HttpFoundation\Response; // the use keyword imports the Response class, which the controller must return
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController // suffixed with Controller by convention
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}