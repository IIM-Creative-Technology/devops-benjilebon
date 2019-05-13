<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $article = new Article();
        $article->setTitle('Spacewich test');
        $article->setUrl('https://static.openfoodfacts.org/images/products/335/003/302/0894/front_fr.5.full.jpg');
        $article->setExcerpt('Spacewich most famous product : Giga Wich');
        $article->setContent('Ce supra sandwich du futur va lever des scooter en I et changer votre vie à jamais bande de gueux');
        $article->setPrice('49,99€');
        $manager->persist($article);

        $manager->flush();
    }
}
