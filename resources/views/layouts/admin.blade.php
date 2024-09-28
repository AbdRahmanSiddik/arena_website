<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en"><!-- BEGIN: Head -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="UTDQHUMnQs9GC9VYhC9EaF5Db5U3oNpH3LpUisuu">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tailwise admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tailwise Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>{{ $tittle }}</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="icon" type="image/ico" href="{{ asset('resources/icon/turbo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/vendors/highlight.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/vendors/zoom-vanilla.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/custom.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/vendors/toastify.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/vendors/litepicker.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/vendors/tiny-slider.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/vendors/tippy.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/vendors/simplebar.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/themes/hook.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/app.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/vendors/tabulator.css">
    <!-- END: CSS Assets-->

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/dataTables.dataTables.css" />
</head>
<!-- END: Head -->
<body>

    <x-nav.setting-template></x-nav.setting-template>

    <div class="hook before:content-[''] before:z-[-1] before:w-screen before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:top-0 before:h-screen before:fixed before:bg-fixed">
        <div class="[&.loading-page--before-hide]:h-screen [&.loading-page--before-hide]:relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:inset-0 before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
            <div class="xl:ml-0 shadow-xl transition-[margin] duration-300 xl:shadow-none fixed top-0 left-0 z-50 side-menu group after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden side-menu--collapsed [&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
                <div class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50 [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                    <a class="ml-5 mt-5" href="#">
                        <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8 text-white"></i>
                    </a>
                </div>

                <x-nav.sidebar></x-nav.sidebar>

                <x-nav.topbar></x-nav.topbar>

            </div>
            <div class="content relative transition-[margin,width] duration-100 px-5 pt-[66px] pb-16 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:h-screen before:w-full before:fixed before:top-0 before:-ml-5 after:content-[''] after:bg-gradient-to-b after:from-slate-100 after:to-slate-50 after:h-screen after:w-full after:fixed after:top-0 after:-ml-5 after:xl:rounded-[1.2rem/1.7rem] content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                <div class="container relative z-10 mt-[55px]">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <x-other-part.notification></x-other-part.notification>

    <!-- BEGIN: Vendor JS Assets-->
    <x-script></x-script>
    <script src="{{ asset('assets') }}/dist/js/vendors/highlight.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/toastify.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/pristine.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/dom.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/tab.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/tailwind-merge.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/lucide.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/dayjs.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/litepicker.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/tiny-slider.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/popper.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/dropdown.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/tippy.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/image-zoom.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/simplebar.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/transition.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/chartjs.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/modal.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/tabulator.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/lodash.js"></script>
    <script src="{{ asset('assets') }}/dist/js/vendors/xlsx.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/base/theme-color.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/base/lucide.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/base/litepicker.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/base/tiny-slider.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/base/highlight.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/base/source.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/base/preview-component.js"></script>
    <script src="{{ asset('assets') }}/dist/js/utils/colors.js"></script>
    <script src="{{ asset('assets') }}/dist/js/utils/helper.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/report-line-chart.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/report-donut-chart-3.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/base/tippy.js"></script>
    <script src="{{ asset('assets') }}/dist/js/themes/hook.js"></script>
    <script src="{{ asset('assets') }}/dist/js/pages/tabulator.js"></script>
    <script src="{{ asset('assets') }}/dist/js/pages/validation.js"></script>
    <script src="{{ asset('assets') }}/dist/js/components/quick-search.js"></script>
    <script src="{{ asset('assets') }}/dist/js/pages/notification.js"></script>

    <script src="https://cdn.datatables.net/2.1.0/js/dataTables.js"></script>
    <script>
        new DataTable('#example')
    </script>

    <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>

</html>
