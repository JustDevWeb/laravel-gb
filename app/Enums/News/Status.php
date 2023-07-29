<?php

declare(strict_types=1);

namespace App\Enums\News;

enum Status: string
{
    case DRAFT = 'draft';
    case ACTIVE = 'active';
    case BLOCKED = 'blocked';

}
