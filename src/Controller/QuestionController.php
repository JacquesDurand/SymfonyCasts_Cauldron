<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {

        return new Response("What a bewitching controller we have conjured !");
    }

    /**
     * @Route("/questions/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        return new Response(
            sprintf(
                ucwords(
                    str_replace('-', ' ', $slug)
                )
            )
        );
    }
}