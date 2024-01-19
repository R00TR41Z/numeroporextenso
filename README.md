# Número por extenso

### Converte numeros em valor por extenso.
### Suporte para as seguintes moedas:
- Metical - Moçambicano
- Real - Brazileiro
- Euro - Portugues
- Kwanza - Angolano

### Como usar:

https://packagist.org/packages/r00tr41z/numeroporextenso

```bash
composer require r00tr41z/numeroporextenso
```
#Metical

```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$extenso = new NumeroPorExtenso('metical')
$extenso = $extenso->converter(123.45);
echo $extenso;
// cento e vinte três meticais e quarenta cinco centavos
```

```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$vazio = new NumeroPorExtenso('metical')
$vazio = $extenso->converter();
echo $vazio;
// Informe um numeral.
```


```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$negativo = new NumeroPorExtenso('metical');
$negativo = $extenso->converter(-1);
echo $negativo;
// O numeral deve ser maior que zero.
```


#real

```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$extenso = new NumeroPorExtenso('real')
$extenso = $extenso->converter(123.45);
echo $extenso;
// cento e vinte três reais e quarenta cinco centavos
```

```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$vazio = new NumeroPorExtenso('real')
$vazio = $extenso->converter();
echo $vazio;
// Informe um numeral.
```


```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$negativo = new NumeroPorExtenso('real');
$negativo = $extenso->converter(-1);
echo $negativo;
// O numeral deve ser maior que zero.
```


#Euro

```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$extenso = new NumeroPorExtenso('euro')
$extenso = $extenso->converter(123.45);
echo $extenso;
// cento e vinte três euros e quarenta cinco centavos
```

```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$vazio = new NumeroPorExtenso('euro')
$vazio = $extenso->converter();
echo $vazio;
// Informe um numeral.
```


```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$negativo = new NumeroPorExtenso('euro');
$negativo = $extenso->converter(-1);
echo $negativo;
// O numeral deve ser maior que zero.
```


#Kwanza

```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$extenso = new NumeroPorExtenso('kwanza');
$extenso = $extenso->converter(123.45);
echo $extenso;
// cento e vinte três kwanzas e quarenta cinco centavos
```

```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$vazio = new NumeroPorExtenso('kwanza')
$vazio = $extenso->converter();
echo $vazio;
// Informe um numeral.
```


```php
include __DIR__.'/vendor/autoload.php';

use R00TR41Z\NumeroExtenso\NumeroPorExtenso;

$negativo = new NumeroPorExtenso('kwanza');
$negativo = $extenso->converter(-1);
echo $negativo;
// O numeral deve ser maior que zero.
```





## Exemplos:
Consulte o arquivo https://github.com/R00TR41Z/numeroporextenso/blob/master/example/index.php

## Creditos 

https://github.com/wgenial

## Note: Esse pacote é uma replica da versão original https://github.com/wgenial/numeroporextenso-php 

## Afinal, o que é um número por extenso?
> "Um número por extenso é a forma como um número qualquer é representado em determinada língua sem a utilização de algarismos, através de palavras ou combinação de palavras que representam os números, como por exemplo" [Wikipédia](https://pt.wikipedia.org/wiki/Número_por_extenso)