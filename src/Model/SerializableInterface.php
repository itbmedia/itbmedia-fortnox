<?php
namespace ITBMedia\FortnoxBundle\Modal;

interface SerializableInterface 
{
    public function serialize();
    public static function deserialize(string $string);

} 