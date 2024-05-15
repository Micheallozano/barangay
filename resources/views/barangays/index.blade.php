@extends('layouts.app')
@section('title','Barangays | B.D.P.I.S')

@section('content')
    <!-- Page Header -->
    <section class="content-header">
        <h1 class="page-title">Zones</h1>
    </section>
    
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href={!! route('home') !!}> Home </a></li>
        <li class="breadcrumb-item active">Zones</li>
    </ul>
    <!-- /Page Header -->
    
    <!-- Section -->
    <section class="content">
        <!-- Dashboard -->
        <div class="card card-primary card-outline card-outline-tabs">
            <!-- card-header -->
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    @include('barangays.nav_tab')
                </ul>
            </div>
            <!-- /.card-header -->

            <!-- card-body -->
            <div class="card-body" style="background-image:linear-gradient(rgb(214, 250, 255), #fffdde);">
                <div class="row">
                    <!-- Brgy Card -->
                    @foreach ($bgry as $item)
                    <div class="col-md-3">
                        <br>
                    <button class="btn1" style="width: 290px; background: linear-gradient(45deg, #5534ce, #80fbe9);">
                                <div class="inner" style="text-align:right">
                                    <h3>{{\DB::table('residents')->where('barangay_id', $item->id)->count()}}</h3>
                                    <p>{{$item->barangay}}</p>
                                    <h5>Population</h5>
                                </div>
                                    <span class="icon">
                                        <i class="la la-users" style="font-size: 130px; position: absolute; left: 20px; top: 1px"></i>
                                    </span>
                                    
                                <a href="/Residents/{{$item->barangay}}" class="btn1" style=" border-radius: 30px; color:rgb(241, 241, 241); font-size: 20px; background: linear-gradient(45deg,  #5534ce, #80fbe9);">
                                    More info <i class="fa fa-arrow-right"></i>
                                </a>
                          
                        </button>
                    </div>
                    @endforeach
                    <!-- Close Barangay Card -->
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.Dashboard -->
    </section>
    <!-- ./section -->


    
@endsection

