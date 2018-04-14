<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{URL::to('/contect')}}">
            <i class="fa fa-home" style="font-size:24px; color: white; text-shadow: 2px 2px 4px #000000;"></i>
            <span class="nav-link-text" style="color:white; text-shadow: 2px 2px 4px #000000;"><b>Dashboard</b></span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-user-plus" style="color: white; text-shadow: 2px 2px 4px #000000;"></i> 
            <span class="nav-link-text" style="color: white; text-shadow: 2px 2px 4px #000000;"> Students</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="{{URL::to('/try/create')}}">Add Student</a>
            </li>
            <li>
              <a href="{{URL::to('/try')}}" >View Student</a>
            </li>
          </ul>
        </li>
       
      
          
             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
            <i class="fa fa-book"  style="color: white; text-shadow: 2px 2px 4px #000000;"></i> 
            <span class="nav-link-text" style="color: white; text-shadow: 2px 2px 4px #000000;"> Subject</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents2">
            <li>
              <a href="{{URL::to('/subject/create')}}">Add Subject</a>
            </li>
            <li>
              <a href="{{URL::to('/subject')}}" >View Subject</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
            <i class="fa fa-mortar-board" style="color: white; text-shadow: 2px 2px 4px #000000;"></i>
            <span class="nav-link-text" style="color: white; text-shadow: 2px 2px 4px #000000;">Admission</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents3">
            <li>
              <a href="{{URL::to('/admission/create')}}">Form</a>
            </li>
            <li>
              <a href="{{URL::to('/admission')}}" >View List</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
            <i class="fa fa-user" style="color: white; text-shadow: 2px 2px 4px #000000;"></i>
            <span class="nav-link-text" style="color: white; text-shadow: 2px 2px 4px #000000;">Teacher</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents4">
            <li>
              <a href="{{URL::to('/teacher/create')}}">Add Teacher</a>
            </li>
            <li>
              <a href="{{URL::to('/teacher')}}" >Teacher List</a>
            </li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
            <i class="fa fa-get-pocket" style="color: white; text-shadow: 2px 2px 4px #000000;"></i>
            <span class="nav-link-text" style="color: white; text-shadow: 2px 2px 4px #000000;">Mark</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents5">
            <li>
              <a href="{{URL::to('/mark/create')}}">Add Mark</a>
            </li>
            <li>
              <a href="{{URL::to('/mark')}}" >Mark List</a>
            </li>
          </ul>
        </li>

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents6" data-parent="#exampleAccordion">
            <i class="fa fa-group" style="color: white; text-shadow: 2px 2px 4px #000000;"></i>
            <span class="nav-link-text" style="color: white; text-shadow: 2px 2px 4px #000000;">Attendenc</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents6">
            <li>
              <a href="{{URL::to('/attendenc/create')}}">Add Attendenc</a>
            </li>
            <li>
              <a href="{{URL::to('/attendenc')}}" >Show List</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents7" data-parent="#exampleAccordion">
            <i class="fa fa-cube" style="color: white; text-shadow: 2px 2px 4px #000000;"></i>
            <span class="nav-link-text" style="color: white; text-shadow: 2px 2px 4px #000000;">Exam</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents7">
            <li>
              <a href="{{URL::to('/exam/create')}}">Add Exam</a>
            </li>
            <li>
              <a href="{{URL::to('/exam')}}" >Exam List</a>
            </li>
          </ul>
        </li>




          </ul>
        </li>
       
      </ul>