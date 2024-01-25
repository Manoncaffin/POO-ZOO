<?php

class employerManager
{
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }
}
?>