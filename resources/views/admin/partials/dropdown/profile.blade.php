<li class="nav-item topbar-user dropdown hidden-caret">
            <a
            class="dropdown-toggle profile-pic"
            data-bs-toggle="dropdown"
            href="#"
            aria-expanded="false"
            >
            <!-- <div class="avatar-sm"> 
                <img
                src="{{asset('assets/images/icons/profile.png')}}"
                alt="..."
                class="avatar-img rounded-circle"
                />
            </div> -->
            <i class="fa-solid fa-user-circle fa-lg"></i>
            <span class="profile-username">
                
            <span class="op-7">Hi,</span>
            <span class="fw-bold">{{Auth::user()->fullname}}</span>
            </span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                        <div class="user-box">
                            <div class="avatar-lg">
                            <img
                                src="{{asset('assets/images/icons/profile.png')}}"
                                alt="image profile"
                                class="avatar-img rounded"
                            />
                            </div>
                            <div class="u-text">
                            <h4>{{Auth::user()->fullname}}</h4>
                            <p class="text-muted">{{Auth::user()->email}}</p>
                            <a
                                href="profile.html"
                                class="btn btn-xs btn-secondary btn-sm"
                                >View Profile</a
                            >
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">My Balance</a>
                        <a class="dropdown-item" href="#">Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>  
                        <a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                    </li>
                </div>
            </ul>
        </li>