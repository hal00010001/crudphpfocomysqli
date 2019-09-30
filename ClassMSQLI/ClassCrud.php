<?php

class ClassCrud extends ClassConexao {
    
    #Atributos
    private $crud;
    private $contador;
    private $resultado;
    
    #Preparacao de declaracoes
    private function preparedStatements($query, $tipos, $parametros){
        $this->countParametros($parametros);
        $con = $this->conectaDB();
        $this->crud = $con->prepare($query);
        if($this->contador > 0){
            $callParametros = array();
            foreach($parametros as $key => $param){
                $callParametros[$key] = &$parametros[$key];
            }
            array_unshift($callParametros, $tipos);
            call_user_func_array(array($this->crud, 'bind_param'), $callParametros);
        }
        $this->crud->execute();
        $this->resultado = $this->crud->get_result();
    }
    
    #Contador de parametros
    private function countParametros($parametros){
        $this->contador = count($parametros);
    }
    
}
