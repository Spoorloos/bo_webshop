<?php

class DatabaseConnection {
    public $connection;

    function __construct() {
        $env = parse_ini_file('.env');

        $this->connection = new mysqli(
            $env['DB_HOST'],
            $env['DB_USER'],
            $env['DB_PASSWORD'],
            $env['DB_SCHEMA']
        );

        if ($this->connection->connect_error) {
            throw new Exception("Connection failed: " . $this->connection->connect_error);
        }
    }

    function __destruct() {
        $this->connection->close();
    }

    function fetch($query_string, $types = "", ...$vars) {
        $query = $this->connection->prepare($query_string);
        if ($types) {
            $query->bind_param($types, ...$vars);
        }

        $query->execute();
        $result = $query->get_result();
        $query->close();

        return $result;
    }
}