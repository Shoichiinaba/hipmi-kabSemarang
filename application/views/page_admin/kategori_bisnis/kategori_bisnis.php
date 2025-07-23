<style>
#load_data .col-md-6,
#load_data .col-lg-6 {
    padding-left: 5px;
    padding-right: 18px;
    margin-bottom: 16px;
}

.toast-container {
    margin-right: 2 !important;
    margin-left: 2 !important;
}

.bs-toast {
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

.toast-header {
    padding: 0.5rem 0.75rem;
}

.toast-body {
    padding: 0.5rem 0.75rem;
}

.toast-container .toast {
    transition: transform 0.3s ease;
    /* Animasi halus */
}

.toast-container:hover .toast {
    transform: scale(1.05);
    /* Zoom 5% */
}
</style>



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h5 class="mb-0">Kategori Bisnis</h5>
        </div>
        <form class="d-flex" style="width: 200px;">
            <div class="input-group">
                <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
                <input type="text" id="search-agent" class="form-control" placeholder="Search..." />
            </div>
        </form>
    </div>

    <div class="row g-0" id="load_data"></div>
    <div id="load_data_message"></div>

    <div class="d-flex justify-content-center p-3">
        <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
                <li class="page-item prev">
                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="javascript:void(0);">1</a>
                </li>
                <li class="page-item next">
                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>