<div>
  <script src="{{ asset('assets/jquery-3.7.1.min.js') }}"></script>

  @if (Session::has('success'))
    <div class="text-center">
      <!-- BEGIN: Notification Content -->
      <div id="success-notification-content"
        class="py-5 pl-5 pr-14 bg-white border border-slate-200/60 rounded-lg shadow-xl dark:bg-darkmode-600 dark:text-slate-300 dark:border-darkmode-600 hidden flex flex flex">
        <i data-tw-merge data-lucide="check-circle" class="stroke-[1] w-5 h-5 text-success text-success"></i>
        <div class="ml-4 mr-4">
          <div class="font-medium">Success Message!</div>
          <div class="mt-1 text-slate-500">
            {{ session('success') }}
          </div>
        </div>
      </div>
      <!-- END: Notification Content -->
    </div>


    <script>
      $(document).ready(function() {
        // Success notification
        if ($("#success-notification-content").length) {
          Toastify({
            node: $("#success-notification-content").clone().removeClass("hidden")[0],
            duration: -1,
            newWindow: true,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true,
          }).showToast();
        }
      });
    </script>
  @endif

</div>
