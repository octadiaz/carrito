<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Producto;

class ProductoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
 {
    for ($i = 0; $i < 10; $i++) 
    {
    $producto = new Producto();
    $producto->setNombre('product '.$i);
    $producto->setPrecio(mt_rand(10, 100));
    $producto->setDescripcion('a');
    $producto->setImagen('b');
    $manager->persist($producto);
   }
   $manager->flush();
 }

}
