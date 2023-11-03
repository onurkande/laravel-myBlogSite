<div>
    <div>
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

            Tip 2: you can also add an image using data-image tag
            -->
        <div class="logo"><a href="{{url('/dashboard/dynamic-edit')}}" class="simple-text logo-normal">
            ADMİN PANELİ
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item {{ Request::is('dashboard/dynamic-edit') ? 'active':'' }} ">
                    <a class="nav-link" href="{{url('dashboard/dynamic-edit')}}">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/dynamic-edit/categories') ? 'active':'' }}">
                    <a class="nav-link" href="{{url('dashboard/dynamic-edit/categories')}}">
                    <i class="fa-solid fa-list"></i>
                    <p>categories</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/dynamic-edit/add-category') ? 'active':'' }}">
                    <a class="nav-link" href="{{url('dashboard/dynamic-edit/add-category')}}">
                    <i class="fa-solid fa-plus"></i>
                    <p>Add Category</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/dynamic-edit/blogs') ? 'active':'' }}">
                    <a class="nav-link" href="{{url('dashboard/dynamic-edit/blogs')}}">
                    <i class="fa-solid fa-list"></i>
                    <p>Blogs</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/dynamic-edit/add-blog') ? 'active':'' }}">
                    <a class="nav-link" href="{{url('dashboard/dynamic-edit/add-blog')}}">
                    <i class="fa-solid fa-plus"></i>
                    <p>Add Blog</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/dynamic-edit/slider') ? 'active':'' }}">
                    <a class="nav-link" href="{{url('dashboard/dynamic-edit/slider')}}">
                    <i class="fa-solid fa-list"></i>
                    <p>Slider</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/dynamic-edit/header') ? 'active':'' }}">
                    <a class="nav-link" href="{{url('dashboard/dynamic-edit/header')}}">
                    <i class="fa-solid fa-list"></i>
                    <p>Header</p>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>
