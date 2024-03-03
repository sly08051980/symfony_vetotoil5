<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MentionLegalController extends AbstractController
{
    #[Route('/',name:'app_home')]
    public function index(): Response
    {
        return $this->render('mention_legal/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/mention/legal/politique', name: 'app_mention_legal_politique')]
    public function politique(): Response
    {
        return $this->render('mention_legal/politiquedeconfidentialite.html.twig', [
            'controller_name' => 'MentionLegalController',
        ]);
    }
    #[Route('/mention/legal/rgpd',name:'app_mention_legal_rdgp')]
    public function rgpd():Response{
        return $this->render('mention_legal/rgpd.html.twig',[
            'controller_name'=>'MentionLegalController',
        ]);
    }
    #[Route('/mention/legal/image',name:'app_mention_legal_image')]
    public function images():Response{
        return $this->render('mention_legal/politiqueconfidentialiteimage.html.twig',[
            'controller_name'=>'MentionLegalController',
        ]);
    }

}
