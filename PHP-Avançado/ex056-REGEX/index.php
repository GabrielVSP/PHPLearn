<?php 

    echo "<h2>Estrutura</h2>";

    $pattern = '/drive/'; //indicam ínicio e fim da expressão regular, tudo entre as barras éa expressão
    $source = 'Omega Industries - drive';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>ínicio e fim</h2>";

    /*$pattern = '/^drive/';  Modificador ^, procura pela expressão no ínicio da frase*/
    //$pattern = '/drive$/'; //Modificador $ no final faz o contrário, procura no final da frase
    $pattern = '/^drive$/'; //é possível usa-los juntos, a frase precisa começar e terminar com a expressão
    $source = 'drive';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>Conjuntos de caracteres</h2>";

    //$pattern = '/[drive]/'; //O conjunto é definido pelo colchete, o conjunto checa por cada caractre, não importando a ordem
    //$pattern = '/[a-zA-Z]/'; //Intervalo de A até Z, é case sensitive
    //$pattern = '/[4-9]/'; //Intervalo de números
    $pattern = '/[a-zA-Z0-9\-]/'; //Misturando os dois, para validar hífen -, é necessário a contrabarra
    $source = 'Drive-134s';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>Ocorrências definidas</h2>";

    //$pattern = '/^[0-9]{2}/'; //Indica que deve começar com 2 caracteres ^{2} que estejam entre 0-9
    $pattern = '/^[0-9]{4}[a-z]{2,5}$/'; //Deve começar com 4 caractres númericos entre 0 e 9, ^[0-9]{4} e terminar com 2 a 5 caracteres entre a e z, [a-z]{2,5}$
    $source = '2023drive';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>Nenhuma ou uma ocorrência</h2>";

    $pattern = '/jpe?g/'; //O modificador ? torna o caractre ou conjunto anterior opcional, no caso o 'e', então ele pode aparecer ou não, apenas uma vez
    $source = 'jpg';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>Nenhuma ou N ocorreências</h2>";

    //$pattern = '/te*ste*/'; //O modificador * torna o caractere ou conjunto anterior opcional, podendo aparecer várias ou nenhuma vez
    $pattern = '/^teste.*legal$/'; //O modificador .* torna opcional qualqur coisa entre a expressão(teste legal)
    $source = 'teste drive legal';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>Ao menos uma ocorrências</h2>";

    $pattern = '/^[0-9a-zA-z\-]+\.txt$/'; //O modificador + checa se o que antecede ele acontece uma vez ou mais dentro da string
    $source = 'teste.txt';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>Grupos</h2>";

    $pattern = '/^([0-9a-zA-z\-]+)(\.txt)$/'; //Grupos são definidos por estarem entre parênteses (), eles são úteis para formatar, obter, substituir dados, devido ao $matches abaixo.
    $source = 'teste.txt';
    $result = preg_match($pattern, $source, $matches);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; print_r($matches); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>Replace com grupo (formatação)</h2>";

    $pattern = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/'; //Expressão de um cpf
    $source = '12345678910';
    $result = preg_match($pattern, $source, $matches);
    $replace = preg_replace($pattern, '$1.$2.$3-$4', $source); //Essa função substitui grupos da string, $1 = grupo 1, o . é apaenas o caractre que vem depois, assim como o hífen, $2 = grupo 2, $3- = grupo 3 e depois o hífen

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; print_r($matches); echo "</pre>";
    echo "<pre>"; print_r($replace); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";


?>