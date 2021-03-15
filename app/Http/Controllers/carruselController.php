<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carruselController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $carrusel = [
            ['imagen' => 'assets/imagenes/producto_fresco_1.PNG'],
            ['imagen' => 'assets/imagenes/producto_fresco_2.PNG'],
            ['imagen' => 'assets/imagenes/producto_fresco_3.PNG'],
            ['imagen' => 'assets/imagenes/producto_fresco_4.PNG'],
            ['imagen' => 'assets/imagenes/producto_fresco_5.PNG'],
            ['imagen' => 'assets/imagenes/producto_fresco_6.PNG'],
            ['imagen' => 'assets/imagenes/producto_fresco_7.PNG'],
        ];
        $carruselTitulo = [
            'Pollo entero sin menudos',
            'Pechuga con ala',
            'Pechuga sin ala',
            'Pechuga deshuesada',
            'Pierna y muslo',
            'Ala',
            'Bistec de pollo',
        ];
        $carruselMensaje = [
            'Delicioso pollo listo para cocinar.',
            'Tus partes favoritas del pollo en un solo paquete.',
            'Deliciosa pechuga lista para ser condimentada.',
            'Deliciosa pechuga sin hueso, lista para condimentar.',
            'Pieran y muslo, todo junto en tu paquete favorito.',
            'Deliciosas Alas de pollo para prepararlas a tu gusto.',
            'Sirvele a tu familia el delicioso bistec de pollo.',
        ];
        return view('producto', compact('carrusel', 'carruselTitulo', 'carruselMensaje'));
    }
}
