<?php
class Db_connection{
    private $connection;
    function db_connection(){
        $this->db_connect();
    }
    public function db_connect(){
       $this->connection = mysqli_connect('localhost','root','','my_db');
       if(mysqli_connect_error()){
        die("this connection is not established".mysqli_connect_error().mysqli_connect_error());
       };
    }
    function create($fname,$lname,$email,$password){
        $db_sql= "INSERT INTO (fname,lname,email,password) VALUES ($fname,$lname,$email,$password)";
        $res = mysqli_query($this->connection,$db_sql);
        if($res){
            return "Entry created";
        }
        else{
            return "Entry not created";
        }

    }
}
$database = new db_connection();
?>