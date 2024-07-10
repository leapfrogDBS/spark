<header class="site-header bg-white sticky z-50 top-0 ">
  
  <div class="flex justify-end items-center max-w-7xl mx-auto p-6">
    
    <a class="brand mr-auto" href="{{ home_url('/') }}">
        {!! wp_get_attachment_image( $siteLogo, 'large' ) !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary mr-16" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif


    <div class="flex gap-x-6">
      <x-button type="outline" :href="$btn['url']">
        {{ $btn['title'] }}
      </x-button>

      <x-button :href="$btn2['url']">
        {{ $btn2['title'] }}
      </x-button>
    </div>

  </div>

</header>
 