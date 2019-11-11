<?php

namespace App\DataFixtures;

use App\Entity\Book;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Psr\Log\LoggerInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $em)
    {
        $category = new Category();
        $category->setLibelle("Dystopian");


        $book = new Book();
        $book->setTitle("1984");
        $book->setYear("1950");
        $book->setShortSynopsis("George Orwell dépeint dans le prophétique 1984 un terrifiant monde totalitaire.");
        $book->setSynopsis("De tous les carrefours importants, le visage à la moustache noire vous fixait du regard. BIG BROTHER VOUS REGARDE, répétait la légende, tandis que le regard des yeux noirs pénétrait les yeux de Winston... Au loin, un hélicoptère glissa entre les toits, plana un moment, telle une mouche bleue, puis repartit comme une flèche, dans un vol courbe. C'était une patrouille qui venait mettre le nez aux fenêtres des gens. Mais les patrouilles n'avaient pas d'importance. Seule comptait la Police de la Pensée.");
        $book->setSize(376);
        $book->setCategory($category);

        $em->persist($book);

        $em->flush();
    }
}
