<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      {{-- <img src="/img/logo-epc.svg" class="logo-icon" alt="logo icon"> --}}
    </div>
    <div>
      <h5 class="logo-text" style="font-size: 18px">Smart Hydroponic</h5>
    </div>
    <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li class="{{ Request::is('admin') ? 'mm-active' : '' }}">
      <a href="/admin">
        <div class="parent-icon"><i class="bi bi-house-door"></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
    </li>
    
    {{-- Database Menu --}}
    <li class="menu-label mt-0">Database</li>
    <li class="{{ Request::is('admin/tim') ? 'mm-active' : '' }}">
      <a href="/admin/tim">
        <div class="parent-icon">
          <i class="bi bi-people-fill"></i>
        </div>
        <div class="menu-title">Akun Tim Peserta</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/tim/verifikasi') ? 'mm-active' : '' }}">
      <a href="/admin/tim/verifikasi">
        <div class="parent-icon">
          <i class="bi bi-patch-check"></i>
        </div>
        <div class="menu-title">Perlu Verifikasi</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/tim/ketua') ? 'mm-active' : '' }}">
      <a href="/admin/tim/ketua">
        <div class="parent-icon">
          <i class="bi bi-person-fill"></i>
        </div>
        <div class="menu-title">Data Ketua</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/tim/anggota') ? 'mm-active' : '' }}">
      <a href="/admin/tim/anggota">
        <div class="parent-icon">
          <i class="bi bi-person-fill"></i>
        </div>
        <div class="menu-title">Data Anggota</div>
      </a>
    </li>

    {{-- Penyisihan Menu --}}
    <li class="mt-3 {{ Request::is('admin/penyisihan**') ? 'mm-active' : '' }}">
      <a href="#" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-grid"></i>
        </div>
        <div class="menu-title">Penyisihan</div>
      </a>
      <ul class="mm-collapse">
        <li class="{{ Request::is('admin/penyisihan') ? 'mm-active' : '' }}">
          <a href="/admin/penyisihan">
            <i class="bi bi-arrow-right-short"></i>
            Daftar Soal
          </a>
        </li>
        <li class="{{ Request::is('admin/penyisihan/create') ? 'mm-active' : '' }}">
          <a href="/admin/penyisihan/create">
            <i class="bi bi-arrow-right-short"></i>
            Tambah Soal
          </a>
        </li>
        <li class="{{ Request::is('admin/penyisihan/setup') ? 'mm-active' : '' }}">
          <a href="/admin/penyisihan/setup">
            <i class="bi bi-arrow-right-short"></i>
            Atur Quiz
          </a>
        </li>
        <li class="{{ Request::is('admin/penyisihan/status') ? 'mm-active' : '' }}">
          <a href="/admin/penyisihan/status">
            <i class="bi bi-arrow-right-short"></i>
            Status Peserta
          </a>
        </li>
        <li class="{{ Request::is('admin/penyisihan/ranking') ? 'mm-active' : '' }}">
          <a href="/admin/penyisihan/ranking">
            <i class="bi bi-arrow-right-short"></i>
            Ranking Peserta
          </a>
        </li>
      </ul>
    </li>


  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->