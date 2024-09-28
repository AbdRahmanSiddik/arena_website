<li>
    <a {{ $attributes }} class="side-menu__link  {{ $active ? 'side-menu__link--active' : '' }} ">
      <i data-tw-merge="" data-lucide="{{ $icon }}" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
      <div class="side-menu__link__title">{{ $slot }}</div>
    </a>
    <!-- BEGIN: Second Child -->
    <!-- END: Second Child -->
</li>
