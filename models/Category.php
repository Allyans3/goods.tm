<?php

class Category {
    
    public static function getCategoryList() {
        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query("SELECT * FROM category ORDER BY sort_order ASC");

        $i = 0;

        while($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }

        return $categoryList;
    }
}



?>