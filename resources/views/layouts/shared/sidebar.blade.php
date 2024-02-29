<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div class="sidebar-menu" id="sidebar-menu">
			<ul>
				<li>
					<a href="dashboard"><span class="menu-side"><i class="fa-solid fa-house"></i></span>
						<span>Dashboard</span></a>
				</li>

				<li class="submenu">
					<a href="#"><span class="menu-side"><i class="fa-solid fa-user-group"></i></span>
						<span>User Management</span> <span class="menu-arrow"></span>
					</a>

					<ul style="display: none;">

						<li><a href="{{ asset('user-list') }}">Users</a></li>
						<li><a href="{{ asset('employee-list') }}">Employee</a></li>
						<li><a href="/positions">Position</a></li>
					</ul>
				</li>


				<li>
					<a href="#"><span class="menu-side"><i class="fas fa-map-marker"></i></span>
						<span>Map</span>
					</a>
				</li>

				<li class="submenu">
					<a href="#"><span class="menu-side"><i class="fas fa-fire-extinguisher"></i></span>
						<span>FEM System</span> <span class="menu-arrow"></span>
					</a>

					<ul style="display: none;">

						<li><a href="{{ asset('fire-extinguisher') }}">Fire Extinguisher</a></li>
						<li><a href="{{ asset('type') }}">Type</a></li>
						<li><a href="{{ asset('location') }}">Location</a></li>
						<li><a href="{{ asset('inspection-findings ') }}">Inspection Findings</a></li>
					</ul>
				</li>
				<li>
					<a href="#"><span class="menu-side"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
							<line x1="16" y1="2" x2="16" y2="6"></line>
							<line x1="8" y1="2" x2="8" y2="6"></line>
							<line x1="3" y1="10" x2="21" y2="10"></line>
						</svg></span>
						<span>Request</span></a>
				</li>


				<li class="submenu">
					<a href="#"><span class="menu-side"><i class="fa-solid fa-list"></i></span>
						<span>Reports</span> 
					</a>
			</ul>
			</div>
				<li  class="LogoutText">
                <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                    <i class='bx bxs-log-out-circle'></i>
                    <span>Logout</span>
                </a>
            	</li>
			
		
	</div>
</div>