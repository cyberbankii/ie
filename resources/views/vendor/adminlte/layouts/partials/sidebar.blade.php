<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="{{ Request::is('monitor*')? 'active' : '' }}"><a href="{{ url('monitor') }}"><i class='fa fa-desktop'></i> <span><b>Monitor</b></span></a></li>
            <li class="{{ Request::is('campaigns*')? 'active' : '' }}"><a href="{{ url('campaigns') }}"><i class='fa fa-tasks'></i> <span><b>Campaigns</b></span></a></li>
            <li class="{{ Request::is('situations*')? 'active' : '' }}"><a href="{{ url('situations') }}"><i class='fa fa-video-camera'></i> <span><b>Situations</b></span></a></li>
            <li class="{{ Request::is('actions*')? 'active' : '' }}"><a href="{{ url('actions') }}"><i class='fa fa-cog'></i> <span><b>Actions</b></span></a></li>
            {{-- <li><a href="#"><i class='fa fa-user'></i> <span><b>Users</b></span></a></li> --}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
