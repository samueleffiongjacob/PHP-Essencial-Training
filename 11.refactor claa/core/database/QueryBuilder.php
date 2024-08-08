<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

      // //does not dis play on broswer || sync
    // public function selectAll($table)
    // {

    //     
    //     $statement = $this->pdo->prepare("SELECT * FROM {$table}");
    //     $statement->execute();

    //     return $statement->fetchAll(PDO::FETCH_CLASS); // Fetch data as Task objects
    // }


    public function selectAll($table)
    {
        try {
            $statement = $this->pdo->prepare("SELECT * FROM {$table}");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e) {
            die('Query failed: ' . $e->getMessage());
        }
    }


    public function insert($table, $parameter)

    {
        $sql =sprintf(
            'insert into %s (%s) value(%s)',
            $table,

            implode(', ', array_keys($parameter)),

            ':'  .implode(', :', array_keys($parameter))
        );

        // die(var_dump($sql));

        // $statement = $this->pdo->prepare($sql);
        // $statement->execute($parameter);

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameter);

        } catch (PDOException $e) {
            die('insertion message: YOUR POST FAIL');
        }
    }

    
}


