<?php
// $data = [];
if (isset($_GET['id'])) {
    // Sanitize the input
    $userID = htmlspecialchars($_GET['id']);
    // Fetch user details based on the user ID
    $data = $d->getall("blog", "ID = ?", [$userID], fetch: "details");
}
$blog_edit = [
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
    "fname" => [
        "title" => "Full Name",
        "global_class" => "col-md-12",
        "name"=> "title",
        "placeholder" => "Enter your Full Name",
        "is_required" => true,
        "input_type" => "text",
        "type" => "input"
    ],
    "content" => [
        "title" => "Product Description",
        "global_class" => "col-md-12",
        "name"=> "content",
        // "placeholder" => "Enter your First Name",
        "is_required" => true,
        "input_type" => "txtarea",
        "type" => "textarea"
    ],
    "upload_image" => [
        "is_required" => false,
        "input_type" => "file",
        "path" => "../upload/blog/",
        "file_name" => "blog_" . uniqid(),
        "format" => ["jpeg", "jpg", "png"]
    ],
    "input_data"=>$data,
];
?>