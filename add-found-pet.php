<?php
session_start();
include './config/connection.php';

// ERROR DISPLAY
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $category = $_POST["category"];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $location = $_POST['location'];
    $reward = $_POST['reward'];
    $description = $_POST['description'];
    $image = $_FILES['image'];

    $targetDir = "./public/"; // Directory where the files will be stored
    $targetFile = $targetDir . basename($image["name"]); // Path of the uploaded file

    $maxFileSize = 3 * 1024 * 1024; // 3MB in bytes
    $fileSize = $image["size"];

    $image_upload = move_uploaded_file($image["tmp_name"], $targetFile);

    // Check if the upload was successful
    if ($image_upload) {

        $sql = "INSERT INTO pets (name, img, category, breed, age, gender, location, reward, description,) VALUES (:name, :img, :category, :breed, :age, :gender, :location, :reward, :description)";
        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':img', $targetFile, PDO::PARAM_STR);
        $stmt->bindParam(':category', $category, PDO::PARAM_STR);
        $stmt->bindParam(':breed', $breed, PDO::PARAM_STR);
        $stmt->bindParam(':age', $age, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindParam(':location', $location, PDO::PARAM_STR);
        $stmt->bindParam(':reward', $reward, PDO::PARAM_INT);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);

        $stmt->execute();
        $LastInsertId = $dbh->lastInsertId();

        if ($LastInsertId) {
            echo "<script>alert('New Lost Pet Created.'); window.location.href = 'add-lost-pet.php';</script>";
        } else {
            echo '<script>alert("Something Went Wrong.")</script>';
        }

    } else {
        echo '<script>alert("Failed to upload the image.")</script>';
    }

}

?>

<?php include './includes/main-wrapper.php'?>

<!-- BREAD CRUMBS -->
<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="mb-5">
  <ol class="breadcrumb">
    <li class="breadcrumb-item fs-6 text">
      <a href="#" class="text-body-secondary fw-medium link-offset-2 link-underline link-underline-opacity-0">Home</a>
    </li>
    <li class="breadcrumb-item fs-6 fw-medium text text-primary" aria-current="page">
      Add Found Pet
    </li>
  </ol>
</nav>

<!-- DASHBOARD CONTENT -->
<div style="background-color: #ffff" class="container mt-3 mb-5 p-4 shadow-sm">
  <h2 class="mb-4">Found Pet Form</h2>
  <form role="form" method="POST"  enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter pet's name" required />
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="breed" class="form-label">Breed</label>
          <input type="text" class="form-control" name="breed" id="breed" placeholder="Enter pet's breed" required />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <select class="form-select" name="age" id="age" required>
            <option value="0-4 months">0-4 Months</option>
            <option value="4-8 months">4-8 Months</option>
            <option value="8-12 months">8-12 Months</option>
            <option value="1-2 yrs">1-2 yrs</option>
            <option value="2-3 yrs">2-3 yrs</option>
            <option value="3 yrs above">3 yrs above</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="gender" class="form-label">Gender</label>
          <select class="form-select" name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
        <label for="category" class="form-label">Animal Type</label>
          <select class="form-select" name="category" id="category" required>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="fish">Fish</option>
            <option value="bird">Birds</option>
            <option value="hen">Hens</option>
            <option value="rabbit">Rabbit</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="reward" class="form-label">Reward</label>
          <input type="number" class="form-control" name="reward" id="reward" placeholder="Enter reward amount" />
        </div>
      </div>
    </div>
    <div class="mb-3">
          <label for="location" class="form-label">Location</label>
          <input type="text" class="form-control" name="location" id="location" placeholder="Enter pet's last known location" required />
        </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter pet's description" required></textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="file" accept="image/*" class="form-control" name="image" id="image" required />
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php include './includes/main-wrapper-closing.php'?>