<?php

class AddressesFacade extends DBConnection
{

    function fetchAddressesById($userId)
    {
        $sql = $this->connect()->prepare("SELECT * FROM addresses WHERE user_id = ?");
        $sql->execute([$userId]);
        return $sql;
    }

    function addDeiveryAddress($userId, $streetPurok, $barangay, $municipalityCity, $landmark, $nickname)
    {
        $sql = $this->connect()->prepare("INSERT INTO addresses (user_id, street_purok, barangay, municipality_city, landmark, nickname) VALUES (?, ?, ?, ?, ?, ?)");
        $sql->execute([$userId, $streetPurok, $barangay, $municipalityCity, $landmark, $nickname]);
        return $sql;
    }

    function deleteAddress($addressId, $userId)
    {
        $sql = $this->connect()->prepare("DELETE FROM addresses WHERE id = '$addressId' AND user_id = '$userId'");
        $sql->execute();
        return $sql;
    }
   
}
