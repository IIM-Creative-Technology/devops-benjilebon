<?php

namespace App\DataFixtures;

use App\Entity\Meta;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MetaFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $meta = new Meta();
        $meta->setTitle('Spacewich');
        $meta->setDescription('Spacewich by far le sang de la veine lol');
        $meta->setOgdescription('Description Spacewich');
        $meta->setOgimage('https://www.demotivateur.fr/images-buzz/8984/16124365_1117534098374780_5466006995590971392_n.jpg');
        $meta->setOgtitle('Spacewich');
        $meta->setOgurl('http://127.0.0.1:8000');
        $manager->persist($meta);

        $manager->flush();
    }
}
