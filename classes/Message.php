<?php
class Message {

    public $mail;
    public $object;
    public $contenu;
    public $id_utilisateur;


    static function Insert_Data($data)
    {
        global $db;

        $reqMessage = $db->prepare("INSERT INTO messages (mail, objet_mess, contenu, user_id) VALUES (?,?,?,?)");
        $reqMessage->execute($data);
        return $reqMessage;
    }

    static function getAllMessages($id)
    {

        global $db;

        $reqComments = $db->prepare('
        SELECT * FROM messages INNER JOIN users ON users.id = messages.user_id WHERE messages.id = ? ORDER BY messages.id DESC
        ');
        $reqComments->execute([str_secur($id)]);
        return $reqComments->fetchAll();
    }




}






?>