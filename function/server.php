<?php
class contact extends database{
    function contact_server($contact_us){
        $data = $this->validate_form($contact_us);
        if (is_array($data)) {
            $checkmessage = $this->getall("contact", "content  = ?", [$data['content']], "content");
            if (is_array($checkmessage)) {
                $this->message("Sorry you can not resend the same message", "error");
                return false;
            }
            $data['userID'] = uniqid();
            $data['ID'] = uniqid();  // Assuming you want to set the 'ID' field
            $data['status'] = "1";
            $insert = $this->quick_insert("contact", $data, "Your message has been sent Successfully");
        }
    }
    function feedback_server($feed_back){
        $data = $this->validate_form($feed_back);
        if (is_array($data)) {
            $data['userID'] = uniqid();
            $data['ID'] = uniqid();
            $data['feed_status'] = "1";

            $insert = $this->quick_insert("products", $data, "Your feedback has been posted Successfully");
        }
    }

    function blogs_comment($blog_comment){
        $data = $this->validate_form($blog_comment);
        if (is_array($data)) {
            $data['userID'] = uniqid();
            $data['ID'] = uniqid();
            $data['status'] = "0";
            $data['date'] = $date = date("M j, Y", time());
            $insert = $this->quick_insert("blog", $data, "Your Comment has been posted Successfully");
        }
    }
    
}
?>