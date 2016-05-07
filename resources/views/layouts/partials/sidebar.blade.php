@if(Auth::check())
<div class="col-sm-3 col-md-2 sidebar">
    @if(Auth::user()->role === "0")
    <div class="pull-left" style="padding-bottom: 10px;">
        <img src="{{asset('/images/Img/user8-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px;">
        {{Auth::user()->name}} <br>
        <small><i class="fa fa-circle text-success"></i> Admin</small>
    </div>
    @endif

    @if(Auth::user()->role==="1")
    <div class="pull-left" style="padding-bottom: 10px;">    
        <img src="{{asset('/images/Img/user7-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Front Desk</small></div>
    @endif

    @if(Auth::user()->role==="2")
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user5-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
     </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Nurse</small></div>
    @endif

    @if(Auth::user()->role==="3" ) 
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Doctor</small></div>
    @endif

    @if(Auth::user()->role==="4" ) 
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Lab</small></div>
    @endif
    @if(Auth::user()->role==="5" ) 
    <div class="pull-left" style="padding-bottom: 10px;"> 
        <img src="{{asset('/images/Img/user6-128x128.jpg')}}" class="img-circle" alt="User Image" height="50" weight="50" />
    </div>
    <div style="color: #fff; position: absolute; left: 65px; padding: 5px 5px 5px 20px; ">{{Auth::user()->name}}<br><small>Pharmacy</small></div>
    @endif

    <ul class="nav nav-sidebar">
        <li>
            <div class="nav input-container">
                        <input type="search" id="search-input" name="search-input" placeholder="Search for Patient" onkeydown="down()" onkeyup="up()"/>
                        <div class="icon"><i class="fa fa-search"></i></div>
            </div>
                    
            <div id="search-result"></div>
                    
        </li>
      @cannot('create-user')
        <li><a class="nav" href="{{route('patients.index')}}"><i class="fa fa-users"></i> Patients</a></li>
        @endcan

        
        @can('create-patient')
        <li><a href="{{ route('patients.create') }}"><i class="fa fa-user-plus"></i> New Patient</a></li>
        @endcan

       @can('create-user')
        <li><a class="nav" href="{{route('patients.index')}}"><i class="fa fa-users"></i> Users</a></li>
        <li><a href="{{ route('user.index') }}"><i class="fa fa-user-plus"></i> Register</a></li>
        @endcan
       
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i> Stats</a></li>
        <li><a href="#"><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
    </ul>
</div>
@endif