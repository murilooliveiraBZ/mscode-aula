<?php 
    require_once '/xampp/htdocs/CursoPHP/Treino/Aula3_Resposta/Interfaces/InterfaceCalculadora.php';
    
    class Divisao implements InterfaceCalculadora{
        public function Calcular(int $a, int $b):float
        {
            try {
            if ($b === 0) {
                throw new Exception("Divisão por zero não permitida");
            }
            return $a/$b; 
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
            return 0; 
        }
        }
    }
?>