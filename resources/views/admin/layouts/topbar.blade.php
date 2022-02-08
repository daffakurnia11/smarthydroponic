
    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand">
        <div class="mobile-toggle-icon d-xl-none">
          <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link" href="/">Main Website</a>
            </li>
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link border-0 bg-transparent">Logout</button>
              </form>
            </li>
          </ul>
        </div>
        <div class="top-navbar-right ms-3 ms-auto">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center gap-1">
                  <div class="user-name d-none d-sm-block ms-3">Admin Hydroponic</div>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="ms-3">
                        <h6 class="mb-0 dropdown-user-name">Admin Hydroponic</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary">Admin</small>
                      </div>
                    </div>
                  </a>
                </li>
                {{-- <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="pages-user-profile.html">
                    <div class="d-flex align-items-center">
                      <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                      <div class="setting-text ms-3"><span>Profile</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="setting-icon"><i class="bi bi-gear-fill"></i></div>
                      <div class="setting-text ms-3"><span>Setting</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="index2.html">
                    <div class="d-flex align-items-center">
                      <div class="setting-icon"><i class="bi bi-speedometer"></i></div>
                      <div class="setting-text ms-3"><span>Dashboard</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="setting-icon"><i class="bi bi-piggy-bank-fill"></i></div>
                      <div class="setting-text ms-3"><span>Earnings</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="setting-icon"><i class="bi bi-cloud-arrow-down-fill"></i></div>
                      <div class="setting-text ms-3"><span>Downloads</span></div>
                    </div>
                  </a>
                </li> --}}
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <div class="d-flex align-items-center">
                        <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                        <div class="setting-text ms-3"><span>Logout</span></div>
                      </div>
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--end top header-->