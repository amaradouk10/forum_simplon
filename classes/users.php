<?php

class Users
{

    public $id;
    public $firstname;
    public $lastname;
    public $pseudo;
    public $user_role;


    
    //  Authors constructor.
    
    function __construct($id) {

        global $db;

        $id = str_secur($id); 

        $reqUser = $db->prepare('SELECT * FROM users WHERE id = ?');
        $reqUser->execute([$id]);
        $data = $reqUser->fetch();

        $this->id = $id;
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->pseudo = $data['pseudo'];
        $this->user_role = $data['user_role'];

    }


    
    //   Envoie de tous les auteurs
    
    static function getAllUsers() {

        global $db;

        $reqAuthors = $db->prepare('SELECT * FROM users');
        $reqAuthors->execute([]);
        return $reqAuthors->fetchAll();

    }

}