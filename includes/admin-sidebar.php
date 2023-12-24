<aside class="sidebar h-100">
    <header class="sidebar-head position-relative">
        <div class="sidebar-overlay position-absolute h-100 w-100"></div>
        <div class="sidebar-profile position-relative px-2 pt-3 h-100">
            <img src="./assets/cat.jpg" alt="profile" class="rounded-circle mb-2" />
            <article class="d-flex flex-column">
                <p class="fw-bold fs-5 mb-1">Joe Biden gola</p>
                <p class="fw-medium">joe@gmail.com</p>
            </article>
        </div>
    </header>

    <nav class="py-2 d-flex flex-column fs-5 text row-gap-2">
        <!-- Collapsible Sidebar Item -->
        <div class="ps-3 d-flex align-items-center column-gap-2 cursor-pointer" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <i class="bi bi-house-door text-body-secondary"></i>
            <span class="link-secondary link-offset-2 link-underline link-underline-opacity-0">Dashboard</span>
            <i class="bi bi-chevron-down text-body-secondary ms-auto"></i>
        </div>
        <!-- collapsible content -->
        <div class="collapse" id="collapseExample">
            <div class="ps-3">
                <div class="ps-3 d-flex align-items-center column-gap-2 cursor-pointer">
                    <i class="bi bi-house-door text-body-secondary"></i>
                    <a href="#" class="link-secondary link-offset-2 link-underline link-underline-opacity-0">Submenu 1</a>
                </div>
                <div class="ps-3 d-flex align-items-center column-gap-2 cursor-pointer">
                    <i class="bi bi-house-door text-body-secondary"></i>
                    <a href="#" class="link-secondary link-offset-2 link-underline link-underline-opacity-0">Submenu 2</a>
                </div>
            </div>
        </div>

        <div class="ps-3 d-flex align-items-center column-gap-2 cursor-pointer">
            <i class="bi bi-house-door text-body-secondary"></i>
            <a href="#" class="link-secondary link-offset-2 link-underline link-underline-opacity-0">Announcement</a>
        </div>
        <div class="ps-3 d-flex align-items-center column-gap-2 cursor-pointer">
            <i class="bi bi-house-door text-body-secondary"></i>
            <a href="#" class="link-secondary link-offset-2 link-underline link-underline-opacity-0">Records</a>
        </div>

        <div class="ps-3 d-flex align-items-center column-gap-2 cursor-pointer">
            <i class="bi bi-house-door text-body-secondary"></i>
            <a href="#" class="link-secondary link-offset-2 link-underline link-underline-opacity-0">Content Management</a>
        </div>
    </nav>
</aside>
