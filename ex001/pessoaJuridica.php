<?php 

declare(strict_types=1);

class PessoaJuridica extends PessoaFisica {
    private string $cnpj;

    public function __construct(string $name, string $email, string $cel, int $age, string $cnpj) {
        parent::__construct($name, $email, $cel, $age);
        $this->cnpj = $cnpj;
    }
}

?>