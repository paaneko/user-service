<?php

declare(strict_types=1);

namespace App\User\Application\Factory;

use App\User\Application\Command\ConfirmPasswordResetCommand;
use App\User\Domain\Entity\ConfirmationToken;

interface ConfirmPasswordResetCommandFactoryInterface
{
    public function create(ConfirmationToken $token, string $newPassword): ConfirmPasswordResetCommand;
}