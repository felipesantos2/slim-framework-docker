<?php

namespace app\database\entities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'messages')]
class Message
{
    #[Column(type: Types::INTEGER)]
    private $id;

    #[Column(lenght: 120)]
    private $title;

    #[Column(lenght: 200)]
    private $content;

    #[Column(name: 'created_at', type: Types::DATETIME_IMMUTABLE)]
    private $createdAt;
}
