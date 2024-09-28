<x-admin>
  <x-slot:tittle>Admin - Mitra</x-slot:tittle>

  <div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium group-[.mode--light]:text-white">
          List Mitra
        </div>
        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
          <a data-tw-merge="" href="{{ route('admin.mitra-add') }}"
            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i
              data-tw-merge="" data-lucide="pen-line" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
            Daftarkan Mitra</a>
        </div>
      </div>
      <div class="mt-3.5">
        <div class="box box--stacked flex flex-col">
          {{-- <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                        card-header
                    </div> --}}
          <div class="overflow-auto xl:overflow-visible">
            <table data-tw-merge="" class="w-full text-left border-b border-slate-200/60" id="example">
              <thead data-tw-merge="" class="">
                <tr data-tw-merge="" class="">
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    Mitra
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    <div class="flex">
                      Link Alt
                    </div>
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    <div class="flex">
                      Amount
                    </div>
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    Masa Aktif
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    Status
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                    Action
                  </td>
                </tr>
              </thead>
              <tbody>
                @foreach ($mitra as $m)
                <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 w-44 border-dashed py-4 dark:bg-darkmode-600">
                    <div class="flex items-center">
                      <div class="image-fit zoom-in h-9 w-9">
                        <img data-placement="top" title="{{ $m->nama_mitra }}" data-action="zoom"
                          src="{{ asset('resources/profiles/'.($m->logo_mitra ?? 'default.svg')) }}"
                          alt="{{ $m->nama_mitra }}"
                          class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                      </div>
                      <div class="ml-3.5">
                        <a class="whitespace-nowrap font-medium" href="#">
                          {{ $m->nama_mitra }}
                        </a>
                        <div class="mt-0.5 flex whitespace-nowrap text-xs text-slate-500">
                          Product:
                          <a class="ml-1 block truncate" href="#">
                            Purchased: 7 Items
                          </a>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                    <a class="flex items-center text-primary" href="#">
                      <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                      <div class="ml-1.5 truncate whitespace-nowrap">
                        /Profile
                      </div>
                    </a>
                    <a class="flex items-center text-primary" href="#">
                      <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                      <div class="ml-1.5 truncate whitespace-nowrap">
                        /Arena
                      </div>
                    </a>
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                    <div class="whitespace-nowrap text-left">
                      Rp. 1.088
                    </div>
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                    <div class="whitespace-nowrap text-left">
                      {{ $m->masa_aktif }}
                    </div>
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                    @include('admin.mitra.part.status')
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600 ">
                    <div class="flex items-center justify-left ml-5">
                      <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button
                          data-tw-toggle="dropdown" aria-expanded="false"
                          class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical"
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
                            <a href="{{ route('admin.mitra-detail') }}"
                              class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                              <i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                              View Detail
                            </a>
                            <a href="{{ route('admin.mitra-detail') }}"
                              class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                              <i data-tw-merge="" data-lucide="check-square" class="stroke-[1] mr-2 h-4 w-4"></i>
                              View Detail
                            </a>
                            <a data-placement="top" title="Remove" data-tw-toggle="modal" data-tw-target="#delete-item-{{ $m->token_mitra }}" href="javascript:;"
                              class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger">
                              <i
                                data-tw-merge="" data-lucide="trash2" class="stroke-[1] mr-2 h-4 w-4"></i>
                              Remove
                            </a>
                            <x-other-part.remove-item route="admin.mitra-destroy" token="{{ $m->token_mitra }}">
                                {{ $m->nama_mitra }}
                            </x-other-part.remove-item>

                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
            </table>
          </div>
          {{-- <div class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 p-5 sm:flex-row">
                        card-footer
                    </div> --}}
        </div>
      </div>
    </div>
  </div>

</x-admin>
