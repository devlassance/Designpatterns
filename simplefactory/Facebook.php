<?php
class Facebook {
    public function createPost(){
        //Puxando uma subclasse exclusivamente para a criação de post
        return new Post();
    }
}

class Post {
    private $author;
    private $message;

    //definindo o nome do autor
    public function setAuthor($authorName){
        $this->author = $authorName;
    }

    //Exibindo esse nome
    public function getAuthor(){
        return $this->author;
    }

    //Definindo uma mensagem
    public function setMessage($message){
        $this->message = $message;
    }

    //Exibindo essa mensagem
    public function getMessage(){
        return $this->message;
    }
}