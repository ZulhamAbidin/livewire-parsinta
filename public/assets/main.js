document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('[data-bs-target="#pc_sidebar_userlink"]').addEventListener('click', function () {
        const collapseElement = document.querySelector('#pc_sidebar_userlink');
        const bsCollapse = new bootstrap.Collapse(collapseElement, {
            toggle: true
        });
    });
});
