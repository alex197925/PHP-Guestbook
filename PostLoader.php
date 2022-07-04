<?php
declare(strict_types=1);

class PostLoader
{
private array $posts = [];
private const DB_FILE = 'data.txt';



    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->posts;
    }

    /**
     * @param array $posts
     */
    public function savePost(array $posts): void
    {
       $this->posts[] = $posts;



    }


}
