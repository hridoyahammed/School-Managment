<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{URL::to('/contect')}}">
            <i class="fa fa-home" style="font-size:24px"></i>
            <span class="nav-link-text"><b>Dashboard</b></span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-user-plus"></i>
            <span class="nav-link-text">Students</span>
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
            <i class="fa fa-pencil"></i> 
            <span class="nav-link-text">Subject</span>
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
            <i class="fa fa-mortar-board"></i>
            <span class="nav-link-text">Admission</span>
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
            <i class="fa fa-user"></i>
            <span class="nav-link-text">Teacher</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents4">
            <li>
              <a href="{{URL::to('/teacher/create')}}">Form</a>
            </li>
            <li>
              <a href="{{URL::to('/teacher')}}" >Teacher List</a>
            </li>
          </ul>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
            <i class="fa fa-get-pocket"></i>
            <span class="nav-link-text">Mark</span>
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
            <i class="fa fa-group"></i>
            <span class="nav-link-text">Attendenc</span>
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
            <i class="fa fa-group"></i>
            <span class="nav-link-text">Exam</span>
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