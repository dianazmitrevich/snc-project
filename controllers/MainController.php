<?php

namespace app\controllers;

use app\models\Project;
use app\models\Service;

class MainController
{
    private $project;
    private $service;

    public function __construct()
    {
        $this->project = new Project();
        $this->service = new Service();
    }

    public function render()
    {
        require_once 'views/main.php';
    }

    public function readTable(string $table)
    {
        return $this->project->db->readTable($table);
    }

    public function getServiceById(int $id) {
        return $this->service->getById('Services', $id);
    }
}