<?php

namespace App\Services;

use App\Collections\GenericCollection;
use App\Entities\Animal;
use App\Entities\Cat;
use App\Entities\Dog;

class GenericCollectionConsumer
{
    /**
     * @param GenericCollection<Animal> $collection
     */
    public function addAnimal(GenericCollection $collection): void
    {
        $collection->add(new Cat());
    }

    /**
     * @param GenericCollection<Dog> $dogCollection
     */
    public function takesDogList(GenericCollection $dogCollection) : void
    {
        $this->addAnimal($dogCollection);
    }
}
