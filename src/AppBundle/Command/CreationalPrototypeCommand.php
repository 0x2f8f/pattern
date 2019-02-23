<?php

namespace AppBundle\Command;

use AppBundle\Pattern\Creational\Prototype\ClassA;
use AppBundle\Pattern\Creational\Prototype\ClassB;
use AppBundle\Pattern\Creational\Prototype\ClassC;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreationalPrototypeCommand extends Command
{
    protected static $defaultName = 'pattern:creational:prototype';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->prototypeA(); //Клонирование через конструктор
        $this->prototypeB(); //Клонирование через метод getClone
        $this->prototypeC(); //Клонирование через магический метод __clone()
    }

    /**
     * Клонирование через конструктор
     */
    private function prototypeA()
    {
        $a = new ClassA();
        $a->setFirstName('Vasya');
        $a->setLastName('Ivanov');

        $b = new ClassA($a);
        dump($b);
    }

    /**
     * Клонирование через метод getClone
     */
    private function prototypeB()
    {
        $a = new ClassB();
        $a->setFirstName('Vasya');
        $a->setLastName('Ivanov');

        $b = $a->getClone();
        dump($b);
    }

    /**
     * Клонирование через магический метод __clone()
     */
    private function prototypeC()
    {
        $a = new ClassC();
        $a->setFirstName('Vasya');
        $a->setLastName('Ivanov');

        $b = clone $a;
        dump($b);
    }
}