const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});
document.addEventListener('DOMContentLoaded', function() {
    const poliSelects = document.querySelectorAll('#poli_id, #poli_id_simple');
    const dokterSelects = document.querySelectorAll('#dokter_id, #dokter_id_simple');

    poliSelects.forEach(poliSelect => {
        poliSelect.addEventListener('change', function() {
            const poliId = this.value;

            dokterSelects.forEach(dokterSelect => {
                dokterSelect.innerHTML = '<option value="">Pilih Dokter</option>'; // Reset options

                if (poliId) {
                    fetch(`/get-dokter/${poliId}`)
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(dokter => {
                                const option = document.createElement('option');
                                option.value = dokter.id;
                                option.text = dokter.nama;
                                dokterSelect.appendChild(option);
                            });
                        });
                }
            });
        });
    });
});
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
$(document).ready(function() {
    $('.custom-multiple').select2();
});