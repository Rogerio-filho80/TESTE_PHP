<?php
// Declaração da função
function calcularMedia($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    return $media;
}

// Chamando a função e guardando o retorno numa variável
$notaAluno1 = 8.5;
$notaAluno2 = 9.0;
$resultado = calcularMedia($notaAluno1, $notaAluno2);

// Exibindo o resultado
echo "A média do aluno é: " . $resultado;
?>