<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id<\d+>}/vote/{direction<up|down>}",methods={"POST"} )
     * @param $id
     * @param $direction
     * @return JsonResponse
     */
    public function commentVote($id,$direction, LoggerInterface $logger) {
        //to do : use the id to query the db

        //to do : replace next lines by real up vote logic and save in db

        if ($direction === 'up') {
            $currentVoteCount = rand(7,100);
            $logger->info("Up !");
        }
        else {
            $currentVoteCount = rand(0,5);
            $logger->info("Down !");
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}