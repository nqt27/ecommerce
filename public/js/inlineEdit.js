document.querySelectorAll('.edit-btn').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const row = this.closest('tr');
        const editRow = row.nextElementSibling;
        row.style.display = 'none';
        editRow.style.display = 'table-row';
    });
}); 



document.querySelectorAll('.save-btn').forEach(button => {
    button.addEventListener('click', function() {
        const editRow = this.closest('tr');
        const viewRow = editRow.previousElementSibling;
        editRow.style.display = 'none';
        viewRow.style.display = 'table-row';
    });
});