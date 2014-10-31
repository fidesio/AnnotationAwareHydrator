<?php
namespace flip111\AnnotationAwareHydrator\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
class Hydrate
{
    public $target;
    public $preFilters;
    public $postFilters;
    public $modifier;
}
