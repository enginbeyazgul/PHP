<?php
interface CCRUD
{
    public function connect($host,$db_name,$user,$pass);
    public function create($tableName,$id);
    public function read($tableName, $id);
    public function update($tableName,$data,$id);
    public function delete($tableName,$id);
}
class Database implements CCRUD
{
    public function connect($host,$db_name,$user,$pass)
    {
        
    }
    public function create($tableName,$id)
    {
        
    }
    public function read($tableName,$id)
    {
        
    }
    public function update($tableName,$data,$id)
    {
        
    }
    public function delete($tableName,$id)
    {
        
    }
}
?>