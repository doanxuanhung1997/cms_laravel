

<div class="c-wrapper">
  <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button>
    <a class="c-header-brand d-sm-none" href="#"><img class="c-header-brand" src="/assets/brand/coreui-base.svg" width="97" height="46" alt="CoreUI Logo"></a>
    <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
    <ul class="c-header-nav ml-auto mr-4">
      <li class="c-header-nav-item d-md-down-none mx-2">
        <a class="c-header-nav-link">
          <i class="c-icon cil-bell"></i>
        </a>
      </li>
      <li class="c-header-nav-item d-md-down-none mx-2">
        <a class="c-header-nav-link">
          <i class="c-icon cil-list-rich"></i>
        </a>
      </li>
      <li class="c-header-nav-item d-md-down-none mx-2">
        <a class="c-header-nav-link">
          <i class="c-icon mr-2 cil-envelope-open"></i>
        </a>
      </li>
      <li class="c-header-nav-item dropdown">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <div class="c-avatar">
            <img class="c-avatar-img" src="/assets/img/avatars/6.jpg" alt="user@email.com">
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0">
          <div class="dropdown-header bg-light py-2">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#">
            <i class="c-icon mr-2 cil-user"></i>
            Profile
          </a>
          <a class="dropdown-item" href="{{ route('login') }}">
            <i class="c-icon mr-2 cil-settings"></i>
            Change Password
          </a>
          <a class="dropdown-item" href="{{ route('login') }}">
            <i class="c-icon mr-2 cil-account-logout"></i>
            Logout
          </a>
        </li>
      </ul>
      <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <?php $segments = ''; ?>
          @for($i = 1; $i <= count(Request::segments()); $i++)
          <?php $segments .= '/'. Request::segment($i); ?>
          @if($i < count(Request::segments()))
          <li class="breadcrumb-item">{{ Request::segment($i) }}</li>
          @else
          <li class="breadcrumb-item active">{{ Request::segment($i) }}</li>
          @endif
          @endfor
        </ol>
      </div>
    </header>