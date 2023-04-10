<?php

namespace app\models;

use app\core\Model;

class Technology extends Model
{
    private $id;
    private $imageId;

    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function setImageId(int $imageId)
    {
        $this->imageId = $imageId;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getImageId()
    {
        return $this->imageId;
    }

    public function delete(int $id)
    {
        $query = "DELETE FROM Technologies WHERE technology_id = $id";
        $this->db->connection->query($query);


        $query = "DELETE FROM TechnologiesList WHERE id = $id";

        return $this->db->connection->query($query);
    }

    public function edit(int $id, array $data)
    {
        $query = "UPDATE TechnologiesList SET `image_id`=" . $data['techImage'] . " WHERE id=$id";

        return $this->db->connection->query($query);
    }

    public function add(array $data)
    {
        $query = "INSERT INTO TechnologiesList (`image_id`) VALUES (" . $data['techImage'] . ")";

        $this->db->connection->query($query);
    }
}