function formatarMoeda(inputElementId) {
    let elemento = document.getElementById(inputElementId);
    let valor = elemento.value;

    // Remove todos os caracteres não numéricos, exceto o sinal de menos para permitir números negativos
    valor = valor.replace(/[^0-9-]/g, '');

    // Verifica se o valor começa com sinal de menos e guarda essa informação
    let ehNegativo = false;
    if (valor.charAt(0) === '-') {
        ehNegativo = true;
        valor = valor.slice(1); // Remove o sinal de menos temporariamente para a formatação
    }

    // Remove os zeros à esquerda para evitar "R$ 000,00"
    valor = valor.replace(/^0+/, '');

    // Garante que o valor não esteja vazio e não ultrapasse o limite máximo para tratar como moeda
    if (valor === '' || parseInt(valor) > 999999999) {
        elemento.value = '';
        return;
    }

    // Adiciona zeros à esquerda, se necessário
    while (valor.length < 3) {
        valor = '0' + valor;
    }

    // Formata centavos (últimos dois dígitos)
    let centavos = valor.slice(-2);
    valor = valor.slice(0, -2);

    // Adiciona ponto para separar milhares
    if (valor.length > 3) {
        valor = valor.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }

    // Adiciona vírgula para separar centavos
    valor = valor + '.' + centavos;

    // Recoloca o sinal de menos, se for o caso
    if (ehNegativo) {
        valor = '-' + valor;
    }

    elemento.value = valor;
}
