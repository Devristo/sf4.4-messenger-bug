<?php


namespace App\Messenger\CommandHandler;


use App\Messenger\Command\RegisterUser;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\MessageBusInterface;

class RegisterUserHandler implements MessageHandlerInterface
{
    private $eventBus;

    public function __construct(MessageBusInterface $eventBus)
    {
        $this->eventBus = $eventBus;
    }

    public function __invoke(RegisterUser $command)
    {

    }
}
