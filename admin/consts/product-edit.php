<?php

$data = [];
if (isset($_GET['id'])) {
    // Sanitize the input
    $userID = htmlspecialchars($_GET['id']);
    // Fetch user details based on the user ID
    $data = $d->getall("products", "ID = ?", [$userID], fetch: "details");
}

$pro_edit = [
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


    "price" => [
        "title" => "Price",
        "global_class" => "col-md-12",
        "name"=> "price",
        "placeholder" => "Enter Product Price",
        "is_required" => true,
        "input_type" => "number",
        "type" => "input"
    ],

    "old_price" => [
        "title" => "Old Price",
        "global_class" => "col-md-12",
        "name"=> "price",
        "placeholder" => "Enter Product Old Price",
        "is_required" => false,
        "input_type" => "number",
        "type" => "input"
    ],

    
    "weight" => [
        "title" => "weight",
        "global_class" => "col-md-12",
        "name"=> "weight",
        "placeholder" => "Enter Product Weight",
        "is_required" => false,
        "input_type" => "text",
        "type" => "input"
    ],
    "label" => [
        "title" => "Type of Product",
        "type" => "select",
        "is_required" => false,
        "options" => [
            "health" => "Health Care",
            "skin_care" => "Skin Care", 
            "lip_stick" => "Lip Stick",
            "face-skin" => "Face Care",
            "blusher" => "Blusher",
            "natural" => "Natural",
        ],
        "global_class" => "col-md-12"        
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
        "path" => "../upload/products/",
        "file_name" => "products_" . uniqid(),
        "format" => ["jpeg", "jpg", "png"]
    ],
    "input_data"=>$data,
];

$video_edit = [
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


    "price" => [
        "title" => "Price",
        "global_class" => "col-md-12",
        "name"=> "price",
        "placeholder" => "Enter Product Price",
        "is_required" => true,
        "input_type" => "number",
        "type" => "input"
    ],

    "old_price" => [
        "title" => "Old Price",
        "global_class" => "col-md-12",
        "name"=> "price",
        "placeholder" => "Enter Product Old Price",
        "is_required" => false,
        "input_type" => "number",
        "type" => "input"
    ],

    
    "weight" => [
        "title" => "weight",
        "global_class" => "col-md-12",
        "name"=> "weight",
        "placeholder" => "Enter Product Weight",
        "is_required" => false,
        "input_type" => "text",
        "type" => "input"
    ],
    "label" => [
        "title" => "Type of Product",
        "type" => "select",
        "is_required" => false,
        "options" => [
            "health" => "Health Care",
            "skin_care" => "Skin Care", 
            "lip_stick" => "Lip Stick",
            "face-skin" => "Face Care",
            "blusher" => "Blusher",
            "natural" => "Natural",
        ],
        "global_class" => "col-md-12"        
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
    
    "upload_video" => [
        "is_required" => false,
        "input_type" => "file",
        "path" => "../upload/products/video/",
        "file_name" => "products_" . uniqid(),
        "format" => ["mp4", "mpeg"]
    ],
    "input_data"=>$data,
];

?>