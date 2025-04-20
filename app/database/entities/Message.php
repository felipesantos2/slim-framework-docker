<?php

namespace app\database\entities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'messages')]
class Message
{
    #[Id]
    #[Column(type: Types::INTEGER)]
    private $id;

    #[Column(length: 120)]
    private $title;

    #[Column(length: 200)]
    private $content;

    #[Column(name: 'created_at', type: Types::DATETIME_IMMUTABLE)]
    private $createdAt;

    #[ManyToOne(targetEntity: User::class, inversedBy: 'features')]
    #[JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private ?User $product = null;
}
