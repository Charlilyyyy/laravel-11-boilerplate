<?php

namespace App\Services;

use App\Traits\CommentTrait;

class ChatService
{
    use CommentTrait;

    public function addChat(){
        $addComment = $this->addComment();
        $chat = 'some chat here';
        return [
            'chat' => $chat,
            'comment' => $addComment,
        ];
    }
}
