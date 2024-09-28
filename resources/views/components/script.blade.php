<script src="{{ asset('assets/jquery-3.7.1.min.js') }}"></script>
<script>
  function onSubmit(pristine) {
    let valid = pristine.validate();
    if (valid) {
      Toastify({
        node: $("#success-notification-content")
          .clone()
          .removeClass("hidden")[0],
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();
    } else {
      Toastify({
        node: $("#failed-notification-content")
          .clone()
          .removeClass("hidden")[0],
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();
    }
  }
  $(".validate-form").each(function() {
    let pristine = new Pristine(this, {
      classTo: "input-form [&amp;.has-error_.form-control]:border-danger",
      errorClass: "has-error",
      errorTextParent: "input-form [&amp;.has-error_.form-control]:border-danger",
      errorTextClass: "text-danger mt-2",
    });
    pristine.addValidator(
      $(this).find('input[type="url"]')[0],
      function(value) {
        let expression =
          /[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&amp;//=]*)?/gi;
        let regex = new RegExp(expression);
        if (!value.length || (value.length & amp; & amp; value.match(regex))) {
          return true;
        }
        return false;
      },
      "This field is URL format only",
      2,
      false
    );
    $(this).on("submit", function(e) {
      e.preventDefault();
      onSubmit(pristine);
    });
  });
</script>

<!-- BEGIN: Success Notification Content -->
<div id="success-notification-content"
  class="py-5 pl-5 pr-14 bg-white border border-slate-200/60 rounded-lg shadow-xl dark:bg-darkmode-600 dark:text-slate-300 dark:border-darkmode-600 hidden flex">
  <i data-tw-merge="" data-lucide="check-circle" class="stroke-[1] w-5 h-5 text-success"></i>
  <div class="ml-4 mr-4">
    <div class="font-medium">Registration success!</div>
    <div class="mt-1 text-slate-500">
      Anda akan di redirect beberapa saat lagi!
    </div>
  </div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div id="failed-notification-content"
  class="py-5 pl-5 pr-14 bg-white border border-slate-200/60 rounded-lg shadow-xl dark:bg-darkmode-600 dark:text-slate-300 dark:border-darkmode-600 hidden flex">
  <i data-tw-merge="" data-lucide="x-circle" class="stroke-[1] w-5 h-5 text-danger"></i>
  <div class="ml-4 mr-4">
    <div class="font-medium">Registration failed!</div>
    <div class="mt-1 text-slate-500">
      Silahkan Cek Kembali Form Anda.
    </div>
  </div>
</div>
<!-- END: Failed Notification Content -->
