<nav class="uk-tile-secondary uk-padding-small uk-box-shadow-small" uk-navbar>
  <div class="uk-navbar-right">
    <a href="/" class="uk-navbar-item uk-logo">أي أيديكا</a>
    <ul class="uk-navbar-nav">
      @auth()
      <li><a href="{{ route('home') }}">الرئيسة</a></li>
      @endauth
      @role(['administrator', 'superadministrator', 'editor', 'author', 'contributor', 'teacher'])
      <li><a href="{{ route('manage.dashboard') }}">لوحة التحكم</a></li>
      @endrole
      <li><a href="#">رابط هنا</a></li>
      <li><a href="{{ route('courses.clientIndex') }}">كافة الدورات</a></li>
      <li><a href="#ee-services" ul-scroll>خدماتنا</a></li>
    </ul>
  </div>{{-- Right Nav --}}
  
  <div class="uk-navbar-left">
    @guest
    <ul class="uk-navbar-nav">
      <li>
        <a href="{{ route('login') }}">Login</a>
      </li>
      <li>
        <a href="{{ route('register') }}">Register</a>
      </li>
    </ul>
    @else
    <ul class="uk-navbar-nav">
      <li>
        <a href="#" class="ee-en">{{ auth()->user()->name }}</a>
        <div uk-dropdown="offset: 15" class="ee-border">
          <ul class="uk-nav uk-navbar-dropdown-nav">
            <li class="uk-active uk-text-uppercase">
              <a href="{{ route('logout') }}" class="uk-text-background" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              تسجيل خروج
            </a>
          </li>
          <li>
            <a href="{{ route('profile.index') }}" class="uk-text-background">
              الملف الشخصي
            </a>
          </li>
        </ul>
      </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </ul>
  @endguest
</div>
</nav>