<?php
require "../header/nav.php";

// Check if the user is not signed in
if (!isset($_SESSION['user_id'])) {
    header('Location: sign-in.php');
    exit();
};
$fetch_query = "SELECT * FROM `create-creator-profile` WHERE user_id = :user_id";
$fetch_prepare = $connection->prepare($fetch_query);
$fetch_prepare->bindParam(":user_id", $_SESSION['user_id']);
$fetch_prepare->execute();
$influencerProfile = $fetch_prepare->fetch(PDO::FETCH_ASSOC);
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
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-body profile-page p-0">
                        <div class="profile-header">
                           <div class="position-relative">
                              <img src="../app/uploads/<?php echo htmlspecialchars($influencerProfile['bg_img']); ?>"
                                 class="rounded img-fluid">
                              <ul class="header-nav list-inline d-flex flex-wrap justify-end p-0 m-0">
                                 <li><a href="#"><i class="ri-pencil-line"></i></a></li>
                                 <li><a href="#"><i class="ri-settings-4-line"></i></a></li>
                              </ul>
                           </div>
                           <div class="user-detail text-center mb-3">
                              <div class="profile-img">
                                 <img src="../app/uploads/<?php echo htmlspecialchars($influencerProfile['profile_img']); ?>"
                                    class="avatar-130 img-fluid" />
                              </div>
                              <div class="profile-detail">
                                 <h3 class=""><?php echo htmlspecialchars($influencerProfile['first_name']); ?></h3>
                              </div>
                           </div>
                           <div
                              class="profile-info p-3 d-flex align-items-center justify-content-between position-relative">
                              <div class="social-links">
                                 <ul
                                    class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                    <li class="text-center pe-3">
                                       <a href="#"><img src="../assets/images/icon/08.png" class="img-fluid rounded"
                                             alt="facebook"></a>
                                    </li>
                                    <li class="text-center pe-3">
                                       <a href="#"><img src="../assets/images/icon/09.png" class="img-fluid rounded"
                                             alt="Twitter"></a>
                                    </li>
                                    <li class="text-center pe-3">
                                       <a href="#"><img src="../assets/images/icon/10.png" class="img-fluid rounded"
                                             alt="Instagram"></a>
                                    </li>
                                    <li class="text-center pe-3">
                                       <a href="#"><img src="../assets/images/icon/12.png" class="img-fluid rounded"
                                             alt="You tube"></a>
                                    </li>

                                 </ul>
                              </div>
                              <div class="social-info">
                                 <ul
                                    class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                    <li class="text-center ps-3">
                                       <h6>Posts</h6>
                                       <p class="mb-0">69</p>
                                    </li>

                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body p-0">
                        <div class="user-tabing">
                           <ul
                              class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                              <li class="nav-item col-12 col-sm-3 p-0">
                                 <a class="nav-link active" href="#pills-timeline-tab" data-bs-toggle="pill"
                                    data-bs-target="#timeline" role="button">Timeline</a>
                              </li>
                              <li class="nav-item col-12 col-sm-3 p-0">
                                 <a class="nav-link" href="#pills-about-tab" data-bs-toggle="pill"
                                    data-bs-target="#about" role="button">About</a>
                              </li>
                              <li class="nav-item col-12 col-sm-3 p-0">
                                 <a class="nav-link" href="#pills-pricing-tab" data-bs-toggle="pill"
                                    data-bs-target="#pricing" role="button">Pricing</a>
                              </li>

                              <li class="nav-item col-12 col-sm-3 p-0">
                                 <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill"
                                    data-bs-target="#photos" role="button">Photos</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12">
                  <div class="tab-content">
                     <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                        <div class="card-body p-0">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <a href="#"><span
                                             class="badge badge-pill bg-primary font-weight-normal ms-auto me-1"><i
                                                class="ri-star-line"></i></span> 27 Items for yoou</a>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                       <div class="header-title">
                                          <h4 class="card-title">Photos</h4>
                                       </div>
                                       <div class="card-header-toolbar d-flex align-items-center">
                                          <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <ul class="profile-img-gallary p-0 m-0 list-unstyled">
                                          <li class=""><a href="#"><img src="../assets/images/page-img/g1.jpg"
                                                   alt="gallary-image" class="img-fluid" /></a></li>
                                          <li class=""><a href="#"><img src="../assets/images/page-img/g2.jpg"
                                                   alt="gallary-image" class="img-fluid" /></a></li>
                                          <li class=""><a href="#"><img src="../assets/images/page-img/g3.jpg"
                                                   alt="gallary-image" class="img-fluid" /></a></li>
                                          <li class=""><a href="#"><img src="../assets/images/page-img/g4.jpg"
                                                   alt="gallary-image" class="img-fluid" /></a></li>
                                          <li class=""><a href="#"><img src="../assets/images/page-img/g5.jpg"
                                                   alt="gallary-image" class="img-fluid" /></a></li>
                                          <li class=""><a href="#"><img src="../assets/images/page-img/g6.jpg"
                                                   alt="gallary-image" class="img-fluid" /></a></li>
                                          <li class=""><a href="#"><img src="../assets/images/page-img/g7.jpg"
                                                   alt="gallary-image" class="img-fluid" /></a></li>
                                          <li class=""><a href="#"><img src="../assets/images/page-img/g8.jpg"
                                                   alt="gallary-image" class="img-fluid" /></a></li>
                                          <li class=""><a href="#"><img src="../assets/images/page-img/g9.jpg"
                                                   alt="gallary-image" class="img-fluid" /></a></li>
                                       </ul>
                                    </div>
                                 </div>

                              </div>
                              <div class="col-lg-8">
                                 <div id="post-modal-data" class="card">
                                    <div class="card-header d-flex justify-content-between">
                                       <div class="header-title">
                                          <h4 class="card-title">Create Post</h4>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <div class="d-flex align-items-center">
                                          <div class="user-img">
                                             <img src="../assets/images/user/1.jpg" alt="userimg"
                                                class="avatar-60 rounded-circle">
                                          </div>
                                          <form class="post-text ms-3 w-100 " data-bs-toggle="modal"
                                             data-bs-target="#post-modal" action="#">
                                             <input type="text" class="form-control rounded"
                                                placeholder="Write something here..." style="border:none;">
                                          </form>
                                       </div>
                                       <hr>
                                       <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                                          <li
                                             class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2">
                                             <img src="../assets/images/small/07.png" alt="icon" class="img-fluid me-2">
                                             Photo/Video
                                          </li>
                                          <li
                                             class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3 mb-md-0 mb-2">
                                             <img src="../assets/images/small/08.png" alt="icon" class="img-fluid me-2">
                                             Tag Friend
                                          </li>
                                          <li
                                             class="bg-soft-primary rounded p-2 pointer d-flex align-items-center me-3">
                                             <img src="../assets/images/small/09.png" alt="icon" class="img-fluid me-2">
                                             Feeling/Activity
                                          </li>
                                          <li class="bg-soft-primary rounded p-2 pointer text-center">
                                             <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                   <div class="dropdown-toggle" id="post-option"
                                                      data-bs-toggle="dropdown">
                                                      <i class="ri-more-fill h4"></i>
                                                   </div>
                                                   <div class="dropdown-menu dropdown-menu-right"
                                                      aria-labelledby="post-option" style="">
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Check in</a>
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Live Video</a>
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Gif</a>
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Watch Party</a>
                                                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                         data-bs-target="#post-modal">Play with Friend</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="modal fade" id="post-modal" tabindex="-1"
                                       aria-labelledby="post-modalLabel" aria-hidden="true">
                                       <div class="modal-dialog  modal-lg modal-fullscreen-sm-down">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                                <button type="button" class="btn btn-secondary"
                                                   data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="d-flex align-items-center">
                                                   <div class="user-img">
                                                      <img src="../assets/images/user/1.jpg" alt="userimg"
                                                         class="avatar-60 rounded-circle img-fluid">
                                                   </div>
                                                   <form class="post-text ms-3 w-100" action="#">
                                                      <input type="text" class="form-control rounded"
                                                         placeholder="Write something here..." style="border:none;">
                                                   </form>
                                                </div>
                                                <hr>
                                                <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/07.png"
                                                            alt="icon" class="img-fluid"> Photo/Video</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/08.png"
                                                            alt="icon" class="img-fluid"> Tag Friend</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/09.png"
                                                            alt="icon" class="img-fluid"> Feeling/Activity</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/10.png"
                                                            alt="icon" class="img-fluid"> Check in</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/11.png"
                                                            alt="icon" class="img-fluid"> Live Video</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/12.png"
                                                            alt="icon" class="img-fluid"> Gif</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/13.png"
                                                            alt="icon" class="img-fluid"> Watch Party</div>
                                                   </li>
                                                   <li class="col-md-6 mb-3">
                                                      <div class="bg-soft-primary rounded p-2 pointer me-3"><a
                                                            href="#"></a><img src="../assets/images/small/14.png"
                                                            alt="icon" class="img-fluid"> Play with Friends</div>
                                                   </li>
                                                </ul>
                                                <hr>
                                                <div class="other-option">
                                                   <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center">
                                                         <div class="user-img me-3">
                                                            <img src="../assets/images/user/1.jpg" alt="userimg"
                                                               class="avatar-60 rounded-circle img-fluid">
                                                         </div>
                                                         <h6>Your Story</h6>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <span class="btn btn-primary">Friend</span>
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-save-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Public</h6>
                                                                        <p class="mb-0">Anyone on or off Facebook</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-close-circle-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Friends</h6>
                                                                        <p class="mb-0">Your Friend on facebook</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-user-unfollow-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Friends except</h6>
                                                                        <p class="mb-0">Don't show to some friends</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-notification-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Only Me</h6>
                                                                        <p class="mb-0">Only me</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <button type="submit"
                                                   class="btn btn-primary d-block w-100 mt-3">Post</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="post-item">
                                          <div class="user-post-data pb-3">
                                             <div class="d-flex justify-content-between">
                                                <div class="me-3">
                                                   <img class="rounded-circle  avatar-60"
                                                      src="../assets/images/user/1.jpg" alt="">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between flex-wrap">
                                                      <div class="">
                                                         <h5 class="mb-0 d-inline-block"><a href="#" class="">Bni
                                                               Cyst</a></h5>
                                                         <p class="ms-1 mb-0 d-inline-block">Add New Post</p>
                                                         <p class="mb-0">3 hour ago</p>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <i class="ri-more-fill"></i>
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-save-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Save Post</h6>
                                                                        <p class="mb-0">Add this to your saved items</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-pencil-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Edit Post</h6>
                                                                        <p class="mb-0">Update your post and saved items
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-close-circle-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Hide From Timeline</h6>
                                                                        <p class="mb-0">See fewer posts like this.</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-delete-bin-7-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Delete</h6>
                                                                        <p class="mb-0">Remove thids Post on Timeline
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-notification-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Notifications</h6>
                                                                        <p class="mb-0">Turn on notifications for this
                                                                           post</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="user-post">
                                             <a href="#"><img src="../assets/images/page-img/p1.jpg" alt="post-image"
                                                   class="img-fluid w-100" /></a>
                                          </div>
                                          <div class="comment-area mt-3">
                                             <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="like-block position-relative d-flex align-items-center">
                                                   <div class="d-flex align-items-center">
                                                      <div class="like-data">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                  alt="">
                                                            </span>
                                                            <div class="dropdown-menu py-2">
                                                               <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Like"><img
                                                                     src="../assets/images/icon/01.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Love"><img
                                                                     src="../assets/images/icon/02.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Happy"><img
                                                                     src="../assets/images/icon/03.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="HaHa"><img
                                                                     src="../assets/images/icon/04.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Think"><img
                                                                     src="../assets/images/icon/05.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Sade"><img
                                                                     src="../assets/images/icon/06.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Lovely"><img
                                                                     src="../assets/images/icon/07.png"
                                                                     class="img-fluid" alt=""></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="total-like-block ms-2 me-3">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               140 Likes
                                                            </span>
                                                            <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Max Emum</a>
                                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                                               <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="total-comment-block">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            20 Comment
                                                         </span>
                                                         <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                                   <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                                      aria-controls="share-btn"><i class="ri-share-line"></i>
                                                      <span class="ms-1">99 Share</span></a>
                                                </div>
                                             </div>
                                             <hr>
                                             <ul class="post-comments p-0 m-0">
                                                <li class="mb-2">
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/02.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Monty Carlo</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/03.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Paul Molive</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <form class="comment-text d-flex align-items-center mt-3"
                                                action="javascript:void(0);">
                                                <input type="text" class="form-control rounded"
                                                   placeholder="Enter Your Comment">
                                                <div class="comment-attagement d-flex">
                                                   <a href="#"><i class="ri-link me-3"></i></a>
                                                   <a href="#"><i class="ri-user-smile-line me-3"></i></a>
                                                   <a href="#"><i class="ri-camera-line me-3"></i></a>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                       <div class="post-item">
                                          <div class="user-post-data py-3">
                                             <div class="d-flex  justify-content-between">
                                                <div class="me-3">
                                                   <img class="rounded-circle  avatar-60"
                                                      src="../assets/images/user/1.jpg" alt="">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between">
                                                      <div class="">
                                                         <h5 class="mb-0 d-inline-block me-1"><a href="#" class="">Bni
                                                               Cyst</a></h5>
                                                         <p class="mb-0 d-inline-block">Share Anna Mull's Post</p>
                                                         <p class="mb-0">5 hour ago</p>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <i class="ri-more-fill"></i>
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-save-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Save Post</h6>
                                                                        <p class="mb-0">Add this to your saved items</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-pencil-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Edit Post</h6>
                                                                        <p class="mb-0">Update your post and saved items
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-close-circle-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Hide From Timeline</h6>
                                                                        <p class="mb-0">See fewer posts like this.</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-delete-bin-7-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Delete</h6>
                                                                        <p class="mb-0">Remove thids Post on Timeline
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-notification-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Notifications</h6>
                                                                        <p class="mb-0">Turn on notifications for this
                                                                           post</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="user-post">
                                             <a href="#"><img src="../assets/images/page-img/p3.jpg" alt="post-image"
                                                   class="img-fluid w-100" /></a>
                                          </div>
                                          <div class="comment-area mt-3">
                                             <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="like-block position-relative d-flex align-items-center">
                                                   <div class="d-flex align-items-center">
                                                      <div class="like-data">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                  alt="">
                                                            </span>
                                                            <div class="dropdown-menu py-2">
                                                               <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Like"><img
                                                                     src="../assets/images/icon/01.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Love"><img
                                                                     src="../assets/images/icon/02.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Happy"><img
                                                                     src="../assets/images/icon/03.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="HaHa"><img
                                                                     src="../assets/images/icon/04.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Think"><img
                                                                     src="../assets/images/icon/05.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Sade"><img
                                                                     src="../assets/images/icon/06.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Lovely"><img
                                                                     src="../assets/images/icon/07.png"
                                                                     class="img-fluid" alt=""></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="total-like-block ms-2 me-3">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               140 Likes
                                                            </span>
                                                            <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Max Emum</a>
                                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                                               <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="total-comment-block">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            20 Comment
                                                         </span>
                                                         <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                                   <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                                      aria-controls="share-btn"><i class="ri-share-line"></i>
                                                      <span class="ms-1">99 Share</span></a>
                                                </div>
                                             </div>
                                             <hr>
                                             <ul class="post-comments p-0 m-0">
                                                <li class="mb-2">
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/02.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Monty Carlo</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/03.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Paul Molive</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <form class="comment-text d-flex align-items-center mt-3"
                                                action="javascript:void(0);">
                                                <input type="text" class="form-control rounded"
                                                   placeholder="Enter Your Comment">
                                                <div class="comment-attagement d-flex">
                                                   <a href="#"><i class="ri-link me-3"></i></a>
                                                   <a href="#"><i class="ri-user-smile-line me-3"></i></a>
                                                   <a href="#"><i class="ri-camera-line me-3"></i></a>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                       <div class="post-item">
                                          <div class="user-post-data py-3">
                                             <div class="d-flex justify-content-between">
                                                <div class="me-3">
                                                   <img class="rounded-circle avatar-60"
                                                      src="../assets/images/user/1.jpg" alt="">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between">
                                                      <div class="">
                                                         <h5 class="mb-0 d-inline-block"><a href="#" class="">Bni
                                                               Cyst</a></h5>
                                                         <p class="ms-1 mb-0 d-inline-block">Update his Status</p>
                                                         <p class="mb-0">7 hour ago</p>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <i class="ri-more-fill"></i>
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-save-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Save Post</h6>
                                                                        <p class="mb-0">Add this to your saved items</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-pencil-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Edit Post</h6>
                                                                        <p class="mb-0">Update your post and saved items
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-close-circle-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Hide From Timeline</h6>
                                                                        <p class="mb-0">See fewer posts like this.</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-delete-bin-7-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Delete</h6>
                                                                        <p class="mb-0">Remove thids Post on Timeline
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-notification-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Notifications</h6>
                                                                        <p class="mb-0">Turn on notifications for this
                                                                           post</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="user-post">
                                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries,</p>
                                          </div>
                                          <div class="comment-area mt-3">
                                             <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="like-block position-relative d-flex align-items-center">
                                                   <div class="d-flex align-items-center">
                                                      <div class="like-data">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                  alt="">
                                                            </span>
                                                            <div class="dropdown-menu py-2">
                                                               <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Like"><img
                                                                     src="../assets/images/icon/01.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Love"><img
                                                                     src="../assets/images/icon/02.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Happy"><img
                                                                     src="../assets/images/icon/03.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="HaHa"><img
                                                                     src="../assets/images/icon/04.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Think"><img
                                                                     src="../assets/images/icon/05.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Sade"><img
                                                                     src="../assets/images/icon/06.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Lovely"><img
                                                                     src="../assets/images/icon/07.png"
                                                                     class="img-fluid" alt=""></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="total-like-block ms-2 me-3">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               140 Likes
                                                            </span>
                                                            <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Max Emum</a>
                                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                                               <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="total-comment-block">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            20 Comment
                                                         </span>
                                                         <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                                   <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                                      aria-controls="share-btn"><i class="ri-share-line"></i>
                                                      <span class="ms-1">99 Share</span></a>
                                                </div>
                                             </div>
                                             <hr>
                                             <ul class="post-comments p-0 m-0">
                                                <li class="mb-2">
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/02.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Monty Carlo</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/03.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Paul Molive</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <form class="comment-text d-flex align-items-center mt-3"
                                                action="javascript:void(0);">
                                                <input type="text" class="form-control rounded"
                                                   placeholder="Enter Your Comment">
                                                <div class="comment-attagement d-flex">
                                                   <a href="#"><i class="ri-link me-3"></i></a>
                                                   <a href="#"><i class="ri-user-smile-line me-3"></i></a>
                                                   <a href="#"><i class="ri-camera-line me-3"></i></a>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                       <div class="post-item">
                                          <div class="user-post-data py-3">
                                             <div class="d-flex justify-content-between">
                                                <div class=" me-3">
                                                   <img class="rounded-circle avatar-60"
                                                      src="../assets/images/user/1.jpg" alt="">
                                                </div>
                                                <div class="w-100">
                                                   <div class="d-flex justify-content-between">
                                                      <div class="">
                                                         <h5 class="mb-0 d-inline-block me-1"><a href="#" class="">Bni
                                                               Cyst</a></h5>
                                                         <p class=" mb-0 d-inline-block">Change Profile Picture</p>
                                                         <p class="mb-0">3 day ago</p>
                                                      </div>
                                                      <div class="card-post-toolbar">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <i class="ri-more-fill"></i>
                                                            </span>
                                                            <div class="dropdown-menu m-0 p-0">
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-save-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Save Post</h6>
                                                                        <p class="mb-0">Add this to your saved items</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-pencil-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Edit Post</h6>
                                                                        <p class="mb-0">Update your post and saved items
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-close-circle-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Hide From Timeline</h6>
                                                                        <p class="mb-0">See fewer posts like this.</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-delete-bin-7-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Delete</h6>
                                                                        <p class="mb-0">Remove thids Post on Timeline
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                               <a class="dropdown-item p-3" href="#">
                                                                  <div class="d-flex align-items-top">
                                                                     <i class="ri-notification-line h4"></i>
                                                                     <div class="data ms-2">
                                                                        <h6>Notifications</h6>
                                                                        <p class="mb-0">Turn on notifications for this
                                                                           post</p>
                                                                     </div>
                                                                  </div>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="user-post text-center">
                                             <a href="#"><img src="../assets/images/page-img/p1.jpg" alt="post-image"
                                                   class="img-fluid profile-img" /></a>
                                          </div>
                                          <div class="comment-area mt-3">
                                             <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="like-block position-relative d-flex align-items-center">
                                                   <div class="d-flex align-items-center">
                                                      <div class="like-data">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               <img src="../assets/images/icon/01.png" class="img-fluid"
                                                                  alt="">
                                                            </span>
                                                            <div class="dropdown-menu py-2">
                                                               <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Like"><img
                                                                     src="../assets/images/icon/01.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Love"><img
                                                                     src="../assets/images/icon/02.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Happy"><img
                                                                     src="../assets/images/icon/03.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="HaHa"><img
                                                                     src="../assets/images/icon/04.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Think"><img
                                                                     src="../assets/images/icon/05.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Sade"><img
                                                                     src="../assets/images/icon/06.png"
                                                                     class="img-fluid" alt=""></a>
                                                               <a class="me-2" href="#" data-bs-toggle="tooltip"
                                                                  data-bs-placement="top" title="Lovely"><img
                                                                     src="../assets/images/icon/07.png"
                                                                     class="img-fluid" alt=""></a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="total-like-block ms-2 me-3">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" role="button">
                                                               140 Likes
                                                            </span>
                                                            <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Max Emum</a>
                                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                                               <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="total-comment-block">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            20 Comment
                                                         </span>
                                                         <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Max Emum</a>
                                                            <a class="dropdown-item" href="#">Bill Yerds</a>
                                                            <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                            <a class="dropdown-item" href="#">Tara Misu</a>
                                                            <a class="dropdown-item" href="#">Midge Itz</a>
                                                            <a class="dropdown-item" href="#">Sal Vidge</a>
                                                            <a class="dropdown-item" href="#">Other</a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                                   <a href="#" data-bs-toggle="offcanvas" data-bs-target="#share-btn"
                                                      aria-controls="share-btn"><i class="ri-share-line"></i>
                                                      <span class="ms-1">99 Share</span></a>
                                                </div>
                                             </div>
                                             <hr>
                                             <ul class="post-comments p-0 m-0">
                                                <li class="mb-2">
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/02.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Monty Carlo</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="d-flex flex-wrap">
                                                      <div class="user-img">
                                                         <img src="../assets/images/user/03.jpg" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid">
                                                      </div>
                                                      <div class="comment-data-block ms-3">
                                                         <h6>Paul Molive</h6>
                                                         <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                         <div
                                                            class="d-flex flex-wrap align-items-center comment-activity">
                                                            <a href="#">like</a>
                                                            <a href="#">reply</a>
                                                            <a href="#">translate</a>
                                                            <span> 5 min </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                             <form class="comment-text d-flex align-items-center mt-3"
                                                action="javascript:void(0);">
                                                <input type="text" class="form-control rounded"
                                                   placeholder="Enter Your Comment">
                                                <div class="comment-attagement d-flex">
                                                   <a href="#"><i class="ri-link me-3"></i></a>
                                                   <a href="#"><i class="ri-user-smile-line me-3"></i></a>
                                                   <a href="#"><i class="ri-camera-line me-3"></i></a>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="about" role="tabpanel">
                        <div class="card">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-3">
                                    <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                                       <li>
                                          <a class="nav-link active" href="#v-pills-basicinfo-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-basicinfo-tab" role="button">Contact and Basic
                                             Info</a>
                                       </li>

                                       <!-- <li>
                                          <a class="nav-link" href="#v-pills-work-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-work-tab" role="button">Work and Education</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" href="#v-pills-lived-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-lived-tab" role="button">Places You've Lived</a>
                                       </li> -->
                                       <li>
                                          <a class="nav-link" href="#v-pills-details-tab" data-bs-toggle="pill"
                                             data-bs-target="#v-pills-details-tab" role="button">Details About You</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-md-9 ps-4">
                                    <div class="tab-content">
                                       <div class="tab-pane fade active show" id="v-pills-basicinfo-tab" role="tabpanel"
                                          aria-labelledby="v-pills-basicinfo-tab">

                                          <h4 class="mt-3">Social Media Handles</h4>
                                          <hr>
                                          <div class="row">
                                             <div class="col-3">
                                                <h6>Facebook</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0"><a href="<?php echo htmlspecialchars($influencerProfile['fb_url']); ?>" target="_blank" ><?php echo htmlspecialchars($influencerProfile['fb_url']); ?></a></p>
                                             </div>
                                             <div class="col-3">
                                                <h6>Instagram</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0"><a href="<?php echo htmlspecialchars($influencerProfile['insta_url']); ?>" target="_blank" ><?php echo htmlspecialchars($influencerProfile['insta_url']); ?></a></p>
                                             </div>
                                             <div class="col-3">
                                                <h6>Youtube</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0"><a href="<?php echo htmlspecialchars($influencerProfile['youtube_url']); ?>" target="_blank" ><?php echo htmlspecialchars($influencerProfile['youtube_url']); ?></a></p>
                                             </div>
                                             <div class="col-3">
                                                <h6>Twitter</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0"><a href="<?php echo htmlspecialchars($influencerProfile['twitter_url']); ?>" target="_blank" ><?php echo htmlspecialchars($influencerProfile['twitter_url']); ?></a></p>
                                             </div>
                                          </div>
                                          <h4 class="mt-3">Basic Information</h4>
                                          <hr>
                                          <div class="row">
                                             <div class="col-3">
                                                <h6>Birth Date</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">24 January</p>
                                             </div>

                                             <div class="col-3">
                                                <h6>Gender</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">Female</p>
                                             </div>
                                             <div class="col-3">
                                                <h6>interested in</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">Designing</p>
                                             </div>
                                             <div class="col-3">
                                                <h6>language</h6>
                                             </div>
                                             <div class="col-9">
                                                <p class="mb-0">English, French</p>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="tab-pane fade" id="v-pills-details-tab" role="tabpanel"
                                          aria-labelledby="v-pills-details-tab">
                                          <h4 class="mb-3">About You</h4>
                                          <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.</p>
                                          <h4 class="mt-3 mb-3">Other Name</h4>
                                          <p>Bini Rock</p>
                                          <h4 class="mt-3 mb-3">Favorite Quotes</h4>
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                             Lorem Ipsum has been the industry's standard dummy text ever since the
                                             1500s</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pricing" role="tabpanel">
                        <div id="content-page" class="content-page">
                           <div class="container">
                               <div class="row  " >
                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="card">
                                           <div class="card-body border text-center rounded">
                                               <span class="text-uppercase">Basic</span>
                                               <div class="d-flex align-items-center justify-content-center">
                                                   <h2 class="mb-4 display-3">$26</h2>
                                                   <small class=" text-muted">/ Month</small>
                                               </div>
                                               <ul class="list-unstyled line-height-4 mb-0">
                                                   <li>Lorem ipsum dolor sit amet</li>
                                                   <li>Consectetur adipiscing elit</li>
                                                   <li>Integer molestie lorem at massa</li>
                                               </ul>
                                               <a href="#" class="btn btn-primary mt-5">Start Starter</a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="card bg-primary text-white">
                                           <div class="card-body border text-center rounded">
                                               <span class="text-uppercase">Basic</span>
                                               <div class="d-flex align-items-center justify-content-center">
                                                   <h2 class="mb-4 display-3 text-white">$99</h2>
                                                   <small class="text-white-50">/ Month</small>
                                               </div>
                                               <ul class="list-unstyled line-height-4 mb-0 ">
                                                   <li>Lorem ipsum dolor sit amet</li>
                                                   <li>Consectetur adipiscing elit</li>
                                                   <li>Integer molestie lorem at massa</li>
                                               </ul>
                                               <a href="#" class="btn btn-light text-dark btn-block mt-5">Start Starter</a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="card">
                                           <div class="card-body border text-center rounded">
                                               <span class="text-uppercase">Basic</span>
                                               <div class="d-flex align-items-center justify-content-center">
                                                   <h2 class="mb-4 display-3">$39</h2>
                                                   <small class=" text-muted">/ Month</small>
                                               </div>
                                               <ul class="list-unstyled line-height-4 mb-0">
                                                   <li>Lorem ipsum dolor sit amet</li>
                                                   <li>Consectetur adipiscing elit</li>
                                                   <li>Integer molestie lorem at massa</li>
                                               </ul>
                                               <a href="#" class="btn btn-primary mt-5">Start Starter</a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="card">
                                           <div class="card-body border text-center rounded">
                                               <span class="text-uppercase">Basic</span>
                                               <div class="d-flex align-items-center justify-content-center">
                                                   <h2 class="mb-4 display-3">$25</h2>
                                                   <small class=" text-muted">/ Month</small>
                                               </div>
                                               <ul class="list-unstyled line-height-4 mb-0">
                                                   <li>Lorem ipsum dolor sit amet</li>
                                                   <li>Consectetur adipiscing elit</li>
                                                   <li>Integer molestie lorem at massa</li>
                                               </ul>
                                               <a href="#" class="btn btn-primary mt-5">Start Starter</a>
                                           </div>
                                       </div>
                                   </div>
                                
                               </div>
                           </div>
                       </div>
                     </div>
                     <div class="tab-pane fade" id="photos" role="tabpanel">
                        <div class="card">
                           <div class="card-body">
                              <h2>Photos</h2>
                              <div class="friend-list-tab mt-2">
                                 <ul
                                    class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                                    <li>
                                       <a class="nav-link active" data-bs-toggle="pill" href="#pill-photosofyou"
                                          data-bs-target="#photosofyou">Photos of You</a>
                                    </li>
                                    <li>
                                       <a class="nav-link" data-bs-toggle="pill" href="#pill-your-photos"
                                          data-bs-target="#your-photos">Your Photos</a>
                                    </li>
                                 </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                                       <div class="card-body p-0">
                                          <div class="d-grid gap-2 d-grid-template-1fr-13">
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/../assets/images/page-img/51.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/52.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/53.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/54.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/55.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/56.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/57.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/58.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/59.jpg"
                                                         class="img-fluid rounded" alt="image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/60.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/61.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/62.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/63.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/64.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/65.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/51.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/52.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/53.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/54.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/55.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/56.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/57.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/58.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/59.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="your-photos" role="tabpanel">
                                       <div class="card-body p-0">
                                          <div class="d-grid gap-2 d-grid-template-1fr-13 ">
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/51.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/52.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/53.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/54.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/55.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/56.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/57.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/58.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/59.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
                                                </div>
                                             </div>
                                             <div class="">
                                                <div class="user-images position-relative overflow-hidden">
                                                   <a href="#">
                                                      <img src="../assets/images/page-img/60.jpg"
                                                         class="img-fluid rounded" alt="Responsive image">
                                                   </a>
                                                   <div class="image-hover-data">
                                                      <div class="product-elements-icon">
                                                         <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                            <li><a href="#" class="pe-3 text-white"> 60 <i
                                                                     class="ri-thumb-up-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 30 <i
                                                                     class="ri-chat-3-line"></i> </a></li>
                                                            <li><a href="#" class="pe-3 text-white"> 10 <i
                                                                     class="ri-share-forward-line"></i> </a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <a href="#" class="image-edit-btn" data-bs-toggle="tooltip"
                                                      data-bs-placement="top" title=""
                                                      data-bs-original-title="Edit or Remove"><i
                                                         class="ri-edit-2-fill"></i></a>
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
</body>

</html>