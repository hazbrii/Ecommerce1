<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo text-center">
          <p style="color:white"><span style="font-size: 20px;">Khatoun</span>ADMIN</p>
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
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
                <div class="collapse" id="products">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{route('products.index')}}">
                        <span class="sub-item">Product List</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{route('categories.index')}}">
                        <span class="sub-item">Categories</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="{{route('orders.index')}}">
                  <i class="fas fa-box"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
              <a data-bs-toggle="collapse" href="#">
                  <i class="fas fa-money-bill"></i>
                  <p>Payments</p>
                </a>
              </li>
              <li class="nav-item">
              <a data-bs-toggle="collapse" href="#">
                  <i class="fas fa-user"></i>
                  <p>Customers</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>