
<!-- <div class="col-md-3"> -->
    <!-- <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/grades') }}">
                        Grades
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/subjects') }}">
                        Subjects
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/students') }}">
                        Students
                    </a>
                </li>
            </ul>
        </div>
    </div> -->
    <!-- <div class="row"> -->
        <div class="col-md-3 ">
            <div class="profile-card">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="profile-photo">
            	<h5><a href="#" class="text-white">{{Auth::user()->name}}</a></h5>
            	<a href="#" class="text-white"><i class="fa fa-user"></i> {{Auth::user()->email}}</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="fa fa-list-alt icon1"></i><div><a href="{{ url('/dashboard') }}">Dashboard</a></div></li>
              <li><i class="fa fa-sticky-note icon2"></i><div><a href="{{ url('/admin/grades') }}">Grades</a></div></li>
              <li><i class="fa fa-dropbox icon3"></i><div><a href="{{ url('/admin/subjects') }}">Subjects</a></div></li>
              <li><i class="fa fa-users icon4"></i><div><a href="{{ url('/admin/students') }}">Students</a></div></li>
              <li><i class="fa fa-picture-o icon5"></i><div><a href="{{ url('/admin/advertisment') }}">Advertisments</a></div></li>
              <li><i class="fa fa-bell icon5"></i><div><a href="{{ url('/admin/notifications') }}">Push Notifications</a></div></li>
              <!-- <li><i class="fa fa-video-camera icon6"></i><div><a href="#">Videos</a></div></li> -->
            </ul><!--news-feed links ends-->
            <!-- <div id="chat-block">
              <div class="title">Chat online</div>
              <ul class="online-users list-inline">
                <li><a href="#" title="Linda Lohan"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Sophia Lee"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="John Doe"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Alexis Clark"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="James Carter"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Robert Cook"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Richard Bell"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Anna Young"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                <li><a href="#" title="Julia Cox"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
              </ul>
            </div>chat block ends -->
        </div>
	<!-- </div> -->


