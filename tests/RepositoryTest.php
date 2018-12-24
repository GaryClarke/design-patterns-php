<?php

use PHPUnit\Framework\TestCase;
use More\Repository\Domain\Post;
use More\Repository\Domain\PostId;
use More\Repository\PostRepository;
use More\Repository\Domain\PostStatus;
use More\Repository\InMemoryPersistence;

class RepositoryTest extends TestCase {

    /** @var PostRepository */
    private $repository;

    /**
     *
     */
    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->repository = new PostRepository(new InMemoryPersistence());
    }

    /** @test */
    function can_generate_id()
    {
        $this->assertEquals(1, $this->repository->generateId()->toInt());
    }

    /**
     * @test
     * @expectedException OutOfBoundsException
     */
    function throws_exception_when_trying_to_find_post_which_does_not_exist()
    {
        $this->repository->findById(PostId::fromInt(42));
    }

    /** @test */
    function can_persist_post_draft()
    {
        $postId = $this->repository->generateId();

        $post = Post::draft($postId, 'RepositoryPattern', 'Design Patterns PHP');
        $this->repository->save($post);

        $this->repository->findById($postId);

        $this->assertEquals($postId, $this->repository->findById($postId)->getId());
        $this->assertEquals(PostStatus::STATE_DRAFT, $post->getStatus()->toString());
    }
}