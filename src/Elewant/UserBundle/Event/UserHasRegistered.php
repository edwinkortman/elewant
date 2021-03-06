<?php

declare(strict_types=1);

namespace Elewant\UserBundle\Event;

use Elewant\UserBundle\Entity\User;
use Symfony\Component\EventDispatcher\Event;

final class UserHasRegistered extends Event
{
    const NAME = 'user.has.registered';

    /**
     * @var User
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function user(): User
    {
        return $this->user;
    }
}
