@extends('layouts.app')
@section('title','Resident Details | B.D.P.I.S.')

@section('content')
    <section class="content-header">
        <h1 class="page-title">Project Information</h1>
    </section>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href={!! route('home') !!}> Home </a></li>
        <li class="breadcrumb-item"><a href={!! route('projects.index') !!}> Residents </a></li>
        <li class="breadcrumb-item active">Project Information</li>
    </ul>
    
    <div class="content">
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-sm-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#profile" data-toggle="tab" aria-expanded="true">View Project</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="profile">

                            <div class="row">
                                <div class="col-md-12" align="right">
                                    <a href="{{route ('projects.edit', $proj->id) }}" class="btn btn-warning btn-sm" title="Edit" ><i class='bx bx-edit' ></i> Edit</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong>Project Information</strong>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <small>Project name</small>
                                                        <input type="text" name="projectname" class="form-control" value="{{$proj->projectname}}" disabled>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <small>Date Start</small>
                                                        <input type="date" id="start_date" name="start_date"  class="form-control" max="@php echo date('Y-m-d'); @endphp" value="{{$proj->start_date}}" disabled>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <small>Start Amount</small>
                                                        <input type="text" name="start_amount" class="form-control" value="{{$proj->start_amount}}" disabled>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <small>Date End</small>
                                                        <input type="date" id="end_date" name="end_date"  class="form-control" min="@php echo date('Y-m-d'); @endphp" value="{{$proj->end_date}}" disabled>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <small>End Amount</small>
                                                        <input type="text" name="end_amount" class="form-control" value="{{$proj->end_amount}}" disabled>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <small>Zone</small>
                                                        <input type="text" id="barangay" name="barangay"  class="form-control" value="{{$proj->zone}}" disabled>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <small>Description</small>
                                                        <textarea class="form-control" rows="5" maxlength="150" name="descript"  id="descript" value="{{$proj->descript}}" disabled>{{$proj->descript}}</textarea>
                                                        <div class="pull-right">
                                                    </div>
                                                 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection