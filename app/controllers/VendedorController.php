<?php 
class VendedorController extends BaseController {
 
    public function mostrarVendedores(){
        $vendedores = vendedor::all();
        // obtenemos todos los vendedores y los pasamos a la vista
        return View::make('vendedor.lista', array('vendedores' => $vendedores));
    }
 
    public function crearVendedor(){
        
        // llamamos a la función de agregar vendedor en el modelo y le pasamos los datos del formulario
        $respuesta = vendedor::agregarVendedor(Input::all());
        
        // Dependiendo de la respuesta del modelo
        // retornamos los mensajes de error con los datos viejos del formulario
        // o un mensaje de éxito de la operación
        if ($respuesta['error'] == true){
            return Redirect::to('vendedor')->withErrors($respuesta['mensaje'] )->withInput();
        }else{
            return Redirect::to('vendedor')->with('mensaje', $respuesta['mensaje']);
        }
    }
} 
?>