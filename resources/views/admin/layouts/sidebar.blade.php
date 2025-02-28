<div class="sidebar" >
    <div class="text-center">
      <h4>Khatoun Admin</h4>
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item {{ request()->routeIs('dashboard.show') ? 'active' : '' }}">
            <a
              href="{{route('dashboard.show')}}"
              class="collapsed"
              aria-expanded="false"
              aria-selected= "true"
            >
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#products">
              <i class="fas fa-tags"></i>
              <p>Products</p>
              <span class="caret"></span>
            </a>
            <div  class="collapse {{ request()->routeIs('products.index', 'categories.index') ? 'show' : '' }}" id="products">
              <ul class="nav nav-collapse ">
                <li class="nav-item {{ request()->routeIs('products.index') ? 'active' : '' }}">
                  <a href="{{route('products.index')}}">
                    <span class="sub-item">Product List</span>
                  </a>
                </li>
                <li class="nav-item {{ request()->routeIs('categories.index') ? 'active' : '' }}">
                  <a href="{{route('categories.index')}}">
                    <span class="sub-item">Categories</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item {{ request()->routeIs('orders.index') ? 'active' : '' }}">
            <a href="{{route('orders.index')}}" aria-selected= "false">
              <i class="fas fa-box"></i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item {{ request()->routeIs('clients.index') ? 'active' : '' }}">
            <a href="{{route('clients.index')}}" aria-selected= "false">
              <i class="fas fa-user"></i>
              <p>Customers</p>
            </a>
          </li>
          <li class="nav-item {{ request()->routeIs('route.name') ? 'active' : '' }}">
            <a href="{{route('clients.index')}}" aria-selected= "false">
              <i class="fas fa-cog"></i>
              <p>Settings</p>
            </a>
          </li>
        </ul>
      </div>
      
    </div>

</div>