<x-admin>
  <x-slot:tittle>Admin - Mitra Overview</x-slot:tittle>

  <div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
      <div class="box box--stacked flex flex-col p-1.5">
        <div class="relative h-48 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
          <div
            class="w-full h-full relative overflow-hidden before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem] after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]">
          </div>
          <div class="absolute inset-x-0 top-0 mx-auto mt-24 h-32 w-32">
            <div class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
              <img data-action="zoom" src="{{ asset('assets') }}/dist/images/users/user10-50x50.jpg"
                alt="Tailwise - Admin Dashboard Template">
            </div>
            <div
              class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
            </div>
          </div>
        </div>
        <div class="rounded-[0.6rem] bg-slate-50 pb-6 pt-12">
          <div class="flex items-center justify-center text-xl font-medium">
            Julia Roberts
            <i data-tw-merge="" data-lucide="badge-check"
              class="stroke-[1] w-5 h-5 ml-2 fill-blue-500/30 text-blue-500"></i>
          </div>
          <div class="mt-2.5 flex flex-col items-center justify-center gap-x-5 gap-y-2 sm:flex-row">
            <div class="flex items-center text-slate-500">
              <i data-tw-merge="" data-lucide="briefcase" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
              Engineering
            </div>
            <div class="flex items-center text-slate-500">
              <i data-tw-merge="" data-lucide="mountain-snow" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
              <a href="#">Austin, USA</a>
            </div>
            <div class="flex items-center text-slate-500">
              <i data-tw-merge="" data-lucide="signal" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
              +1 (234) 567-8901
            </div>
          </div>
        </div>
      </div>
      <div class="mt-10">
        <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center">
          <ul data-tw-merge="" role="tablist"
            class="p-0.5 border dark:border-darkmode-400 w-full flex box mr-auto flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto">
            <li id="example-1-tab" data-tw-merge="" role="presentation"
              class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
              <button data-tw-merge="" data-tw-target="#example-1" role="tab"
                class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Profile</button>
            </li>
            <li id="example-2-tab" data-tw-merge="" role="presentation"
              class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
              <button data-tw-merge="" data-tw-target="#example-2" role="tab"
                class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Events
                <span
                  class="ml-2 flex h-5 items-center justify-center rounded-full border border-theme-1/10 bg-theme-1/10 px-1.5 text-xs font-medium text-theme-1/70">
                  7
                </span></button>
            </li>
            <li id="example-3-tab" data-tw-merge="" role="presentation"
              class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
              <button data-tw-merge="" data-tw-target="#example-3" role="tab"
                class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Achievements</button>
            </li>
            <li id="example-4-tab" data-tw-merge="" role="presentation"
              class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
              <button data-tw-merge="" data-tw-target="#example-4" role="tab"
                class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Contacts
                <span
                  class="ml-2 flex h-5 items-center justify-center rounded-full border border-theme-1/10 bg-theme-1/10 px-1.5 text-xs font-medium text-theme-1/70">
                  5
                </span></button>
            </li>
            <li id="example-5-tab" data-tw-merge="" role="presentation"
              class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
              <button data-tw-merge="" data-tw-target="#example-5" role="tab"
                class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">Default</button>
            </li>
          </ul>

          <div class="flex items-center gap-3 2xl:ml-auto">
            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative mr-auto 2xl:mr-0"><button
                data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false"
                class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 rounded-[0.6rem] bg-white py-3"><i
                  data-tw-merge="" data-lucide="download" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                <span class="max-w-[3.8rem] truncate sm:max-w-none">
                  Share Profile
                </span>
                <i data-tw-merge="" data-lucide="chevron-down" class="ml-2 h-4 w-4 stroke-[1.3]"></i></button>
              <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                data-leave="transition-all ease-linear duration-150"
                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge=""
                  class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-48">
                  <a
                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                      data-tw-merge="" data-lucide="linkedin" class="stroke-[1] mr-2 h-4 w-4"></i>
                    Share to
                    Linkedin</a>
                  <a
                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                      data-tw-merge="" data-lucide="facebook" class="stroke-[1] mr-2 h-4 w-4"></i>
                    Share to Facebook</a>
                  <a
                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                      data-tw-merge="" data-lucide="twitter" class="stroke-[1] mr-2 h-4 w-4"></i>
                    Share to Twitter</a>
                </div>
              </div>
            </div>
            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative inline-block"><button
                data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false"
                class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 rounded-[0.6rem] bg-white py-3"><i
                  data-tw-merge="" data-lucide="arrow-down-wide-narrow" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                Teams
                <span
                  class="ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium">
                  42
                </span></button>
              <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                data-leave="transition-all ease-linear duration-150"
                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge=""
                  class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600">
                  <div class="p-2">
                    <div>
                      <div class="text-left">Invite by Email</div>
                      <input data-tw-merge="" type="text" placeholder="tom.hanks@left4code.com"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 mt-2 flex-1">
                    </div>
                    <div class="mt-4 flex items-center">
                      <button data-tw-merge=""
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 ml-auto w-32">Close</button>
                      <button data-tw-merge=""
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-2 w-32">Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-merge=""
                data-tw-toggle="dropdown" aria-expanded="false"
                class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 rounded-[0.6rem] bg-white py-3 text-[0.94rem]"><span
                  class="flex h-5 w-5 items-center justify-center">
                  <i data-tw-merge="" data-lucide="more-vertical" class="h-4 w-4 stroke-[1.3]"></i>
                </span></button>
              <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                data-leave="transition-all ease-linear duration-150"
                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge=""
                  class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-44">
                  <a
                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                      data-tw-merge="" data-lucide="settings" class="stroke-[1] mr-2 h-4 w-4"></i>
                    Settings</a>
                  <a
                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                      data-tw-merge="" data-lucide="contact" class="stroke-[1] mr-2 h-4 w-4"></i>
                    Contacts</a>
                  <a
                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i
                      data-tw-merge="" data-lucide="lock" class="stroke-[1] mr-2 h-4 w-4"></i>
                    Lock Account</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="tab-content">
          <div data-transition="" data-selector=".active"
            data-enter="transition-[visibility,opacity] ease-linear duration-150"
            data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100"
            data-leave="transition-[visibility,opacity] ease-linear duration-150"
            data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0"
            id="example-1" role="tabpanel" aria-labelledby="example-1-tab" class="tab-pane active">
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7">
              <div class="col-span-12 xl:col-span-8">
                <div class="flex flex-col gap-y-7">
                  <div class="box box--stacked flex flex-col">
                    <div class="p-5 font-medium">Selesai Bermain</div>
                    <div class="overflow-auto xl:overflow-visible">
                      <table data-tw-merge="" class="w-full text-left border-b border-dashed border-slate-200/80">
                        <thead data-tw-merge="" class="">
                          <tr data-tw-merge="" class="">
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                              Title
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                              Progress
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                              Contributors
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="flex items-center">
                                <div class="image-fit zoom-in h-9 w-9">
                                  <img data-placement="top" title="Sales Presentation Deck"
                                    src="{{ asset('assets') }}/dist/images/projects/project10-400x400.jpg"
                                    alt="Tailwise - Admin Dashboard Template"
                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                </div>
                                <div class="ml-3.5">
                                  <a class="whitespace-nowrap font-medium" href="#">
                                    Sales Presentation Deck
                                  </a>
                                  <a class="mt-0.5 block whitespace-nowrap text-xs text-slate-500" href="#">
                                    http://left4code.com/share/sXHD0qZE3H
                                  </a>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="w-40">
                                <div class="text-xs text-slate-500">
                                  65%
                                </div>
                                <div class="mt-1.5 flex h-1 rounded-sm border bg-slate-50">
                                  <div
                                    class="first:rounded-l-sm last:rounded-r-sm border border-primary/20 -m-px bg-primary/40 w-[65%]">
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="whitespace-nowrap">
                                <div class="mt-4 flex items-center justify-center sm:justify-start">
                                  <div class="flex">
                                    <div class="image-fit zoom-in h-6 w-6">
                                      <img data-placement="top" title="Cate Blanchett"
                                        src="{{ asset('assets') }}/dist/images/users/user8-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Meryl Streep"
                                        src="{{ asset('assets') }}/dist/images/users/user2-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Leonardo DiCaprio"
                                        src="{{ asset('assets') }}/dist/images/users/user3-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                  </div>
                                  <div class="ml-3 text-xs text-slate-500">
                                    4+ Members
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="flex items-center">
                                <div class="image-fit zoom-in h-9 w-9">
                                  <img data-placement="top" title="Social Media Graphics"
                                    src="{{ asset('assets') }}/dist/images/projects/project2-400x400.jpg"
                                    alt="Tailwise - Admin Dashboard Template"
                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                </div>
                                <div class="ml-3.5">
                                  <a class="whitespace-nowrap font-medium" href="#">
                                    Social Media Graphics
                                  </a>
                                  <a class="mt-0.5 block whitespace-nowrap text-xs text-slate-500" href="#">
                                    http://left4code.com/share/XdPHuWUYiy
                                  </a>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="w-40">
                                <div class="text-xs text-slate-500">
                                  99%
                                </div>
                                <div class="mt-1.5 flex h-1 rounded-sm border bg-slate-50">
                                  <div
                                    class="first:rounded-l-sm last:rounded-r-sm border border-primary/20 -m-px bg-primary/40 w-[35%]">
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="whitespace-nowrap">
                                <div class="mt-4 flex items-center justify-center sm:justify-start">
                                  <div class="flex">
                                    <div class="image-fit zoom-in h-6 w-6">
                                      <img data-placement="top" title="Johnny Depp"
                                        src="{{ asset('assets') }}/dist/images/users/user7-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Angelina Jolie"
                                        src="{{ asset('assets') }}/dist/images/users/user4-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Leonardo DiCaprio"
                                        src="{{ asset('assets') }}/dist/images/users/user3-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                  </div>
                                  <div class="ml-3 text-xs text-slate-500">
                                    4+ Members
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="flex items-center">
                                <div class="image-fit zoom-in h-9 w-9">
                                  <img data-placement="top" title="Video Advertisements"
                                    src="{{ asset('assets') }}/dist/images/projects/project7-400x400.jpg"
                                    alt="Tailwise - Admin Dashboard Template"
                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                </div>
                                <div class="ml-3.5">
                                  <a class="whitespace-nowrap font-medium" href="#">
                                    Video Advertisements
                                  </a>
                                  <a class="mt-0.5 block whitespace-nowrap text-xs text-slate-500" href="#">
                                    http://left4code.com/share/TzBWoTLgGi
                                  </a>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="w-40">
                                <div class="text-xs text-slate-500">
                                  80%
                                </div>
                                <div class="mt-1.5 flex h-1 rounded-sm border bg-slate-50">
                                  <div
                                    class="first:rounded-l-sm last:rounded-r-sm border border-primary/20 -m-px bg-primary/40 w-[65%]">
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="whitespace-nowrap">
                                <div class="mt-4 flex items-center justify-center sm:justify-start">
                                  <div class="flex">
                                    <div class="image-fit zoom-in h-6 w-6">
                                      <img data-placement="top" title="Angelina Jolie"
                                        src="{{ asset('assets') }}/dist/images/users/user4-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Tom Hanks"
                                        src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Johnny Depp"
                                        src="{{ asset('assets') }}/dist/images/users/user7-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                  </div>
                                  <div class="ml-3 text-xs text-slate-500">
                                    4+ Members
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="flex items-center">
                                <div class="image-fit zoom-in h-9 w-9">
                                  <img data-placement="top" title="Website Redesign Mockup"
                                    src="{{ asset('assets') }}/dist/images/projects/project3-400x400.jpg"
                                    alt="Tailwise - Admin Dashboard Template"
                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                </div>
                                <div class="ml-3.5">
                                  <a class="whitespace-nowrap font-medium" href="#">
                                    Website Redesign Mockup
                                  </a>
                                  <a class="mt-0.5 block whitespace-nowrap text-xs text-slate-500" href="#">
                                    http://left4code.com/share/BUoXWuKw0o
                                  </a>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="w-40">
                                <div class="text-xs text-slate-500">
                                  56%
                                </div>
                                <div class="mt-1.5 flex h-1 rounded-sm border bg-slate-50">
                                  <div
                                    class="first:rounded-l-sm last:rounded-r-sm border border-primary/20 -m-px bg-primary/40 w-[35%]">
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="whitespace-nowrap">
                                <div class="mt-4 flex items-center justify-center sm:justify-start">
                                  <div class="flex">
                                    <div class="image-fit zoom-in h-6 w-6">
                                      <img data-placement="top" title="Meryl Streep"
                                        src="{{ asset('assets') }}/dist/images/users/user2-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Brad Pitt"
                                        src="{{ asset('assets') }}/dist/images/users/user5-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Johnny Depp"
                                        src="{{ asset('assets') }}/dist/images/users/user7-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                  </div>
                                  <div class="ml-3 text-xs text-slate-500">
                                    4+ Members
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="flex items-center">
                                <div class="image-fit zoom-in h-9 w-9">
                                  <img data-placement="top" title="Email Campaign Templates"
                                    src="{{ asset('assets') }}/dist/images/projects/project5-400x400.jpg"
                                    alt="Tailwise - Admin Dashboard Template"
                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                </div>
                                <div class="ml-3.5">
                                  <a class="whitespace-nowrap font-medium" href="#">
                                    Email Campaign Templates
                                  </a>
                                  <a class="mt-0.5 block whitespace-nowrap text-xs text-slate-500" href="#">
                                    http://left4code.com/share/ON2wkiJ2xy
                                  </a>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="w-40">
                                <div class="text-xs text-slate-500">
                                  65%
                                </div>
                                <div class="mt-1.5 flex h-1 rounded-sm border bg-slate-50">
                                  <div
                                    class="first:rounded-l-sm last:rounded-r-sm border border-primary/20 -m-px bg-primary/40 w-[45%]">
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td data-tw-merge=""
                              class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                              <div class="whitespace-nowrap">
                                <div class="mt-4 flex items-center justify-center sm:justify-start">
                                  <div class="flex">
                                    <div class="image-fit zoom-in h-6 w-6">
                                      <img data-placement="top" title="Denzel Washington"
                                        src="{{ asset('assets') }}/dist/images/users/user9-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Angelina Jolie"
                                        src="{{ asset('assets') }}/dist/images/users/user4-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                    <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                      <img data-placement="top" title="Tom Hanks"
                                        src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template"
                                        class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                    </div>
                                  </div>
                                  <div class="ml-3 text-xs text-slate-500">
                                    4+ Members
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="p-5">
                      <button data-tw-merge=""
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed dark:border-primary w-full border-dashed border-primary/20 bg-white text-primary hover:bg-primary/20">View
                        All Projects
                        <i data-tw-merge="" data-lucide="arrow-right" class="ml-2 h-4 w-4 stroke-[1.3]"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="relative col-span-12 row-start-1 xl:col-span-4 xl:col-start-9">
                <div class="sticky top-[6.2rem] flex flex-col gap-y-7">
                  <div class="box box--stacked flex flex-col p-5">
                    <div>Complete your profile (83%)</div>
                    <div class="mt-3.5 flex h-2">
                      <div
                        class="h-full w-[60%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r">
                      </div>
                      <div class="h-full w-[40%] border border-slate-300 bg-slate-100 first:rounded-l last:rounded-r">
                      </div>
                    </div>
                    <button data-tw-merge=""
                      class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed dark:border-primary mt-5 w-full border-primary/20 bg-white text-primary hover:bg-primary/20"><i
                        data-tw-merge="" data-lucide="inbox" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                      Profile Settings</button>
                  </div>
                  <div class="box box--stacked flex flex-col p-5">
                    <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                      Profile
                    </div>
                    <div class="flex flex-col gap-8">
                      <div>
                        <div class="text-xs uppercase text-slate-500">
                          Personal Data
                        </div>
                        <div class="mt-3.5">
                          <div class="flex items-center">
                            <i data-tw-merge="" data-lucide="clipboard"
                              class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                            Department: Engineering
                          </div>
                          <div class="mt-3 flex items-center">
                            <i data-tw-merge="" data-lucide="calendar"
                              class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                            Location: Austin, USA
                          </div>
                          <div class="mt-3 flex items-center">
                            <i data-tw-merge="" data-lucide="clock"
                              class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                            Manager:
                            <div
                              class="ml-1 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                              <span class="-mt-px">
                                Michael Scott
                              </span>
                            </div>
                          </div>
                          <div class="mt-3 flex items-center">
                            <i data-tw-merge="" data-lucide="map"
                              class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                            Position: Software Engineer
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="text-xs uppercase text-slate-500">
                          Contacts
                        </div>
                        <div class="mt-3.5">
                          <div class="flex items-center">
                            <i data-tw-merge="" data-lucide="clipboard"
                              class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                            Email:
                            <a class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                              href="#">
                              julia.roberts@left4code.com
                            </a>
                          </div>
                          <div class="mt-3 flex items-center">
                            <i data-tw-merge="" data-lucide="calendar"
                              class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                            Phone Number:
                            <a class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                              href="#">
                              +1 (234) 567-8901
                            </a>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="text-xs uppercase text-slate-500">
                          Statistics
                        </div>
                        <div class="mt-3.5">
                          <div class="mt-3 flex items-center">
                            <i data-tw-merge="" data-lucide="clock"
                              class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                            Teams:
                            <div
                              class="ml-1 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                              <span class="-mt-px">5 Members</span>
                            </div>
                          </div>
                          <div class="mt-3 flex items-center">
                            <i data-tw-merge="" data-lucide="map"
                              class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                            Projects:
                            <a class="ml-1 underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                              href="#">
                              Sales Presentation Deck
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-transition="" data-selector=".active"
            data-enter="transition-[visibility,opacity] ease-linear duration-150"
            data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100"
            data-leave="transition-[visibility,opacity] ease-linear duration-150"
            data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0"
            id="example-2" role="tabpanel" aria-labelledby="example-2-tab" class="tab-pane">

            <div class="mt-6 mb-6 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                    <a class="text-[0.94rem] font-medium text-primary" href="#">
                    Holiday Party
                    </a>
                    <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                    Annual holiday celebration and party
                    </div>
                    <div data-tw-merge="" data-tw-placement="bottom-end"
                    class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                        aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                        data-lucide="more-vertical"
                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                    </button>
                    <div data-transition="" data-selector=".show"
                        data-enter="transition-all ease-linear duration-150"
                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                        data-leave="transition-all ease-linear duration-150"
                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                        class="dropdown-menu absolute z-[9999] hidden">
                        <div data-tw-merge=""
                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                            data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Copy
                            Link</a>
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                            data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Delete</a>
                        </div>
                    </div>
                    </div>
                    <div class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                    <div class="flex items-center">
                        <div class="text-slate-500">Organizer:</div>
                        <div class="ml-auto">
                        <div
                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                            <span class="-mt-px">Left4code</span>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Available Seats:</div>
                        <div class="ml-auto">
                        <div class="flex items-center">
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Time:</div>
                        <div class="ml-auto text-slate-500">
                        08:00 PM
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Attendees:</div>
                        <div class="ml-auto">
                        <div class="flex items-center justify-center">
                            <div class="image-fit zoom-in h-6 w-6">
                            <img data-placement="top" title="Uploaded atJulia Roberts"
                                src="{{ asset('assets') }}/dist/images/users/user10-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                            <img data-placement="top" title="Uploaded atDenzel Washington"
                                src="{{ asset('assets') }}/dist/images/users/user9-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                            <img data-placement="top" title="Uploaded atCate Blanchett"
                                src="{{ asset('assets') }}/dist/images/users/user8-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                            <img data-placement="top" title="Uploaded atBrad Pitt"
                                src="{{ asset('assets') }}/dist/images/users/user5-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="ml-1 text-slate-500">
                            (55+)
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Registration Link:</div>
                        <div class="ml-auto">
                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                            href="#">
                            https://left4code.com/holiday-party
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                    <a class="text-[0.94rem] font-medium text-primary" href="#">
                    Company Retreat
                    </a>
                    <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                    Team retreat in a scenic location
                    </div>
                    <div data-tw-merge="" data-tw-placement="bottom-end"
                    class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                        aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                        data-lucide="more-vertical"
                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                    </button>
                    <div data-transition="" data-selector=".show"
                        data-enter="transition-all ease-linear duration-150"
                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                        data-leave="transition-all ease-linear duration-150"
                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                        class="dropdown-menu absolute z-[9999] hidden">
                        <div data-tw-merge=""
                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                            data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Copy
                            Link</a>
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                            data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Delete</a>
                        </div>
                    </div>
                    </div>
                    <div class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                    <div class="flex items-center">
                        <div class="text-slate-500">Organizer:</div>
                        <div class="ml-auto">
                        <div
                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                            <span class="-mt-px">Left4code</span>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Available Seats:</div>
                        <div class="ml-auto">
                        <div class="flex items-center">
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Time:</div>
                        <div class="ml-auto text-slate-500">
                        All Day
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Attendees:</div>
                        <div class="ml-auto">
                        <div class="flex items-center justify-center">
                            <div class="image-fit zoom-in h-6 w-6">
                            <img data-placement="top" title="Uploaded atAngelina Jolie"
                                src="{{ asset('assets') }}/dist/images/users/user4-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                            <img data-placement="top" title="Uploaded atJulia Roberts"
                                src="{{ asset('assets') }}/dist/images/users/user10-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                            <img data-placement="top" title="Uploaded atLeonardo DiCaprio"
                                src="{{ asset('assets') }}/dist/images/users/user3-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                            <img data-placement="top" title="Uploaded atCate Blanchett"
                                src="{{ asset('assets') }}/dist/images/users/user8-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="ml-1 text-slate-500">
                            (42+)
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Registration Link:</div>
                        <div class="ml-auto">
                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                            href="#">
                            https://left4code.com/company-retreat
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                    <a class="text-[0.94rem] font-medium text-primary" href="#">
                    Community Cleanup
                    </a>
                    <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                    Volunteer event to clean up the neighborhood
                    </div>
                    <div data-tw-merge="" data-tw-placement="bottom-end"
                    class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                        aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                        data-lucide="more-vertical"
                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                    </button>
                    <div data-transition="" data-selector=".show"
                        data-enter="transition-all ease-linear duration-150"
                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                        data-leave="transition-all ease-linear duration-150"
                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                        class="dropdown-menu absolute z-[9999] hidden">
                        <div data-tw-merge=""
                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                            data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Copy
                            Link</a>
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                            data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Delete</a>
                        </div>
                    </div>
                    </div>
                    <div class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                    <div class="flex items-center">
                        <div class="text-slate-500">Organizer:</div>
                        <div class="ml-auto">
                        <div
                            class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                            <span class="-mt-px">Local Community Association</span>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Available Seats:</div>
                        <div class="ml-auto">
                        <div class="flex items-center">
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 active [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                            <i data-tw-merge="" data-lucide="armchair"
                            class="stroke-[1] w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&amp;.active]:text-pending/80 [&amp;.active]:fill-pending/10 [&.active]:text-pending/80 [&.active]:fill-pending/10"></i>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Time:</div>
                        <div class="ml-auto text-slate-500">
                        09:00 AM
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Attendees:</div>
                        <div class="ml-auto">
                        <div class="flex items-center justify-center">
                            <div class="image-fit zoom-in h-6 w-6">
                            <img data-placement="top" title="Uploaded atJulia Roberts"
                                src="{{ asset('assets') }}/dist/images/users/user10-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                            <img data-placement="top" title="Uploaded atTom Hanks"
                                src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                            <img data-placement="top" title="Uploaded atLeonardo DiCaprio"
                                src="{{ asset('assets') }}/dist/images/users/user3-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="image-fit zoom-in -ml-2 h-6 w-6">
                            <img data-placement="top" title="Uploaded atAngelina Jolie"
                                src="{{ asset('assets') }}/dist/images/users/user4-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-2 border-white">
                            </div>
                            <div class="ml-1 text-slate-500">
                            (88+)
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="text-slate-500">Registration Link:</div>
                        <div class="ml-auto">
                        <a class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                            href="#">
                            https://left4code.com/community-cleanup
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

          </div>
          <div data-transition="" data-selector=".active"
            data-enter="transition-[visibility,opacity] ease-linear duration-150"
            data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100"
            data-leave="transition-[visibility,opacity] ease-linear duration-150"
            data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0"
            id="example-3" role="tabpanel" aria-labelledby="example-3-tab" class="tab-pane">

            @foreach ($kategori as $item)
            <div class="box box--stacked flex flex-col p-5 my-3">
                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0">
                    <div>
                        <div class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                            <img src="{{ asset('resources/sports-icon/'.$item->icon) }}" width="70%" alt="" style="filter: sepia(1) saturate(5000%) hue-rotate(190deg) brightness(0.6);">
                        </div>
                    </div>
                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                        <div>
                            <div class="flex items-center">
                                <div class="font-medium">{{ $item->nama_kategori }}</div>
                            </div>
                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                Sports
                            </div>
                        </div>
                        <div class="flex w-full flex-1 sm:justify-end">
                            <button data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed dark:border-primary border-primary/50 bg-primary/5 px-4 text-primary"><i data-tw-merge="" data-lucide="badge-plus" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                Tambah Arena</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 mb-6 grid grid-cols-12 gap-x-6 gap-y-10">
              @foreach (arena($item->id_kategori) as $arena)
                <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                    <div class="ml-5 mt-5 flex">
                    <span
                        class="mr-auto flex items-center rounded-md border border-success/10 bg-success/10 px-2 py-0.5 text-xs font-medium text-success">
                        <span class="-mt-px">{{ $arena->status }}</span>
                    </span>
                    </div>
                    <div data-tw-merge="" data-tw-placement="bottom-end"
                    class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                        aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                        data-lucide="more-vertical"
                        class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                    </button>
                    <div data-transition="" data-selector=".show"
                        data-enter="transition-all ease-linear duration-150"
                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                        data-leave="transition-all ease-linear duration-150"
                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                        class="dropdown-menu absolute z-[9999] hidden">
                        <div data-tw-merge=""
                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                            data-tw-merge="" data-lucide="folder-open" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Manage</a>
                        <a
                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i
                            data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                            Remove</a>
                        </div>
                    </div>
                    </div>
                    <div class="mt-5 flex flex-col items-center px-5 pb-10">
                    <div class="relative h-[72px] w-[72px]">
                        <div
                        class="flex h-full w-full items-center justify-center overflow-hidden rounded-full border border-slate-200/70 bg-theme-1/5">
                        <i data-tw-merge="" data-lucide="wallet"
                            class="h-6 w-6 fill-theme-1/10 stroke-[0.7] text-theme-1"></i>
                        </div>
                    </div>
                    <div class="mt-3 text-[0.94rem] font-medium text-primary">
                        {{ $arena->nama_arena }}
                    </div>
                    <div class="mt-1.5 text-center text-slate-500">
                        {{ $arena->deskripsi }}
                    </div>
                    </div>
                    <div class="flex border-t border-slate-200/80">
                    <div class="flex flex-1 flex-col items-center py-3">
                        <div class="text-base font-medium">
                        1
                        </div>
                        <div class="text-slate-500">Level</div>
                    </div>
                    <div class="flex flex-1 flex-col items-center border-x border-slate-200/80 py-3">
                        <div class="text-base font-medium">
                        1y
                        </div>
                        <div class="text-slate-500">Duration</div>
                    </div>
                    <div class="flex flex-1 flex-col items-center py-3">
                        <div class="text-base font-medium">
                        85
                        </div>
                        <div class="text-slate-500">Score</div>
                    </div>
                    </div>
                </div>
              @endforeach
            </div>
            @endforeach

          </div>
          <div data-transition="" data-selector=".active"
            data-enter="transition-[visibility,opacity] ease-linear duration-150"
            data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100"
            data-leave="transition-[visibility,opacity] ease-linear duration-150"
            data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0"
            id="example-4" role="tabpanel" aria-labelledby="example-4-tab" class="tab-pane">
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
              <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                <div data-tw-merge="" data-tw-placement="bottom-end"
                  class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                    aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                      data-lucide="more-vertical"
                      class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                  </button>
                  <div data-transition="" data-selector=".show"
                    data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                      class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Copy
                        Link</a>
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Delete</a>
                    </div>
                  </div>
                </div>
                <div class="mt-10 flex flex-col items-center px-5 pb-10">
                  <div
                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                    <img src="{{ asset('assets') }}/dist/images/users/user10-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                  <div class="mt-3 text-[0.94rem] font-medium text-primary">
                    Julia Roberts
                  </div>
                  <div class="mt-2 flex items-center justify-center gap-3">
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="hotel" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      Austin, USA
                    </div>
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      August 9, 2014
                    </div>
                  </div>
                  <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Engineering
                      </span>
                    </span>
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Software Engineer
                      </span>
                    </span>
                  </div>
                </div>
                <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                  <div class="text-slate-500">
                    95+ Connections
                  </div>
                  <button data-tw-merge=""
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                      data-tw-merge="" data-lucide="check" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                    Connected</button>
                </div>
              </div>
              <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                <div data-tw-merge="" data-tw-placement="bottom-end"
                  class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                    aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                      data-lucide="more-vertical"
                      class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                  </button>
                  <div data-transition="" data-selector=".show"
                    data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                      class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Copy
                        Link</a>
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Delete</a>
                    </div>
                  </div>
                </div>
                <div class="mt-10 flex flex-col items-center px-5 pb-10">
                  <div
                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                    <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                  <div class="mt-3 text-[0.94rem] font-medium text-primary">
                    Tom Hanks
                  </div>
                  <div class="mt-2 flex items-center justify-center gap-3">
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="hotel" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      New York, USA
                    </div>
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      January 15, 2010
                    </div>
                  </div>
                  <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Sales Department
                      </span>
                    </span>
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Sales Manager
                      </span>
                    </span>
                  </div>
                </div>
                <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                  <div class="text-slate-500">
                    69+ Connections
                  </div>
                  <button data-tw-merge=""
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                      data-tw-merge="" data-lucide="check" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                    Connected</button>
                </div>
              </div>
              <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                <div data-tw-merge="" data-tw-placement="bottom-end"
                  class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                    aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                      data-lucide="more-vertical"
                      class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                  </button>
                  <div data-transition="" data-selector=".show"
                    data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                      class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Copy
                        Link</a>
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Delete</a>
                    </div>
                  </div>
                </div>
                <div class="mt-10 flex flex-col items-center px-5 pb-10">
                  <div
                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                    <img src="{{ asset('assets') }}/dist/images/users/user5-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                  <div class="mt-3 text-[0.94rem] font-medium text-primary">
                    Brad Pitt
                  </div>
                  <div class="mt-2 flex items-center justify-center gap-3">
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="hotel" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      Seattle, USA
                    </div>
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      September 3, 2016
                    </div>
                  </div>
                  <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Data Analytics
                      </span>
                    </span>
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Data Analyst
                      </span>
                    </span>
                  </div>
                </div>
                <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                  <div class="text-slate-500">
                    77+ Connections
                  </div>
                  <button data-tw-merge=""
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                      data-tw-merge="" data-lucide="user-plus" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                    Connect</button>
                </div>
              </div>
              <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                <div data-tw-merge="" data-tw-placement="bottom-end"
                  class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                    aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                      data-lucide="more-vertical"
                      class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                  </button>
                  <div data-transition="" data-selector=".show"
                    data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                      class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Copy
                        Link</a>
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Delete</a>
                    </div>
                  </div>
                </div>
                <div class="mt-10 flex flex-col items-center px-5 pb-10">
                  <div
                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                    <img src="{{ asset('assets') }}/dist/images/users/user8-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                  <div class="mt-3 text-[0.94rem] font-medium text-primary">
                    Cate Blanchett
                  </div>
                  <div class="mt-2 flex items-center justify-center gap-3">
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="hotel" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      Houston, USA
                    </div>
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      June 12, 2017
                    </div>
                  </div>
                  <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Project Management
                      </span>
                    </span>
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Project Manager
                      </span>
                    </span>
                  </div>
                </div>
                <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                  <div class="text-slate-500">
                    24+ Connections
                  </div>
                  <button data-tw-merge=""
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                      data-tw-merge="" data-lucide="user-plus" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                    Connect</button>
                </div>
              </div>
              <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                <div data-tw-merge="" data-tw-placement="bottom-end"
                  class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                    aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                      data-lucide="more-vertical"
                      class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                  </button>
                  <div data-transition="" data-selector=".show"
                    data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                      class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Copy
                        Link</a>
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Delete</a>
                    </div>
                  </div>
                </div>
                <div class="mt-10 flex flex-col items-center px-5 pb-10">
                  <div
                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                    <img src="{{ asset('assets') }}/dist/images/users/user4-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                  <div class="mt-3 text-[0.94rem] font-medium text-primary">
                    Angelina Jolie
                  </div>
                  <div class="mt-2 flex items-center justify-center gap-3">
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="hotel" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      San Francisco, USA
                    </div>
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      July 10, 2012
                    </div>
                  </div>
                  <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Account Management
                      </span>
                    </span>
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Account Executive
                      </span>
                    </span>
                  </div>
                </div>
                <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                  <div class="text-slate-500">
                    33+ Connections
                  </div>
                  <button data-tw-merge=""
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                      data-tw-merge="" data-lucide="check" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                    Connected</button>
                </div>
              </div>
              <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                <div data-tw-merge="" data-tw-placement="bottom-end"
                  class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                    aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                      data-lucide="more-vertical"
                      class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                  </button>
                  <div data-transition="" data-selector=".show"
                    data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                      class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Copy
                        Link</a>
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Delete</a>
                    </div>
                  </div>
                </div>
                <div class="mt-10 flex flex-col items-center px-5 pb-10">
                  <div
                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                    <img src="{{ asset('assets') }}/dist/images/users/user2-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                  <div class="mt-3 text-[0.94rem] font-medium text-primary">
                    Meryl Streep
                  </div>
                  <div class="mt-2 flex items-center justify-center gap-3">
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="hotel" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      Los Angeles, USA
                    </div>
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      March 22, 2015
                    </div>
                  </div>
                  <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Marketing Department
                      </span>
                    </span>
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Marketing Coordinator
                      </span>
                    </span>
                  </div>
                </div>
                <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                  <div class="text-slate-500">
                    35+ Connections
                  </div>
                  <button data-tw-merge=""
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                      data-tw-merge="" data-lucide="user-plus" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                    Connect</button>
                </div>
              </div>
              <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                <div data-tw-merge="" data-tw-placement="bottom-end"
                  class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                    aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                      data-lucide="more-vertical"
                      class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                  </button>
                  <div data-transition="" data-selector=".show"
                    data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                      class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Copy
                        Link</a>
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Delete</a>
                    </div>
                  </div>
                </div>
                <div class="mt-10 flex flex-col items-center px-5 pb-10">
                  <div
                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                    <img src="{{ asset('assets') }}/dist/images/users/user6-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                  <div class="mt-3 text-[0.94rem] font-medium text-primary">
                    Jennifer Lawrence
                  </div>
                  <div class="mt-2 flex items-center justify-center gap-3">
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="hotel" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      Miami, USA
                    </div>
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      February 18, 2019
                    </div>
                  </div>
                  <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        CRM Team
                      </span>
                    </span>
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        CRM Administrator
                      </span>
                    </span>
                  </div>
                </div>
                <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                  <div class="text-slate-500">
                    28+ Connections
                  </div>
                  <button data-tw-merge=""
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 ml-auto border-primary/50 px-4"><i
                      data-tw-merge="" data-lucide="user-plus" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                    Connect</button>
                </div>
              </div>
              <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                <div data-tw-merge="" data-tw-placement="bottom-end"
                  class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                    aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                      data-lucide="more-vertical"
                      class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                  </button>
                  <div data-transition="" data-selector=".show"
                    data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                      class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Copy
                        Link</a>
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Delete</a>
                    </div>
                  </div>
                </div>
                <div class="mt-10 flex flex-col items-center px-5 pb-10">
                  <div
                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                    <img src="{{ asset('assets') }}/dist/images/users/user9-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                  <div class="mt-3 text-[0.94rem] font-medium text-primary">
                    Denzel Washington
                  </div>
                  <div class="mt-2 flex items-center justify-center gap-3">
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="hotel" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      Atlanta, USA
                    </div>
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      April 25, 2011
                    </div>
                  </div>
                  <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Human Resources
                      </span>
                    </span>
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        HR Director
                      </span>
                    </span>
                  </div>
                </div>
                <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                  <div class="text-slate-500">
                    84+ Connections
                  </div>
                  <button data-tw-merge=""
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                      data-tw-merge="" data-lucide="check" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                    Connected</button>
                </div>
              </div>
              <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                <div data-tw-merge="" data-tw-placement="bottom-end"
                  class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                    aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge=""
                      data-lucide="more-vertical"
                      class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                  </button>
                  <div data-transition="" data-selector=".show"
                    data-enter="transition-all ease-linear duration-150"
                    data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                    data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                    data-leave="transition-all ease-linear duration-150"
                    data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                    data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                    class="dropdown-menu absolute z-[9999] hidden">
                    <div data-tw-merge=""
                      class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Copy
                        Link</a>
                      <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                          data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                        Delete</a>
                    </div>
                  </div>
                </div>
                <div class="mt-10 flex flex-col items-center px-5 pb-10">
                  <div
                    class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                    <img src="{{ asset('assets') }}/dist/images/users/user7-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template">
                  </div>
                  <div class="mt-3 text-[0.94rem] font-medium text-primary">
                    Johnny Depp
                  </div>
                  <div class="mt-2 flex items-center justify-center gap-3">
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="hotel" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      Denver, USA
                    </div>
                    <div class="flex items-center text-slate-500">
                      <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                      October 7, 2013
                    </div>
                  </div>
                  <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Product Management
                      </span>
                    </span>
                    <span
                      class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary">
                      <span class="-mt-px truncate">
                        Product Manager
                      </span>
                    </span>
                  </div>
                </div>
                <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                  <div class="text-slate-500">
                    75+ Connections
                  </div>
                  <button data-tw-merge=""
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-auto px-4"><i
                      data-tw-merge="" data-lucide="check" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                    Connected</button>
                </div>
              </div>
            </div>
          </div>
          <div data-transition="" data-selector=".active"
            data-enter="transition-[visibility,opacity] ease-linear duration-150"
            data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100"
            data-leave="transition-[visibility,opacity] ease-linear duration-150"
            data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0"
            id="example-5" role="tabpanel" aria-labelledby="example-5-tab" class="tab-pane">
            <div class="box box--stacked mt-3.5 flex flex-col items-center py-14">
              <i data-tw-merge="" data-lucide="file-lock2"
                class="h-24 w-24 fill-primary/5 stroke-[0.3] text-primary/70"></i>
              <div class="mt-5 text-base font-medium">
                Two-Factor Authentication (2FA)
              </div>
              <div class="mt-1 px-10 text-center text-slate-500">
                Enhance your account security by enabling Two-Factor
                Authentication in the settings.
              </div>
              <button data-tw-merge=""
                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-6"><i
                  data-tw-merge="" data-lucide="lock" class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"></i>
                Enable Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-admin>
