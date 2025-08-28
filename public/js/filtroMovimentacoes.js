// public/js/modalReport/filtroMovimentacao.js
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.movimentacoes').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('data-url'); 
            const form = document.getElementById('form_relatorio');
            form.setAttribute('action', url); 
            const modal = new bootstrap.Modal(document.getElementById('modalRelatorio'));
            modal.show();
        });
    });
});
