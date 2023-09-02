document.addEventListener('DOMContentLoaded', function () {
    // Grupo Familiar Possuem Gestantes
    const gestantesSimRadio = document.getElementById('familiar_destantes_sim');
    const gestantesQuantidadeInput = document.querySelector('input[name="gestantes_familia_quantidade"]');

    gestantesSimRadio.addEventListener('change', function () {
        toggleField(gestantesQuantidadeInput, false);
    });

    const gestantesNaoRadio = document.getElementById('familiar_destantes_nao');
    gestantesNaoRadio.addEventListener('change', function () {
        toggleField(gestantesQuantidadeInput, true);
        gestantesQuantidadeInput.value = ""; // Limpa o valor do campo
    });

    // UserDataInformation com deficiência
    const deficienciaSimRadio = document.getElementById('pessoa_deficiencia_sim');
    const deficienciaQuantidadeInput = document.querySelector('input[name="pessoa_deficiencia_quantidade"]');

    deficienciaSimRadio.addEventListener('change', function () {
        toggleField(deficienciaQuantidadeInput, false);
    });

    const deficienciaNaoRadio = document.querySelector('input[name="pessoa_deficiencia"][value="Não"]');
    deficienciaNaoRadio.addEventListener('change', function () {
        toggleField(deficienciaQuantidadeInput, true);
        deficienciaQuantidadeInput.value = ""; // Limpa o valor do campo
    });

    // Tipo de deficiência
    const tipoDeficienciaSimRadio = document.getElementById('tipo_deficiencia_sim');
    const tipoDeficienciaSelect = document.querySelector('select[name="tipo_deficiencia_select"]');

    tipoDeficienciaSimRadio.addEventListener('change', function () {
        toggleField(tipoDeficienciaSelect, false);
    });

    const tipoDeficienciaNaoRadio = document.querySelector('input[name="tipo_deficiencia"][value="Não"]');
    tipoDeficienciaNaoRadio.addEventListener('change', function () {
        toggleField(tipoDeficienciaSelect, true);
        tipoDeficienciaSelect.selectedIndex = 0; // Reseta o select para a primeira opção
    });

    // UserDataInformation com deficiência
    const pessoaIdosaSimRadio = document.getElementById('pessoa_idosa_sim');
    const pessoaIdosaQuantidadeInput = document.querySelector('input[name="pessoa_idosa_quantidade"]');

    pessoaIdosaSimRadio.addEventListener('change', function () {
        toggleField(pessoaIdosaQuantidadeInput, false);
    });

    const pessoaIdosaRadio = document.querySelector('input[name="pessoa_idosa"][value="Não"]');
    pessoaIdosaRadio.addEventListener('change', function () {
        toggleField(pessoaIdosaQuantidadeInput, true);
        pessoaIdosaQuantidadeInput.value = ""; // Limpa o valor do campo
    });

    // pessoas sem documentação
    const pessoaDocumentacaoSimRadio = document.getElementById('pessoa_tem_documentacao_sim');
    const pessoaDocumentacaoQuantidadeInput = document.querySelector('input[name="pessoa_tem_documentacao_quantidade"]');

    pessoaDocumentacaoSimRadio.addEventListener('change', function () {
        toggleField(pessoaDocumentacaoQuantidadeInput, false);
    });

    const pessoaDocumentacaoRadio = document.querySelector('input[name="pessoa_tem_documentacao"][value="Não"]');
    pessoaDocumentacaoRadio.addEventListener('change', function () {
        toggleField(pessoaDocumentacaoQuantidadeInput, true);
        pessoaDocumentacaoQuantidadeInput.value = ""; // Limpa o valor do campo
    });

    function toggleField(field, disable) {
        field.disabled = disable;
    }
});