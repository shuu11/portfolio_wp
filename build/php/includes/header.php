<header class="p-header u-z-index3 u-bg__color02 shadow-2xl">
  <div class="p-header__inner c-container flex items-center justify-between">
    <div class="flex items-center">
      <h1 class="u-text__size--top"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name') ?></a></h1>

      <div class="p-header__icon flex self-end space-x-8">
        <a href="//twitter.com/shuu1120">
          <i class="c-fa__size fab fa-twitter block" aria-hidden="true" style="color: #1da1f2"></i>
        </a>
        <a href="//github.com/shuu11">
          <i class="c-fa__size fab fa-github block" aria-hidden="true" style="color: #fff"></i>
        </a>
      </div>
    </div>

    <div id="js-hamburger" class="c-hamburger u-z-index1 block sm:hidden">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav id="js-header__nav" class="p-header__nav u-z-index2 overflow-y-auto">
      <ul class="flex flex-col sm:flex-row">
        <li><a href="#a-profile" class="block text-left sm:text-center">profile</a></li>
        <li><a href="#a-skill" class="block text-left sm:text-center">skill</a></li>
        <li><a href="#a-flow" class="block text-left sm:text-center">flow</a></li>
        <li><a href="#a-service" class="block text-left sm:text-center">service</a></li>
        <li><a href="#a-contact" class="block text-left sm:text-center">contact</a></li>
      </ul>
    </nav>
  </div>
</header>