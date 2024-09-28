<x-admin>
    <x-slot:tittle>Admin Turbo Main - Dashboard</x-slot:tittle>

    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    General Report
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <div class="relative">
                        <i data-tw-merge="" data-lucide="calendar-check2" class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] group-[.mode--light]:!text-slate-200"></i>
                        <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] pl-9 group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:bg-chevron-white group-[.mode--light]:!text-slate-200 sm:w-44">
                            <option value="custom-date">Custom Date</option>
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>
                    <div class="relative">
                        <i data-tw-merge="" data-lucide="calendar" class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] group-[.mode--light]:!text-slate-200"></i>
                        <input data-tw-merge="" type="text" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker rounded-[0.5rem] pl-9 group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200 sm:w-64">
                    </div>
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-5">
                <div class="box box--stacked col-span-12 p-1 md:col-span-6 2xl:col-span-3">
                    <div class="-mx-1 h-[244px] overflow-hidden [&_.tns-nav]:bottom-auto [&_.tns-nav]:ml-5 [&_.tns-nav]:mt-5 [&_.tns-nav]:w-auto [&_.tns-nav_button.tns-nav-active]:w-5 [&_.tns-nav_button.tns-nav-active]:bg-white/70 [&_.tns-nav_button]:mx-0.5 [&_.tns-nav_button]:h-2 [&_.tns-nav_button]:w-2 [&_.tns-nav_button]:bg-white/40">
                        <div data-config="fade" class="tiny-slider">
                            <div class="px-1">
                                <div class="relative flex h-full w-full flex-col overflow-hidden rounded-[0.5rem] bg-gradient-to-b from-theme-2/90 to-theme-1/[0.85] p-5">
                                    <i data-tw-merge="" data-lucide="medal" class="absolute right-0 top-0 -mr-5 -mt-5 h-36 w-36 rotate-[-10deg] transform fill-white/[0.03] stroke-[0.3] text-white/20"></i>
                                    <div class="mb-9 mt-12">
                                        <div class="text-2xl font-medium leading-snug text-white">
                                            New feature
                                            <br>
                                            unlocked!
                                        </div>
                                        <div class="mt-1.5 text-lg text-white/70">
                                            Boost your performance!
                                        </div>
                                    </div>
                                    <a class="flex items-center font-medium text-white" href="#">
                                        Upgrade now
                                        <i data-tw-merge="" data-lucide="move-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="relative flex h-full w-full flex-col overflow-hidden rounded-[0.5rem] bg-gradient-to-b from-theme-2/90 to-theme-1/90 p-5">
                                    <i data-tw-merge="" data-lucide="database" class="absolute right-0 top-0 -mr-5 -mt-5 h-36 w-36 rotate-[-10deg] transform fill-white/[0.03] stroke-[0.3] text-white/20"></i>
                                    <div class="mb-9 mt-12">
                                        <div class="text-2xl font-medium leading-snug text-white">
                                            Stay ahead
                                            <br>
                                            with upgrades
                                        </div>
                                        <div class="mt-1.5 text-lg text-white/70">
                                            New features and updates!
                                        </div>
                                    </div>
                                    <a class="flex items-center font-medium text-white" href="#">
                                        Discover now
                                        <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="relative flex h-full w-full flex-col overflow-hidden rounded-[0.5rem] bg-gradient-to-b from-theme-2/90 to-theme-1/90 p-5">
                                    <i data-tw-merge="" data-lucide="gauge" class="absolute right-0 top-0 -mr-5 -mt-5 h-36 w-36 rotate-[-10deg] transform fill-white/[0.03] stroke-[0.3] text-white/20"></i>
                                    <div class="mb-9 mt-12">
                                        <div class="text-2xl font-medium leading-snug text-white">
                                            Supercharge
                                            <br>
                                            your workflow
                                        </div>
                                        <div class="mt-1.5 text-lg text-white/70">
                                            Boost performance!
                                        </div>
                                    </div>
                                    <a class="flex items-center font-medium text-white" href="#">
                                        Get started
                                        <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 2xl:col-span-3">
                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-6 w-6 fill-slate-400/70 stroke-slate-400/70"></i>
                        </button>
                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Copy Link</a>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                            <i data-tw-merge="" data-lucide="database" class="stroke-[1] h-6 w-6 fill-primary/10 text-primary"></i>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium">41k Products Sold</div>
                            <div class="mt-0.5 text-slate-500">Across 21 stores</div>
                        </div>
                    </div>
                    <div class="relative mb-6 mt-5 overflow-hidden">
                        <div class="absolute inset-0 my-auto h-px whitespace-nowrap text-xs leading-[0] tracking-widest text-slate-400/60">
                            .......................................................................
                        </div>
                        <div class="w-auto h-[100px]">
                            <canvas data-index="2" data-border-color="primary" data-background-color="primary/0.3" class="chart report-line-chart relative z-10 -ml-1.5"></canvas>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center">
                            <div class="h-2 w-2 rounded-full bg-primary/70"></div>
                            <div class="ml-2.5">Products Sold</div>
                        </div>
                        <div class="flex items-center">
                            <div class="h-2 w-2 rounded-full bg-slate-400"></div>
                            <div class="ml-2.5">Store Locations</div>
                        </div>
                    </div>
                </div>
                <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 2xl:col-span-3">
                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-6 w-6 fill-slate-400/70 stroke-slate-400/70"></i>
                        </button>
                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Copy Link</a>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-success/10 bg-success/10">
                            <i data-tw-merge="" data-lucide="files" class="stroke-[1] h-6 w-6 fill-success/10 text-success"></i>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium">
                                36k Products Shipped
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                Across 14 warehouses
                            </div>
                        </div>
                    </div>
                    <div class="relative mb-6 mt-5 overflow-hidden">
                        <div class="absolute inset-0 my-auto h-px whitespace-nowrap text-xs leading-[0] tracking-widest text-slate-400/60">
                            .......................................................................
                        </div>
                        <div class="w-auto h-[100px]">
                            <canvas data-index="0" data-border-color="success" data-background-color="success/0.3" class="chart report-line-chart relative z-10 -ml-1.5"></canvas>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center">
                            <div class="h-2 w-2 rounded-full bg-success/70"></div>
                            <div class="ml-2.5">Total Shipped</div>
                        </div>
                        <div class="flex items-center">
                            <div class="h-2 w-2 rounded-full bg-slate-400"></div>
                            <div class="ml-2.5">Warehouses</div>
                        </div>
                    </div>
                </div>
                <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 2xl:col-span-3">
                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] h-6 w-6 fill-slate-400/70 stroke-slate-400/70"></i>
                        </button>
                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Copy Link</a>
                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] h-6 w-6 fill-primary/10 text-primary"></i>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-medium">
                                3.7k Orders Processed
                            </div>
                            <div class="mt-0.5 text-slate-500">Across 9 regions</div>
                        </div>
                    </div>
                    <div class="relative mb-6 mt-5">
                        <div class="w-auto h-[100px]">
                            <canvas class="chart report-donut-chart-3 relative z-10"></canvas>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center">
                            <div class="h-2 w-2 rounded-full bg-primary/70"></div>
                            <div class="ml-2.5">Order Volume</div>
                        </div>
                        <div class="flex items-center">
                            <div class="h-2 w-2 rounded-full bg-danger/70"></div>
                            <div class="ml-2.5">Coverage Area</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Performance Insights</div>
                <div class="flex gap-x-3 gap-y-2 md:ml-auto">
                    <button data-tw-merge="" data-carousel="important-notes" data-target="prev" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed rounded-[0.5rem] bg-white text-slate-600 dark:text-slate-300"><span class="flex h-5 w-3.5 items-center justify-center">
                            <i data-tw-merge="" data-lucide="chevron-left" class="stroke-[1] h-4 w-4"></i>
                        </span></button>
                    <button data-tw-merge="" data-carousel="important-notes" data-target="next" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed rounded-[0.5rem] bg-white text-slate-600 dark:text-slate-300"><span class="flex h-5 w-3.5 items-center justify-center">
                            <i data-tw-merge="" data-lucide="chevron-right" class="stroke-[1] h-4 w-4"></i>
                        </span></button>
                </div>
            </div>
            <div class="-mx-2.5 mt-3.5">
                <div data-config="performance-insight-slider-config" class="tiny-slider">
                    <div class="px-2.5 pb-3">
                        <div class="box box--stacked relative p-5">
                            <div class="flex items-center">
                                <div class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                </div>
                                <div class="ml-auto flex">
                                    <div class="image-fit zoom-in h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product1-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product8-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product2-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-11">
                                <div class="text-base font-medium">Top 10 Products</div>
                                <div class="mt-0.5 text-slate-500">
                                    Featured products
                                </div>
                            </div>
                            <a class="mt-4 flex items-center border-t border-dashed pt-4 font-medium text-primary" href="#">
                                Explore Products
                                <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                            </a>
                        </div>
                    </div>
                    <div class="px-2.5 pb-3">
                        <div class="box box--stacked relative p-5">
                            <div class="flex items-center">
                                <div class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                    <i data-tw-merge="" data-lucide="laptop" class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                </div>
                                <div class="ml-auto flex">
                                    <div class="image-fit zoom-in h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product4-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-11">
                                <div class="text-base font-medium">Top 5 Categories</div>
                                <div class="mt-0.5 text-slate-500">
                                    Popular categories
                                </div>
                            </div>
                            <a class="mt-4 flex items-center border-t border-dashed pt-4 font-medium text-primary" href="#">
                                Explore Categories
                                <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                            </a>
                        </div>
                    </div>
                    <div class="px-2.5 pb-3">
                        <div class="box box--stacked relative p-5">
                            <div class="flex items-center">
                                <div class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                    <i data-tw-merge="" data-lucide="database" class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                </div>
                                <div class="ml-auto flex">
                                    <div class="image-fit zoom-in h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product3-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product1-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product4-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-11">
                                <div class="text-base font-medium">Marketing Highlights</div>
                                <div class="mt-0.5 text-slate-500">
                                    Recent campaigns
                                </div>
                            </div>
                            <a class="mt-4 flex items-center border-t border-dashed pt-4 font-medium text-primary" href="#">
                                Explore Campaigns
                                <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                            </a>
                        </div>
                    </div>
                    <div class="px-2.5 pb-3">
                        <div class="box box--stacked relative p-5">
                            <div class="flex items-center">
                                <div class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                    <i data-tw-merge="" data-lucide="inbox" class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                </div>
                                <div class="ml-auto flex">
                                    <div class="image-fit zoom-in h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product3-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-11">
                                <div class="text-base font-medium">Low Stock Alerts</div>
                                <div class="mt-0.5 text-slate-500">
                                    Items running out
                                </div>
                            </div>
                            <a class="mt-4 flex items-center border-t border-dashed pt-4 font-medium text-primary" href="#">
                                View Inventory
                                <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                            </a>
                        </div>
                    </div>
                    <div class="px-2.5 pb-3">
                        <div class="box box--stacked relative p-5">
                            <div class="flex items-center">
                                <div class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                    <i data-tw-merge="" data-lucide="fingerprint" class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                </div>
                                <div class="ml-auto flex">
                                    <div class="image-fit zoom-in h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                        <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{ asset('assets') }}/dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-11">
                                <div class="text-base font-medium">Customer Favorites</div>
                                <div class="mt-0.5 text-slate-500">
                                    Customer of the month
                                </div>
                            </div>
                            <a class="mt-4 flex items-center border-t border-dashed pt-4 font-medium text-primary" href="#">
                                Explore Products
                                <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Recent Orders</div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <div class="relative">
                        <i data-tw-merge="" data-lucide="calendar-check2" class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                        <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] pl-9 sm:w-44">
                            <option value="custom-date">Custom Date</option>
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>
                    <div class="relative">
                        <i data-tw-merge="" data-lucide="calendar" class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                        <input data-tw-merge="" type="text" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker rounded-[0.5rem] pl-9 sm:w-64">
                    </div>
                </div>
            </div>
            <div class="mt-2 overflow-auto lg:overflow-visible">
                <table data-tw-merge="" class="w-full text-left border-separate border-spacing-y-[10px]">
                    <tbody>
                        <tr data-tw-merge="" class="">
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center">
                                    <i data-tw-merge="" data-lucide="door-open" class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                    <div class="ml-3.5">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            IVR/20240301/VII/V/3522718557
                                        </a>
                                        <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                            Home & Garden
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Customer Name
                                </div>
                                <a class="flex items-center text-primary" href="#">
                                    <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        Meryl Streep
                                    </div>
                                </a>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                    Purchased Items
                                </div>
                                <div class="mb-1 flex">
                                    <div class="image-fit zoom-in h-5 w-5">
                                        <img data-placement="top" title="Ultra HD 4K Smart TV" src="{{ asset('assets') }}/dist/images/products/product2-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="Smart Home Security Camera" src="{{ asset('assets') }}/dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="8-Cup Coffee Maker" src="{{ asset('assets') }}/dist/images/products/product7-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Status
                                </div>
                                <div class="flex items-center text-primary">
                                    <i data-tw-merge="" data-lucide="clock4" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        Processing
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Date
                                </div>
                                <div class="whitespace-nowrap">Mon Apr 2022</div>
                            </td>
                            <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center justify-center">
                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                        </button>
                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="wallet-cards" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    View Details</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-signature" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Edit Order</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Print Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-tw-merge="" class="">
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center">
                                    <i data-tw-merge="" data-lucide="book" class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                    <div class="ml-3.5">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            IVR/20240301/V/III/4942623461
                                        </a>
                                        <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                            Books
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Customer Name
                                </div>
                                <a class="flex items-center text-primary" href="#">
                                    <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        Leonardo DiCaprio
                                    </div>
                                </a>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                    Purchased Items
                                </div>
                                <div class="mb-1 flex">
                                    <div class="image-fit zoom-in h-5 w-5">
                                        <img data-placement="top" title="8-Cup Coffee Maker" src="{{ asset('assets') }}/dist/images/products/product10-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="Smartphone Charging Dock" src="{{ asset('assets') }}/dist/images/products/product4-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="Wireless Noise-Cancelling Headphones" src="{{ asset('assets') }}/dist/images/products/product7-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Status
                                </div>
                                <div class="flex items-center text-primary">
                                    <i data-tw-merge="" data-lucide="arrow-left-square" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        Returned
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Date
                                </div>
                                <div class="whitespace-nowrap">Wed Dec 2022</div>
                            </td>
                            <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center justify-center">
                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                        </button>
                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="wallet-cards" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    View Details</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-signature" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Edit Order</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Print Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-tw-merge="" class="">
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center">
                                    <i data-tw-merge="" data-lucide="shirt" class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                    <div class="ml-3.5">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            IVR/20240301/VIII/VIII/7888821069
                                        </a>
                                        <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                            Clothing
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Customer Name
                                </div>
                                <a class="flex items-center text-primary" href="#">
                                    <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        Leonardo DiCaprio
                                    </div>
                                </a>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                    Purchased Items
                                </div>
                                <div class="mb-1 flex">
                                    <div class="image-fit zoom-in h-5 w-5">
                                        <img data-placement="top" title="8-Cup Coffee Maker" src="{{ asset('assets') }}/dist/images/products/product5-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="8-Cup Coffee Maker" src="{{ asset('assets') }}/dist/images/products/product6-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="Wireless Earbuds with Mic" src="{{ asset('assets') }}/dist/images/products/product6-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Status
                                </div>
                                <div class="flex items-center text-success">
                                    <i data-tw-merge="" data-lucide="package-search" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        On Hold
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Date
                                </div>
                                <div class="whitespace-nowrap">Sat Oct 2022</div>
                            </td>
                            <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center justify-center">
                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                        </button>
                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="wallet-cards" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    View Details</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-signature" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Edit Order</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Print Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-tw-merge="" class="">
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center">
                                    <i data-tw-merge="" data-lucide="gamepad2" class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                    <div class="ml-3.5">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            IVR/20240301/V/VII/5408935585
                                        </a>
                                        <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                            Toys & Games
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Customer Name
                                </div>
                                <a class="flex items-center text-primary" href="#">
                                    <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        Leonardo DiCaprio
                                    </div>
                                </a>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                    Purchased Items
                                </div>
                                <div class="mb-1 flex">
                                    <div class="image-fit zoom-in h-5 w-5">
                                        <img data-placement="top" title="Professional DSLR Camera" src="{{ asset('assets') }}/dist/images/products/product10-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="Wireless Noise-Cancelling Headphones" src="{{ asset('assets') }}/dist/images/products/product4-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="Smart Home Security Camera" src="{{ asset('assets') }}/dist/images/products/product6-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Status
                                </div>
                                <div class="flex items-center text-primary">
                                    <i data-tw-merge="" data-lucide="wallet" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        Refunded
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Date
                                </div>
                                <div class="whitespace-nowrap">Tue Apr 2022</div>
                            </td>
                            <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center justify-center">
                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                        </button>
                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="wallet-cards" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    View Details</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-signature" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Edit Order</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Print Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr data-tw-merge="" class="">
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center">
                                    <i data-tw-merge="" data-lucide="cookie" class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                    <div class="ml-3.5">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            IVR/20240301/VII/II/6259893636
                                        </a>
                                        <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                            Food & Grocery
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Customer Name
                                </div>
                                <a class="flex items-center text-primary" href="#">
                                    <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        Brad Pitt
                                    </div>
                                </a>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1.5 whitespace-nowrap text-xs text-slate-500">
                                    Purchased Items
                                </div>
                                <div class="mb-1 flex">
                                    <div class="image-fit zoom-in h-5 w-5">
                                        <img data-placement="top" title="High-Performance Laptop" src="{{ asset('assets') }}/dist/images/products/product10-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="Professional DSLR Camera" src="{{ asset('assets') }}/dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-1.5 h-5 w-5">
                                        <img data-placement="top" title="Smartphone Charging Dock" src="{{ asset('assets') }}/dist/images/products/product4-400x400.jpg" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Status
                                </div>
                                <div class="flex items-center text-primary">
                                    <i data-tw-merge="" data-lucide="file-x2" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                    <div class="ml-1.5 whitespace-nowrap">
                                        Failed
                                    </div>
                                </div>
                            </td>
                            <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                    Date
                                </div>
                                <div class="whitespace-nowrap">Sun Apr 2022</div>
                            </td>
                            <td data-tw-merge="" class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center justify-center">
                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                        </button>
                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="wallet-cards" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    View Details</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-signature" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Edit Order</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Print Invoice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex-reverse mt-3 flex flex-col-reverse flex-wrap items-center gap-y-2 sm:flex-row">
                <nav class="mr-auto w-full flex-1 sm:w-auto">
                    <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-left" class="stroke-[1] h-4 w-4"></i></a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-left" class="stroke-[1] h-4 w-4"></i></a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-right" class="stroke-[1] h-4 w-4"></i></a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-right" class="stroke-[1] h-4 w-4"></i></a>
                        </li>
                    </ul>
                </nav>
                <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] sm:w-20">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>
        </div>
    </div>

</x-admin>
