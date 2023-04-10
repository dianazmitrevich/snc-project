<?php

namespace app\controllers;

use app\models\Service;
use app\models\Project;

class PortfolioController
{
    private $service;

    public function __construct()
    {
        $this->service = new Service();
        $this->project = new Project();
    }

    public function render($nesting)
    {
        if (count($nesting) > 1) {
            if ($nesting[1]) {
                $project = $this->getProjectByAlias($nesting[1]);
                $this->project->setId($project['id']);
                $this->project->setName($project['name']);
                $this->project->setDesc($project['desc']);
                $this->project->setDeadline($project['deadline']);
                $this->project->setDevPeriod($project['periodOfDev']);
                $this->project->setServiceId($project['service_id']);
                $this->project->setTypeId($project['type_id']);
                $this->project->setLikes($project['likes']);
                $this->project->setTextHtml($project['textHtml']);
    
                require_once 'views/templates/project.php';
            }
        } else require_once 'views/portfolio.php';
    }

    public function readTable(string $table)
    {
        return $this->service->db->readTable($table);
    }

    public function getProjectImages(int $id)
    {
        return $this->project->getProjectImages($id);
    }

    public function getProjectTeam(int $id)
    {
        return $this->project->getProjectTeam($id);
    }

    public function getProjectTechnologies(int $id)
    {
        return $this->project->getProjectTechnologies($id);
    }

    public function getServiceById(int $id) {
        return $this->service->getById('Services', $id);
    }

    public function getProjectTypeById(int $id) {
        return $this->project->getById('ProjectTypes', $id);
    }
    
    public function getProjectByAlias(string $alias) {
        return $this->project->getProjectByAlias($alias);
    }
}