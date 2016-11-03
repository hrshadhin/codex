<?php
/*
* Database querybuilder class
*/
class QueryBuilder
{
  protected $pdo;
  //constructor for dependency[PDO instance] load
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  /*
  * @param $table string
  * @return object
  */
  public function selectAll($table)
  {
    //prepare db query and execute
    $statement = $this->pdo->prepare("select * from ($table)");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }
}
