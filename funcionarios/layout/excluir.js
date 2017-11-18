function excluir(id_funcionario) {
    
        if (confirm("Confirma a exclusão desse funcionario?")) {
            location.href = '../funcionarios/excluir.php?id_funcionario=' + id_funcionario;
        }
    
    }
    