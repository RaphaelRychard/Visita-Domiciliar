<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<main class="container-fluid container-md">

    <form class="form">

        <fieldset class="mb-5">
            <legend>Identificação Pessoal</legend>
            <hr>

            <div class="row mb-4">
                <div class="col mb-3">
                    <label for="nome_user" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome_user" placeholder="Seu nome"
                           aria-label="Digite seu nome">
                </div>
                <div class="col">
                    <label for="sobrenome_user" class="form-label">Sobrenome completo:</label>
                    <input type="text" class="form-control" id="sobrenome_user" placeholder="Seu Sobrenome completo"
                           aria-label="Digite seu sobrenome completo">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="data_nascimento_user" class="form-label">Data Nascimento:</label>
                    <input type="date" id="data_nascimento_user" class="form-control" placeholder="Data Nascimento"
                           aria-label="Digite sua data de nacimento">
                </div>
                <div class="col">
                    <label for="idade_user" class="form-label">Idede:</label>
                    <input type="text" id="idade_user" class="form-control" placeholder="Sua idade"
                           aria-label="Exibe a sua idade">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="naturalidade_user" class="form-label">Naturalidade:</label>
                    <input type="text" id="naturalidade_user" class="form-control" placeholder="Digite sua naturalidade"
                           aria-label="Digite sua naturalidade">
                </div>
                <div class="col">
                    <label for="estado_civil_user" class="form-label">Estado Civil:</label>
                    <select class="form-select" id="estado_civil_user" aria-label="Digite seu Estado Civil">
                        <option selected>Selecione uma opção</option>
                        <option value="Solteiro">Solteiro</option>
                        <option value="casado">casado</option>
                        <option value="separado">separado</option>
                        <option value="Divorciado">Divorciado</option>
                        <option value="Viúvo">Viúvo</option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="rg_user" class="form-label">RG:</label>
                    <input type="text" id="rg_user" class="form-control" placeholder="RG"
                           aria-label="Digite o seu RG (REGISTRO GERAL)">
                </div>
                <div class="col">
                    <label for="data_expedicao_user" class="form-label">Data de Expedição:</label>
                    <input type="date" id="data_expedicao_user" class="form-control" placeholder="Data de Expedição"
                           aria-label="Digite a Data de Expedição do seu RG (REGISTRO GERAL)">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="orgao_expedidor_user" id="" class="form-label">Órgão Expedidor:</label>
                    <input type="text" id="orgao_expedidor_user" class="form-control" placeholder="Orgão Expedidor"
                           aria-label="Digite seu orgão Expedidor">
                </div>
                <div class="col">
                    <label for="cpf_user" class="form-label">CPF:</label>
                    <input type="text" id="cpf_user" class="form-control" placeholder="000.000.000-00">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="nis_user" class="form-label">NIS:</label>
                    <input type="text" id="nis_user" class="form-control" placeholder="Identificação Social (NIS)"
                           aria-label="Digite o Número de Identificação Social (NIS)">
                </div>
                <div class="col">
                    <label for="cns_user" class="form-label">CNS:</label>
                    <input type="text" id="cns_user" class="form-control" placeholder="Cartão Nacional de Saúde (CNS)"
                           aria-label="Digite o número do Cartão Nacional de Saúde (CNS)">
                </div>
            </div>

        </fieldset>

        <input type="submit" name="cadastro" value="Cadastrar" class="btn btn-primary">

        <fieldset class="mb-5">
            <legend>Escolaridade</legend>
            <hr>
            <div class="col">
                <label for="escolaridade_user" class="form-label">Escolaridade:</label>
                <select class="form-select" id="escolaridade_user" aria-label="Digite seu Estado Civil">
                    <option selected disabled>Selecione uma opção</option>
                    <option value="Educação infantil">Educação infantil</option>
                    <option value="Fundamental">Fundamental</option>
                    <option value="Médio">Médio</option>
                    <option value="Superior (Graduação)">Superior (Graduação)</option>
                    <option value="Pós-graduação">Pós-graduação</option>
                    <option value="Mestrado">Mestrado</option>
                    <option value="Doutorado">Doutorado</option>
                </select>
            </div>
        </fieldset>

        <fieldset class="mb-5">
            <legend>Trabalho e Remuneração</legend>
            <hr>

            <div class="row" style="align-items: center;">
                <div class="cargoFuncaoUser" id="cargoFuncaoUser">
                    <div class="row col">
                        <label for="cargo-funcao-user" class="hidden-md">Cargo/Função</label>
                        <div class="input-group mb-3" id="group-tabalho">
                            <select class="form-select" id="cargo-funcao-user" aria-label="Digite seu Estado Civil">
                                <option selected disabled>Selecione uma opção</option>
                                <option value="Empregado com Carteira Assinada">Empregado com Carteira Assinada</option>
                                <option value="Autônomo com Previdência">Autônomo com Previdência</option>
                                <option value="Desempregado">Desempregado</option>
                                <option value="Aposentado/Pensionista">Aposentado/Pensionista</option>
                                <option value="Benefício de Prestação Continuada Idoso">Benefício de Prestação
                                    Continuada Idoso
                                </option>
                                <option value="Benefício de Prestação Continuada Pessoa com Deficiência">Benefício de
                                    Prestação Continuada Pessoa com Deficiência
                                </option>
                                <option value="Trabalhador Rural">Trabalhador Rural</option>
                                <option value="Atividades extras">Atividades extras</option>
                            </select>
                            <span class="input-group-text">R$</span>
                            <input type="text" class="form-control" placeholder="" aria-label="Server">
                        </div>
                    </div>
                </div>

                <div class="mt-3 append-buttons">
                    <div class="clearfix">
                        <button type="button" id="add-button"
                                class="btn bg-dark-subtle float-left text-uppercase shadow-sm">
                            <i class="bi bi-plus-circle text-success"></i>
                        </button>
                        <button type="button" id="remove-button"
                                class="btn bg-dark-subtle float-left text-uppercase ml-1" disabled="disabled">
                            <i class="bi bi-trash3-fill text-danger"></i>
                        </button>
                    </div>
                </div>
            </div>

        </fieldset>

        <fieldset class="mb-5">
            <legend>DESPESAS DA FAMÍLIA</legend>
            <hr>

            <div class="row">
                <div class="col">
                    <label for="renda_individual_user" class="hidden-md">Renda Individual</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" id="renda_individual_user" class="form-control"
                               aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>

                <div class="col">
                    <label for="renda_familiar_user" class="hidden-md">Renda Familiar </label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="text" id="renda_familiar_user" class="form-control" placeholder=""
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="alimentacao_user" class="hidden-md">Alimentação</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" id="alimentacao_user" class="form-control"
                               aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>

                <div class="col">
                    <label for="agua_user" class="hidden-md">Água</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-user">R$</span>
                        <input type="text" id="agua_user" class="form-control" placeholder="" aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="energia-eletrica-user" class="hidden-md">Energia Elétrica</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" id="energia-eletrica-user" class="form-control"
                               aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>

                <div class="col">
                    <label for="gas-user" class="hidden-md">Gás</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">R$</span>
                        <input type="text" id="gas-user" class="form-control" placeholder="" aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="meicamento-regular_familia" class="hidden-md">Medicamentos de uso regular</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" id="meicamento-regular_familia" class="form-control"
                               aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>

                <div>
                    <label for="transport-user" class="hidden-md">Transporte</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="text" id="transport-user" class="form-control" placeholder="" aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="outras_despesas_user" class="hidden-md">Outras despesas</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" class="form-control" id="outras_despesas_user"
                               aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                </div>
            </div>

        </fieldset>

        <fieldset class="mb-5">
            <legend>FAMÍLIA OU ALGUM MEMBRO É BENEFICIÁRIO DE ALGUM PROGRAMA DO GOVERNO FEDERAL?</legend>
            <hr>

            <div class="mb-4">
                <label for="ha_beneficius_user_sim" class="form-label">Há benefícios?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ha_beneficius_user" id="ha_beneficius_user_sim"
                           value="Sim">
                    <label class="form-check-label" for="ha_beneficius_user_sim">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Não" name="ha_beneficius_user"
                           id="ha_beneficius_user_nao">
                    <label class="form-check-label" for="ha_beneficius_user_nao">
                        Não
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label for="nome_user" class="form-label">Quais benefícios?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="PETI" id="quais_beneficius_familia_peti">
                    <label class="form-check-label" for="quais_beneficius_familia_peti">
                        PETI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Bolsa Famìlia"
                           id="quais_beneficius_familia_bolsa_familia">
                    <label class="form-check-label" for="quais_beneficius_familia_bolsa_familia">
                        BOLSA FAMÌLIA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="BPC" id="quais_beneficius_familia_bpc">
                    <label class="form-check-label" for="quais_beneficius_familia_bpc">
                        BPC
                    </label>
                </div>
            </div>

            <div>
                <label for="preenchido_cad_unico_sim">Foi preenchido o Cadastro Único?</label>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="preenchido_cad_unico"
                           id="preenchido_cad_unico_sim" value="Sim">
                    <label class="form-check-label" for="preenchido_cad_unico_sim">
                        Sim
                    </label>
                </div>
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input" type="radio" name="preenchido_cad_unico"
                               id="preenchido_cad_unico_nao"
                               value="Sim">
                        <label class="form-check-label" for="preenchido_cad_unico_nao" style="padding-left: 10px">
                            Não
                        </label>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox"
                           placeholder="Quais outro beneficios?">
                </div>
            </div>
        </fieldset>

        <fieldset class="mb-5">
            <legend>Acesso à Saúde</legend>
            <hr>
            <div>
                <label>Usuáio Possui Cartão do SUS (CNS)</label>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="cartao_sus_user" id="cartao_sus_sim_user"
                           value="Sim">
                    <label class="form-check-label" for="cartao_sus_sim_user">
                        Sim
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="cartao_sus_user" id="cartao_sus_nao_user"
                           value="Sim">
                    <label class="form-check-label" for="cartao_sus_nao_user">
                        Não
                    </label>
                </div>
            </div>

            <div>
                <label>Familia Possui Cartão do SUS (CNS)</label>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="cartao_sus_familia" id="cartao_sus_sim_familia"
                           value="Sim">
                    <label class="form-check-label" for="cartao_sus_sim_familia">
                        Sim
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="cartao_sus_familia" id="cartao_sus_nao_familia"
                           value="Sim">
                    <label class="form-check-label" for="cartao_sus_nao_familia">
                        Não
                    </label>
                </div>

            </div>

            <div>
                <label>Carteira de Vacinação (Família com crianças de até sete anos sem carteira de vacinação)</label>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="carteira_vacinacao"
                           id="carteira_vacinacao_familia_sim"
                           value="Sim">
                    <label class="form-check-label" for="carteira_vacinacao_familia_sim">
                        Sim
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="carteira_vacinacao"
                           id="carteira_vacinacao_familia_nao"
                           value="Sim">
                    <label class="form-check-label" for="carteira_vacinacao_familia_nao">
                        Não
                    </label>
                </div>
            </div>
        </fieldset>

        <fieldset class="mb-5">
            <legend>Acesso à Educação</legend>
            <hr>

            <div>
                <label for="adolecentes_matriculados">Todas as crianças e adolescentes estão matriculados na rede
                    escolar?</label>

                <div class="form-check" style="margin-left: 12px;" id="adolecentes_matriculados">
                    <input class="form-check-input" type="radio" name="adolecentes_matriculados"
                           id="adolecentes_matriculados_sim" value="Sim">
                    <label class="form-check-label" for="adolecentes_matriculados_sim">
                        Sim
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="adolecentes_matriculados"
                           id="adolecentes_matriculados_nao" value="Sim">
                    <label class="form-check-label" for="adolecentes_matriculados_nao">
                        Não
                    </label>
                </div>
            </div>

            <div>
                <label for="assiduamente_escola">Estão frequentando assiduamente a escola?</label>

                <div class="form-check" style="margin-left: 12px;" id="assiduamente_escola">
                    <input class="form-check-input" type="radio" name="assiduamente_escola"
                           id="assiduamente_escola_user_sim" value="Sim">
                    <label class="form-check-label" for="assiduamente_escola_user_sim">
                        Sim
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="assiduamente_escola"
                           id="assiduamente_escola_user_nao"
                           value="Sim">
                    <label class="form-check-label" for="assiduamente_escola_user_nao">
                        Não
                    </label>
                </div>
                <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                                  id="assiduamente_escola_user_observacao"
                                  style="height: 100px"></textarea>
                    <label for="assiduamente_escola_user_observacao">Obervação</label>
                </div>
            </div>

        </fieldset>

        <fieldset class="mb-5">
            <legend>Grupo Familiar</legend>
            <hr>

            <div class="mb-4">
                <label for="familiar_destantes">No Grupo Familiar Possuem Gestantes</label>
                <div class="input-group" id="familiar_destantes">
                    <div class="input-group-text">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="familiar_destantes_sim"
                               value="Sim">
                        <label class="form-check-label" for="familiar_destantes_sim" style="padding-left: 10px">
                            Sim, quantas?
                        </label>
                    </div>
                    <input type="number" class="form-control" aria-label="Text input with checkbox"
                           placeholder="Quantas Gestantes Possuem?">
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="familiar_destantes_nao"
                           value="Sim">
                    <label class="form-check-label" for="familiar_destantes_nao">
                        Não
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label>Pessoa com deficiência?</label>

                <div class="mb-4">
                    <div class="input-group">
                        <div class="input-group-text">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                   value="Sim">
                            <label class="form-check-label" for="flexRadioDefault1" style="padding-left: 10px">
                                Sim, quantas
                            </label>
                        </div>
                        <input type="number" class="form-control" aria-label="Text input with checkbox"
                               placeholder="Quantas Gestantes Possuem" min="0" max="100">
                    </div>

                    <div class="form-check" style="margin-left: 12px;">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                               value="Sim">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Não
                        </label>
                    </div>
                </div>

            </div>

            <div>
                <label>Tipo de deficiência?</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                               value="Sim">
                        <label class="form-check-label" for="flexRadioDefault1" style="padding-left: 10px">
                            Sim, quantas
                        </label>
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Tipo de deficiência</option>
                        <option value="Física">Física</option>
                        <option value="Mental">Mental</option>
                        <option value="Intelectual">Intelectual</option>
                    </select>
                </div>

                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                           value="Sim">
                    <label class="form-check-label mb-2" for="flexRadioDefault1">
                        Não
                    </label>
                </div>

                <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                  style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Obervação</label>
                </div>
            </div>

            <div class="mb-2">
                <label>Pessoas Idosas</label>

                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                               value="Sim">
                        <label class="form-check-label" for="flexRadioDefault1" style="padding-left: 10px">
                            Sim, quantas
                        </label>
                    </div>
                    <input type="number" class="form-control" aria-label="Text input with checkbox"
                           placeholder="Digite sua idade" min="0" max="100">
                </div>

                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                           value="Sim">
                    <label class="form-check-label mb-2" for="flexRadioDefault1">
                        Não
                    </label>
                </div>

                <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                  style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Obervação</label>
                </div>
            </div>

            <div class="mb-4">
                <label>Na famíla possuem pessoas sem documentação?</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                               value="Sim">
                        <label class="form-check-label" for="flexRadioDefault1" style="padding-left: 10px">
                            Sim, quantas
                        </label>
                    </div>
                    <input type="number" class="form-control" aria-label="Text input with checkbox"
                           placeholder="Digite sua idade" min="0" max="100">
                </div>

                <div class="form-check mb-3" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                           value="Sim">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Não
                    </label>
                </div>

                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        RG
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        CPF
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Carteira de Trabalho
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        título de Eleitor
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label>Situação do Imóvel </label>
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Tipo de deficiência</option>
                        <option value="Próprio">Próprio</option>
                        <option value="Cedido">Cedido</option>
                        <option value="Alugado">Alugado</option>
                        <option value="Financiado">Empossado</option>
                    </select>
                </div>

                <div class="form-floating mt-2 mb-4">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                  style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Obervação</label>
                </div>
            </div>
        </fieldset>

        <fieldset class="mb-5">
            <legend>Materiais usados na contrução do seu domicílio</legend>
            <hr>

            <div class="mb-4">
                <label>Qual material é predominante na construção do seu domicílio?</label>

                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Tijolo
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Madeira
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Adobe
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Palha com alvenaria
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Palha
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Material improvisado
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Outro
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label>Qual é a forma de iluminação utilizada no seu domicílio?</label>

                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Relógio próprio
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Sem relógio
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Vela
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Lampião
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Outro
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label>Qual é a forma de abastecimento de àgua utlizada no seu domucílio?</label>

                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Rede pública
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Poço/Nascente
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Carro pipa
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Outro
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label>Qual tratamento è dado a á agua consumida pela família?</label>

                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Filtrada
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Fervida
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Mineral
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Outro
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label>Qual a estrutura de escoamento sanitário?</label>

                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Rede pública
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Fossa rudimentar
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Céu aberto
                    </label>
                </div>
                <div class="form-check" style="margin-left: 12px;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Outro
                    </label>
                </div>
            </div>
        </fieldset>

        <fieldset class="mb-5">
            <legend>Composição familiar dos moradores do domicílio</legend>
            <hr>

            <div class="row" style="align-items: center;">
                <div class="moradores-domicilio mt-3" id="moradores-domicilio">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nome_completo" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" id="nome_completo" placeholder="Seu nome completo"
                                   aria-label="Digite seu nome completo">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="data_nascimento" class="form-label">Data de nascimento:</label>
                            <input type="date" class="form-control" id="data_nascimento"
                                   placeholder="Data de nascimento"
                                   aria-label="Digite sua data de nascimento">
                        </div>
                        <div class="col">
                            <label for="idade" class="form-label">Idade</label>
                            <input type="number" min="0" class="form-control" id="idade" placeholder="Sua idade"
                                   aria-label="Digite sua idade">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="rg" class="form-label">RG:</label>
                            <input type="text" class="form-control" id="rg" placeholder="Seu RG"
                                   aria-label="Digite seu RG">
                        </div>
                        <div class="col">
                            <label for="data_expedicao" class="form-label">Data de Expedição:</label>
                            <input type="text" class="form-control" id="data_expedicao"
                                   placeholder="Data de Expedição do RG"
                                   aria-label="Digite a data de expedição do RG">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="orgao_expedidor" class="form-label">Órgão Expedidor:</label>
                            <input type="text" class="form-control" id="orgao_expedidor"
                                   placeholder="Órgão expedidor do RG"
                                   aria-label="Digite o órgão expedidor do RG">
                        </div>
                        <div class="col">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="cns" class="form-label">CNS:</label>
                            <input type="text" class="form-control" id="cns" placeholder="Seu CNS"
                                   aria-label="Digite seu Cartão Nacional de Saúde (CNS)">
                        </div>
                        <div class="col">
                            <label for="ocupacao" class="form-label">Ocupação:</label>
                            <input type="text" class="form-control" id="ocupacao" placeholder="Sua ocupação"
                                   aria-label="Digite sua ocupação">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="renda" class="form-label">Renda:</label>
                            <input type="text" class="form-control" id="renda" placeholder="Sua renda"
                                   aria-label="Digite sua renda">
                        </div>
                        <div class="col">
                            <label for="escolaridade" class="form-label">Escolaridade:</label>
                            <input type="text" class="form-control" id="escolaridade" placeholder="Sua escolaridade"
                                   aria-label="Digite sua escolaridade">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col mb-3">
                            <label for="parentesco" class="form-label">Parentesco:</label>
                            <input type="text" class="form-control" id="parentesco" placeholder="Seu parentesco"
                                   aria-label="Digite seu parentesco">
                        </div>
                    </div>
                </div>

                <div class="mt-3 append-buttons">
                    <div class="clearfix">
                        <button type="button" id="add-button2"
                                class="btn bg-dark-subtle float-left text-uppercase shadow-sm">
                            <i class="bi bi-plus-circle text-success"></i>
                        </button>
                        <button type="button" id="remove-button2"
                                class="btn bg-dark-subtle float-left text-uppercase ml-1" disabled="disabled">
                            <i class="bi bi-trash3-fill text-danger"></i>
                        </button>
                    </div>
                </div>
            </div>
        </fieldset>

    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        var buttonAdd = $("#add-button");
        var buttonRemove = $("#remove-button");
        var className = ".cargoFuncaoUser";
        var count = 0;
        var field = "";
        var maxFields = 50;

        function totalFields() {
            return $(className).length;
        }

        function addNewField() {
            count = totalFields() + 1;
            field = $("#cargoFuncaoUser").clone();
            field.attr("id", "cargoFuncaoUser-" + count);
            field.children("label").text("Field " + count);
            field.find("input").val("");
            $(className + ":last").after($(field));
        }

        function removeLastField() {
            if (totalFields() > 1) {
                $(className + ":last").remove();
            }
        }

        function enableButtonRemove() {
            if (totalFields() === 2) {
                buttonRemove.removeAttr("disabled");
                buttonRemove.addClass("shadow-sm");
            }
        }

        function disableButtonRemove() {
            if (totalFields() === 1) {
                buttonRemove.attr("disabled", "disabled");
                buttonRemove.removeClass("shadow-sm");
            }
        }

        function disableButtonAdd() {
            if (totalFields() === maxFields) {
                buttonAdd.attr("disabled", "disabled");
                buttonAdd.removeClass("shadow-sm");
            }
        }

        function enableButtonAdd() {
            if (totalFields() === (maxFields - 1)) {
                buttonAdd.removeAttr("disabled");
                buttonAdd.addClass("shadow-sm");
            }
        }

        buttonAdd.click(function () {
            addNewField();
            enableButtonRemove();
            disableButtonAdd();
        });

        buttonRemove.click(function () {
            removeLastField();
            disableButtonRemove();
            enableButtonAdd();
        });
    });
