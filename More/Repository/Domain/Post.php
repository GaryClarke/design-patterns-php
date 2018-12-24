<?php

namespace More\Repository\Domain;

class Post {

    /** @var PostId */
    private $id;
    
    /** @var PostStatus */
    private $status;
    
    /** @var string */
    private $title;
    
    /** @var string */
    private $text;

    public static function draft(PostId $id, string $title, string $text)
    {
        return new self($id, PostStatus::fromString(PostStatus::STATE_DRAFT), $title, $text);
    }

    public static function fromState(array $state)
    {
        return new self(PostId::fromInt($state['id']), PostStatus::fromInt($state['statusId']), $state['title'], $state['text']);
    }

    /**
     * Post constructor.
     *
     * @param PostId $id
     * @param PostStatus $status
     * @param string $title
     * @param string $text
     */
    private function __construct(PostId $id, PostStatus $status, string $title, string $text)
    {
        $this->id = $id;
        $this->status = $status;
        $this->title = $title;
        $this->text = $text;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getTitle()
    {
        return $this->title;
    }
}