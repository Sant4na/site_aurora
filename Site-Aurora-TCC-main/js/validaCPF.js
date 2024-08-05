function validarCPF() {
    var cpf = document.getElementById('cpf').value;
    var resultado = document.getElementById('resultado');

    cpf = cpf.replace(/[^\d]+/g, ''); // Remove caracteres não numéricos

    if (cpf.length !== 11) {
        resultado.innerText = "CPF inválido";
        resultado.style.color = "red";
        return false;
    }

    // Verifica se todos os dígitos são iguais
    if (/^(\d)\1{10}$/.test(cpf)) {
        resultado.innerText = "CPF inválido";
        resultado.style.color = "red";
        return false;
    }

    var soma = 0;
    var resto;

    // Calcula o primeiro dígito verificador
    for (var i = 1; i <= 9; i++) {
        soma += parseInt(cpf.substring(i - 1, i)) * (11 - i);
    }
    resto = (soma * 10) % 11;

    if ((resto == 10) || (resto == 11)) {
        resto = 0;
    }
    if (resto != parseInt(cpf.substring(9, 10))) {
        resultado.innerText = "CPF inválido";
        resultado.style.color = "red";
        return false;
    }

    soma = 0;

    // Calcula o segundo dígito verificador
    for (i = 1; i <= 10; i++) {
        soma += parseInt(cpf.substring(i - 1, i)) * (12 - i);
    }
    resto = (soma * 10) % 11;

    if ((resto == 10) || (resto == 11)) {
        resto = 0;
    }
    if (resto != parseInt(cpf.substring(10, 11))) {
        resultado.innerText = "CPF inválido";
        resultado.style.color = "red";
        return false;
    }

    resultado.innerText = "CPF válido";
    resultado.style.color = "green";
    return true;
}

