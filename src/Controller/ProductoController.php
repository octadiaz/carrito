<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Negocio\Almacen;

class ProductoController extends AbstractController{
    /** @Route("/", name="listar_productos")*/
public function listarProductos(Almacen $almacen): Response{
    $productos = $almacen->findAll();
    return $this->render('producto/lista.html.twig', ['productos' => $productos]);
}

/** @Route("/{id}", name="detalle_producto") */
public function detalleProducto($id, Almacen $almacen){
    $productos = $almacen->find($id);
    return $this->render('producto/detalle.html.twig', ['productos' => $productos]);
    }
}


