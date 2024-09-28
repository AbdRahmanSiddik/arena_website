<div
  class="side-menu__content z-20 relative w-[275px] border-slate-200/80 duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] h-screen flex flex-col before:content-[''] before:absolute before:inset-0 before:xl:rounded-[0_0.75rem_0.75rem_0/0_1.1rem_1.1rem_0] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:border-slate-200/80 before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] after:content-[''] after:absolute after:inset-0 after:xl:-mr-4 after:bg-texture-white after:bg-contain after:bg-fixed after:bg-[center_-20rem] after:bg-no-repeat">
  <div
    class="relative z-10 hidden h-[65px] w-[275px] flex-none items-center overflow-hidden px-5 duration-300 xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed]:xl:w-[91px]">
    <a class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-4"
      href="#">
      {{-- <div class="transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
        <div class="relative h-[18px] w-[18px] -rotate-45 [&_div]:bg-white">
          <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
          </div>
          <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
          <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
          </div>
        </div>
      </div> --}}

      <div class="transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-360">
        <div class="relative h-[50px] w-[50px] [&_div]:bg-white">
          <img src="{{ asset('resources/icon/turbo.png') }}" alt="TURBO" style="position: relative; left: -15px;">
        </div>
      </div>

      <div
        class="ml-3.5 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
        TURBO MAIN
      </div>
    </a>
    <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex"
      href="#">
      <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
    </a>
  </div>
  {{-- menu --}}
  <div
    class="scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
    <ul class="scrollable">
      <!-- BEGIN: First Child -->
      <li class="side-menu__divider">
        DASHBOARDS
      </li>
      {{-- <li>
        <a href="hook-dashboard-overview-1.html" class="side-menu__link side-menu__link--active ">
          <i data-tw-merge="" data-lucide="gauge-circle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
          <div class="side-menu__link__title">E-Commerce</div>
        </a>
        <!-- BEGIN: Second Child -->
        <!-- END: Second Child -->
      </li> --}}
      <x-nav.nav-link href="{{ route('/') }}" :active="request()->routeIs('/')" icon="gauge-circle">Dashboard</x-nav.nav-link>
      <li class="side-menu__divider">
        Mitra
      </li>
      <x-nav.nav-link href="{{ route('admin.kategori') }}" :active="request()->routeIs('admin.kategori')" icon="text-select">Kategori Arena</x-nav.nav-link>
      <x-nav.nav-link href="{{ route('admin.mitra') }}" :active="request()->routeIs('admin.mitra')" icon="table2">Mitra</x-nav.nav-link>
      {{-- <li>
        <a href="javascript:;" class="side-menu__link {{ request()->routeIs('admin.mitra') ? 'side-menu__link--active side-menu__link--active-dropdown' : ''}}">
          <i data-tw-merge="" data-lucide="table2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
          <div class="side-menu__link__title">Mitra</div>
          <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
        </a>
        <!-- BEGIN: Second Child -->
        <ul class="{{ request()->routeIs('admin.mitra') ? 'block' : 'hidden' }}">
          <li>
            <a href="{{ route('admin.mitra') }}?q={{ "fjfjfu" }}" class="side-menu__link {{ request()->routeIs('admin.mitra') ? 'side-menu__link--active' : '' }}">
              <i data-tw-merge="" data-lucide="layout-panel-top" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
              <div class="side-menu__link__title">
                Semua Mitra
              </div>
            </a>
            <!-- BEGIN: Third Child -->
            <!-- END: Third Child -->
          </li>
        </ul>
        <!-- END: Second Child -->
      </li> --}}
      <!-- END: First Child -->
    </ul>
  </div>
  {{-- /menu --}}
</div>
