<?php
// PHP 8 Compatibility Shim for deprecated mysql_* functions
// Created to make legacy projects work on PHP 7.0+ and PHP 8.x
if (!function_exists('mysql_connect')) {
    $GLOBALS['mysql_link'] = null;

    function mysql_connect($server, $user, $password) {
        try {
            $GLOBALS['mysql_link'] = mysqli_connect($server, $user, $password);
            return $GLOBALS['mysql_link'];
        } catch (Exception $e) {
            return false;
        }
    }

    function mysql_select_db($database, $link = null) {
        $link = $link ?: $GLOBALS['mysql_link'];
        return mysqli_select_db($link, $database);
    }

    function mysql_query($query, $link = null) {
        $link = $link ?: $GLOBALS['mysql_link'];
        return mysqli_query($link, $query);
    }

    function mysql_fetch_row($result) {
        return mysqli_fetch_row($result);
    }

    function mysql_fetch_assoc($result) {
        return mysqli_fetch_assoc($result);
    }

    function mysql_fetch_array($result) {
        return mysqli_fetch_array($result);
    }

    function mysql_fetch_object($result) {
        return mysqli_fetch_object($result);
    }

    function mysql_num_rows($result) {
        if ($result === false || $result === null) return 0;
        return mysqli_num_rows($result);
    }

    function mysql_insert_id($link = null) {
        $link = $link ?: $GLOBALS['mysql_link'];
        return mysqli_insert_id($link);
    }

    function mysql_error($link = null) {
        $link = $link ?: $GLOBALS['mysql_link'];
        return mysqli_error($link);
    }

    function mysql_real_escape_string($string, $link = null) {
        $link = $link ?: $GLOBALS['mysql_link'];
        if ($link) {
            return mysqli_real_escape_string($link, $string);
        } else {
            return addslashes($string);
        }
    }

    function mysql_close($link = null) {
        $link = $link ?: $GLOBALS['mysql_link'];
        if ($link) return mysqli_close($link);
        return true;
    }
    
    function mysql_num_fields($result) {
        return mysqli_num_fields($result);
    }
    
    function mysql_fetch_field($result) {
        return mysqli_fetch_field($result);
    }
    
    function mysql_data_seek($result, $offset) {
        if ($result === false || $result === null) return false;
        return mysqli_data_seek($result, $offset);
    }
    
    function mysql_affected_rows($link = null) {
        $link = $link ?: $GLOBALS['mysql_link'];
        return mysqli_affected_rows($link);
    }
}
?>
