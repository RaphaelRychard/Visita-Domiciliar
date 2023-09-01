document.getElementById('data_nascimento_user').addEventListener('change', function () {
    let dataNascimento = new Date(this.value);
    let hoje = new Date();
    let idade = hoje.getFullYear() - dataNascimento.getFullYear();

    if (hoje.getMonth() < dataNascimento.getMonth() || (hoje.getMonth() === dataNascimento.getMonth() && hoje.getDate() < dataNascimento.getDate())) {
        idade--;
    }

    document.getElementById('idade_user').value = idade;
});

function toggleInput(inputId, radioButtonId) {
    let input = document.getElementById(inputId);
    let radio = document.getElementById(radioButtonId);

    input.disabled = !radio.checked || radio.value === "Não";

}

function toggleTipoDeficienciaSection(option) {
    let tipoDeficienciaSection = document.getElementById('tipo_deficiencia_section');
    let tipoDeficienciaSelect = document.getElementById('tipo_deficiencia_select');
    let tipoDeficienciaObservacao = document.getElementById('floatingTextarea2');

    if (option === 'Sim') {
        tipoDeficienciaSection.classList.remove('fade-out');
        tipoDeficienciaSelect.disabled = false;
        tipoDeficienciaObservacao.disabled = false;
    } else {
        tipoDeficienciaSection.classList.add('fade-out');
        tipoDeficienciaSelect.disabled = true;
        tipoDeficienciaObservacao.disabled = true;
    }
}

let c = 1;

