<?php

namespace AppBundle\Pattern\Creational\Prototype;

/**
 * Пораждающий паттерн Прототип (Prototype)
 * Базовый класс
 *
 * Class BaseClass
 * @package AppBundle\Pattern\Creational\Prototype
 */
class BaseClass
{
    protected $firstName;
    protected $lastName;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return BaseClass
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return BaseClass
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
}