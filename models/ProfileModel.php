<?php

class ProfileModel extends Model {

	public function info($curUser){
        $sql = "SELECT * FROM users WHERE name = ?";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$curUser]);

        $result = $stmt->fetch();

        return $result;

    }
    
    public function updateInfo($id, $name, $motto, $ueber_mich, $gender){
        $sql = "UPDATE users
                SET name = ?, motto = ?, ueber_mich = ?, gender = ?, updated_at = NOW()
                WHERE id = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$name, $motto, $ueber_mich, $gender, $id]);
        return true;
    }

    public function updatePassword($id, $password){
        $sql = "UPDATE users
                SET passwort = ?, updated_at = NOW()
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$password, $id]);
        return true;
    }


}