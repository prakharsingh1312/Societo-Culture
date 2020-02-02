 <?php
echo'<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active" id="users_dashboard" >
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item" id="user_profile">
            <a class="nav-link" href="#profile" >
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          ';
if($_SESSION['user_role']<3){
	echo'<li class="nav-item " id="header_attendance">
            <a class="nav-link" href="#attendance">
              <i class="material-icons">content_paste</i>
              <p>Attendance</p>
            </a>
          </li>
          <li class="nav-item " id="header_event">
            <a class="nav-link" href="#event">
              <i class="material-icons">library_books</i>
              <p>Add Event</p>
            </a>
          </li>
          <li class="nav-item" id="header_members" >
            <a class="nav-link" href="#members">
              <i class="material-icons">people_outline</i>
              <p>Members</p>
            </a>
          </li>
          <li class="nav-item "id="header_dept">
            <a class="nav-link" href="#dept">
              <i class="material-icons">account_tree</i>
              <p>Departments</p>
            </a>
          </li>
			<li class="nav-item "id="header_task">
            <a class="nav-link" href="#task">
              <i class="material-icons">playlist_add_check</i>
              <p>Tasks</p>
            </a>
          </li>
		  <li class="nav-item "id="header_query">
            <a class="nav-link" href="#query">
              <i class="material-icons">priority_high</i>
              <p>Queries</p>
            </a>
          </li>';
}
         echo'<li class="nav-item "id="header_logout">
            <a class="nav-link" href="#logout">
              <i class="material-icons">directions_run</i>
              <p>Logout</p>
            </a>
          </li>
		 <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>';?>