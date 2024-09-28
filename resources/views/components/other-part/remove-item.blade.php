<!-- BEGIN: Modal Content -->
<div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="delete-item-{{ $token }}"
  class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
  <div data-tw-merge
    class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
    <div class="p-5 text-center">
      <i data-tw-merge data-lucide="x-circle"
        class="stroke-[1] w-5 h-5 mx-auto mt-3 h-16 w-16 text-danger mx-auto mt-3 h-16 w-16 text-danger"></i>
      <div class="mt-5 text-3xl">Are you sure?</div>
      <div class="mt-2 text-slate-500">
        Do you really want to delete these records? <br>
        <strong>{{ $slot }}</strong> <br>
        This process cannot be undone.
      </div>
    </div>
    <div class="px-5 pb-8 text-center">
      <button data-tw-merge data-tw-dismiss="modal" type="button"
        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24 mr-1 w-24">Cancel</button>
      <a data-tw-merge href="{{ route($route, $token) }}"
        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24 w-24">Delete</a>
    </div>
    <div class="px-5 py-3 text-center border-t border-slate-200/60 dark:border-darkmode-400 flex justify-center">
        <img src="{{ asset('resources/icon/stiker-turbo.png') }}" alt="TURBO MAIN" width="70%">
    </div>
  </div>
</div>
<!-- END: Modal Content -->
