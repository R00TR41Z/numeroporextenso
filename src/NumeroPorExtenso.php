<?php
  namespace R00TR41Z\NumeroExtenso;
  use \Exception;

  class NumeroPorExtenso {
    private $coin;
    private $coins = [
        'metical'=>[
          'metical',
          'meticais'
        ],

        'real'=>[
          'real',
          'reais'
        ],
        'euro'=>[
          'euro',
          'euros'
        ],
        'kwanza'=>[
          'kwanza',
          'kwanzas'
        ]

      ];

    public function __construct($coin)
    {

      if(!array_key_exists($coin,$this->coins)){
        exit('Moeda não reconhecida penas (real,metical,euro e kwanza)');
      }

      $this->coin = $coin;

    }

    public function converter($numeral=null) {
      if (is_null($numeral)) {
        return 'Informe um numeral.';
      }
      else if (!is_numeric($numeral) || $numeral <= 0) {
        return 'O numeral deve ser maior que zero.';
      }
      else {
        return $this->extenso($numeral);
      }

    }

    private function extenso($valor = 0) {


      $singular = array("centavo", $this->coins[$this->coin][0], "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
      $plural = array("centavos", $this->coins[$this->coin][1], "mil", "milhões", "bilhões", "trilhões","quatrilhões");
      $c = array("", "cem", "duzentos", "trezentos", "quatrocentos","quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
      $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta","sessenta", "setenta", "oitenta", "noventa");
      $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze","dezesseis", "dezessete", "dezoito", "dezenove");
      $u = array("", "um", "dois", "três", "quatro", "cinco", "seis","sete", "oito", "nove");

      $z = 0;
      $valor = number_format($valor, 2, ".", ".");
      $inteiro = explode(".", $valor);
      $count = count($inteiro);
      $rt = "";

      for ($i = 0; $i < $count; $i++) {
        for ($ii = strlen($inteiro[$i]); $ii < 3; $ii++) {
          $inteiro[$i] = "0" . $inteiro[$i];
        }
      }

      $fim = count($inteiro) - ($inteiro[count($inteiro) - 1] > 0 ? 1 : 2);

      for ($i = 0; $i < count($inteiro); $i++) {
        $valor = $inteiro[$i];

        $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];

        $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];

        $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

        $r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd && $ru) ? " e " : "") . $ru;

        $t = count($inteiro) - 1 - $i;

        $r .= $r ? " " . ($valor > 1 ? $plural[$t] : $singular[$t]) : "";

        if ($valor == "000") {
          $z++;
        } elseif ($z > 0) {
          $z--;
        }

        if (($t == 1) && ($z > 0) && ($inteiro[0] > 0)) {
          $r .= (($z > 1) ? " de " : " ") . $plural[$t];
        }

        if ($r) {
          $rt = $rt . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : "") . $r;
        }
      }

      return($rt ? $rt : "zero");
    }
  }