new DataTable('#example', {
    paging: false,
    scrollCollapse: true,
    scrollY: '50vh'
});

const button = document.querySelector("#apply_filter");

button.addEventListener("click", newTable);

function newTable() {
    new DataTable('#example2', {
    paging: false,
    scrollCollapse: true,
    scrollY: '50vh'
    });
}
