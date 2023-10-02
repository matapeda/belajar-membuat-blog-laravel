<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary min-vh-100">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">matapeda</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} d-flex  gap-2 "
                        aria-current="page" href="/dashboard">
                        <i class="bi bi-speedometer"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts') ? 'active' : '' }} d-flex  gap-2 "
                        href="/dashboard/posts">
                        <i class="bi bi-journal"></i>
                        My Posts
                    </a>
                </li>
            </ul>

            @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Administrator</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }} d-flex  gap-2 "
                            href="/dashboard/categories">
                            <i class="bi bi-journal"></i>
                            Post Categories
                        </a>
                    </li>
                </ul>
            @endcan

            <hr class="my-3">

            <ul class="nav flex-column mt-auto">

                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link d-flex gap-2">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
