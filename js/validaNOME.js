
function restrictNumbers(event) {
    const input = event.target;
   
    input.value = input.value.replace(/\d+/g, '');
}


const nomeInput = document.getElementById('nome');


nomeInput.addEventListener('input', restrictNumbers);
