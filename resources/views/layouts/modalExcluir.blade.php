{{-- MODAL DE EXCLUSÃO --}}
<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="modalExcluirLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalExcluirLabel">Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="Excluir">
                    @csrf
                    <div class="modal-body">
                        <p class="font-weight-bold" id="identificacao"></p>
                        Tem certeza que deseja realizar esta ação?<br> Não será possível desfazê-la posteriormente!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-danger" value="Confirmar Exclusão">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- /MODAL DE EXCLUSÃO --}}
{{-- SCRIPT MODAL DE EXCLUSÃO --}}
<script>
    const exampleModal = document.getElementById('modalExcluir')
    exampleModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget        
        // Extract info from data-bs-* attributes       
        const identificacao = button.getAttribute('data-bs-identificacao')
        const url = button.getAttribute('data-bs-url')        
        // Update the modal's content.
        const modalTitle = exampleModal.querySelector('#identificacao')
        const modalForm = exampleModal.querySelector('#Excluir')
        modalTitle.textContent = `Excluir : ${identificacao}`
        modalForm.action = url
        }); 
</script>
{{-- /SCRIPT MODAL DE EXCLUSÃO --}}