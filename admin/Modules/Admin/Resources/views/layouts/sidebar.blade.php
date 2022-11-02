<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.diseases.index') }}" class="brand-link logo-switch navbar__border--client">
      <img style="height:60px;width:100px;margin: 10px 15px 10px 50px;" class="text" src="{{ asset('images/logo/logo-full-white.png') }}" alt="AdminLTE Logo">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item ">
            <a href="{{ route('admin.diseases.index') }}"
               class="nav-link {{ isActiveMenu('admin.diseases.') }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Disease
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('admin.categories.index') }}"
               class="nav-link {{ isActiveMenu('admin.categories.') }}">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.menus.index') }}"
               class="nav-link {{ isActiveMenu('admin.menus.') }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Menu
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ route('admin.customers.index') }}"
               class="nav-link {{ isActiveMenu('admin.customers.') }}">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Customer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.recommendations.index') }}"
               class="nav-link {{ isActiveMenu('admin.recommendations.') }}">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Recommendation
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.symptoms.index') }}"
               class="nav-link {{ isActiveMenu('admin.symptoms.') }}">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Symptom
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.histories.index') }}"
               class="nav-link {{ isActiveMenu('admin.histories.') }}">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                Medical History Search
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.feedbacks.index') }}"
               class="nav-link {{ isActiveMenu('admin.feedbacks.') }}">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Feedback
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.profiles.edit') }}"
               class="nav-link {{ isActiveMenu('admin.profiles.') }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
