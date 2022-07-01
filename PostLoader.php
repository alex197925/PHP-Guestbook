<?php
declare(strict_types=1);
class PostLoader
{
private array $post = [];



    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param array $post
     */
    public function savePost(array $post): void
    {
   file_put_contents('post.txt', json_decode((string)$post));
    }


}