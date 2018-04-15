<?php
namespace App\DataFixtures;

use App\Entity\Beer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class LoadProducts extends Fixture
{

    public function load(ObjectManager $manager)
    {
        // create objects
        $beerCoors = $this->createBeer('Coors Light', 'A refreshing light beer', 'Coors Light is a 4.2% ABV light beer brewed in Golden, Colorado; Albany, Georgia; Elkton, Virginia; Fort Worth, Texas; Irwindale, California; Moncton, New Brunswick; and Milwaukee, Wisconsin', 'coorslight', 'Water, barley malt, corn, yeast and hops', '4.57');

        // store to DB
        $manager->persist($beerCoors);
        $manager->flush();
    }

    /**
     * @param       $name
     * @param       $description
     * @param       $summary
     * @param       $image
     * @param       $ingredients
     * @param       $price
     *
     * @return Beer
     */
    private function createBeer($name, $description, $summary, $image, $ingredients, $price):Beer
    {
        $beer = new Beer();
        $beer->setName($name);
        $beer->setDescription($description);
        $beer->setSummary($summary);
        $beer->setImage($image);
        $beer->setIngredients($ingredients);
        $beer->setPrice($price);

        return $beer;
    }

}