<?php

class Database {
    private $mysqli;

    public function __construct() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->mysqli = new mysqli(Config::$db["host"], Config::$db["user"], 
                                   Config::$db["pass"], Config::$db["database"]);
    }

    // https://websitebeaver.com/prepared-statements-in-php-mysqli-to-prevent-sql-injection
    // this query function protects against SQL injection (i think)
    
    public function query($query, $bparam=null, ...$params) {
        $stmt = $this->mysqli->prepare($query);
        if ($bparam != null)
            $stmt->bind_param($bparam, ...$params);

        if (!$stmt->execute()) {
            return false;
        }

        if (($res = $stmt->get_result()) !== false) {
            return $res->fetch_all(MYSQLI_ASSOC);
        }

        return true;
    }
}