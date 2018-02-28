<?php


class db
{
    private $db;
    private $table;
    function __construct()
    {
        $this->db= new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
    }

    function getOne($where){
        $sql = "SELECT * FROM ".DB_TABLE." {$where}";
        $query = $this->db->query($sql);
        return $query->fetch_assoc();
    }

     function getAll(){
            $sql = "SELECT * FROM zakaz";
            $result = $this->db->query($sql);
            $row = array();
            while($r = $result->fetch_assoc())
            {
                $row[] = $r;
            }
            return $row;  
    }


    function tableName(){
        return DB_TABLE;

    }
    function update($data,$col,$isi){
        $count = 0;
        $field = '';
        foreach ($data as $key => $value)
        {
            if ($count++ != 0) $field .= ', ';
            $field .= "$key = '$value'";
        }
        $query = $this->db->prepare("UPDATE ".DB_TABLE." SET $field WHERE $col = '$isi'");
        return $query->execute();
    }
    function delete($where){
        $query  = $this->db->prepare("DELETE FROM ".DB_TABLE." {$where}");
        return $query->execute();
    }
    function create($data){
        $query = "INSERT INTO zakaz VALUES ($data)";
        return $this->db->query($query);
    }
}
