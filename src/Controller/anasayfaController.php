<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;


    class anasayfaController extends AbstractController
    {
      
		 
		/**
        * @Route("/anasayfa/", name="anasayfa")
        */
        public function homepage():Response
        {
            return $this->render('anasayfa.html.twig');
        }

       /**
        * @Route("/hakkimizda/", name="hakkimizda")
        */
        public function us():Response
        {
            return $this->render('hakkimizda.html.twig');
        }

        /**
        * @Route("/karavan/", name="karavan")
        */
        public function caravan():Response
        {
            return $this->render('karavan.html.twig');
        }

        /**
        * @Route("/otel/", name="otel")
        */
        public function hotel():Response
        {
            return $this->render('otel.html.twig');
        }

        /**
        * @Route("/seyahat/", name="seyahat")
        */
        public function travel():Response{
            return $this->render('seyahat.html.twig');
        }
     
    
    
    
    
    
    
    
    }






?>