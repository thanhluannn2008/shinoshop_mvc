<?php

class DB
{

    public $con;
    public $db;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "web_shino";

    function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
        // echo "Ket noi thanh cong";
        
    }


    public $link;
    public $error;
  
 
 // Select or Read data
 public function select($query){
   $result = $this->link->query($query) or 
    die($this->link->error.__LINE__);
   if($result->num_rows > 0){
     return $result;
   } else {
     return false;
   }
  }
  
 // Insert data
 public function insert($query){
    $insert_row = $this->link->query($query) or 
      die($this->link->error.__LINE__);
    if($insert_row){
      return $insert_row;
    } else {
      return false;
     }
  }
   
 // Update data
  public function update($query){
    $update_row = $this->link->query($query) or 
      die($this->link->error.__LINE__);
    if($update_row){
     return $update_row;
    } else {
     return false;
     }
  }
   
 // Delete data
  public function delete($query){
    $delete_row = $this->link->query($query) or 
      die($this->link->error.__LINE__);
    if($delete_row){
      return $delete_row;
    } else {
      return false;
     }
    }

}

?>