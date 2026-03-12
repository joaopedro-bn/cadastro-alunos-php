<?php 

declare(strict_types=1);

class User {
    private string $name;
    private string $email;
    private int $age;

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
        return $this;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge(int $age) {
        $this->age = $age;
        return $this;
    }
}

?>