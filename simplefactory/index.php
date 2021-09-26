<?php
require 'Facebook.php';


$fb = new Facebook();

/*
A variavel post irar puxar além da action createPost, vai puxar a subclass
Post responsável por toda a criação
*/
$post = $fb->createPost();

//Definições de mensagens e nome do author
$post->setAuthor('Jorge');
$post->setMessage('Hello World');

echo "Author: ".$post->getAuthor().' - Mensagem: '.$post->getMessage();