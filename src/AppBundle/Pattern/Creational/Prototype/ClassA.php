<?php

namespace AppBundle\Pattern\Creational\Prototype;

/**
 * Пораждающий паттерн Прототип (Prototype)
 * Клонирование через конструктор
 *
 * Class ClassA
 * @package AppBundle\Pattern\Creational\Prototype
 */
class ClassA  extends BaseClass
{
    public function __construct($prototypeObject = null)
    {
        if ($prototypeObject instanceof ClassA) {
            $this->setFirstName($prototypeObject->getFirstName());
            $this->setLastName($prototypeObject->getLastName());
        }
    }
}