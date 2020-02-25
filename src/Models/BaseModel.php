<?php

namespace App\Models;

use App\Database;

class BaseModel {

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}
