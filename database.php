<?php
  class Database
  {
    protected static $connection;

    public function connect()
    {
      if(!isset(self::$connection))
      {
        self::$connection = new mysqli("10.90.199.98", "qlcv", "qlcv123", "qlcv");
      }

      if(self::$connection == false)
      {
        return false;
        echo 'ko ket nối dc';
      }
      return self::$connection;
    }

    public function query_execute($queryString)
    {
      $connection = $this->connect();
      $connection->query("SET NAMES utf8");
      $result = $connection->query($queryString);
      return $result;
    }

    public function select_to_array($queryString)
    {
      $rows = array();
      $result = $this ->query_execute($queryString);
      if($result==false)
        return false;
      while ($item = $result ->fetch_assoc())
      {
        $rows[] = $item;
      }
      return $rows;
  }
}
 ?>
