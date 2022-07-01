<?php
declare(strict_types=1);
 class Post {
     private  $title;
     private $data;
     private $content;
     private $autor;



     public function __construct($title, $data, $content, $autor)
     {
         $this->title = $title;
         $this->data = $data('Y/m/d H-i-s');
         $this->content = $content;
         $this->autor = $autor;
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