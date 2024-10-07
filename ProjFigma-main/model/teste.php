<?php
// Salvando os dados do formulário.
$valorEtanol = $_POST["valorEtanol"]; // Corrigido: nome da variável
$valorGasolina = $_POST["valorGasolina"]; // Corrigido: nome da variável
$rendEtanol = $_POST["rendEtanol"]; // Corrigido: nome da variável
$rendGasolina = $_POST["rendGasolina"]; // Corrigido: nome da variável

// Verifica se os rendimentos não são zero para evitar divisão por zero
if ($rendEtanol > 0) {
    $custoPorKmEtanol = $valorEtanol / $rendEtanol; 
} else {
    $custoPorKmEtanol = 0; // Para evitar erro de divisão por zero
}

if ($rendGasolina > 0) {
    $custoPorKmGasolina = $valorGasolina / $rendGasolina; 
} else {
    $custoPorKmGasolina = 0; // Para evitar erro de divisão por zero
}

// Exibindo resultados para o usuário.
if ($custoPorKmEtanol < $custoPorKmGasolina) {
    echo "Melhor abastecer com o tal do Etanol";
} else if ($custoPorKmEtanol > $custoPorKmGasolina) {
    echo "Melhor abastecer com a tal da Gasolina";   
} else {
    echo "Custo igual";
}
?>