</script>
<script>
    $(document).ready(function () {
        var buttonAdd2 = $("#add-button2");
        var buttonRemove2 = $("#remove-button2");
        var className2 = ".moradores-domicilio";
        var count = 0;
        var field = "";
        var maxFields = 50;

        function totalFields() {
            return $(className2).length;
        }

        function addNewField() {
            count = totalFields() + 1;
            field = $("#moradores-domicilio").clone();
            field.attr("id", "moradores-domicilio-clone-" + count);
            field.find("label").each(function () {
                var labelText = $(this).text();
                var labelFor = $(this).attr("for");
                var inputType = "text";

                // Adjust input type based on label content
                if (labelText.includes("Data") || labelText.includes("Data de")) {
                    inputType = "date";
                } else if (labelText.toLowerCase().includes("cpf")) {
                    inputType = "text";
                    labelText = "CPF";
                } else if (labelText.toLowerCase().includes("idade")) {
                    inputType = "number";
                } else if (labelText.toLowerCase().includes("renda")) {
                    inputType = "text";
                } else if (labelText.toLowerCase().includes("escolaridade")) {
                    inputType = "text";
                }

                var newInput = $("<input>")
                    .attr("type", inputType)
                    .addClass("form-control")
                    .attr("placeholder", labelText)
                    .attr("aria-label", "Digite " + labelText.toLowerCase());

                $(this).siblings("input").replaceWith(newInput);
            });

            $(className2 + ":last").after(field);
        }

        function removeLastField() {
            if (totalFields() > 1) {
                $(className2 + ":last").remove();
            }
        }

        function enableButtonRemove() {
            if (totalFields() === 2) {
                buttonRemove2.removeAttr("disabled");
                buttonRemove2.addClass("shadow-sm");
            }
        }

        function disableButtonRemove() {
            if (totalFields() === 1) {
                buttonRemove2.attr("disabled", "disabled");
                buttonRemove2.removeClass("shadow-sm");
            }
        }

        function disableButtonAdd() {
            if (totalFields() === maxFields) {
                buttonAdd2.attr("disabled", "disabled");
                buttonAdd2.removeClass("shadow-sm");
            }
        }

        function enableButtonAdd() {
            if (totalFields() === (maxFields - 1)) {
                buttonAdd2.removeAttr("disabled");
                buttonAdd2.addClass("shadow-sm");
            }
        }

        buttonAdd2.click(function () {
            addNewField();
            enableButtonRemove();
            disableButtonAdd();
        });

        buttonRemove2.click(function () {
            removeLastField();
            disableButtonRemove();
            enableButtonAdd();
        });
    });
</script>

</body>
</html>