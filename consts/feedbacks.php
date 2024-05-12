<?php
$feed_back = [
    "userID" => ["input_type"=>"hidden", "is_required"=>false],
    "feedback" => [
        "title" => "FeedBack",
        "global_class" => "col-md-12",
        "name"=> "feedback",
        "placeholder" => "Enter your FeedBack",
        "is_required" => true,
        "input_type" => "text",
        "type" => "input"
    ],
    "fname" => [
        "title" => "Full Name",
        "global_class" => "col-md-12",
        "name"=> "fname",
        "placeholder" => "Enter your Full Name",
        "is_required" => true,
        "input_type" => "text",
        "type" => "input"
    ],
    "email" => [
        "title" => "Email Address",
        "global_class" => "col-md-12",
        "name"=> "fname",
        "placeholder" => "Enter Email Address",
        "is_required" => true,
        "input_type" => "email",
        "type" => "input"
    ],
    "profile_image" => [
        "is_required" => false,
        "input_type" => "file",
        "path" => "upload/profile/",
        "file_name" => "profile_" . uniqid(),
        "format" => ["jpeg", "jpg", "png"]
    ],
]; 

$contact_us = [
    "userID" => ["input_type"=>"hidden", "is_required"=>false],
    "first_name" => [
        "title" => "First Name",
        "global_class" => "col-md-12",
        "name"=> "feedback",
        "placeholder" => "Enter your First Name",
        "is_required" => true,
        "input_type" => "text",
        "type" => "input"
    ],
    "last_name" => [
        "title" => "Last Name",
        "global_class" => "col-md-12",
        "name"=> "last_name",
        "placeholder" => "Enter your Last Name",
        "is_required" => true,
        "input_type" => "text",
        "type" => "input"
    ],
    "email" => [
        "title" => "Email Address",
        "global_class" => "col-md-12",
        "name"=> "fname",
        "placeholder" => "Enter Email Address",
        "is_required" => true,
        "input_type" => "email",
        "type" => "input"
    ],
    "phone" => [
        "title" => "Phone Number",
        "global_class" => "col-md-12",
        "name"=> "phone",
        "placeholder" => "Enter Phone Number",
        "is_required" => true,
        "input_type" => "phone",
        "type" => "input"
    ],
    "content" => [
        "title" => "Message",
        "global_class" => "col-md-12",
        "name"=> "content",
        "placeholder" => "Enter your Message",
        "is_required" => true,
        "input_type" => "txtarea",
        "type" => "textarea"
    ],

];
?>