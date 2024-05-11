<?php
$user_validating = [
    "email" => [
        "title" => "Email",
        "global_class" => "col-md-12",
        "name" => "email",
        // "class" => "input-group mb-3",
        "placeholder" => "example@email.com",
        "is_required" => true,
        "input_type" => "email",
        "type" => "input",
        "icon" => '<div class="input-group-append"><div class="input-group-text ' . "fas fa-envelope" . '"></div></div>' // Add this line for the icon
    ],

    "password" => [
        "title" => "Password",
        "global_class" => "col-md-12",
        "name" => "password",
        "placeholder" => "Enter your password",
        "onfocus" => "if (this.value === 'Password') { this.value = ''; }",
        "onblur" => "if (this.value === '') { this.value = 'Password'; }",
        "id" => "validatePass",
        "description" => '<a href="forgot.html"><strong style="font-weight: 900;">Forgot Password ?</strong></a>',
        "is_required" => true,
        "input_type" => "password",
        "type" => "input",
        "icon" => '<span class="fas fa-lock"></span>' 
    ],
];

$screen_locked = [
    "ID" => ["input_type"=>"hidden", "is_required"=>false],
    "email" => [
        "title" => "Email",
        "global_class" => "col-md-12",
        "name" => "email",
        "placeholder" => "example@email.com",
        "is_required" => false,
        "input_type" => "email",
        "type" => "input",
        "icon" => ["type" => "icon", "options" => "fas fa-envelope"] // Assign the icon as an array
    ],

    "password" => [
        "title" => "Password",
        "global_class" => "col-md-12",
        "name" => "password",
        "placeholder" => "Enter your password",
        "onfocus" => "if (this.value === 'Password') { this.value = ''; }",
        "onblur" => "if (this.value === '') { this.value = 'Password'; }",
        "id" => "validatePass",
        "is_required" => true,
        "input_type" => "password",
        "type" => "input"
    ],
];


$user_registration = [
    // "ID" => ["input_type"=>"hidden", "is_required"=>false],
    "userID" => ["input_type"=>"hidden", "is_required"=>false],
    "first_name" => [
        "title" => "First Name",
        "global_class" => "col-md-12",
        "name"=> "first_name",
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
        "title" => "Email",
        "global_class" => "col-md-12",
        "name"=> "email",
        "placeholder" => "Example@email.com",
        "is_required" => true,
        "input_type" => "email",
        "type" => "input",
        "unique"=>""
    ],

    "phone_number" => [
        "title" => "Phone Number",
        "global_class" => "col-md-12",
        "name"=> "phone_number",
        "placeholder" => "Enter phone number",
        "is_required" => true,
        "input_type"=>"number",
        "type" => "input",
        "unique"=>""
    ],

    "upload_image"=>[
        "input_type"=>"file", 
        "path"=>"upload/",
         "file_name"=>"profile_" .uniqid(), 
         "formart"=>["jpeg", "jpg", "png"]
        ],

    "gender" => [
        "global_class" => "col-md-12",
        "placeholder" => "Select your gender", 
        "is_required" => true,
         "options" => ["Male" => "Male", "Female" => "Female"], 
         "type" => "select"
        ],

    "password" => [
        "title" => "Password",
        "global_class" => "col-md-12",
        "name"=> "password",
        "placeholder" => "Enter your password",
        "is_required" => true,
        "input_type"=>"password",
        "type" => "input"
    ],
];



// $d->create_table("users", $user_registration);
// $d->quick_insert("users", "ID, userID, first_name, last_name, password", [uniqid(), uniqid(),  "Tunde", "Ajayi", "tundeajayi@gmail.com", "userPassword"], "Account Created Successfully");
?>
