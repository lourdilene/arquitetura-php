<?php
class PostJaPublicadoException extends \DomainException{}
class PostStatus{}
class Post{}

$post = new Post();
if ($post->status === PostSatus::RASCUNHO) {
    $post->status = PostStatus::PUBLICADO;
} else {
    throw new PostJaPublicadoException();    
}
