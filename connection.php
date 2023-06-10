<?php
class Db_connection{
    private $connection;
    function db_connection(){
        $this->db_connect();
    }
    public function db_connect(){
       $this->connection = mysqli_connect('localhost','root','','mydb');
       if(mysqli_connect_error()){
        die("this connection is not established".mysqli_connect_error().mysqli_connect_error());
       };
    }
    function create($fname,$lname,$email){
        $db_sql= "INSERT INTO Student (fname,lname,email) VALUES ($fname,$lname,$email)";
        $res = mysqli_query($this->connection,$db_sql);
        if($res){
            return "Entry created";
        }
        else{
            return "Entry not created";
        }

    }
    function read($id=NULL){
        $sql = "SELECT * FROM Student";
        if($id){
          $sql .= " WHERE id=$id";
        }
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
        
    }
}
$database = new Db_connection();
?>