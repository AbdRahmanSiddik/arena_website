<x-admin>
  <x-slot:tittle>Admin - Daftarkan Mitra</x-slot:tittle>

  <div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium group-[.mode--light]:text-white">
          Daftarkan Mitra
        </div>
      </div>
      <div class="mt-3.5">
        <div class="box box--stacked flex flex-col">
          {{-- <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                        card-header
                    </div> --}}
          <div class="overflow-auto xl:overflow-visible">

            <!-- BEGIN: Validation Form -->
            <form action="{{ route('admin.mitra-addAction') }}" method="POST" class="validate-form"
              style="margin: 2rem 2rem 2rem 2rem">
              @csrf
              <div class="flex flex-wrap w-full flex-row">
                <div class="w-1/2 md:w-1/2 px-3 mb-3">
                  <div class="input-form mt-3 md:mt-0 [&.has-error_.form-control]:border-danger">
                    <label for="validation-form-1" class="inline-block mb-2 flex w-full flex-col sm:flex-row">
                      User Name
                      <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                        Required, at least 5 characters
                      </span>
                    </label>
                    <input id="validation-form-1" name="name" type="text" minlength="5"
                      placeholder="Masukkan UserName" required="required"
                      class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 form-control">
                  </div>
                </div>
                <div class="w-1/2 md:w-1/2 px-3 mb-3">
                  <div class="input-form mt-3 md:mt-0 [&.has-error_.form-control]:border-danger">
                    <label for="validation-form-2" class="inline-block mb-2 flex w-full flex-col sm:flex-row">
                      Email
                      <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                        Required, email address format
                      </span>
                    </label>
                    <input id="validation-form-2" name="email" type="email" placeholder="example@gmail.com"
                      required="required"
                      class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 form-control">
                  </div>
                </div>
                <div class="w-1/2 md:w-1/2 px-3 mb-3">
                  <div class="input-form mt-3 md:mt-0 [&.has-error_.form-control]:border-danger">
                    <label for="validation-form-2" class="inline-block mb-2 flex w-full flex-col sm:flex-row">
                      Nama Mitra
                      <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                        Required, at least 5 characters
                      </span>
                    </label>
                    <input id="validation-form-1" name="nama_mitra" type="text" minlength="5"
                      placeholder="Masukkan Nama Mitra" required="required"
                      class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 form-control">
                  </div>
                </div>
                <div class="w-1/2 md:w-1/2 px-3 mb-3">
                  <div class="input-form mt-3 md:mt-0 [&.has-error_.form-control]:border-danger">
                    <label for="validation-form-2" class="inline-block mb-2 flex w-full flex-col sm:flex-row">
                      Password
                      <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                        Required, at least 8 characters, 1 UpperCase
                      </span>
                    </label>
                    <input id="validation-form-1" name="password" type="password" minlength="8" placeholder="***"
                      required="required"
                      class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 form-control">
                  </div>
                </div>
                <div class="w-1/2 md:w-1/2 px-3 mb-3">
                  <div class="input-form mt-3 md:mt-0 [&.has-error_.form-control]:border-danger">
                    <label for="validation-form-2" class="inline-block mb-2 flex w-full flex-col sm:flex-row">
                      Jam Buka
                      <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                        Required, time in WIB
                      </span>
                    </label>
                    <input id="validation-form-1" name="jam_buka" type="time" placeholder="***" required="required"
                      class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 form-control">
                  </div>
                </div>
                <div class="w-1/2 md:w-1/2 px-3 mb-3">
                  <div class="input-form mt-3 md:mt-0 [&.has-error_.form-control]:border-danger">
                    <label for="validation-form-2" class="inline-block mb-2 flex w-full flex-col sm:flex-row">
                      Jam Tutup
                      <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                        Required, time in WIB
                      </span>
                    </label>
                    <input id="validation-form-1" name="jam_tutup" type="time" placeholder="***" required="required"
                      class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 form-control">
                  </div>
                </div>
                <div class="w-1/2 md:w-1/2 px-3 mb-3">
                  <div class="input-form mt-3 md:mt-0 [&.has-error_.form-control]:border-danger">
                    <label for="hari_libur" class="inline-block mb-1 flex w-full flex-col sm:flex-row">
                      Hari Libur
                      <span class="mt-1 text-xs text-slate-500 sm:ml-auto sm:mt-0">
                        Required, select day
                      </span>
                    </label>
                    <select data-tw-merge aria-label="Default select example" id="hari_libur" name="hari_libur"
                      class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 sm:mr-2 mt-2 sm:mr-2">
                      <option selected disabled>Pilih hari</option>
                      <option>Tidak Ada Hari Libur</option>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jumat">Jumat</option>
                      <option value="Sabtu">Sabtu</option>
                      <option value="Minggu">Minggu</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="mt-5 text-right px-3">
                <a data-tw-merge href="{{ route('admin.mitra') }}"
                  class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-pending border-pending text-white dark:border-pending w-24 w-24">Cancel</a>
                <button data-tw-merge type="submit"
                  class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24 w-24">Submit</button>
              </div>
            </form>
            <!-- END: Validation Form -->


          </div>
          {{-- <div class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 p-5 sm:flex-row">
                        card-footer
                    </div> --}}
        </div>
      </div>
    </div>
  </div>

</x-admin>
