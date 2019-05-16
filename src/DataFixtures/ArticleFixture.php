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
        $article->setTitle('Giga Wich');
        $article->setUrl('/img/gigajambon.jpg');
        $article->setExcerpt('Spacewich most famous product : Giga Wich');
        $article->setContent('Ce supra sandwich du futur va lever des scooter en I et changer votre vie à jamais');
        $article->setSlug('giga-wich');
        $article->setPrice('49,99');
        $manager->persist($article);

        $article2 = new Article();
        $article2->setTitle('Space-jambon');
        $article2->setUrl('/img/spacejambon.jpg');
        $article2->setExcerpt("Un jambon venu de l'espace, un vrai");
        $article2->setContent("Cette fine tranche de jambon permettra à votre estomac de gagner en énergie aussi vite que le passage d'une comète");
        $article2->setSlug('space-jambon');
        $article2->setPrice('89,99');
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle('Galaxie Wich');
        $article3->setUrl('/img/galaxiewich.jpg');
        $article3->setExcerpt('Nourrissez-vous de la galaxie entière');
        $article3->setContent("Ce sandwich stellaire vous fera survoler toutes les saveurs de l'univers entier, même Einstein ne l'avait pas prédit.");
        $article3->setSlug('spacewich-zer');
        $article3->setPrice('6 899 999,99');
        $manager->persist($article3);

        $manager->flush();
    }
}
