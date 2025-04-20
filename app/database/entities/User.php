<?php

declare(strict_types=1);

namespace app\database\entities;

use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'users')]
class User
{
    #[Id]
    #[Column(type: Types::INTEGER)]
    private $id;

    #[Column(length: 120)]
    private $name;

    #[Column(length: 200)]
    private $email;

    #[Column(name: 'created_at', type: Types::DATETIME_IMMUTABLE)]
    private $createdAt;

    #[Column(name: 'updated_at', type: Types::DATETIME_IMMUTABLE)]
    private $updatedAt;

    #[OneToMany(targetEntity: Message::class, mappedBy: 'message')]
    private ?Collection $message = null;
}
