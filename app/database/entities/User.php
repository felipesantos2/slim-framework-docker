<?php

namespace app\database\entities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'users')]
class User
{
    #[Column(type: Types::INTEGER)]
    private $id;

    #[Column(lenght: 120)]
    private $name;

    #[Column(lenght: 200)]
    private $email;

    #[Column(name: 'created_at', type: Types::DATETIME_IMMUTABLE)]
    private $createdAt;

    #[Column(name: 'updated_at', type: Types::DATETIME_IMMUTABLE)]
    private $updatedAt;
}
