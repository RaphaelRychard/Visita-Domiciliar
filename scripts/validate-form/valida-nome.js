export default function ehUmNome(campo) {
    if (validaNome(campo)) {
        campo.setCustomValidity('Esse cpf não é válido')
    }
}

function validaNome(nome) {
    const nomeValidido = /^[a-zA-Z]+$/;
    return nomeValidido.test(nome)
}