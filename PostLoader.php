<?php
declare(strict_types=1);
class PostLoader
{
private array $post = [];
private const DB_FILE = 'data.txt';



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
    $this->post[] = $post;


    }


}
