    <style>
      .dropdown-submenu {
        position: relative;
      }

      .dropdown-submenu a::after {
        transform: rotate(-90deg);
        position: absolute;
        right: 6px;
        top: .8em;
      }

      .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-left: .1rem;
        margin-right: .1rem;
      }
    </style>
    <!--start sidebar -->
    <aside class="sidebar-wrapper bg-pink" data-simplebar="true">
      <div class="sidebar-header bg-white">
        <div>
          <a href="<?= base_url() ?>">
            <img src="<?= base_url() ?>assets/image/favtm.png" class="logo-icon" alt="logo icon">
          </a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="<?= base_url() ?>">
            <img src="<?= base_url() ?>assets/image/logoobrown.png" class="w-75" alt="Titimangsa">
          </a>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list" style="color:brown"></i>
        </div>
      </div>

      <!--navigation-->
      <ul class="metismenu bg-pink" id="menu">
        <li>
          <a href="<?= base_url("admin/dashboard") ?>" class="">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>
          <!-- <ul>
            <li> <a href="index.html"><i class="bi bi-circle"></i>Blue Dashboard</a>
            </li>
            <li> <a href="index2.html"><i class="bi bi-circle"></i>Color Dashboard</a>
            </li>
          </ul> -->
        </li>
        <li>
          <a href="<?= base_url("admin/user") ?>" class="">
            <div class="parent-icon"><i class="bi bi-person"></i>
            </div>
            <div class="menu-title">Data User</div>
          </a>
        </li>
        <li>
          <a href="<?= base_url("admin/sponsor") ?>" class="">
            <div class="parent-icon"><i class="bi bi-list"></i>
            </div>
            <div class="menu-title">Data Sponsor</div>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
            <div class="menu-title">Home Setting</div>
          </a>
          <div class="dropdown-menu">
            <a href="<?= base_url("admin/postingan") ?>" class="">
              <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
              <div class="menu-title">Data Postingan</div>
            </a>
            <a href="<?= base_url("admin/dashboard/poster") ?>" class="dropdown-item">
              <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
              <div class="menu-title">Data Poster</div>
            </a>
          </div>
        </li>

        <!-- <li>
          <a href="<?= base_url("admin/postingan") ?>" class="">
            <div class="parent-icon"><i class="bi bi-grid-fill"></i>
            </div>
            <div class="menu-title">Data Postingan</div>
          </a>
        </li> -->
        <li>
        <li>
          <a href="<?= base_url("admin/info") ?>" class="">
            <div class="font-22"><i class="bx bx-info-square"></i>
            </div>
            <div class="menu-title">Data Informasi</div>
          </a>
        </li>
        <li>
        <li>
          <a href="<?= base_url("admin/pesan") ?>" class="">
            <div class="parent-icon"><i class="bi bi-pencil-fill"></i>
            </div>
            <div class="menu-title">Data Pesan/Email</div>
          </a>
        </li>
      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->