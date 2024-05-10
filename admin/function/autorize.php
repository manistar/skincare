<?php
class validate extends database
{
    public function signin($user_validating)
    {
        $d    = new database;
        $data = $this->validate_form($user_validating);
        if (!is_array($data)) {
            return null;
        }
        $value = $this->getall("admins", "email = ?", [$data['email']], fetch: "details");
        if (is_array($value)) {
            if (password_verify($data['password'], $value['password'])) {
                $_SESSION['adminSession'] = htmlspecialchars($value['ID']);
                return $this->loadpage("index.php", "json");
            } else {
                $this->message("Password Incorrect", "error");
            }
        } else {
            $this->message("Email doesn't exist.", "error");
        }
    }

    function lockscreen($screen_locked)
    {
        $data = $this->validate_form($screen_locked);
        if (!is_array($data))
            return null;
        $ID   = $_SESSION['ID'];
        $user = $this->getall("admins", "ID = ?", [$ID], fetch: "details");
        if (!is_array($user)) {
            $this->message("User not found", "error");
            return;
        }

        if (isset($_POST['unlock'])) {
            $stored_password = $user['password']; // Assuming 'password' is the column name in the database
            $input_password  = htmlspecialchars($_POST['password']);

            if (password_verify($input_password, $stored_password)) {
                unset($_SESSION['lockscreen']);
                $_SESSION['adminSession'] = $user['ID'];
                // echo "Got here";
                return $this->loadpage("index.php", "json");
            } else {
                $this->message("Password Incorrect", "error");
                return;
            }
        }
    }

    public function signup($user_registration)
    {
        $d    = new database;
        $data = $this->validate_form($user_registration, 'users');
        if (is_array($data)) {
            $data['ID']     = uniqid();
            $data['userID'] = uniqid();

            if ($data['password'] != "") {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                unset($data['confirm_password']);
                $insert                  = $this->quick_insert("users", $data, "User created successfully");
                $_SESSION['userSession'] = htmlspecialchars($data['userID']);
                if ($insert) {
                    return $this->loadpage("index.php", "json");

                }
            }
        }
    }

    function updating_home($frontboard)
    {
        $data = $this->validate_form($frontboard);
        if (is_array($data) && array_key_exists('userID', $data)) {
            $data['ID']     = uniqid();
            $data['userID'] = uniqid();
            $insert         = $this->quick_insert("friday_discount", $data, "Image uploaded Successfully");
            // $update = $this->update("profile", $data, "userID = '$id'", "Data updated successfully.");
        }
    }

    function insert_video($video)
    {
        $data = $this->validate_form($video);
        if (is_array($data) && array_key_exists('userID', $data)) {
            $data['ID']     = uniqid();
            $data['userID'] = uniqid();
            $data['status'] = "1";
            $insert         = $this->quick_insert("products", $data, "Products Video uploaded Successfully");
            // $update = $this->update("profile", $data, "userID = '$id'", "Data updated successfully.");
        }
    }

    public function blogging($blog)
    {
        $data = $this->validate_form($blog);
        if (is_array($data) && array_key_exists('userID', $data)) {
            $data['ID']     = uniqid();
            $data['userID'] = uniqid();
            $data['status'] = "1";
            $data['date']   = $date = date("M j, Y", time());
            $insert = $this->quick_insert("blog", $data, "Blog uploaded Successfully");
            // $update = $this->update("profile", $data, "userID = '$id'", "Data updated successfully.");
        }
    }


    function product_upload($prod_page)
    {
        $data = $this->validate_form($prod_page);
        if (is_array($data) && array_key_exists('userID', $data)) {
            $checktitle = $this->getall("products", "title  = ?", [$data['title']], "title");
            if (is_array($checktitle)) {
                $this->message("title already exists in the database.", "error");
                return false;
            }
            $checkimage = $this->getall("products", "upload_image = ?", [$data['upload_image']], "upload_image");
            if (is_array($checkimage)) {
                unset($data['upload_image']);
                $this->message(" Image already exists in the database.", "error");
                return false;
            } else {
                $data['ID']     = uniqid();
                $data['userID'] = uniqid();
                $data["status"] = "0";
                $insert         = $this->quick_insert("products", $data, "Products Inserted Successfully");
            }
            // $check = $this->getall("products", "title  = ? and upload_image = ?", [$data['title'], $data['upload_image']], "title");
            //     $this->message("A data with this title and Image already exists in the database.", "error");
        }
    }

    public function about_us($about)
    {
        $data       = $this->validate_form($about);
        $checkimage = $this->getall("about", "upload_image = ?", [$data['upload_image']], "upload_image");
        if (is_array($data) && array_key_exists('userID', $data)) {
            if (is_array($checkimage)) {
                unset($data['upload_image']);
                $this->message(" Image already exists in the database.", "error");
                return false;
            } else {
                $id = $data['userID'];
                unset($data['userID']);
                $data['status'] = "1";
                $data['date']   = $date = date("M j, Y", time());
                $update = $this->update("about", $data, "userID = '$id'", "About updated successfully.");
            }
        }
    }

    public function about_us_down($about_down)
    {
        $data = $this->validate_form($about_down);
        if (is_array($data) && array_key_exists('userID', $data)) {
            $id = $data['userID'];
            unset($data['userID']);
            $data['status'] = "1";
            $data['date']   = $date = date("M j, Y", time());
            $update = $this->update("about", $data, "userID = '$id'", "About uploaded successfully.");
        }
    }

    public function update_pro($pro_edit)
    {
        $data = $this->validate_form($pro_edit);
        if (is_array($data) && array_key_exists('userID', $data)) {
            $checkimage = $this->getall("products", "upload_image = ?", [$data['upload_image']], "upload_image");
            if (is_array($checkimage)) {
                unset($data['upload_image']);
                $this->message(" Image already exists in the database.", "error");
                return false;
            } else {
                $id = $data['userID'];
                unset($data['userID']);
                $data['status'] = "0";
                $data['date']   = $date = date("M j, Y", time());
                $update = $this->update("products", $data, "userID = '$id'", "Products updated successfully.");
            }
        }
    }

    public function update_video($video_edit)
    {
        $data = $this->validate_form($video_edit);
        if (is_array($data) && array_key_exists('userID', $data)) {
            $checkimage = $this->getall("products", "upload_video = ?", [$data['upload_video']], "upload_video");
            if (is_array($checkimage)) {
                unset($data['upload_video']);
                $this->message(" Image already exists in the database.", "error");
                return false;
            } else {
                $id = $data['userID'];
                unset($data['userID']);
                $data['status'] = "1";
                $data['date']   = $date = date("M j, Y", time());
                $update = $this->update("products", $data, "userID = '$id'", "Products updated successfully.");
            }
        }
    }

    public function update_blog($blog_edit)
    {
        $data = $this->validate_form($blog_edit);
        if (is_array($data) && array_key_exists('userID', $data)) {
            $checkimage = $this->getall("blog", "upload_image = ?", [$data['upload_image']], "upload_image");
            if (is_array($checkimage)) {
                unset($data['upload_image']);
                $this->message(" Image already exists in the database.", "error");
                return false;
            } else {
                $id = $data['userID'];
                unset($data['userID']);
                $data['status'] = "1";
                $data['date']   = $date = date("M j, Y", time());
                $update = $this->update("blog", $data, "userID = '$id'", "Blog updated successfully.");
            }
        }
    }
    
    

}
?>