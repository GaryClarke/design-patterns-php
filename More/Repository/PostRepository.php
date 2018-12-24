<?php

namespace More\Repository;

use More\Repository\Domain\Post;
use More\Repository\Domain\PostId;

class PostRepository {

    /** @var  Persistence */
    private $persistence;

    public function __construct(Persistence $persistence)
    {
        $this->persistence = $persistence;
    }

    public function generateId()
    {
        return PostId::fromInt($this->persistence->generateId());
    }

    public function findById(PostId $id)
    {
        try
        {
            $arrayData = $this->persistence->retrieve($id->toInt());

        } catch (\OutOfBoundsException $e)
        {
            throw new \OutOfBoundsException(sprintf('Post with id %d does not exist', $id->toInt()), 0, $e);
        }

        return Post::fromState($arrayData);
    }

    public function save(Post $post)
    {
        $this->persistence->persist([
            'id'       => $post->getId()->toInt(),
            'statusId' => $post->getStatus()->toInt(),
            'text'     => $post->getText(),
            'title'    => $post->getTitle(),
        ]);
    }
}