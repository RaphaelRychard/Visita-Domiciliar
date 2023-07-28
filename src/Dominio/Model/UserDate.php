<?php

namespace VisitaDomiciliar\Uisi\Domain\Model;

class UserDate
{
    private ?int $id;
    private string $nome;
    private string $sobrenome;
    private string $data_nascimento;
    private string $idade;
    private string $naturalidade;
    private string $estado_civil;
    private string $rg;
    private string $data_expedicao_rg;
    private string $cpf;
    private string $nis;
    private string $cns;
    private string $orgao_expedidor_rg;

    public function __construct (
        ?int $id,
        string $nome,
        string $sobrenome,
        string $data_nascimento,
        string $idade,
        string $naturalidade,
        string $estado_civil,
        string $rg,
        string $data_expedicao_rg,
        string $orgao_expedidor_rg,
        string $cpf,
        string $nis,
        string $cns
    )
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->data_nascimento = $data_nascimento;
        $this->idade = $idade;
        $this->naturalidade = $naturalidade;
        $this->estado_civil = $estado_civil;
        $this->rg = $rg;
        $this->data_expedicao_rg = $data_expedicao_rg;
        $this->orgao_expedidor_rg = $orgao_expedidor_rg;
        $this->cpf = $cpf;
        $this->nis = $nis;
        $this->cns = $cns;
    }

    public function recuperaId(): ?int
    {
        return $this->id;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function recuperaDataNascimento(): string
    {
        return $this->data_nascimento;
    }

    public function recuperaIdade(): string
    {
        return $this->idade;
    }

    public function recuperaNaturalidade(): string
    {
        return $this->naturalidade;
    }

    public function recuperaEstadoCivil(): string
    {
        return $this->estado_civil;
    }

    public function recuperaRg(): string
    {
        return $this->rg;
    }

    public function recuperaDataExpedicaoRg(): string
    {
        return $this->data_expedicao_rg;
    }

    public function recuperaOrgaoExpedirorRg(): string
    {
        return $this->orgao_expedidor_rg;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuperaNis(): string
    {
        return $this->nis;
    }

    public function recuperaCns(): string
    {
        return $this->cns;
    }

}