<?php

function birthday($birthday) {
    $age = date_create($birthday)->diff(date_create('today'))->y;
 
    return $age;
}

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
// display image
$image = $_FILES["fileToUpload"]["name"]; 
$tempname = $_FILES["fileToUpload"]["tmp_name"];
$img = "images/".$image;


 include("inc/header.php"); 

?>
    <h1>Profile</h1>
    <p class="background"><img src="<?php echo $img; ?>" width="200" style="border-radius: 50%;"/><br/>
    <b><?php echo $_POST["name"]; ?></b></p>

    <p class="background"><b>Date Of Birth: </b><?php echo $_POST["birthDate"]; ?></p>
    <p class="background"><b>Age: </b><?php echo birthday($_POST['birthDate']);; ?></p>
    <?php
        $birthDate = $_POST['birthDate'];
        $name = $_POST['name'];
        $dob = date('d-m',strtotime($birthDate));
        $today = date('d-m');
        if($dob == $today)
        {
           echo "<p class='birthday'>Happy Birthday $name!</p>\n";
        } else
        {
           echo "";
        }
        ?>
    <p class="background"><b>Biography: </b><?php echo $_POST["biography"]; ?></p>
    <div class="background">
    <p><b>List of Interests:</b></p>
    <ul class='list'>
    <?php
    // Check if form is submitted successfully
        if(isset($_POST["submit"])) {
            // Check if any option is selected
            if(isset($_POST["subject"])) {
                // Retrieving each selected option
                foreach ($_POST['subject'] as $subject)
                    print "<li class='li'>$subject</li><br/>";
            }
            else echo "Select an option first !!";
        }      
        
        
    ?> 
    
    </ul>  
    </div> <br/>
    <div class="back"><a href="index.php" style="text-decoration: none; border: 2px solid #b15ac0; border-radius: 25px; padding: 9px;">Back</a></div>
    <?php include "inc/footer.php"; ?>