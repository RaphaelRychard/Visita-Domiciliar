const beneficiosRadioSim = document.getElementById('ha_beneficios_user_sim');
const beneficiosDiv = document.getElementById('beneficios_div');
const beneficiosCheckboxes = beneficiosDiv.querySelectorAll('input[type="checkbox"]');
//const cadastroUnicoRadios = document.querySelectorAll('input[name="preenchido_cad_unico"]');
const beneficiosRadioNao = document.getElementById('ha_beneficios_user_nao');
const outrosCheckbox = document.getElementById('outros-checkbox');
const outrosDescricao = document.getElementById('outros-descricao');

beneficiosRadioSim.addEventListener('click', () => {
    const habilitado = beneficiosRadioSim.checked;
    beneficiosCheckboxes.forEach(checkbox => checkbox.disabled = !habilitado);
    //cadastroUnicoRadios.forEach(radio => radio.disabled = !habilitado);
});

function desabilitarCampos() {
    beneficiosCheckboxes.forEach(checkbox => checkbox.checked = false);
    beneficiosCheckboxes.forEach(checkbox => checkbox.disabled = true);
}

beneficiosRadioNao.addEventListener('click', () => {
    if (beneficiosRadioNao.checked) {
        desabilitarCampos();
    } else {
        beneficiosCheckboxes.forEach(checkbox => checkbox.disabled = false);
        //cadastroUnicoRadios.forEach(radio => radio.disabled = false);
    }
});

outrosCheckbox.addEventListener('change', function () {
    outrosDescricao.disabled = !this.checked;
});
