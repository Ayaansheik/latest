<?php
require "../header/nav.php";

// Check if the user is not signed in
// if (!isset($_SESSION['user_id'])) {
//     header('Location: ../dashboard/sign-in.php');
//     exit();
// }
// Fetch user data based on session or any other method
$user_id = $_SESSION['user_id']; // Assuming user_id is stored in session
$query = "SELECT user_type FROM register WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$fetch_data = $result->fetch_assoc();
$user_type = $fetch_data['user_type'];

// Fetch existing data based o  n user type
$data_query = "";
if ($user_type == 'influencer') {
    $data_query = "SELECT * FROM influencer_profile WHERE user_id = ?";
} elseif ($user_type == 'brand') {
    $data_query = "SELECT * FROM brand_profile WHERE user_id = ?";
}

$stmt = $conn->prepare($data_query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$profile_data = $result->fetch_assoc();
?>
<!-- In your HTML form -->
<div class="card-body">
    <?php if ($user_type == 'influencer') { ?>
        <form action="update-profile.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="form_type" value="influencer">
            <!-- Influencer form fields -->
            <div class="form-group row align-items-center">
                <div class="form-group col-sm-6">
                    <label for="background_img" class="form-label">Background Image</label>
                    <input type="file" class="form-control" id="background_img" name="background_img">
                </div>
                <div class="form-group col-sm-6">
                    <label for="profile_img" class="form-label">Profile Image</label>
                    <input type="file" class="form-control" id="profile_img" name="profile_img">
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Populate fields with existing data -->
                <div class="form-group col-sm-6">
                    <label for="first_name" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo htmlspecialchars($profile_data['first_name']); ?>" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="last_name" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo htmlspecialchars($profile_data['last_name']); ?>" required>
                </div>
                <!-- Add other fields similarly -->
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn bg-soft-danger">Cancel</button>
            </div>
        </form>
    <?php } elseif ($user_type == 'brand') { ?>
        <form action="update-profile.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="form_type" value="brand">
            <!-- Brand form fields -->
            <div class="form-group row align-items-center">
                <div class="form-group col-sm-6">
                    <label for="bg_img" class="form-label">Background Image</label>
                    <input type="file" class="form-control" id="bg_img" name="bg_img">
                </div>
                <div class="form-group col-sm-6">
                    <label for="logo_img" class="form-label">Logo Image</label>
                    <input type="file" class="form-control" id="logo_img" name="logo_img">
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Populate fields with existing data -->
                <div class="form-group col-sm-6">
                    <label for="brand_name" class="form-label">Brand Name:</label>
                    <input type="text" class="form-control" id="brand_name" name="brand_name" value="<?php echo htmlspecialchars($profile_data['brand_name']); ?>" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="category" class="form-label">Category:</label>
                    <select class="form-select" name="category" required>
                        <option value="Fashion" <?php echo $profile_data['category'] == 'Fashion' ? 'selected' : ''; ?>>Fashion</option>
                        <option value="Technology" <?php echo $profile_data['category'] == 'Technology' ? 'selected' : ''; ?>>Technology</option>
                        <option value="Food" <?php echo $profile_data['category'] == 'Food' ? 'selected' : ''; ?>>Food</option>
                        <option value="Travel" <?php echo $profile_data['category'] == 'Travel' ? 'selected' : ''; ?>>Travel</option>
                    </select>
                </div>
                <!-- Add other fields similarly -->
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn bg-soft-danger">Cancel</button>
            </div>
        </form>
    <?php } ?>
</div>
<?php
require_once 'db_connection.php'; // Include your database connection

$form_type = $_POST['form_type'];
$user_id = $_SESSION['user_id']; // Assuming user_id is stored in session

if ($form_type == 'influencer') {
    // Update influencer profile
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    // Handle file uploads and other fields
    // ...

    $query = "UPDATE influencer_profile SET first_name = ?, last_name = ?, ... WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssi', $first_name, $last_name, $user_id);
    // Bind other parameters
    // ...
} elseif ($form_type == 'brand') {
    // Update brand profile
    $brand_name = $_POST['brand_name'];
    // Handle file uploads and other fields
    // ...

    $query = "UPDATE brand_profile SET brand_name = ?, ... WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('si', $brand_name, $user_id);
    // Bind other parameters
    // ...
}

if ($stmt->execute()) {
    echo "<script>alert('Profile updated successfully');</script>";
} else {
    echo "<script>alert('Error updating profile');</script>";
}

header("Location: update-profile.php"); // Redirect to the same or another page
exit();
?>
