@extends('layouts.app')
@section('title','User List | B.D.P.I.S.')

@section('content')
    <section class="content-header">
        <h1 class="page-title">Users</h1>
        @include('users.create')
    </section>

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href={!! route('home') !!}> Home </a></li>
        <li class="breadcrumb-item active">Users</li>
    </ul>
    
    <section class="content">        
        <div class="card">
            <div class="card-header" style="background-color:#fffddc;">
                <div class="pull-right">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="pull-right">
                                @if(Auth::user()->usertype == 'admin')
                                    <a class="btn btn-info btn-s" data-toggle="modal" data-target="#create"><i class="fa fa-plus"></i> Add New User</a>
                                @endif
                                    <a class="btn btn-warning btn-s" href="{{ route('users.export') }}"><i class="fa fa-download"></i> Export User Data</a>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
            <div class="card-body" style="background-image:linear-gradient(rgb(214, 250, 255), #fffdde);">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-mini datatable" id="user-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                            @if(Auth::user()->username == 'admin')
                                                <th>Account</th>
                                            @else
                                                <th>Username</th>
                                            @endif
                                        <th>Usertype</th>
                                        <th>Status Account</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($data as $item)
                                    <tr>
                                        <td scope="row">
                                            <span class="badge">{{ $i }} </span>
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <b>Username:</b> {{$item->username}}
                                            <br/>
                                            <b>Reset Password:</b> {{$item->username}}
                                        </td>
                                        <td class="text-center">
                                            @php
                                                echo strtoupper($item->usertype);
                                            @endphp
                                        </td>
                                        <td class="text-center">
                                            
                                                @if($item->status == 1)
                                                    <i class="fa fa-dot-circle-o text-success"> Active Account</i>
                                                @elseif($item->status == 0)
                                                    <i class="fa fa-dot-circle-o text-danger"> Blocked</i>
                                                @elseif($item->status == 2)
                                                    <i class="fa fa-dot-circle-o text-warning"> Archived</i>
                                                @endif
                                            
                                        </td>
                                        

                                        <td class="text-center">
                                            @if($item->isOnline())
                                            <span class="text-success">Online</span>
                                            @else
                                            <span class="text-danger">Offline</span>
                                             @endif
                                                
                                        </td>
                                        <td>
                            
                                            @if(Auth::user()->usertype == 'admin')
                                                @if(auth()->user()->usertype == 'admin' && $item->status == 1)
                                                    <a href="{{route ('reset.password', $item->id) }}"class="btn btn-warning btn-s" title="Reset Password" >
                                                        <i class="fa fa-lock"></i>
                                                    </a>
                                                @endif
                                                @if($item->id != auth()->user()->id)
                                                    @if($item->status == 0)
                                                        <a href="{{route ('block.unblock', $item->id) }}" class="btn btn-success btn-s" title="Unblock" ><i class="fa fa-ban"></i></a>
                                                    @elseif($item->status == 1)
                                                        <a href="{{route ('block.unblock', $item->id) }}" class="btn btn-danger btn-s" title="Block" ><i class="fa fa-ban"></i></a>
                                                        <button title="Archive" class="btn btn-danger btn-s archiveUser"  data-post_id={{$item->id}} data-toggle="modal" data-target="#archiveUser">
                                                            <i class="fa fa-archive"></i>
                                                        </button>
                                                    @elseif($item->status == 2)
                                                        <button title="Restore" class="btn btn-success btn-s restoreUser"  data-post_id={{$item->id}} data-toggle="modal" data-target="#restoreUser">
                                                            <i class="fa fa-archive"></i>
                                                        </button>
                                                    @endif
                                                @endif
                                            @endif
                                         
                                        </td>
                                    </tr>
                                    @php $i ++;  @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    
    <!-- Archive Modal -->
    <div class="modal fade" id="archiveUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Archive Account Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form action="{{ route('user.archive') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <h1 class="text-danger text-center">
                        <i class="fa fa-exclamation-triangle"></i>
                    </h1>
                        <p class="text-center">
                            Are you sure you want to archive this account?
                        </p>
                        <input type="text" name="post_id" id="post_id" hidden>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Exit</button>
                    <button type="submit" class="btn btn-warning">Yes, Archive</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of Archive Modal -->

    <!-- Restore Modal -->
    <div class="modal fade" id="restoreUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Restore Account Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form action="{{ route('user.restore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <h1 class="text-danger text-center">
                        <i class="fa fa-exclamation-triangle"></i>
                    </h1>
                        <p class="text-center">
                            Are you sure you want to restore this account?
                        </p>
                        <input type="text" name="post_id" id="post_id" hidden>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No, Exit</button>
                    <button type="submit" class="btn btn-success">Yes, Restore</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End of Restore Modal -->

@endsection