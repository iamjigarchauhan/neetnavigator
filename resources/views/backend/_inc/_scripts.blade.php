{{-- <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with <i class="ti-heart text-danger ml-1"></i></span>
  </div>
</footer> --}}

<script src="{{ asset('assets/_back/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{ asset('assets/_back/js/off-canvas.js')}}"></script>
<script src="{{ asset('assets/_back/js/hoverable-collapse.js')}}"></script>
<script src="{{ asset('assets/_back/js/template.js')}}"></script>
<script src="{{ asset('assets/_back/js/settings.js')}}"></script>
<script src="{{ asset('assets/_back/js/todolist.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- <script src="{{ asset('assets/js/config.js') }}"></script> --}}
<script> @if (session('success')) toastr.success('{{ session("success") }}', 'Success') @endif @if (session('error')) toastr.error('{{ session("error") }}', 'Error') @endif </script>