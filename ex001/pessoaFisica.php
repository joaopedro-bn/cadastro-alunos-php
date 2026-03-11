<?php 

declare(strict_types=1);

class PessoaFisica {
    private string $name;
    private string $email;
    private string $cel;
    private int $age;

    public function __construct(string $name, string $email, string $cel, int $age) {
        $this->name = $name;
        $this->email = $email;
        $this->cel = $cel;
        $this->age = $age;
    }
}

?>