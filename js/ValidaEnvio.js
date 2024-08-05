
document.addEventListener('DOMContentLoaded', () => {
    const formulario = document.getElementById('formulario');

    formulario.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita o envio padrão do formulário

        // Chama funções de validação
        const cpfValido = validarCPF();
        const telefoneValido = validarTelefone();
        const dataValida = validarData();

        // Verifica se todas as validações passaram
        if (cpfValido && telefoneValido && dataValida) {
            // Se tudo estiver ok, envia os dados via AJAX
            const nome = document.getElementById('nome').value;
            const sexo = document.getElementById('sexo').value;
            const telefone = document.getElementById('telefone').value;
            const cpf = document.getElementById('cpf').value;
            const dataNascimento = document.getElementById('data-nascimento').value;
            enviarFormulario(nome, sexo, telefone, cpf, dataNascimento);
        } else {
            alert('Por favor, corrija os erros no formulário.');
        }
    });

    function enviarFormulario(nome, sexo, telefone, cpf, dataNascimento) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/processarCadastro.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    alert(xhr.responseText);
                } else {
                    alert('Erro ao enviar o formulário.');
                }
            }
        };

        const dados = `nome=${encodeURIComponent(nome)}&sexo=${encodeURIComponent(sexo)}&telefone=${encodeURIComponent(telefone)}&cpf=${encodeURIComponent(cpf)}&data-nascimento=${encodeURIComponent(dataNascimento)}`;
        xhr.send(dados);
    }
});



