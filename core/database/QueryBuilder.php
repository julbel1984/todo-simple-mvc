<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    /**
     * @var PDO
     */
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Показывает все записи
     *
     * @param $table
     * @return array
     */
    public function selectAll($table)
    {
        $statment = $this->pdo->prepare("select * from {$table}");
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Делает вставку
     * insert into names (name, email) values (:name, :email)
     *
     * @param $table
     * @param $parameters
     */
    public function insert($table, $parameters)
    {
        $columns = implode(' , ', array_keys($parameters));

        $values = ':' . implode(', :', array_keys($parameters));

        $sqlStr = sprintf(
            'insert into %s (%s) values (%s)',
                    $table, $columns, $values
        );

        try {
            $query = $this->pdo->prepare($sqlStr);

            $query->execute($parameters);
        } catch (Exception $e) {
            die('Ошибка добавления');
        }
    }
}