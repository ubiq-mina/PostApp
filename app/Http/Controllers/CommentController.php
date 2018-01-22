<?php

namespace PostApp\Http\Controllers;

use Illuminate\Http\Request;

use PostApp\Comment;

class CommentController extends Controller
{
    public function submit()
    {
        echo json_encode($_POST);

        $comment = new Comment;

        $post_id = $_POST['post'];
        $user_id = $_POST['user'];
        $content = $_POST['comment'];

        $comment->post_id = $post_id;
        $comment->user_id = $user_id;
        $comment->content = $content;

        $comment->save();

        return redirect('home');
    }
}
