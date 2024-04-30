<?php

/**
 * Class CRUDFacade
 * This class provides basic CRUD operations using the DBConnection class.
 */
class CRUDFacade extends DBConnection {

    /**
     * Creates a new record in the database.
     * @param mixed $data The data to be inserted.
     * @return PDOStatement Returns a PDOStatement object representing the executed query.
     */
    function create($data) {
        $sql = $this->connect()->prepare("INSERT INTO simply_table VALUES (?)");
        $sql->execute([$data]);
        return $sql;
    }

    /**
     * Retrieves all records from the database.
     * @return PDOStatement Returns a PDOStatement object representing the executed query.
     */
    function read() {
        $sql = $this->connect()->prepare("SELECT * FROM simply_table");
        $sql->execute();
        return $sql;
    }

    /**
     * Updates an existing record in the database.
     * @param mixed $data The updated data.
     * @param int $id The ID of the record to be updated.
     * @return PDOStatement Returns a PDOStatement object representing the executed query.
     */
    function update($data, $id) {
        $sql = $this->connect()->prepare("UPDATE simply_table SET data = '$data' WHERE id = '$id'");
        $sql->execute();
        return $sql;
    }

    /**
     * Deletes a record from the database.
     * @param int $id The ID of the record to be deleted.
     * @return PDOStatement Returns a PDOStatement object representing the executed query.
     */
    function delete($id) {
        $sql = $this->connect()->prepare("DELETE FROM simple_table WHERE id = '$id'");
        $sql->execute();
        return $sql;
    }

}

?>