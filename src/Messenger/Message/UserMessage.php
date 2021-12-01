<?php

declare(strict_types=1);

namespace App\Messenger\Message;

class UserMessage
{
    public function __construct(
        public readonly string $name,
        public readonly string $email
    )
    {
    }
}