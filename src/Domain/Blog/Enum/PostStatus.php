<?php

declare(strict_types=1);

namespace App\Domain\Blog\Enum;

enum PostStatus: string 
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
}
