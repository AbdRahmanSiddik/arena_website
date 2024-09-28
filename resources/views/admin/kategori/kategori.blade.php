<x-admin>
  <x-slot:tittle>Admin - Kategori Arena</x-slot:tittle>

  <div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium group-[.mode--light]:text-white">
          Kategori Lapangan
        </div>

        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
          <a data-tw-merge="" data-tw-toggle="modal" data-tw-target="#add-kategori" href="javascript:;"
            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200">
            <i data-tw-merge="" data-lucide="pen-line" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
            Add New Kategori</a>
          {{-- @include('components.part-kategori.additem-slideover') --}}
          <x-part-kategori.additem-slideover></x-part-kategori.additem-slideover>
        </div>
      </div>
      <div class="mt-3.5">
        <div class="box box--stacked flex flex-col">
          <div class="overflow-auto xl:overflow-visible">
            <table data-tw-merge="" class="w-full text-left border-b border-slate-200/60" id="example">
              <thead data-tw-merge="" class="">
                <tr data-tw-merge="" class="">
                  <td data-tw-merge=""
                    class="px-5 border-b ml-3 dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    <div class="ml-3">
                        Nama Kategori
                    </div>
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                    Link
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500 text-center">
                    <div class="flex justify-center">
                      Jumlah Arena
                    </div>
                  </td>
                  <td data-tw-merge=""
                    class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                    <div class="mx-6 text-center">
                      Action
                    </div>
                  </td>
                </tr>
              </thead>
              <tbody>
                @foreach ($kategori as $k)
                  <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                    <td data-tw-merge=""
                      class="px-5 border-b dark:border-darkmode-300 w-44 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="flex items-center ml-3">
                        <div class="image-fit zoom-in h-9 w-9">
                          <img data-placement="top" title="{{ $k->nama_kategori }}" data-action="zoom"
                            src="{{ asset('resources/sports-icon/' . ($k->icon ?? 'default.png')) }}"
                            alt="{{ $k->nama_kategori }}"
                            class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                        </div>
                        <div class="ml-3.5">
                          <a class="whitespace-nowrap font-medium" href="#">
                            {{ $k->nama_kategori }}
                          </a>
                          <div class="mt-0.5 flex whitespace-nowrap text-xs text-slate-500">
                            Tags: Sports
                          </div>
                        </div>
                      </div>
                    </td>
                    <td data-tw-merge=""
                      class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <a class="flex items-center text-primary" href="#">
                        <i data-tw-merge="" data-lucide="external-link" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                        <div class="ml-1.5 truncate whitespace-nowrap">
                          /{{ $k->nama_kategori }}
                        </div>
                      </a>
                    </td>
                    <td data-tw-merge=""
                      class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                      <div class="whitespace-nowrap text-center">
                        {{ $k->arena_count }}
                      </div>
                    </td>
                    <td data-tw-merge=""
                      class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                      <div class="flex items-center justify-center ml-auto gap-1.5">
                        <a data-placement="top" title="Edit" data-tw-toggle="modal"
                          data-tw-target="#edit-kategori-{{ $k->token_kategori }}" href="javascript:;"
                          class="tooltip cursor-pointer flex items-center justify-center border rounded-full h-7 w-7 border-primary/40 bg-primary/5">
                          <i data-tw-merge="" data-lucide="pencil-line"
                            class="stroke-[1] w-3 h-3 fill-primary/10 text-primary"></i>
                        </a>
                        <x-part-kategori.edit-item route="admin.kategori-update" token="{{ $k->token_kategori }}">{{ $k->nama_kategori }}</x-part-kategori.edit-item>

                        <a data-placement="top" title="Remove" data-tw-toggle="modal"
                          data-tw-target="#delete-item-{{ $k->token_kategori }}" href="javascript:;"
                          class="tooltip cursor-pointer flex items-center justify-center border rounded-full h-7 w-7 border-danger/40 bg-danger/5">
                          <i data-tw-merge="" data-lucide="trash-2"
                            class="stroke-[1] w-3 h-3 fill-danger/10 text-danger"></i>
                        </a>
                        <x-other-part.remove-item route="admin.kategori-destroy"
                          token="{{ $k->token_kategori }}">{{ $k->nama_kategori }}</x-other-part.remove-item>

                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-admin>
