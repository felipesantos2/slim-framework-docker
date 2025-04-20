<?php

declare(strict_types=1);

namespace app\database\entities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'settings')]
class Setting
{
    #[Id]
    #[Column(type: Types::INTEGER)]
    private $id;

    #[Column(length: 120)]
    private $key;

    #[Column(length: 200)]
    private $value;

    #[Column(type: Types::INTEGER)]
    private $author;

    #[Column(name: 'created_at', type: Types::DATETIME_IMMUTABLE)]
    private $createdAt;

    #[Column(name: 'updated_at', type: Types::DATETIME_IMMUTABLE)]
    private $updatedAt;
}
