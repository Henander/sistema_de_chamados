function excluir(id_chamado) {
    
        if (confirm("Confirma a exclusão desse contato?")) {
            location.href = '../chamados/excluir.php?id_chamado=' + id_chamado;
        }
    
    }
    