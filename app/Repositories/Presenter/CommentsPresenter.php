<?php

namespace App\Repositories\Presenter;

/**
 * 前台文章评论
 *
 * @package App\Repositories\Presenter
 */
class CommentsPresenter
{
    public function comments($comments = [], $pid = 0)
    {
        $html = '';
        $comments = list_to_tree_key($comments, 'id', 'parent_id');
        foreach ($comments as $comment) {
            $html .= '<li>
                 <div class="comment-body">
                     <img src="img/comment_1.jpg" class="comment-avatar" alt="">
                     <div class="comment-content">
                         <span class="comment-author">' . $comment['user']['name'] . '</span>
                         <span class="comment-date">' . $comment['created_at'] . '</span>
                         <p>' . $comment['content'] . '</p>
                         <a href="#">回复</a>
                     </div>
                 </div>';
            $html .= $this->loop($comment['_child'], $comment['id']);
            $html .= '</li>';
        }
        dd($html);

        return $html;

        /* <li>
             <div class="comment-body">
                 <img src="img/comment_1.jpg" class="comment-avatar" alt="">
                 <div class="comment-content">
                     <span class="comment-author">{{ $comment[\'user\'][\'name\'] }}</span>
                     <span class="comment-date">{{ $comment[\'created_at\'] }}</span>
                     <p>{{ $comment[\'content\'] }}</p>
                     <a href="#">回复</a>
                 </div>
             </div>
             @if(!empty($comment[\'_child\']))
                 <ul class="comment-reply">
                     @foreach($comment[\'_child\'] as $var)
                         <li>
                             <div class="comment-body">
                                 <img src="img/comment_2.jpg" class="comment-avatar" alt="">
                                 <div class="comment-content">
                                     <span class="comment-author">{{ $var[\'user\'][\'name\'] }}</span>
                                     <span class="comment-date">{{ $var[\'created_at\'] }}</span>
                                     <p>{{ $var[\'content\'] }}</p>
                                     <a href="#">回复</a>
                                 </div>
                             </div>
                         </li> <!-- end reply comment -->
                     @endforeach
                 </ul>
             @endif
         </li>*/
    }

    public function loop($comments, $id = 0)
    {
        $html = '';
        if (!empty($comments)) {
            foreach ($comments as $comment) {
                $html .= '<ul class="comment-reply">
                     <li>
                         <div class="comment-body">
                             <img src="img/comment_2.jpg" class="comment-avatar" alt="">
                             <div class="comment-content">
                                 <span class="comment-author">' . $comment['created_at'] . '</span>
                                 <span class="comment-date">' . $comment['created_at'] . '</span>
                                 <p>' . $comment['content'] . '</p>
                                 <a href="#">回复</a>
                             </div>
                         </div>
                     </li> 
                 </ul>';
            }
        }
        return $html;
    }
}