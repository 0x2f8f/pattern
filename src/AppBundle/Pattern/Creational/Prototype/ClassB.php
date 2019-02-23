<?php

namespace AppBundle\Pattern\Creational\Prototype;

/**
 * Пораждающий паттерн Прототип (Prototype)
 * Клонирование через метод getClone()
 *
 * Class ClassB
 * @package AppBundle\Pattern\Creational\Prototype
 */
class ClassB extends BaseClass
{
    /**
     * Метод клонирования текущего объекта
     *
     * @return ClassB
     */
    public function getClone()
    {
        $object = new ClassB();
        $object->setFirstName($this->getFirstName());
        $object->setLastName($this->getLastName());
        return $object;
    }
}