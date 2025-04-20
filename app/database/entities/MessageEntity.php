<?php

declare(strict_types=1);

namespace app\database\entities;

class MessageEntity
{
    private $id;

    private $title;

    private $content;

    private $createdAt;

    private $product = null;
}
