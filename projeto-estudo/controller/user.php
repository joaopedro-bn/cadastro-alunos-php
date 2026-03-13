<?php 

declare(strict_types=1);

class User {

    private string $name;
    private string $email;
    private int $age;
    private int $id;

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

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}

?>