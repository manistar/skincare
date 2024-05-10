<?php 
$d = new database;

// $userID = "63447143698e4";
// $data = $d->getall("products", "ID = ?", [$userID], fetch: "details");

$frontboard = [
    "userID" => ["input_type"=>"hidden", "is_required"=>false],
    "upload_images" => [
        "is_required" => false,
        "input_type" => "file",
        "path" => "../upload/banner/",
        "file_name" => "banner_" . uniqid(),
        "format" => ["jpeg", "jpg", "png"]
    ],
            // "input_data"=>$data,
];

$prod_page = [
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
];

$video = [
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
        "is_required" => true,
        "input_type" => "file",
        "path" => "../upload/products/video/",
        "file_name" => "video_" . uniqid(),
        "format" => ["mp4", "mpeg"]
    ],
            // "input_data"=>$data,
];

$blog = [
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
        "is_required" => true,
        "input_type" => "file",
        "path" => "../upload/blog/",
        "file_name" => "blog_" . uniqid(),
        "format" => ["jpeg", "jpg", "png"]
    ],
];
?>