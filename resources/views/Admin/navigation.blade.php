<!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                <li id="search">
                    <a href="javascript:;"><i class="fa fa-search opacity-control"></i></a>
                     <form>
                        <input type="text" class="search-query" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li class="divider"></li>
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li><a href="javascript:;"><i class="fa fa-table"></i> <span>Advanced Tables</span></a>
                    <ul class="acc-menu">
                        <li><a href="{{ route('products') }}">Products Tables</a></li>
                        <li><a href="{{ route('slides') }}">Slide Tables</a></li>
                        <li><a href="{{ url('admin/ajaxAdmin') }}">User Tables</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Advanced Forms</span><span class="badge badge-primary">5</span></a>
                    <ul class="acc-menu">
                        <li><a href="{{ route('products.add') }}">Form Add Products</a></li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </nav>

        <!-- BEGIN RIGHTBAR -->