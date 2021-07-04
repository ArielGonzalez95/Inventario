<?php

class home extends controller
{
    public function __construct()

    {
        $this->productos = $this->model('producto');


    }

    public function index()
    {
        $opcionesProductos = [
            'marcas' =>$this->productos->getOptionProducts('marca'),
            'presentacion'=>$this->productos->getOptionProducts('presentacion'),
            'proveedor' =>$this->productos->getOptionProducts('proveedor'),
            'zona' =>$this->productos->getOptionProducts('zona'),   
        ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
                $getProductos = $this->productos->filtrarProductos($_POST['buscar']);
               $datos =[
                'productos'=> $getProductos,
                'options'=>$opcionesProductos
                ];

            }else{
               $getProductos = $this->productos->leer();
               $datos =[
                'productos'=> $getProductos,
                'options'=>$opcionesProductos
                ];
            }
        
        $this->view('/pages/home', $datos);
        
    }

    public function registrar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datosProducto = [
                'marca' => trim($_POST['marca']),
                'presentacion' => trim($_POST['presentacion']),
                'proveedor' => trim($_POST['provedor']),
                'zona' => trim($_POST['zona']),
                'codigo' => trim($_POST['codigo']),
                'descripcion' => trim($_POST['descripcion']),
                'precio' => trim($_POST['precio']),
                'stock' => trim($_POST['stock']),
                'iva' => trim($_POST['iva']),
                'peso' => trim($_POST['peso']),

            ];
            

            if($this->productos->registrar($datosProducto)){
                redirection('/home');

            }else{

                redirection('/home');

            }
        }else{
            redirection('/home');
        }

    }

    public function eliminar($id)
    {
        if($this->productos->eliminar($id)){

            redirection('/home');

        }else{
            redirection('/home');
        }

    }

    public function editar($id)
    {

        
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $datosProducto = [
            'marca' => trim($_POST['marca']),
            'presentacion' => trim($_POST['presentacion']),
            'proveedor' => trim($_POST['provedor']),
            'zona' => trim($_POST['zona']),
            'codigo' => trim($_POST['codigo']),
            'descripcion' => trim($_POST['descripcion']),
            'precio' => trim($_POST['precio']),
            'stock' => trim($_POST['stock']),
            'iva' => trim($_POST['iva']),
            'peso' => trim($_POST['peso']),

        ];
        

        if($this->productos->actualizar($datosProducto , $id)){
            redirection('/home');

        }else{

            redirection('/home');

        }

     }else{
         $opcionesProductos = [
            'marcas' =>$this->productos->getOptionProducts('marca'),
            'presentacion'=>$this->productos->getOptionProducts('presentacion'),
            'proveedor' =>$this->productos->getOptionProducts('proveedor'),
            'zona' =>$this->productos->getOptionProducts('zona'),  


         ];
            $datos = [

                'producto'=>$this->productos->getProducto($id),
                'options'=>$opcionesProductos
            ];
            $this->view('/pages/editar', $datos);
     }

        

    }


}
