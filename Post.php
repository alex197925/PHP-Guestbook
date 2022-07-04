<?php
declare(strict_types=1);
 class Post {
     private string $title;
     private int $data;
     private string $content;
     private string $author;



     public function __construct($content, $title,  $author, $data)
     {
        $this->title = $title;
        $this->data = $data('Y/m/d H-i-s');
         $this->content = $content;
        $this->autor = $author;
     }

     /**
      * @return mixed
      */
     public function getTitle()
     {
         return $this->title;
     }

     /**
      * @return mixed
      */
     public function getData()
     {
         return $this->data;
     }

     /**
      * @return mixed
      */
     public function getContent()
     {
         return $this->content;
     }

     /**
      * @return mixed
      */
     public function getAutor()
     {
         return $this->autor;
     }


 }
