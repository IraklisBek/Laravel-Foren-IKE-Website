@if(\Request::session()->has('logInError'))
    <script type="text/javascript">
        login();
    </script>
@endif
@if(\Request::session()->has('registerError'))
    <script type="text/javascript">
        signup();
    </script>
@endif
<div class="row">
    <div class="col-lg-12">
        @if(\Request::session()->has('success'))
            <div role="alert">
                <script type="text/javascript">
                    toastr.options = {
                        positionClass: "toast-top-center"
                    };
                    var notify = toastr.success("{{ \Request::session()->get('success') }}");
                    var $notifyContainer = jQuery(notify).closest('.toast-top-center');

                </script>
            </div>

        @endif
        @if(\Request::session()->has('fail'))

            <div role="alert">
                <script type="text/javascript">
                    toastr.options = {
                        positionClass: "toast-top-center"
                    };
                    var notify = toastr.error("{{ \Request::session()->get('fail') }}");
                    var $notifyContainer = jQuery(notify).closest('.toast-top-center');

                </script>
            </div>

        @endif
        @if (count($errors) > 0)
            <div style="margin-left:20%; width:76%">
                <div class="alert alert-danger" role="alert">
                    <strong>
                        Errors:
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </strong>
                </div>
            </div>

        @endif
    </div>
</div>
