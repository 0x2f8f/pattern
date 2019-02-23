<?php

namespace AppBundle\Pattern\Creational\Prototype;

/**
 * Пораждающий паттерн Прототип (Prototype)
 * Клонирование через магический метод __clone()
 *
 * Class ClassC
 * @package AppBundle\Pattern\Creational\Prototype
 */
class ClassC extends BaseClass
{
    public function __clone()
    {
        $this->firstName = $this->firstName.' clone';
        $this->lastName = $this->lastName.' clone';
    }
}