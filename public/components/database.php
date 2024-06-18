<?php

class DatabaseConnection {
    public $connection;

    function __construct() {
        $env = parse_ini_file('../.env');
        $this->connection = new mysqli(
            $env['DB_HOST'],
            $env['DB_USER'],
            $env['DB_PASSWORD'],
            $env['DB_SCHEMA']
        );
    }

    function __destruct() {
        $this->connection->close();
    }

    function fetch($query_string, $types = "", ...$vars) {
        if (empty($types)) {
            return $this->connection->query($query_string);
        }

        $query = $this->connection->prepare($query_string);
        $query->bind_param($types, ...$vars);
        $query->execute();

        return $query->get_result();
    }
}