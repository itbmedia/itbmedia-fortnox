<?php
namespace ITBMedia\FortnoxBundle\Model;

interface SerializableInterface 
{
    public function serialize();
    public static function deserialize(string $string);

} 