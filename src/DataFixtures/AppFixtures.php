<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Question;
use App\Factory\QuestionFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        QuestionFactory::new()->createMany(20);
    }
}