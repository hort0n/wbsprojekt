<?php

class GuestbookModel extends Model {

    public function readAll(){
        $sql = "SELECT *, guestbook.created_at, guestbook.id as postid 
                FROM guestbook INNER JOIN users 
                ON guestbook.user_id = users.id
                ORDER BY guestbook.created_at DESC";
        

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
       
        $result = array();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $row['created_at'] = $this->formatiereDatum($row['created_at']);

            $result[$row['postid']] = $row;
        }
        /* $result = $stmt->fetchAll(PDO::FETCH_ASSOC); */
        return $result;


    }
    
    public function newPost($id, $newTitle, $newPost){
        $sql = "INSERT INTO guestbook
                (user_id, titel, post, created_at)
                VALUE (?, ?, ?, NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id, $newTitle, $newPost]);
        return true;
    }

    public function delPost($postid){
        $sql = "DELETE FROM guestbook WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$postid]);
        return true;
    }

    public function getUsers(){
        $sql = "SELECT name FROM users";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }


    function formatiereDatum($dbDatum, $format = '%d.%m.%Y'){
		$trim = explode(' ',$dbDatum);
        return strftime($format, strtotime($trim[0])) . ' ' . $trim[1];
    }
}