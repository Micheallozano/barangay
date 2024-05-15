@extends('layouts.app')
@section('title','Project List | B.D.P.I.S.')

@section('content')

    <section class="content-header">
        <h1 class="page-title">Projects</h1>
    </section>

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href={!! route('home') !!}> Home </a></li>
        <li class="breadcrumb-item active">Project</li>
    </ul>

    <section class="content">        
        <div class="card">
            <div class="card-header" style="background-color:#fffddc;">
                <div class="pull-left">
                    @php
                        $count = DB::table('projects')->count();
                        if($count != 0)
                        {
                            $last = DB::table('projects')->get()->last();
                        }
                    @endphp

                   
                <div class="pull-right">
                    @if(Auth()->user()->usertype == 'admin')
                      
                                <a class="btn btn-info btn-s" data-toggle="modal" data-target="#create"><i class='fa fa-plus'></i> Add Project </a>
                            @endif
                       
                </div>
                </div>
                
            </div> 
            
          
            <div class="card-body" style="background-image:linear-gradient(rgb(214, 250, 255), #fffdde);">
                    <!-- /.card -->
                    <div class="table-responsive">
                <table class="table table-striped table-hover dt-responsive display nowrap table-bordered table-mini datatable" cellspacing="0" id="projects-datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Project Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Zone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proj as $item)
                        <tr>
                            <!-- No Col -->
                            <td>
                                <span class="badge">{{ $item->projID }}</span>
                            </td>
                            <!-- No Col -->

        
        
                            <!-- projectname Col -->
                            <td>
                                {{ ucfirst($item->projectname) }}
                            </td>
                            <!-- projectname Col -->
        

                            <!-- start_date Col -->
                            <td>
                                <b>Start Date:</b> {{\Carbon\Carbon::parse($item->start_date)->format('m/j/Y')}}
                                            <br/>
                                <b>Start Amount:</b> {{$item->start_amount}}
                            </td>
                            <!-- start_date Col -->
        
                            <!-- end_date Col -->
                            <td>
                                
                                <b>End Date:</b> {{\Carbon\Carbon::parse($item->end_date)->format('m/j/Y')}}
                                <br/>
                                <b>End Amount:</b> {{$item->end_amount}}
                            </td>
                            <!-- end_date Col -->

                           
        
                            <!-- Barangay Col -->
                            <td>
                                {{ $item->zone }}
                            </td>
                            <!-- Barangay Col -->

                            <!-- status Col -->
                            <td>
                                @php
                                    $currentDate = now();
                                    $startDate = \Carbon\Carbon::parse($item->start_date);
                                    $endDate = \Carbon\Carbon::parse($item->end_date);
                                    $status = 'status';
            
                                    if ($currentDate < $startDate) {
                                        $status = 'Pending';
                                        $color = 'orange'; 
                                    } elseif ($currentDate > $endDate) {
                                        $status = 'Done';
                                        $color = 'green';
                                    } else {
                                        $status = 'Ongoing';
                                        $color = 'blue';
                                    }
                                @endphp
                                <span style="color: {{ $color }}">{{ $status }}</span>
                            </td>
                            <!-- status Col -->
        
                            <!-- Action Col -->
                            <td>
                                <div class="Btn-container">
                                    <a href="{{route ('projects.show', $item->projID) }}" class="Btn btn-success Btn btn-show">
                                        <i class="fa fa-eye"></i>
                                        <span class="text">Show</span>
                                    </a>
                                    <a href="{{route ('projects.edit', $item->projID) }}" class="Btn btn-warning Btn btn-edit">
                                        <i class="fa fa-edit"></i>
                                        <span class="text">Edit</span>
                                    </a>
                                    <button class="Btn btn-primary Btn-change-zone" data-proj_id="{{$item->projID}}" data-toggle="modal" data-target="#changeZone">
                                        <i class="fa la-pen-square"></i>
                                        <span class="text">Change Zone</span>
                                    </button>
                                    <button class="Btn btn-danger Btn-delete-proj" data-proj_id="{{$item->projID}}" data-toggle="modal" data-target="#admindeleteProj">
                                        <i class="fa fa-trash"></i>
                                        <span class="text">Delete</span>
                                    </button>
                                </div>                                                            
                            </td>
                            <!-- End Action Col -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        @include('projects.create')
    </section>

    <!-- Transfer Brgy Class -->
    <div class="modal fade" id="changeZone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Change Zone Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form action="{{ route('change.zone') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <h1 class="text-danger text-center">
                        <i class="fa fa-exclamation-triangle"></i>
                    </h1>
                        <p class="text-center">
                            Are you sure you want to change?
                        </p>
                        <input type="text" name="proj_id" id="proj_id" hidden>
                        <select  id="barangay" name="barangay" class="form-control">
                            <option value="" disabled selected>Select Zones</option>
                            @php
                                $get = DB::table('barangays')->get();
                                foreach($get as $value)
                                {
                                    echo "<option value=".$value->id.">$value->barangay</option>";
                                }
                            @endphp
                        </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Exit</button>
                    <button type="submit" class="btn btn-warning">Yes, Change</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End Transfer Brgy Class -->

    <!-- Delete Modal -->
    <div class="modal fade" id="admindeleteProj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Delete Resident Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form action="{{ route('projects.destroy', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE') 
                    <h1 class="text-danger text-center">
                        <i class="fa fa-exclamation-triangle"></i>
                    </h1>
                        <p class="text-center">
                            Are you sure you want to delete?
                        </p>
                        <input type="text" name="proj_id" id="proj_id" hidden>

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