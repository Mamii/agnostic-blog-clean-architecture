<?php

declare(strict_types=1);

namespace App\Domain\Blog;

use App\Domain\Blog\Enum\PostStatus;
use App\Domain\Blog\Exception\CannotPublishPostException;
use DateTimeImmutable;

final class Post
{
    public function __construct(
        private string $title,
        private string $content,
        private PostStatus $status = PostStatus::DRAFT,
        private ?DateTimeImmutable $publishedAt = null
    ) {
    }

    /**
     * @throws CannotPublishPostException
     */
    public function publish(): void
    {
        if (empty($this->title) || empty($this->content)) {
            throw new CannotPublishPostException;
        }

        $this->status = PostStatus::PUBLISHED;
        $this->publishedAt = new DateTimeImmutable();
    }

    public function status(): PostStatus
    {
        return $this->status;
    }

    public function isPublished(): bool
    {
        return $this->status() ===  PostStatus::PUBLISHED;
    }
}
