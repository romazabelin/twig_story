$(document).ready(function() {
    function resetAddStoryForm() {
        $("#story_title").val("");
        $("#story_description").val("");
        $("#story_file").val("");
    }

    $("body").on("click", "#btn_add_story", function() {
        var story_title = $("#story_title").val();
        var story_description = $("#story_description").val();
        var story_file_selector = $("#story_file");
        var story_file = story_file_selector.val();
        var story_file_extension = (story_file) ? story_file.match(/\.(.+)$/)[1] : false;
        var allowed_file_extension = ['pdf','doc','docx','rtf', 'txt'];
        var flagValid = true;
        var errorMsg = "";

        if (story_file_extension && allowed_file_extension.indexOf(story_file_extension) == -1) {
            flagValid = false;
            errorMsg += "Wrong attachment extension. Possible: " + allowed_file_extension.join() + "\n";
        }

        if (!story_title) {
            flagValid = false;
            errorMsg += "Please, enter story title\n";
        }

        if (story_title.length > 65535) {
            flagValid = false;
            errorMsg += "Story title length is not valid\n";
        }

        if (!story_description) {
            flagValid = false;
            errorMsg += "Please, enter story description\n";
        }

        if (story_description.length > 65535) {
            flagValid = false;
            errorMsg += "Story description length is not valid\n";
        }

        if (!flagValid) {
            alert(errorMsg);
            return false;
        }

        var formData = new FormData();
        formData.append("act", "story_add");
        formData.append("story_title", story_title);
        formData.append("story_description", story_description);
        (story_file_selector) ? formData.append('story_attachment', story_file_selector[0].files[0]) : false;

        $.ajax({
            type: "POST",
            data: formData,
            dataType:'json',
            processData: false,
            contentType: false,
            async: false,
            url: "ajax.php",
            success: function(data) {
                (data['flagValid']) ? resetAddStoryForm() : false;
                (data['msg']) ? alert(data['msg']) : false;
            }
        })

        return false;
    })
})