<?php

class LoginModel extends Model {


    public function checkUser($email){
        $sql = 'SELECT * FROM users
                WHERE email = :email';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}