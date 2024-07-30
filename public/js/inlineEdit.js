document.querySelectorAll('.edit-btn').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const row = this.closest('tr');
        const editRow = row.nextElementSibling;
        row.style.display = 'none';
        editRow.style.display = 'table-row';
    });
}); 





document.querySelectorAll('.cancel-btn').forEach(button => {
    button.addEventListener('click', function() {
        const editRow = this.closest('tr');
        const viewRow = editRow.previousElementSibling;
        editRow.style.display = 'none';
        viewRow.style.display = 'table-row';
    });
});

const clickShow = document.querySelector('#click');
        const closeTable = document.querySelector('.table-content');
        const show = document.querySelector('.menu-reponsive');

        // Khi nhấn vào nút
        clickShow.addEventListener('click', function(event) {
            // Ngăn sự kiện click lan ra ngoài
            event.stopPropagation();

            // Hiển thị menu và ẩn table
            show.style.display = 'block';
            closeTable.style.display = 'none';
        });

        // Khi click vào bất kỳ chỗ nào khác
        document.addEventListener('click', function(event) {
            // Nếu click vào bên ngoài menu và nút
            if (!show.contains(event.target) && event.target !== clickShow) {
                show.style.display = 'none';
                closeTable.style.display = 'block';
            }
        });







