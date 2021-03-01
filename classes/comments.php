<?php

class Comments
{

    public $id;
    public $content;
    public $date;
    public $user_id;
    public $post_id;



    //   Envoie les commentaires par publication


    static function getPostComments($id)
    {

        global $db;

        $reqComments = $db->prepare('
        SELECT content,firstname,date FROM comments INNER JOIN users ON users.id = comments.user_id WHERE post_id = ? LIMIT 5
        ');
        $reqComments->execute([str_secur($id)]);
        return $reqComments->fetchAll();
    }



    static function getAllComments($id)
    {

        global $db;

        $reqComments = $db->prepare('
        SELECT content,firstname,date FROM comments INNER JOIN users ON users.id = comments.user_id WHERE post_id = ? ORDER BY comments.id DESC
        ');
        $reqComments->execute([str_secur($id)]);
        return $reqComments->fetchAll();
    }

    static function Insert_Data($data)
    {
        global $db;

        $reqComment = $db->prepare("INSERT INTO comments (content, user_id, post_id) VALUES (?,?,?)");
        $reqComment->execute($data);
        return $reqComment;
    }
}
