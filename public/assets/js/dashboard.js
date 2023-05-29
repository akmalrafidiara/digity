const sidebar = document.querySelector('#sidebar')
const burger = document.querySelector('.burger')

const toogleMenu = () => {
    sidebar.classList.toggle('active')
}

sidebar.addEventListener('click', () => toogleMenu())
burger.addEventListener('click', () => toogleMenu())

$(document).ready(function () {
    $('#myTable').DataTable({
        responsive: true
    });
});
