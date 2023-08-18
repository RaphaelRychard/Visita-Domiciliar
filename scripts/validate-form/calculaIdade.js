export default function calculoDeIdade(campo) {
    const dataNascimento = new Date(campo.value);
    calculateIdade(dataNascimento);
}

function calculateIdade(data) {
    let hoje = new Date();

    let idade = hoje.getFullYear() - data.getFullYear();

    if (hoje.getMonth() < data.getMonth() ||
        (hoje.getMonth() === data.getMonth() && hoje.getDate() < data.getDate())) {
        idade--;
    }

    document.querySelector('#idade_user').value = idade;
}