@extends('main')

@section('content')


    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
                        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

                        <!-- Table with stripped rows -->
{{--                        <table class="table datatable" id="detailsTable">--}}
                            <table id="detailsTable" class="table table-bordered" style="width:100%">
                            <thead>
                            <tr>
{{--                                <th scope="col">ID</th>--}}
                                <th >INT_REF_NO</th>
                                <th >TRAN_DT</th>
                                <th >COMP_NM</th>
                                <th >NO_SHARES</th>
                                <th >RATE</th>
                                <th >TR_CD</th>

                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection

@section('js')
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"
      ></script>
    <script
        src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"
    ></script>
<script>

    $(document).ready(function () {

        dataTable = $('#detailsTable').DataTable({
            rowReorder: {
                selector: 'td:nth-child(0)'
            },
            responsive: true,
            processing: true,
            serverSide: true,
            Filter: true,
            stateSave: true,
            type: "POST",
            "ajax": {
                "url": "{!! route('datatable.getData') !!}",
                "type": "POST",
                data: function (d) {
                    d._token = "{{csrf_token()}}";
                    // d.empName = $('#empName').val();


                },
            },
            columns: [
                // {data: 'id', name: 'applications.id'},
                // {data: 'id', name: 'id'},
                {data: 'INT_REF_NO', name: 'INT_REF_NO'},
                {data: 'TRAN_DT', name: 'TRAN_DT'},
                {data: 'COMP_NM', name: 'COMP_NM'},
                {data: 'NO_SHARES', name: 'NO_SHARES'},
                {data: 'RATE', name: 'RATE'},
                {data: 'TR_CD', name: 'TR_CD'},


                // {
                //     "data": function (data) {
                //
                //         return '<button class="btn btn-danger btn-sm" onclick="deleteData(this)" data-panel-id="' + data.id + '"><i class="fa fa-trash"></i>  </button> ' +
                //             '<button class="btn btn-info btn-sm" onclick="editData(this)" data-panel-id="' + data.id + '"><i class="fa fa-edit"></i>  </button>';
                //         //  + '<button class="btn btn-warning btn-sm" onclick="showData(this)" data-panel-id="' + data.id + '"> <i class="fas fa-eye"></i></button>';
                //
                //
                //     },
                //     "orderable": false, "searchable": false, "name": "selected_rows"
                // },


            ]
        });

    });
</script>

@endsection
