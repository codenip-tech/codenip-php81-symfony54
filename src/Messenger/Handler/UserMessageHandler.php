<?php

declare(strict_types=1);

namespace App\Messenger\Handler;

use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use App\Messenger\Message\UserMessage;

class UserMessageHandler implements MessageHandlerInterface
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function __invoke(UserMessage $message): void
    {
        $this->logger->info('NEW MESSAGE');
        $this->logger->info(sprintf('Name: %s. Email: %s', $message->name, $message->email));
    }
}