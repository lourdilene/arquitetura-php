<?php
class PostJaPublicadoException extends \DomainException{}
class PostStatus{}
class Post{
    public $status = PostStatus::RASCUNHO;

    public function publica(){
        if ($this->status === PostStatus::RASCUNHO){
            $this->status = PostStatus::PUBLICADO;
        }else{
            throw new PostJaPublicadoException();            
        }
    }
}

$post = new Post();
$post->publica();
