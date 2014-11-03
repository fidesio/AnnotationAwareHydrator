<?php

require '../vendor/autoload.php';
require '../lib/flip111/AnnotationAwareHydrator/Annotation/Hydrate.php';
use flip111\AnnotationAwareHydrator\Hydrator\AnnotationAwareHydrator;
use flip111\AnnotationAwareHydrator\Annotation\Hydrate;

/**
 * Class MyObject
 */
class MyObject {
    /**
     * @Hydrate(target="Name")
     */
    public $prop1;

    /**
     * @Hydrate(target="Title")
     */
    public $prop2;

    /** @var   */
    public $prop3;
}

$hydrator = new AnnotationAwareHydrator();

$array2 = [
  'Title' => 'First',
  'Name' => 'Second'
];

// You can also pass in the $original instead of new MyObject
// this is just for reading the annotations.
$object = $hydrator->hydrate($array2, new MyObject);

var_dump($object);
