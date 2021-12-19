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
    <li class="menu-label mt-0">Monitoring</li>
    <li class="{{ Request::is('admin/monitoring/hydroponic') ? 'mm-active' : '' }}">
      <a href="/admin/monitoring/hydroponic">
        <div class="parent-icon">
          <i class="bi bi-bar-chart-line"></i>
        </div>
        <div class="menu-title">Hydroponic</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/monitoring/solar-tracker') ? 'mm-active' : '' }}">
      <a href="/admin/monitoring/solar-tracker">
        <div class="parent-icon">
          <i class="bi bi-graph-up"></i>
        </div>
        <div class="menu-title">Solar Tracker</div>
      </a>
    </li>

  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->