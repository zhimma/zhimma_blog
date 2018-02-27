<?php

namespace App\Repositories\Presenter;

/**
 * 前台文章评论
 *
 * @package App\Repositories\Presenter
 */
class CommentsPresenter
{
    public function comments($comments = [])
    {
        $html = '';
        if (!empty($comments)) {
            $comments = list_to_tree_key($comments, 'id', 'parent_id');
            foreach ($comments as $comment) {
                $html .= '<li>
                 <div class="comment-body">
                     <img src="' . $comment['user']['avatar'] . '" class="comment-avatar" alt="">
                     <div class="comment-content">
                         <span class="comment-author">' . $comment['user']['nickname'] . '</span>
                         <span class="comment-date">' . $comment['created_at'] . '</span>
                         <p>' . $comment['content'] . '</p>
                      <a href="javascript:;" class="reply-comment" data-id="' . $comment['id'] . '">回复</a>
                     </div>
                 </div>';
                if (!empty($comment['_child'])) {
                    $html .= $this->loop($comment['_child']);
                }
                $html .= '</li>';
            }
        }

        return $html;
    }

    public function loop($comments)
    {
        $html = '<ul class="comment-reply"><li>';
        foreach ($comments as $comment) {
            if (!empty($comment['_child'])) {
                $html .= '<div class="comment-body">
                             <img src="img/comment_2.jpg" class="comment-avatar" alt="">
                             <div class="comment-content">
                                 <span class="comment-author">' . $comment['user']['nickname'] . '</span>
                                 <span class="comment-date">' . $comment['created_at'] . '</span>
                                 <p>' . $comment['content'] . '</p>
                                 <a href="javascript:;" class="reply-comment" data-id="' . $comment['id'] . '">回复</a>
                             </div>
                         </div>';
                $html .= $this->loop($comment['_child']);
            } else {
                $html .= '
                         <div class="comment-body">
                             <img src="img/comment_2.jpg" class="comment-avatar" alt="">
                             <div class="comment-content">
                                 <span class="comment-author">' . $comment['user']['nickname'] . '</span>
                                 <span class="comment-date">' . $comment['created_at'] . '</span>
                                 <p>' . $comment['content'] . '</p>
                                 <a href="javascript:;" class="reply-comment" data-id="' . $comment['id'] . '">回复</a>
                             </div>
                         </div>
                     ';
            }
        }

        return $html . '</li></ul>';
    }
}