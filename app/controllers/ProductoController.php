<?php 
class ProductoController extends BaseController {
 
    public function mostrarProductos(){
 
        $productos = producto::all();
        $vendedores = vendedor::all();
        // buscamos todos los productos y todos los vendedores y los pasamos a la vista
        return View::make('producto.lista', array('productos' => $productos, 'vendedores'=> $vendedores));
    }
 
    public function crearProducto(){
 
        $respuesta = producto::agregarProducto(Input::all());
        
        if ($respuesta['error'] == true){
            return Redirect::to('producto')->withErrors($respuesta['mensaje'] )->withInput();
        }else{
            return Redirect::to('producto')->with('mensaje', $respuesta['mensaje']);
        }
    }
}
?>