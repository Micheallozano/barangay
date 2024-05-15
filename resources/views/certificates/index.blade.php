@extends('layouts.app')
@section('title','Certificate List | B.D.P.I.S.')

@section('content')

    <section class="content-header">
        <h1 class="page-title">Certificate</h1>
    </section>

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href={!! route('home') !!}> Home </a></li>
        <li class="breadcrumb-item active">Certificate</li>
    </ul>

    <section class="content">        
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    @php
                        $count = DB::table('certificates')->count();
                        if($count != 0)
                        {
                            $last = DB::table('certificates')->get()->last();
                        }
                    @endphp

                <div class="pull-right">
                    @if(Auth()->user()->usertype == 'admin')
                                <a ><i class='fa fa-plus'></i> </a>
                     @endif
                </div>
            </div>            
        </div>
        
                    </div>
                    <!-- /.card -->
                    <div class="table-responsive">
                <table class="table table-striped table-hover dt-responsive display nowrap table-bordered table-mini datatable" cellspacing="0" id="certificates-datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Zone</th>
                            <th>Gender</th>
                            <th>Purpose</th>
                            <th>Type</th>
                            <th>Date Requested</th>
                            <th>Action</th>
                                    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>

                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->resident->firstname }} {{ $item->resident->middlename }} {{ $item->resident->lastname }} 
                            </td>
                            <td>
                                {{ $item->resident->barangay->barangay }}
                            </td>
                            <td>
                                {{ $item->resident->gender }}
                            </td>
                            <td>
                                {{ $item->purpose }}
                            </td>
                            <td>
                                {{ $item->type }}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            
                            <td>
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="btn btn-warning btn-s" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-file"> Certificate Type</i></a>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <a href="{{ route('certificates.permit', $item->id) }}" style="display: block; border-color: #000000; " target="_blank" class="btn btn-warning btn-s" title="Permit" ><i class='fa fa-edit'></i>Business Permit</a>
                                        <a href="{{ route('certificates.indigency', $item->id) }}" style="display: block; border-color: #000000; " target="_blank" class="btn btn-warning btn-s" title="Indigency" ><i class='fa fa-edit'></i>Business Indigency</a>
                                        <a href="{{ route('certificates.sample', $item->id) }}" style="display: block; border-color: #000000; " target="_blank" class="btn btn-warning btn-s" title="Clearance" ><i class='fa fa-edit'></i>Barangay Clearance</a>
                                        
                                    </div>
                                    <a title="Delete" class="btn btn-danger btn-s admindeleteCer"  data-cer_id="{{$item->id}}" data-toggle="modal" data-target="#admindeleteCer"><i class='fa fa-trash'></i></a>
                                </div>
                                                  
                            </td> 
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                </div>
            </div>
        </div>
        @include('certificates.create')
    </section>

    <!-- Delete Modal -->
    <div class="modal fade" id="admindeleteCer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Delete Resident Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form action="{{ route('certificates.destroy', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE') 
                    <h1 class="text-danger text-center">
                        <i class="fa fa-exclamation-triangle"></i>
                    </h1>
                        <p class="text-center">
                            Are you sure you want to delete?
                        </p>
                        <input type="text" name="cer_id" id="cer_id" hidden>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Exit</button>
                    <button type="submit" class="btn btn-warning">Yes, Delete</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of Delete Modal -->
@endsection

@section('scripts')
<script type="text/javascript">
  
    $("button#submit").prop("disabled", true);

    let isOk = true;

    $("input, select").change(function ()
    {
        $("input, select").each(()=>
        {
            console.log(this); 
            if($(this).val() === "") 
            {
                isOk = false;
            } 
        });
        
        if(isOk) $("button#submit").prop("disabled", false);
    });

    $("input#findTo").prop("readonly", true);

    let isOkay = true;

    $("input#findFrm").change(function ()
    {
        $("input#findFrm").each(()=>
        {
            console.log(this); 
            if($(this).val() === "") 
            {
                isOkay = false;
            } 
        });
        
        if(isOkay) $("input#findTo").prop("readonly", false);
    });

</script>
@endsection