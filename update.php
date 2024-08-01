<?php
require "../header/nav.php";

// Check if the user is not signed in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../dashboard/sign-in.php');
    exit();
}

// Fetch user data
$fetch_query = "SELECT * FROM `register` where user_id = :user_id";
$fetch_prepare = $connection->prepare($fetch_query);
$fetch_prepare->bindParam(":user_id", $_SESSION['user_id']);
$fetch_prepare->execute();
$fetch_data = $fetch_prepare->fetch(PDO::FETCH_ASSOC);
// 
$fetch_upt_query = "SELECT * FROM `brand_profile` where user_id = :user_id";
$fetch_upt_prepare = $connection->prepare($fetch_upt_query);
$fetch_upt_prepare->bindParam(":user_id", $_SESSION['user_id']);
$fetch_upt_prepare->execute();
$fetch_upr_data = $fetch_upt_prepare->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['form_type']) && $_POST['form_type'] == 'influencer') {
        // Influencer form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $marital_status = $_POST['marital_status'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $fb_url = $_POST['fb_url'];
        $insta_url = $_POST['insta_url'];
        $youtube_url = $_POST['youtube_url'];
        $twitter_url = $_POST['twitter_url'];

        // Handle background image upload
        $bgimagename = $_FILES['background_img']['name'];
        $bgimagetmpname = $_FILES['background_img']['tmp_name'];
        move_uploaded_file($bgimagetmpname, "uploads/" . $bgimagename);

        // Handle profile image upload
        $imagename = $_FILES['profile_img']['name'];
        $imagetmpname = $_FILES['profile_img']['tmp_name'];
        move_uploaded_file($imagetmpname, "uploads/" . $imagename);
        $user_id = $_SESSION['user_id'];

        try {
            $sql = "INSERT INTO `create-creator-profile` (first_name, last_name, city, gender, marital_status, age, country, category, description, fb_url, insta_url, youtube_url, twitter_url, bg_img, profile_img, user_id)
                    VALUES (:first_name, :last_name, :city, :gender, :marital_status, :age, :country, :category, :description, :fb_url, :insta_url, :youtube_url, :twitter_url, :bg_img, :profile_img, :user_id)";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':marital_status', $marital_status);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':country', $country);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':fb_url', $fb_url);
            $stmt->bindParam(':insta_url', $insta_url);
            $stmt->bindParam(':youtube_url', $youtube_url);
            $stmt->bindParam(':twitter_url', $twitter_url);
            $stmt->bindParam(':bg_img', $bgimagename);
            $stmt->bindParam(':profile_img', $imagename);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            header("Location: profile.php");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } elseif (isset($_POST['form_type']) && $_POST['form_type'] == 'brand') {
        // Brand form data
        $brand_name = $_POST['brand_name'];
        $category = $_POST['category'];
        $register_date = $_POST['register_date'];
        $location = $_POST['location'];
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_phone = $_POST['user_phone'];
        $gender = $_POST['gender'];
        $brand_descr = $_POST['brand_descr'];
        $fb_url = $_POST['fb_url'];
        $insta_url = $_POST['insta_url'];
        $youtube_url = $_POST['youtube_url'];
        $website_url = $_POST['website_url'];
        $user_id = $_SESSION['user_id'];


        // Handle background image upload
        $bgimagename = $_FILES['bg_img']['name'];
        $bgimagetmpname = $_FILES['bg_img']['tmp_name'];
        move_uploaded_file($bgimagetmpname, "uploads/" . $bgimagename);

        // Handle logo image upload
        $logoimagename = $_FILES['logo_img']['name'];
        $logoimagetmpname = $_FILES['logo_img']['tmp_name'];
        move_uploaded_file($logoimagetmpname, "uploads/" . $logoimagename);

        try {
            $sql = "INSERT INTO `brand_profile` (brand_name, category, register_date, location, user_name, user_email, user_phone, gender, brand_descr, fb_url, insta_url, youtube_url, website_url, bg_img, logo_img,user_id)
                    VALUES (:brand_name, :category, :register_date, :location, :user_name, :user_email, :user_phone, :gender, :brand_descr, :fb_url, :insta_url, :youtube_url, :website_url, :bg_img, :logo_img, :user_id)";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(':brand_name', $brand_name);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':register_date', $register_date);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':user_name', $user_name);
            $stmt->bindParam(':user_email', $user_email);
            $stmt->bindParam(':user_phone', $user_phone);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':brand_descr', $brand_descr);
            $stmt->bindParam(':fb_url', $fb_url);
            $stmt->bindParam(':insta_url', $insta_url);
            $stmt->bindParam(':youtube_url', $youtube_url);
            $stmt->bindParam(':website_url', $website_url);
            $stmt->bindParam(':bg_img', $bgimagename);
            $stmt->bindParam(':logo_img', $logoimagename);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            header("Location: brand-profile.php");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    $connection = null;
}
?>



<div class="right-sidebar-panel p-0">
    <div class="card shadow-none">
        <div class="card-body p-0">
            <div class="media-height p-3" data-scrollbar="init">
                <div class="d-flex align-items-center mb-4">
                    <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Anna Sthesia</h6>
                        <p class="mb-0">Just Now</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Paul Molive</h6>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Anna Mull</h6>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/04.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Paige Turner</h6>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/11.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Bob Frapples</h6>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Barb Ackue</h6>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="iq-profile-avatar status-online">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/03.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Greta Life</h6>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="iq-profile-avatar status-away">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/12.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Ira Membrit</h6>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="iq-profile-avatar status-away">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/01.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Pete Sariya</h6>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="iq-profile-avatar">
                        <img class="rounded-circle avatar-50" src="../assets/images/user/02.jpg" alt="">
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Monty Carlo</h6>
                        <p class="mb-0">Admin</p>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-toggle bg-primary text-white mt-3">
                <i class="ri-arrow-left-line side-left-icon"></i>
                <i class="ri-arrow-right-line side-right-icon"><span class="ms-3 d-inline-block">Close
                        Menu</span></i>
            </div>
        </div>
    </div>
</div>
</div>
<div id="content-page" class="content-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-edit-list-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Update Information</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php if ($fetch_data['user_type'] == 'brand') { ?>
                                        <form action="update-profile.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="form_type" value="brand">
                                            <!-- Brand form fields -->
                                            <div class="form-group row align-items-center">
                                                <div class="form-group col-sm-6">
                                                    <label for="bg_img" class="form-label">Background Image</label>
                                                    <input type="file" class="form-control" id="bg_img" name="bg_img">
                                                    <?php if (!empty($fetch_data['bg_img'])) { ?>
                                                        <img src="<?php echo ($fetch_upr_data['bg_img']); ?>" alt="Background Image" class="img-thumbnail mt-2" style="max-width: 100px;">
                                                    <?php } ?>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="logo_img" class="form-label">Logo Image</label>
                                                    <input type="file" class="form-control" id="logo_img" name="logo_img">
                                                    <?php if (!empty($fetch_data['logo_img'])) { ?>
                                                        <img src="<?php echo ($fetch_upr_data['logo_img']); ?>" alt="Logo Image" class="img-thumbnail mt-2" style="max-width: 100px;">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="form-group col-sm-6">
                                                    <label for="brand_name" class="form-label">Brand Name:</label>
                                                    <input type="text" class="form-control" id="brand_name"  name="brand_name" pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed" value="<?php echo ($fetch_upr_data['brand_name'] ?? ''); ?>" required>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label class="form-label">Category:</label>
                                                    <select class="form-select" aria-label="Default select example" name="category" required>
                                                        <option value="Fashion" <?php echo ($fetch_data['category'] ?? '') == 'Fashion' ? 'selected' : ''; ?>>Fashion</option>
                                                        <option value="Technology" <?php echo ($fetch_data['category'] ?? '') == 'Technology' ? 'selected' : ''; ?>>Technology</option>
                                                        <option value="Food" <?php echo ($fetch_data['category'] ?? '') == 'Food' ? 'selected' : ''; ?>>Food</option>
                                                        <option value="Travel" <?php echo ($fetch_data['category'] ?? '') == 'Travel' ? 'selected' : ''; ?>>Travel</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="register_date" class="form-label">Register Date:</label>
                                                    <input type="date" class="form-control" id="register_date" name="register_date" value="<?php echo ($fetch_upr_data['register_date'] ?? ''); ?>" required>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="location" class="form-label">Location:</label>
                                                    <input type="text" class="form-control" id="location" name="location" value="<?php echo ($fetch_upr_data['location'] ?? ''); ?>" required>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="user_name" class="form-label">User Name:</label>
                                                    <input type="text" class="form-control" id="user_name" name="user_name" pattern="[A-Za-z0-9_]+" title="Only letters, numbers, and underscores are allowed" value="<?php echo ($fetch_upr_data['user_name'] ?? ''); ?>" required>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="user_email" class="form-label">User Email:</label>
                                                    <input type="email" class="form-control" id="user_email" name="user_email" value="<?php echo ($fetch_upr_data['user_email'] ?? ''); ?>" required>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="user_phone" class="form-label">User Phone:</label>
                                                    <input type="text" class="form-control" id="user_phone" name="user_phone" pattern="\d+" title="Only numbers are allowed" value="<?php echo ($fetch_upr_data['user_phone'] ?? ''); ?>" required>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label class="form-label d-block">Gender:</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" value="Male" id="inlineRadio10" <?php echo ($fetch_data['gender'] ?? '') == 'Male' ? 'checked' : ''; ?> required>
                                                        <label class="form-check-label" for="inlineRadio10">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" value="Female" id="inlineRadio11" <?php echo ($fetch_data['gender'] ?? '') == 'Female' ? 'checked' : ''; ?> required>
                                                        <label class="form-check-label" for="inlineRadio11">Female</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <label class="form-label">Brand Description:</label>
                                                    <textarea class="form-control" name="brand_descr" rows="5" required><?php echo ($fetch_upr_data['brand_descr'] ?? ''); ?></textarea>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="fb_url" class="form-label">Facebook URL:</label>
                                                    <input type="url" class="form-control" id="fb_url" name="fb_url" value="<?php echo ($fetch_upr_data['fb_url'] ?? ''); ?>">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="insta_url" class="form-label">Instagram URL:</label>
                                                    <input type="url" class="form-control" id="insta_url" name="insta_url" value="<?php echo ($fetch_upr_data['insta_url'] ?? ''); ?>">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="youtube_url" class="form-label">YouTube URL:</label>
                                                    <input type="url" class="form-control" id="youtube_url" name="youtube_url" value="<?php echo ($fetch_upr_data['youtube_url'] ?? ''); ?>">
                                                </div>
                                                <div class="form-group col-sm-6" placeholder="Optional">
                                                    <label for="website_url" class="form-label">Website URL:</label>
                                                    <input type="url" class="form-control" id="website_url" name="website_url" value="<?php echo ($fetch_upr_data['website_url'] ?? ''); ?>">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                                            <button type="reset" class="btn bg-soft-danger">Cancel</button>
                                        </form>
                                    <?php } ?>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Change Password</h4>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Manage Contact</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="cno" class="form-label">Contact Number:</label>
                                <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" class="form-control" id="email" value="Bnijone@demo.com">
                            </div>
                            <div class="form-group">
                                <label for="url" class="form-label">Url:</label>
                                <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button type="reset" class="btn bg-soft-danger">Cancle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- Wrapper End-->
<?php
require "../header/footer.php"
?> <!-- Backend Bundle JavaScript -->
<script src="../assets/js/libs.min.js"></script>
<!-- slider JavaScript -->
<script src="../assets/js/slider.js"></script>
<!-- masonry JavaScript -->
<script src="../assets/js/masonry.pkgd.min.js"></script>
<!-- SweetAlert JavaScript -->
<script src="../assets/js/enchanter.js"></script>
<!-- SweetAlert JavaScript -->
<script src="../assets/js/sweetalert.js"></script>
<!-- app JavaScript -->
<script src="../assets/js/charts/weather-chart.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
<script src="../assets/js/lottie.js"></script>


<!-- offcanvas start -->

<div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body small">
        <div class="d-flex flex-wrap align-items-center">
            <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="">
                <h6>Facebook</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="">
                <h6>Twitter</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="">
                <h6>Instagram</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="">
                <h6>Google Plus</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="">
                <h6>In</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="">
                <h6>YouTube</h6>
            </div>
        </div>
    </div>
</div>
</body>

</html>