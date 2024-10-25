<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
class Budgets extends Database
{
    public function getBudgets($limit)
    {
        return $this->select("SELECT * FROM budgets ORDER BY id ASC LIMIT ?", ["i", $limit]);
    }
}