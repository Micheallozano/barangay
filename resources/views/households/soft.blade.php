@extends('layout.app')

@section('style')
<link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
@stop

@section('content')
<script src="{{  asset('js/jquery.min.js')  }}"></script>
<script src="{{  asset('js/toastr.js')  }}"></script>
@if(session('success'))
<script type="text/javascript">
    toastr.success(' <?php echo session('success'); ?>', 'Success!')
</script>
@endif
@if(session('error'))
<script type="text/javascript">
    toastr.error(' <?php echo session('error'); ?>', "There's something wrong!")
</script>
@endif
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Household Management</h3>
      <div class="box-tools pull-right">
        <a href="{{ url('/Household/Create') }}" class="btn btn-xs btn-success">New Household</a>
      </div>
    </div>
    <div class="box-body">
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Household no.</th>
                    <th>Address</th>
                    <th>Inhabitants</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($post as $posts)
                <tr>
                    <td>{{$posts->id}}</td>
                    <td>{{$posts->street}} {{$posts->brgy}} {{$posts->city}}</td>
                    <td>@foreach($posts->Inhabitants as $inhabitants){{$inhabitants->Resident->firstName}} {{$inhabitants->Resident->middleName}} {{$inhabitants->Resident->lastName}}<br>@endforeach</td>
                    <td>
                        <a href="{{ url('/Household/Reactivate/id='.$posts->id) }}"  onclick="return reacForm()"  type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Reactivate record">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                        </a>
                        <a href="{{ url('/Household/Remove/id='.$posts->id) }}"  onclick="return deleteForm()"  type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete record">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-group pull-right">
            <label class="checkbox-inline"><input type="checkbox"  onclick="document.location='{{ url('/Household') }}';" id="showDeactivated"> Show deactivated records</label>
         </div>
    </div>
</div>
@endsection

@section('script')
<script>
    
    function reacForm(){
        var x = confirm("Are you sure you want to reactivate this record?");
        if (x)
          return true;
        else
          return false;
     }

     function deleteForm(){
        var x = confirm("Are you sure you want to delete this record?");
        if (x)
          return true;
        else
          return false;
     }

</script>
@stop