<?php
$userID = "663c802a498e6";
$data = $d->getall("about", "ID = ?", [$userID], fetch: "details");
$about = [
    "userID" => ["input_type"=>"hidden", "is_required"=>false],
    "title" => [
        "title" => "Title",
        "global_class" => "col-md-12",
        "name"=> "title",
        "placeholder" => "Enter Product Title",
        "is_required" => true,
        "input_type" => "text",
        "type" => "input"
    ],
    "small_title" => [
        "title" => "Small Title",
        "global_class" => "col-md-12",
        "name"=> "small_title",
        "placeholder" => "Enter Small Title",
        "is_required" => true,
        "input_type" => "text",
        "type" => "input"
    ],
    "detail" => [
        "title" => "About Details",
        "global_class" => "col-md-12",
        "name"=> "detail",
        "placeholder" => "Enter Small Title",
        "is_required" => true,
        "input_type" => "txtarea",
        "type" => "textarea"
    ],
    
    "upload_image" => [
        "is_required" => true,
        "input_type" => "file",
        "path" => "../upload/about/",
        "file_name" => "blog_" . uniqid(),
        "format" => ["jpeg", "jpg", "png"]
    ],
    "input_data"=>$data,
];
// $d->create_table("about", $about); 

$about_down = [
    "userID" => ["input_type"=>"hidden", "is_required"=>false],
    // "titles" => [
    //     "title" => "Title",
    //     "global_class" => "col-md-12",
    //     "name"=> "titles",
    //     "placeholder" => "Enter Product Title",
    //     "is_required" => true,
    //     "input_type" => "text",
    //     "type" => "input"
    // ],

    "content" => [
        "title" => "Message Content",
        "global_class" => "col-md-12",
        "name"=> "content",
        "placeholder" => "Enter Content",
        "is_required" => true,
        "input_type" => "txtarea",
        "type" => "textarea"
    ],
    "upload_images" => [
        "is_required" => true,
        "input_type" => "file",
        "path" => "../upload/about/",
        "file_name" => "about_" . uniqid(),
        "format" => ["jpeg", "jpg", "png"]
    ],
    "input_data"=>$data,
];

?>