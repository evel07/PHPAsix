<?php
namespace App\Models;

use Core\App;
use PDO;

class Vehicle {
    protected static $table = "vehicles";

    public $id;
    public $model;
    public $year;
    public $driver;
    public $max_speed;

    public function __construct($data = []) {
        if(isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->model = $data['model'];
        $this->year = $data['year'];
        $this->driver = $data['driver'];
        $this->max_speed = $data['max_speed'];
    }

    public function save() {
        $db = App::get('database')->getConnection();
        if ($this->id) {
            // Editem
            $statement = $db->prepare('UPDATE ' . static::$table . ' SET model = :model, year = :year, driver = :driver, max_speed = :max_speed WHERE id = :id');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':model', $this->model);
            $statement->bindValue(':year', $this->year);
            $statement->bindValue(':driver', $this->driver);
            $statement->bindValue(':max_speed', $this->max_speed);
            $statement->execute();
        } else {
            // Creem
            $statement = $db->prepare('INSERT INTO ' . static::$table . ' (model, year, driver, max_speed) VALUES (:model, :year, :driver, :max_speed)');
            $statement->bindValue(':model', $this->model);
            $statement->bindValue(':year', $this->year);
            $statement->bindValue(':driver', $this->driver);
            $statement->bindValue(':max_speed', $this->max_speed);
            $statement->execute();

            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $vehicles = [];
        $results = $statement->fetchAll();
        foreach ($results as $result) {
            $vehicles[] = new self($result);
        }
        return $vehicles;
    }

    public function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch();
        return $data ? new self($data) : null;
    }

    public function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}
?>
