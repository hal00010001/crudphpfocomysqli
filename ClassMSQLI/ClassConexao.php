<?php

abstract class ClassConexao {
    
    #Realizara a conexao com o banco de dados
    protected function conectaDB(){
        try {
            $Con = new msqli("localhost", "root", "", "idioma");            
            return $Con;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
    
}
