<?php

namespace App\Services;

use App\Traits\CommentTrait;
use App\Helpers\DateHelper;

class PostService
{
    use CommentTrait;

    public function addPost(){
        $addComment = $this->addComment();
        $post = 'some post here';
        $date = $this->getPostDate('2023-12-01 10:00:00');

        return [
            'post' => $post,
            'comment' => $addComment,
            'human_readable' => $date['human_readable'],
            'formatted_date' => $date['formatted_date'],
        ];
    }

    public function getPostDate(string $date){
        $humanReadable = DateHelper::humanReadableDate($date);
        $formattedDate = DateHelper::formatDate($date, 'd F, Y');

        return [
            'human_readable' => $humanReadable,
            'formatted_date' => $formattedDate,
        ];
    }
}
