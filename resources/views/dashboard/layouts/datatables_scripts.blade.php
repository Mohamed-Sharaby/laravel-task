@push('scripts')

    <script src="{{asset('admin/DataTables/datatables.js')}}"></script>

    <script src="{{asset('vendor/datatables/buttons.server-side.js')}}"></script>
    {{$dataTable->scripts()}}

@endpush
