<header class="main-header">
         <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user-o"></i>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                      @if ($user1->picture)
                        <img src="{{  Storage::url($user1->picture) }}" class="img-circle" alt="User Image">
                      @else
                        <i class="fa fa-4 fa-user-o" style="color: #fff; font-size: 7em;"></i>
                      @endif
                    <p>
                      @if (!empty($user1->name))
                            {{ $user1->name }}
                      @endif
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-6 text-center">
                      <a href="{{ url('auth/users') }}">{{ trans_choice('general.users', 2) }}</a>
                    </div>
                    <div class="col-xs-6 text-center">
                      <a href="#">Sales</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                     <a href="{{ url('auth/users/' . $user1->id . '/edit') }}" class="btn btn-default btn-flat">{{ trans('auth.profile') }}</a>
                    </div>
                    <div class="pull-right">
                       <a href="{{ url('auth/logout') }}" class="btn btn-default btn-flat">{{ trans('auth.logout') }}</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>




  @section('css')

  <style type="text/css">
  </style>

  @endsection