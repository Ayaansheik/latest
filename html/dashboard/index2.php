<?php
require "../header/nav.php";
// Check if the user is not signed in
if (!isset($_SESSION['user_id'])) {
    header('Location: sign-in.php');
    exit();
}

?>
<style>
   .filter-container {
      margin-bottom: 20px;
   }

   .card-block {
      padding: 20px;
   }

   #cardsContainer .card {
      margin-bottom: 15px;
   }
</style>


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
               <div class="col-lg-8 row m-0 p-0">
                  <div class="col-sm-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-center">
                           <div class="header-title">
                              <h4 class="card-title">Congratulations! Now <a href="#">Create Profile</a> Page</h4>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="filter-container d-flex justify-content-between align-items-center">
                              <select id="categoryFilter" class="form-select">
                                 <option value="">Select Category</option>
                                 <option value="category1">Category 1</option>
                                 <option value="category2">Category 2</option>
                                 <option value="category3">Category 3</option>
                              </select>
                              <button id="filterButton" class="btn btn-primary">Filter</button>
                           </div>
                           <div id="cardsContainer" class="mt-3">
                              <!-- Cards will be appended here -->
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-sm-12">
                     <div class="card card-block card-stretch card-height">
                        <div class="mb-0">
                           <div class="top-bg-image">
                              <img src="../assets/images/page-img/profile-bg2.jpg" class="img-fluid w-100"
                                 alt="group-bg">
                           </div>
                           <div class="card-body text-center">
                              <div class="group-icon">
                                 <img src="../assets/images/page-img/gi-2.jpg" alt="profile-img"
                                    class="rounded-circle img-fluid avatar-120">
                              </div>
                              <div class="group-info pt-3 pb-3">
                                 <h4><a href="../app/group-detail.html">R & D</a></h4>
                                 <p>Lorem Ipsum data</p>
                              </div>
                              <div class="group-details d-inline-block pb-3">
                                 <ul class="d-flex align-items-center justify-content-between list-inline m-0 p-0">
                                    <li class="pe-3 ps-3">
                                       <p class="mb-0">Post</p>
                                       <h6>300</h6>
                                    </li>
                                    <li class="pe-3 ps-3">
                                       <p class="mb-0">Member</p>
                                       <h6>210</h6>
                                    </li>
                                    <li class="pe-3 ps-3">
                                       <p class="mb-0">Visit</p>
                                       <h6>1.1k</h6>
                                    </li>
                                 </ul>
                              </div>
                              <div class="group-member mb-3">
                                 <div class="iq-media-group">
                                    <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle"
                                          src="../assets/images/user/05.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle"
                                          src="../assets/images/user/06.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle"
                                          src="../assets/images/user/07.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle"
                                          src="../assets/images/user/08.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle"
                                          src="../assets/images/user/09.jpg" alt="">
                                    </a>
                                    <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle"
                                          src="../assets/images/user/10.jpg" alt="">
                                    </a>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary d-block w-100">Join</button>
                           </div>
                        </div>
                     </div>
                  </div>
                 
               </div>
               <div class="col-lg-4">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Top Brands</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <ul class="suggested-page-story m-0 p-0 list-inline">
                           <li class="mb-3">
                              <div class="d-flex align-items-center mb-3">
                                 <img src="../assets/images/page-img/42.png" alt="story-img"
                                    class="rounded-circle img-fluid avatar-50">
                                 <div class="stories-data ms-3">
                                    <h5>AL Karam</h5>
                                    <p class="mb-0">Clothing</p>
                                 </div>
                              </div>
                              <img src="../assets/images/small/img-1.jpg" class="img-fluid rounded"
                                 alt="Responsive image">
                              <hr>
                           </li>
                           <li class="">
                              <div class="d-flex align-items-center mb-3">
                                 <img src="../assets/images/page-img/42.png" alt="story-img"
                                    class="rounded-circle img-fluid avatar-50">
                                 <div class="stories-data ms-3">
                                    <h5>Nestle</h5>
                                    <p class="mb-0">Food</p>
                                 </div>
                              </div>
                              <img src="../assets/images/small/img-2.jpg" class="img-fluid rounded"
                                 alt="Responsive image">
                           </li>
                        </ul>
                     </div>
                  </div>
                
               </div>
               <div class="col-sm-12 text-center">
                  <img src="../assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper End-->
   <?php
     require "../header/footer.php"
     ?>
   <!-- Backend Bundle JavaScript -->
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

   <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
      aria-labelledby="shareBottomLabel">
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
   <script>
      document.getElementById('filterButton').addEventListener('click', function () {
         var selectedCategory = document.getElementById('categoryFilter').value;
         fetchCards(selectedCategory);
      });

      function fetchCards(category) {
         var xhr = new XMLHttpRequest();
         xhr.open('POST', 'fetch_cards.php', true);
         xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
         xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
               document.getElementById('cardsContainer').innerHTML = xhr.responseText;
            }
         };
         xhr.send('category=' + encodeURIComponent(category));
      }
   </script>
</body>

</html>