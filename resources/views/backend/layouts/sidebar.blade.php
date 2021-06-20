<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav ">
           
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="mdi mdi-airballoon  menu-icon"></i>
                    <span class="menu-title">Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item "> <a class="nav-link " href="{{route('category.create')}}">Add</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">Manage</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false"
                    aria-controls="ui-basic1">
                    <i class="mdi mdi-airplane  menu-icon"></i>
                    <span class="menu-title">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic1">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item "> <a class="nav-link" href="{{route('product.create')}}">Add</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('product.index')}}">Manage</a>
                        </li>
                    </ul>
                </div>
            </li>
       
           

        </ul>
    </nav>