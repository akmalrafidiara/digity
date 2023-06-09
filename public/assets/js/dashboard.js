const sidebar = document.querySelector('#sidebar')
const burger = document.querySelector('.burger')

const toogleMenu = () => {
    sidebar.classList.toggle('active')
}

sidebar.addEventListener('click', () => toogleMenu())
burger.addEventListener('click', () => toogleMenu())

$(document).ready(function () {
    $('#myTable').DataTable({
        responsive: {
            orthogonal: 'responsive'
        }
    });
});

// preview image
function previewImage() {
    const image = document.querySelector('#image');
    const imagePreview = document.querySelector('.image-preview img');
    const btnFinal = document.querySelector('.btn-final');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imagePreview.src = oFREvent.target.result;
    }

    btnFinal.classList.remove('disabled');
}


const acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");

        const panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

const printStatus = document.querySelector('.print-status');

if (printStatus != 'undefined') {
    setTimeout(() => {
        printStatus.style.display = 'none';
    }, 6000);
}
