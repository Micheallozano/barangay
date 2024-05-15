@extends('layouts.app')
@section('title','Household List | B.D.P.I.S.')

@section('content')

    <section class="content-header">
        <h1 class="page-title">Household Profile</h1>
    </section>

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href={!! route('home') !!}> Home </a></li>
        <li class="breadcrumb-item active">Household</li>
    </ul>

    <section class="content">        
        <div class="card">
            <div class="card-header" style="background-color:#fffddc;">
                <div class="pull-left">
                    @php
                        $count = DB::table('households')->count();
                        if($count != 0)
                        {
                            $last = DB::table('households')->get()->last();
                        }
                    @endphp

                   
                <div class="pull-right">
                    @if(Auth()->user()->usertype == 'admin')
                      
                                <a class="btn btn-info btn-s" data-toggle="modal" data-target="#create"><i class='fa fa-plus'></i> Add Household </a>
                            @endif
                       
                </div>
                </div>
                
            </div> 
            
          
            <div class="card-body" >
                    <!-- /.card -->
                    <div class="table-responsive">
                <table class="table table-striped table-hover dt-responsive display nowrap table-bordered table-mini datatable" cellspacing="0" id="households-datatable">
                    <thead>
                        <tr>
                            <th>House No.</th>
                            <th>Respondent</th>
                            <th>Enumerator</th>
                            <th>Address</th>
                            <th>Inhabitants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($post as $posts)
                        <tr>
                            <!-- No Col -->
                            <td>{{$posts->id}}</td>
                            <td>{{$posts->firstName}} {{$posts->middleName}} {{$posts->lastName}}</td>
                            <td>{{$posts->NameE}}</td>
                            <td> {{$posts->street}} {{$posts->brgy}} <br> {{$posts->city}}</td>
                            <td style="color: #2752ff">@foreach($posts->Inhabitants as $inhabitants){{$inhabitants->Resident->firstname}} {{$inhabitants->Resident->middlename}} {{$inhabitants->Resident->lastname}}<br>@endforeach</td>
                    
                            <!-- Action Col -->
                            <td>
                                <div class="Btn-container">
                                    <a href="{{url('/household/show/'.$posts->id) }}" class="Btn btn-success Btn btn-show">
                                        <i class="fa fa-eye"></i>
                                        <span class="text">Show</span>
                                    </a>
                                    
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
        @include('households.create')
    </section>

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