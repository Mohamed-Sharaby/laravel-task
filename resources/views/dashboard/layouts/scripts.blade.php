<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/detect.js')}}"></script>
<script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('admin/assets/js/waves.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>

<!-- KNOB JS -->
<!--[if IE]>
        <script type="text/javascript" src="{{asset('admin/assets/plugins/jquery-knob/excanvas.js')}}"></script>
        <![endif]-->
<script src="{{asset('admin/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('admin/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/raphael/raphael-min.js')}}"></script>

<!-- Dashboard init -->
{{--<script src="{{asset('admin/assets/pages/jquery.dashboard.js')}}"></script>--}}

<!-- App js -->
<script src="{{asset('admin/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.app.js')}}"></script>

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>

    $(document).on('click', ".delete", function (event) {
        let cur = $(this);
        let url = $(this).attr('data-url');
        let name = $(this).attr('data-name');

        swal({
            title: "Confirm Delete " + name + "",
            text: "Are you sure delete this record",
            icon: "warning",
            buttons: ["Cancel", "Ok"],
            dangerMode: true,

        }).then(function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: url,
                    type: "delete",
                    success: function (data) {
                        swal("Deleted Successfully", "Deleted Successfully", 'success', {buttons: "Ok"});
                        cur.parents('tr').fadeOut(700);
                        cur.parents('tr').remove(700);
                    },
                    error: function (error) {
                        swal("Can't Delete", "Error", 'error', {buttons: "Ok"});
                        console.log('there is an error ', error)
                    }
                });
            } else {
                swal("Delete Canceled", "Delete Canceled", 'error', {buttons: "Ok"});
            }
        });
    });
</script>



