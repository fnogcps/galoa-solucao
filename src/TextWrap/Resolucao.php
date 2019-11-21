<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução aqui.
 */
class Resolucao implements TextWrapInterface {

  /**
   * {@inheritdoc}
   */
  public function textWrap(string $text, int $length): array {
    $array = explode(" ", $text);
    $textWrapped[0] = '';
    $chaveF = 0;
      
    foreach ($array as $chave => $valor) {

      $tamanho = (strlen($textWrapped[$chaveF]) + strlen($valor));
        
      if ($tamanho <= $length) {
        $textWrapped[$chaveF] .= $array[$chave];
      } else {
        $chaveF++;
        $textWrapped[$chaveF] = $array[$chave];
      }

      $textWrapped[$chaveF] .= " ";
      $textWrappedOutput = array_map(function($e) { return trim($e); }, $textWrapped);
      
    }
    
    return $textWrappedOutput;
  }
}
