<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li><a class="menu-item" href="{{ route('home') }}" data-i18n="nav.templates.vert.classic_menu">خانه</a>
      </li>
      <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title"
            data-i18n="nav.templates.main">ساکنین لیلیه</span></a>
        <ul class="menu-content">
          <li><a class="menu-item" href="{{ route('resident.register') }}" data-i18n="nav.templates.vert.classic_menu">
              فورم راجستر اعضای لیلیه</a>
          </li>
          <li><a class="menu-item" href="{{ route('resident.list') }}" data-i18n="nav.templates.vert.classic_menu"> لیست
              اعضای لیلیه</a>
          </li>

        </ul>
      </li>

    </ul>
  </div>
</div>