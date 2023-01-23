<?php

declare(strict_types=1);

namespace App\Domain;

use Symfony\Component\Uid\Uuid;

class User
{
    public function __construct(private readonly Uuid $id, private readonly string $email)
    {}
}
