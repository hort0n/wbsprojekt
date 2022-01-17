<?php

class UserModel extends Model {

    public function getUserList(){
        $sql = "SELECT * FROM users";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        $result = array();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
            
            $row['created_at'] = $this->formatiereDatum($row['created_at']);

            $result[$row['id']] = $row;
        }

        return $result;

    }


    public function status($id, $flag){
        $sql = "UPDATE users
        SET flag = ?, updated_at = NOW()
        WHERE id = ?";

        $stmt = $this->db->prepare($sql);   
        $stmt->execute([$flag, $id]);
        return true;
    }

    public function deluser($id){
        $sql = "DELETE FROM users
                WHERE id = ?";

        $stmt = $this->db->prepare($sql);   
        $stmt->execute([$id]);
        return true;
    }

    function formatiereDatum($dbDatum, $format = '%d.%m.%Y'){
		$trim = explode(' ',$dbDatum);
        return strftime($format, strtotime($trim[0])) . ' ' . $trim[1];
    }
}