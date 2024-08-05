function validarTelefone() {
    var telefone = document.getElementById('telefone').value;
    var resultado = document.getElementById('resultadofone');

    telefone = telefone.replace(/[^\d]/g, '');

    if (telefone.length < 10) {
        resultado.innerText = "Formato de telefone inválido";
        resultado.style.color = "red";
        return false;
    }

    var telefoneFormatado = telefone.replace(/(\d{2})(\d{4,5})(\d{4})/, '$1 $2-$3');

    var regex = /^\d{2}\s\d{4,5}-\d{4}$/;
    if (regex.test(telefoneFormatado)) {
        resultado.innerText = "Formato de telefone válido: " + telefoneFormatado;
        resultado.style.color = "green";
        return true;
    } else {
        resultado.innerText = "Formato de telefone inválido";
        resultado.style.color = "red";
        return false;
    }
}
