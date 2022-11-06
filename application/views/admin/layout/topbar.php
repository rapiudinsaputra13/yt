  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3 bg-pink">
        <div class="mobile-toggle-icon fs-3">
          <i class="bi bi-list"></i>
        </div>
        <!-- <form class="searchbar">
          <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
          <input class="form-control" type="text" placeholder="Type here to search">
          <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
        </form> -->
        <div class="top-navbar-right ms-auto">
          <ul class="navbar-nav align-items-center">
            <!-- <li class="nav-item search-toggle-icon">
              <a class="nav-link" href="#">
                <div class="">
                  <i class="bi bi-search"></i>
                </div>
              </a>
            </li> -->
            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="messages">
                  <span class="notify-badge">3</span>
                  <i class="bi bi-chat-right-fill"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end p-0">
                <div class="p-2 border-bottom m-2">
                  <h5 class="h5 mb-0">Messages</h5>
                </div>
                <div class="header-message-list p-2">
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="<?= base_url() ?>assets/onedash/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="<?= base_url() ?>assets/onedash/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="<?= base_url() ?>assets/onedash/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="p-2">
                  <div>
                    <hr class="dropdown-divider">
                  </div>
                  <a class="dropdown-item" href="#">
                    <div class="text-center">View All Messages</div>
                  </a>
                </div>
              </div>
            </li>

            <li class="nav-item dropdown dropdown-user-setting">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center">
                  <!-- <img src="<?= base_url() ?>assets/onedash/images/avatars/avatar-1.png" class="user-img" alt=""> -->
                  <i class="bi bi-person-circle"></i>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <!-- <img src="<?= base_url() ?>assets/onedash/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="54" height="54"> -->
                      <!-- <i class="bi bi-person-fill"> </i> -->
                      <div class="ms-3">
                        <h6 class="mb-0 dropdown-user-name"><?php echo $_SESSION['username']; ?></h6>

                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="pages-user-profile.html">
                    <div class="d-flex align-items-center">
                      <div class=""><i class="bi bi-person-fill"></i></div>
                      <div class="ms-3"><span>Profile</span></div>
                    </div>
                  </a>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="<?= base_url("auth/logout") ?>">
                    <div class="d-flex align-items-center">
                      <div class=""><i class="bi bi-lock-fill"></i></div>
                      <div class="ms-3"><span>Logout</span></div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>



          </ul>
        </div>
      </nav>
    </header>
    <!--end top header-->