<?php

class MunicipalityCityFacade extends DBConnection
{

    function fetchMunicipalityCity()
    {
        $sql = $this->connect()->prepare("SELECT * FROM municipality_city");
        $sql->execute();
        return $sql;
    }

    function addMunicipalityCity($municipalityCity)
    {
        $sql = $this->connect()->prepare("INSERT INTO municipality_city (municipality_city) VALUES (?)");
        $sql->execute([$municipalityCity]);
        return $sql;
    }

    function deleteMunicipalityCity($municipalityCityId)
    {
        $sql = $this->connect()->prepare("DELETE FROM municipality_city WHERE id = '$municipalityCityId'");
        $sql->execute();
        return $sql;
    }

    function verifyMunicipalityCity($municipalityCity)
    {
        $sql = $this->connect()->prepare("SELECT municipality_city FROM municipality_city WHERE municipality_city = ?");
        $sql->execute([$municipalityCity]);
        $count = $sql->rowCount();
        return $count;
    }
    
   
}
