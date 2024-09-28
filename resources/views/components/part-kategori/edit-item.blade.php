<div>
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="edit-kategori-{{ $token }}"
      class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
      <div data-tw-merge=""
        class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
        <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
          data-tw-dismiss="modal" href="javascript:;">
          <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
        </a>
        <div data-tw-merge="" class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
          <h2 class="mr-auto text-base font-medium">Edit Kategori {{ $slot }}</h2>
        </div>
        <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
          <div class="flex flex-col gap-3.5 px-5 py-3">

              <!-- BEGIN: Validation Form -->
              <form class="" method="POST" action="{{ route($route, $token) }}">
                @csrf
                <div class="input-form [&amp;.has-error_.form-control]:border-danger">
                  <label data-tw-merge for="validation-form-1"
                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex w-full flex-col sm:flex-row">
                    Nama Kategori
                    <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                      Required <small class="text-danger">*</small>
                    </span>
                  </label>
                  <input data-tw-merge id="validation-form-1" name="nama_kategori" type="text" placeholder="Input Kategori"
                    minlength="3" required="required" value="{{ $slot }}"
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 form-control form-control">
                </div>
                <button data-tw-merge type="submit"
                  class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-5 mt-5">Submit</button>
              </form>
              <!-- END: Validation Form -->

            </div>
        </div>
      </div>
    </div>
  </div>
