<?php
interface story_interface {
    public function addStory($title, $description);

    public function updateStoryAttachment($id, $attachment, $original_file_name);

    public function getListStories();
}