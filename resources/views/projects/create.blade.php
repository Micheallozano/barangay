
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background:#073a81;color:rgb(255, 255, 255)">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:#ffffff">&times;</span>
            </button>
          <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif"></h5>
        </div>
        
        <div class="modal-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; 
                    text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:rgb(0, 34, 202)"> New Project </h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('projects.store') }}">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-4">
                                <label>Project Name <span style="color:Red;">*</span></label>
                                <input id="projectname" type="text" class="form-control"  
                                name="projectname" value="{{ old('projectname') }}" required placeholder="Project Name">

                                @if ($errors->has('projectname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('projectname') }}</strong>
                                    </span>
                                @endif
                            </div>
                               
                            <div class="col-md-4">
                                <label>Date Start<span style="color:Red;">*</span></label>
                                <input id="start_date" type="date" class="form-control" name="start_date" value="{{ old('date') }}" 
                                max="@php $today= date('Y-m-d');echo $today; @endphp" required placeholder="Start Date">

                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label>Start Amount<span style="color:Red;">*</span></label>
                                    <input id="start_amount" type="text" class="form-control" 
                                    name="start_amount" value="{{ old('start_amount') }}" required placeholder="Amount">
            
                                    @if ($errors->has('start_amount'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('start_amount') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="col-md-4">
                                <label>Date End<span style="color:Red;">*</span></label>
                                <input id="end_date" type="date" class="form-control" name="end_date" value="{{ old('date') }}"
                                min="@php $today= date('Y-m-d');echo $today; @endphp" required placeholder="End Date">

                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label>End Amount<span style="color:Red;">*</span></label>
                                    <input id="end_amount" type="text" class="form-control" 
                                    name="end_amount" value="{{ old('end_amount') }}" required placeholder="Amount">
            
                                    @if ($errors->has('end_amount'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('end_amount') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="col-md-4">
                                <label>Zone<span style="color:Red;">*</span></label>
                            @if(Auth::user()->usertype == 'admin'|| auth()->user()->usertype == 'barangay')
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
                            @else
                                <div class="col-md-6">
                                    <input id="barangay" placeholder="{{Auth()->user()->barangay}}" value="{{Auth()->user()->barangay}}" type="text" class="form-control"  onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 45))' 
                                    name="barangay" value="{{ old('barangay') }}" readonly>

                                    @if ($errors->has('barangay'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('barangay') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label>Description<span style="color:Red;"></span></label>
                            <textarea class="form-control" rows="5" maxlength="150" name="descript" placeholder="Project Description" id="comment"></textarea>
                            <div class="pull-right">
                   
                    </div>
                <br>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="sumbit" class="btn btn-primary">Save Project</button>
                    </div>
            </form>
    
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function setMinEndDate() {
        var startDateInput = document.getElementById('start_date');
        var endDateInput = document.getElementById('end_date');
        
        // Set the min attribute of the end date input field to the selected start date
        endDateInput.min = startDateInput.value;
    }
    
</script>