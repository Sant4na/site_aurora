function validarData() {
    var dataNascimento = document.getElementById('data-nascimento').value;
    var resultado = document.getElementById('resultado-data');

    if (!dataNascimento) {
        resultado.innerText = "Data de nascimento inválida";
        resultado.style.color = "red";
        return false;
    }

    var hoje = new Date();
    var dataNasc = new Date(dataNascimento);
    var idade = hoje.getFullYear() - dataNasc.getFullYear();
    var mes = hoje.getMonth() - dataNasc.getMonth();

    if (mes < 0 || (mes === 0 && hoje.getDate() < dataNasc.getDate())) {
        idade--;
    }

    if (idade < 16) {
        resultado.innerText = "A Idade Minima para Cadastro é 16 Anos";
        resultado.style.color = "red";
        return false;
    }

    resultado.innerText = "Data de nascimento válida";
    resultado.style.color = "green";
    return true;
}
