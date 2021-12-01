<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use App\Messenger\Message\UserMessage;

class MessengerAction
{
    public function __construct(private MessageBusInterface $bus)
    {
    }
    
    public function __invoke(): Response
    {
        $this->bus->dispatch(new UserMessage('Juan', 'juan@api.com'));
        
        return new JsonResponse();
    }
}