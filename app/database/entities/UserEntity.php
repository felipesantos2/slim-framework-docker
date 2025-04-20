<?php

declare(strict_types=1);

namespace app\database\entities;

class UserEntity
{
    private $id;

    private $name;

    private $email;

    private $createdAt;

    private $updatedAt;

    private $message = null;
}
