<?php 
    require_once '/xampp/htdocs/CursoPHP/Treino/Aula3_Resposta/Interfaces/InterfaceCalculadora.php';
    
    class Multiplicacao implements InterfaceCalculadora{
        public function Calcular(int $a, int $b):Int
        {
            return $a * $b;
        }
    }
?>