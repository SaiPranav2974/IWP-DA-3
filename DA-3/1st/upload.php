<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 200000) {
            echo "Sorry, your file is too large. It must be less than 200KB.";
        } else {
            // Check file type
            $allowed_types = array("image/jpeg", "image/png", "image/gif");
            if (in_array($_FILES["fileToUpload"]["type"], $allowed_types)) {
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

                    // Send thank-you email
                    $to = "saip242927@gmail.com";
                    $subject = "Thank you for uploading a nature photograph";
                    $message = "Dear subscriber,\n\nThank you for sharing your beautiful nature photograph with us!\n\nBest regards,\nThe Nature Photography Team";
                    $headers = "From: saipranav2974@gmail.com";

                    mail($to, $subject, $message, $headers);
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
        }
    } else {
        echo "File is not an image.";
    }
}
?>
