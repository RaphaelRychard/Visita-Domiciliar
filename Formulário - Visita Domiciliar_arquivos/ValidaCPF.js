function ValidaCPF() {

    const cpfInput = document.querySelector('#cpf_user');

    cpfInput.addEventListener('input', (event) => {
        let cpf = event.target.value.replace(/\D/g, ''); // Remove todos os caracteres que não são números

        if (cpf.length > 11) {
            cpf = cpf.slice(0, 11); // Limita o comprimento total do CPF para 11 caracteres
        }

        // Formata o CPF com pontos e hífen
        if (cpf.length > 3 && cpf.length <= 6) {
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
        } else if (cpf.length > 6 && cpf.length <= 9) {
            cpf = cpf.replace(/(\d{3})(\d{3})(\d)/, '$1.$2.$3');
        } else if (cpf.length > 9) {
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d)/, '$1.$2.$3-$4');
        }

        event.target.value = cpf;

        // Salvar o CPF (sem formatação) no localStorage
        const cpfWithoutFormatting = cpf.replace(/\D/g, '');
        localStorage.setItem('userCPF', cpfWithoutFormatting);
    });
}


function ValidaCPFCompanheiro() {

    const cpfInput = document.querySelector('#companheiro_cpf');

    cpfInput.addEventListener('input', (event) => {
        let cpf = event.target.value.replace(/\D/g, ''); // Remove todos os caracteres que não são números

        if (cpf.length > 11) {
            cpf = cpf.slice(0, 11); // Limita o comprimento total do CPF para 11 caracteres
        }

        // Formata o CPF com pontos e hífen
        if (cpf.length > 3 && cpf.length <= 6) {
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
        } else if (cpf.length > 6 && cpf.length <= 9) {
            cpf = cpf.replace(/(\d{3})(\d{3})(\d)/, '$1.$2.$3');
        } else if (cpf.length > 9) {
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d)/, '$1.$2.$3-$4');
        }

        event.target.value = cpf;

        // Salvar o CPF (sem formatação) no localStorage
        const cpfWithoutFormatting = cpf.replace(/\D/g, '');
        localStorage.setItem('userCPF', cpfWithoutFormatting);
    });
}


function ValidaCPFCompanheiro2() {

    const cpfInput = document.querySelector('#algum_familiar_cpf');

    cpfInput.addEventListener('input', (event) => {
        let cpf = event.target.value.replace(/\D/g, ''); // Remove todos os caracteres que não são números

        if (cpf.length > 11) {
            cpf = cpf.slice(0, 11); // Limita o comprimento total do CPF para 11 caracteres
        }

        // Formata o CPF com pontos e hífen
        if (cpf.length > 3 && cpf.length <= 6) {
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
        } else if (cpf.length > 6 && cpf.length <= 9) {
            cpf = cpf.replace(/(\d{3})(\d{3})(\d)/, '$1.$2.$3');
        } else if (cpf.length > 9) {
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d)/, '$1.$2.$3-$4');
        }

        event.target.value = cpf;

        // Salvar o CPF (sem formatação) no localStorage
        const cpfWithoutFormatting = cpf.replace(/\D/g, '');
        localStorage.setItem('userCPF', cpfWithoutFormatting);
    });
}



