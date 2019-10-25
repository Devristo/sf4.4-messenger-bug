<?php


namespace App\Controller;


use App\Messenger\Command\RegisterUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;

class DefaultController extends AbstractController
{
    public function index(MessageBusInterface $messageBus)
    {
        $messageBus->dispatch(new RegisterUser("hello-world"));

        return new Response();
    }
}
