<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/user-management/users/list/add.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<script src="{{ mix('js/app.js') }}"></script>
		<script>
			var flash = "{{ Session::has('sukses') }}";
        if(flash){
            var pesan = "{{ Session::get('sukses') }}"
            swal.fire("Sukses", pesan, "success");
        }
 
        var gagal = "{{ Session::has('gagal') }}";
        if(gagal){
            var pesan = "{{ Session::get('gagal') }}"
            swal.fire("Error", pesan, "error");
        }
        var info = "{{ Session::has('info') }}";
        if (info) {
          var pesan = "{{ Session::get('info') }}"
          swal.fire("Info", pesan, "info");
        }
		var info = "{{ Session::has('warning') }}";
        if (info) {
          var pesan = "{{ Session::get('warning') }}"
          swal.fire("Warning", pesan, "warning");
        }
		var info = "{{ Session::has('question') }}";
        if (info) {
          var pesan = "{{ Session::get('question') }}"
          swal.fire("Question", pesan, "question");
        }
		</script>
