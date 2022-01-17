<?php

class RegistrierungModel extends Model {

    public function checkUser($email){
        $sql = "SELECT email FROM users WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function registration($name, $email, $password){
        $sql = "INSERT INTO users (name, email, passwort, rolle, created_at)
        VALUE (?, ?, ?, 'user', NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$name, $email, $password]);

    }

}