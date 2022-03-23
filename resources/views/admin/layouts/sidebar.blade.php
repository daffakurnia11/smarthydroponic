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
    <li class="{{ Request::is('admin/set-point') ? 'mm-active' : '' }}">
      <a href="/admin/set-point">
        <div class="parent-icon"><i class="bi bi-table"></i>
        </div>
        <div class="menu-title">Data Set Point</div>
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
    
    {{-- Data Logger --}}
    <li class="menu-label mt-0">Data Logger</li>
    <li class="{{ Request::is('admin/log/hydroponic') ? 'mm-active' : '' }}">
      <a href="/admin/log/hydroponic?from={{ \Carbon\Carbon::now()->subHours(2) }}&to={{ \Carbon\Carbon::now() }}">
        <div class="parent-icon">
          <i class="bi bi-clipboard-data"></i>
        </div>
        <div class="menu-title">Hydroponic</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/log/solar-tracker') ? 'mm-active' : '' }}">
      <a href="/admin/log/solar-tracker?from={{ \Carbon\Carbon::now()->subHours(2) }}&to={{ \Carbon\Carbon::now() }}">
        <div class="parent-icon">
          <i class="bi bi-file-earmark-bar-graph"></i>
        </div>
        <div class="menu-title">Solar Tracker</div>
      </a>
    </li>
    
    {{-- Article Management --}}
    <li class="menu-label mt-0">Content Management</li>
    <li class="{{ Request::is('admin/article') ? 'mm-active' : '' }}">
      <a href="/admin/article">
        <div class="parent-icon">
          <i class="bi bi-journal-richtext"></i>
        </div>
        <div class="menu-title">Article Management</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/plant') ? 'mm-active' : '' }}">
      <a href="/admin/plant">
        <div class="parent-icon">
          <i class="bi bi-list-check"></i>
        </div>
        <div class="menu-title">Plant Types</div>
      </a>
    </li>

  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->