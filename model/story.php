<?php
include_once 'story_interface.php';

class story implements story_interface {
    const dir_attachment = "attachment";

    public function addStory($story_title, $story_description) {
        $msg = "";
        $file_parts = pathinfo($_FILES['story_attachment']['name']);
        $attachment_extension = array('pdf', 'doc', 'docx', 'rtf', 'txt');
        $flagValid = true;

        if (!$story_title) {
            $flagValid = false;
            $msg .= "Please, enter story title\n";
        }

        if (strlen($story_title) > 65535) {
            $flagValid = false;
            $msg .= "Story title length is not valid\n";
        }

        if (!$story_description) {
            $flagValid = false;
            $msg .= "Please, enter story description\n";
        }

        if (strlen($story_description) > 65535) {
            $flagValid = false;
            $msg .= "Story description length is not valid\n";
        }

        if ($file_parts['extension'] && !in_array($file_parts['extension'], $attachment_extension)) {
            $flagValid = false;
            $msg .= "Wrong attachment extension. Possible: " . implode(",", $attachment_extension) . "\n";
        }

        if ($flagValid) {
            $story_id = database::addStory($story_title, $story_description);
            if ($story_id) {
                $story_folder = self::dir_attachment . "/" . $story_id;
                (!file_exists(self::dir_attachment)) ? mkdir(self::dir_attachment) : false;
                (!file_exists($story_folder)) ? mkdir($story_folder) : false;
                $resumeBasename = basename($_FILES['story_attachment']['name']);
                $uploadResumePath = $story_folder . "/" . $resumeBasename;
                $flag_upload_file = false;

                if (move_uploaded_file($_FILES['story_attachment']['tmp_name'], $uploadResumePath)) {
                    $flag_upload_file = true;
                }

                ($flag_upload_file) ? $this->updateStoryAttachment($story_id, $uploadResumePath, $resumeBasename) : false;
            }
            $msg = ($story_id) ? "Story saved" : "Error on saving story";
        }

        $res = array(
            "flagValid" => $flagValid,
            "msg" => $msg
        );
        echo json_encode($res);
    }

    public function updateStoryAttachment($id, $attachment, $original_file_name) {
        database::updateStoryAttachment($id, $attachment, $original_file_name);
    }

    public function getListStories() {
        return database::getListStories();
    }
}