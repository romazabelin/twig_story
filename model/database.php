<?php

class database {
    const host = 'localhost';
    const user = 'mysql';
    const pass = 'mysql';
    const db = 'story';

    const table_story = "story";

    public static function connectToDB() {
        $connection = mysql_connect(self::host, self::user, self::pass);
        mysql_select_db(self::db);
        mysql_set_charset('utf8');
        return $connection;
    }

    public static function closeConnection($connection) {
        mysql_close($connection);
    }

    public static function addStory($title, $description) {
        $table = self::table_story;
        $connection = self::connectToDB();
        $title = mysql_real_escape_string($title);
        $description = mysql_real_escape_string($description);

        $query = "insert into `$table` (`title`, `description`) values ('$title', '$description')";
        mysql_query($query, $connection);
        $inserted_id = mysql_insert_id();

        self::closeConnection($connection);

        return $inserted_id;
    }

    public static function updateStoryAttachment($id, $attachment, $original_file_name) {
        $table = self::table_story;
        $connection = self::connectToDB();
        $attachment = mysql_real_escape_string($attachment);
        $original_file_name = mysql_real_escape_string($original_file_name);
        $id = mysql_real_escape_string($id);

        $query = "update `$table`
        set
        `attachment` = '$attachment',
        `attachment_original_file_name` = '$original_file_name'
        where id = '$id'";
        mysql_query($query, $connection);
        self::closeConnection($connection);
    }

    public static function getListStories($from = 0, $to = 0) {
        $table = self::table_story;
        $connection = self::connectToDB();
        $limitStr = ($to) ? " limit $from, $to " : "";

        $query = "select $table.* from $table order by id desc $limitStr";
        $result = mysql_query($query, $connection);
        self::closeConnection($connection);

        $listResult = array();

        if ($result) {
            while ($row = mysql_fetch_assoc($result)) {
                array_push($listResult, $row);
            }
        }

        return $listResult;
    }
}