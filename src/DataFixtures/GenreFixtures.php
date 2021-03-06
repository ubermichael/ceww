<?php

declare(strict_types=1);

/*
 * (c) 2020 Michael Joyce <mjoyce@sfu.ca>
 * This source file is subject to the GPL v2, bundled
 * with this source code in the file LICENSE.
 */

namespace App\DataFixtures;

use App\Entity\Genre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Description of LoadGenres.
 *
 * @author mjoyce
 */
class GenreFixtures extends Fixture {
    public function load(ObjectManager $manager) : void {
        $genre1 = new Genre();
        $genre1->setName('fiction');
        $genre1->setLabel('Fiction');
        $this->setReference('genre.1', $genre1);
        $manager->persist($genre1);

        $genre2 = new Genre();
        $genre2->setName('non-fiction');
        $genre2->setLabel('Non fiction');
        $this->setReference('genre.2', $genre2);
        $manager->persist($genre2);

        $manager->flush();
    }
}
