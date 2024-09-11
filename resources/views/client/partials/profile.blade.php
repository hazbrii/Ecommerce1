<li class="my-account">
    <a href="javascript:void(0)">
        <i class="flaticon-person"></i>
    </a>
    <div class="my-account-dropdown">
        <!-- <span class="title">QUICKLINKS</span> -->
        <ul>
            <li>
                <a href="{{route('profile.edit')}}">My Account</a>
            </li>
            <li>
                <a href="#">Initiate return</a>
            </li>
            <li>
                <a href="#">Support</a>
            </li>
            <li>
                <a href="#">Language</a>
            </li>
            <li>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out"></i>Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>  
        </ul>
    </div>
</li>