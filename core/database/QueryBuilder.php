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
  /*
  * @param $table string
  * @param $data array
  * @return boolen
  */
  public function insertOne($table,$data)
  {
    $sql = sprintf(
    'insert into %s (%s) values (%s)',
    $table,
    implode(', ',array_keys($data)),
    ':'.implode(', :',array_keys($data))
    );
    try {
      $statement = $this->pdo->prepare($sql);
      return $statement->execute($data);

    } catch (Exception $e) {
      //Request::response($e->getMessage());
      Request::response("Something bad happend!Contact Web master.");
    }
  }
}
