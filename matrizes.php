<?php 
// 23.	Escreva um programa que procure e indique o maior valor (e a respectiva posição) de uma matriz de 5 posições introduzido pelo utilizador.
$highValue = [];
$values = [];

for($i=0; $i<5; $i++){
    echo "Digite um valor : ";
    $highValue[] = intval(fgets(STDIN));
}

$maxValue = max($highValue);
echo "O maior número é {$maxValue}. \n";
echo "Ele(s) aparecem na posição(ões): \n";
print_r(array_keys($highValue,$maxValue));



// 22.	Crie um programa que ordene uma matriz de 10 elementos por ordem crescente e decrescente.
$matriz = [1,2,3,4,5];
echo "Decrescente: \n";
arsort($matriz);
print_r($matriz);
echo "Crescente: \n";
asort($matriz);
print_r($matriz);


// 21.	Escreva um programa para determinar o valor mais comum numa matriz de inteiros. Teste com uma matriz de 20 posições preenchido aleatoriamente com valores entre 0 e 10.
$comumValues = [];
for ($i=0; $i <20; $i++){
    $comumValues[] = rand ( 0, 10 );
}
$repeatValues = array_count_values($comumValues);
arsort($repeatValues, false);
print_r($repeatValues);
$firstKey = key($repeatValues); 
$firstValue = reset($repeatValues);

echo "O Maior valor é {$firstKey} e ele aparece {$firstValue} vezes. \n";



// 20.	Crie um programa que simule 100 lançamentos de 2 dados, guarde os resultados em matrizes e produza uma estatística.
$diceOne = [];
$diceTwo = [];

for($i=0; $i < 50; $i++){
    $diceOne[] = rand(1,6);
    $diceTwo[] = rand(1,6);
}

// FIRST DICE
$repeatValuesDiceOne = array_count_values($diceOne);
arsort($repeatValuesDiceOne, false);
// print_r($repeatValues);
echo "No primeiro dado \n";
foreach($repeatValuesDiceOne as $diceValue => $value){
    echo "O número {$diceValue} aparece {$value} vezes \n";
}

$firstKeyDiceOne   = key($repeatValuesDiceOne); 
$firstValueDiceOne = reset($repeatValuesDiceOne);

echo "O Maior valor é {$firstKeyDiceOne} e ele aparece {$firstValueDiceOne} vezes. \n";


// SECOND DICE
$repeatValuesDiceTwo = array_count_values($diceTwo);
arsort($repeatValuesDiceTwo, false);
// print_r($repeatValues);
echo "\nNo segundo dado \n";
foreach($repeatValuesDiceTwo as $diceValue => $value){
    echo "O número {$diceValue} aparece {$value} vezes \n";
}

$firstKeyDiceTwo   = key($repeatValuesDiceTwo); 
$firstValueDiceTwo = reset($repeatValuesDiceTwo);

echo "O Maior valor é {$firstKeyDiceTwo} e ele aparece {$firstValueDiceTwo} vezes. \n \n";



// 19.	Escreva um programa que leia as notas de um determinado número alunos a um conjunto de disciplinas. O número de alunos e o número
// de disciplinas são introduzidos pelo utilizador. Os valores das notas deverão estar entre 0 e 20 e guardados numa matriz. Depois deverá
//indicar a média de cada aluno, a nota mais alta, a nota mais baixa, a média de cada disciplina e o número de alunos com média superior a 9,5.

$students = [];
$disciplines = [];
$bestMedias = 0;

echo "Quando alunos quer incluir: ";
$numberStudents = intval(fgets(STDIN));
echo "Quando disciplinas quer incluir: ";
$numberDisciplines = intval(fgets(STDIN));
$avarageDisciplines = [];
for($i=1; $i <= $numberDisciplines; $i++){
    echo "Qual o nome da matéria {$i}: ";
    $discipline = strval(fgets(STDIN));;
    $disciplines[] = $discipline;

    $avarageDisciplines[$discipline] = 0;
    
}

for($i=1; $i <= $numberStudents; $i++){
    echo "Quais as notas do aluno {$i} \n";
    for($d = 0; $d < $numberDisciplines; $d++){
            echo "Qual a nota da matéria {$disciplines[$d]}: ";
            $disciplineValue = intval(fgets(STDIN));;
            
            $student[$disciplines[$d]] = $disciplineValue;
    }
    $students[] = $student;
}

// Indicar a média de cada aluno, a nota mais alta
echo "As médias de cada aluno: \n";
for ($x=0; $x < sizeof($students); $x++)
{
    $mediaStudent = 0;
    $student = $students[$x];
    $disciplines = [];
    foreach($student as $key => $notes){
        $mediaStudent += $notes;
        
        $avarageDisciplines[$key] = $notes + $avarageDisciplines[$key];
    }

    $mediaDiscipline = 0;
    $mediaDiscipline += $mediaStudent;

    

    // média de cada aluno
    $mediaStudent = ($mediaStudent / $numberDisciplines);
    echo "\n O Aluno " . $x . " tem a média: " . $mediaStudent . "\n";

    // número de alunos com média superior a 9,5.
    if($mediaStudent > 9.5){
        $bestMedias++;
    }
    
    // a nota mais alta
    $highNote = max($student);
    echo "A nota mais alta do Aluno " . $x . " foi de : " . $highNote . "\n";

    // a nota mais baixa
    $lowNote = min($student);
    echo "A nota mais baixa do Aluno " . $x . " foi de : " . $lowNote . "\n";

    // a media de cada disciplina
    foreach($avarageDisciplines as $mediaDiscipline){
        $mediaDiscipline = $mediaDiscipline / $numberStudents;
        echo "A média da disciplina " . key($avarageDisciplines) .  "é de " . $mediaDiscipline . "\n";
    }
}
if($bestMedias == 0)
echo "Nenhum aluno teve média maior que 9,5 \n";
else
echo "{$bestMedias} aluno(s) teve(tiveram) média(s) maior(es) que 9,5 \n";



// 18** .	Crie um programa para determinar o maior valor entre as posições de duas matrizes e colocar o resultado numa 3º matriz.
$arrayValueOne = [2,4,6,8,10];
$arrayValueTwo = [1,3,5,7,9];
$arrayValueThree = [];


echo "Digite a posição que quer do primeiro array: ";
$valueOne = intval(fgets(STDIN));
echo "Digite a posição que quer do primeiro array: ";
$valueTwo = intval(fgets(STDIN));

if($arrayValueOne[$valueOne] > $arrayValueTwo[$valueTwo]){
    $arrayValueThree[] = $arrayValueOne[$valueOne];
    print_r($arrayValueThree);
}else{
    $arrayValueThree[] = $arrayValueOne[$valueTwo];
    print_r($arrayValueThree);
}
    
// 17.	Crie um programa para somar 2 matrizes de tamanhos diferentes e colocar o resultado numa 3º matriz.
$arrayOne = [2,4,6,8];
$arrayTwo = [1,3,5,7,9];
$arraySum = (array_sum($arrayOne) + array_sum($arrayTwo));
echo "A soma dos dois arrays é: {$arraySum}\n";

// 16.	Escreva um programa que peça as idades de 8 alunos de uma turma. O programa deve guardar estes valores
// numa matriz e no final indicar a idade máxima, idade mínima e média da turma.

$students = [];

for($i=1; $i < 9; $i++){
    echo "Digite a idade do aluno {$i}: ";
    $students[] = intval(fgets(STDIN));
}

$maxAge = max($students);
$minAge = min($students);
$mediaAge = (($maxAge - $minAge)/2) + $minAge;
echo "A maior idade é {$maxAge} anos. \n";
echo "A menor idade é {$minAge} anos. \n";
echo "A média de idade da turma é de {$mediaAge} anos. \n";


// 15.	Crie um programa que conte o número de números primos numa matriz de inteiros.
$primeNumbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$primeCount = 0;
$primeNumbers20 = [];

function checkPrimeNumber($number)
{
 for($i=2; $i<$number; $i++){
      if($number % $i == 0)
	      {
		   return false;
		  }
  }
  return true;
}

foreach($primeNumbers as $primeNumber){
    $prime = checkPrimeNumber($primeNumber);
    if($prime){
        $primeCount++;
        $primeNumbers20[]= $primeNumber;
    }


}
echo "São {$primeCount} números primos até 20. São: \n";
print_r($primeNumbers20);
echo "\n";


// 14.	Escreva um programa que inverta a ordem dos elementos de uma matriz de inteiros.
$arrayInverse = [1,2,3,4,5];
arsort($arrayInverse);
print_r($arrayInverse);

// 13.	Escreva um programa que verifique se todos os elementos de uma determinada matriz existem noutra matriz.

$arrayA = ['php','javascript','html','css','c#','teste2'];
$arrayB = ['c#','php','javascript','html','css'];
$compare = array_diff($arrayA,$arrayB);

if(count($compare) == 0 )
    echo "Todos os elementos são iguais em ambos arrays \n";
else{
    echo "Estes elementos são diferentes nos arrays: \n";
    print_r($compare);
}


//12.	Crie um programa que leia uma matriz de inteiros cujo tamanho será introduzido pelo utilizador, tamanho esse que nunca será inferior a 5 ou superior a 25.
//O programa deverá indicar ao utilizador se a matriz é constituída (ou não) por valores pares e ímpares alternados. Exemplo: A matriz [1,2,5,6,3,2] verifica esta condição.

$intNumbers = [];
$value = true;
$alternativeNumbers = true;

while($value){
    echo "Qual o tamanho da matriz (valor entre 05 e 25): ";
    $maxValues = intval(fgets(STDIN));
    if($maxValues >= 5 && $maxValues <= 25)
    $value = false;
    else
    echo "Digite um valor entre 5 e 25! \n";
}

for($i=0; $i < $maxValues; $i++){
    echo "Digite o valor da posição {$i}: ";
    $intNumbers[] = intval(fgets(STDIN));;
}

for($i=0; $i < $maxValues; $i++){

    if(isset($intNumbers[$i - 1])){

        if ($intNumbers[$i - 1] % 2 == $intNumbers[$i] % 2 ){
            $alternativeNumbers = false;
        }
        
        if ($intNumbers[$i - 1] % 3 == $intNumbers[$i] % 3 ){
            $alternativeNumbers = false;
        }
    }

}
if ($alternativeNumbers == true) {
    echo "Os valores são alternadors \n";
}
else
    echo "Os valores não são alternados \n";




// 11.	Escreva um programa que indique se todos os valores de uma matriz são iguais, se são todos diferentes, ou se há valores repetidos na matriz.
$valuesCompare = [];
for ($i=0; $i<5; $i++){
    echo "Digite um valor : ";
    $valuesCompare[] = intval(fgets(STDIN));
}
$compareValues = count($valuesCompare);

if (count(array_unique($valuesCompare)) === 1 ){ 
    echo"todos os valores são iguais";
    
}elseif
 ($compareValues > count(array_unique($valuesCompare))){ 
    echo"possui valores iguais";
}

if($compareValues == count(array_unique($valuesCompare))){
    echo "todos os valores são diferentes";
}


// 10.	Crie um programa que leia uma matriz de 4 inteiros. Os valores deverão estar no intervalo [0,100].
// O programa não deverá aceitar valores fora deste intervalo. O programa deverá indicar a soma dos inteiros múltiplos de 5 existentes na matriz.
$intervalNumbers = [];
$multipleBy5 = 0;

for($i=0; $i<4; $i++){  
    do{
        echo "Digite um número : ";
        $intNumber = intval(fgets(STDIN));
        if($intNumber > 0 && $intNumber <100)
            $intervalNumbers[] = $intNumber;
    } while (!($intNumber > 0 && $intNumber <100));
}

foreach($intervalNumbers as $intervalNumber){
    if($intervalNumber % 5 == 0)
    $multipleBy5 += $intervalNumber;
}

echo "A soma dos números divisíveis por 5 dessa matriz é: {$multipleBy5} \n";


// 9.	Escreva um programa que preencha uma matriz de 20 posições com os primeiros 20 números primos.
function checkPrimeNumber21($number)
{
 for($i=2; $i<$number; $i++){
      if($number % $i == 0)
	      {
		   return false;
		  }
  }
  return true;
}

$primeNumbers = [];

for($i=0; $i<20; $i++){
    $primeNumber = checkPrimeNumber21($i);
    if($primeNumber)
    $primeNumbers[] = $i;
}
echo "Os primeiros números primos até 20 são: \n ";
print_r($primeNumbers);
echo "\n";


// 8.	Crie um programa que leia 4 números reais, coloque-os numa matriz e calcule a sua média.

$realNumbers = [];

for($i=0; $i <4; $i++){
    echo "Digite um número : ";
    $realNumbers[] = intval(fgets(STDIN));
}

$media =  array_sum($realNumbers) / count($realNumbers);
echo "Média de {$media} \n"; 


// 7.	Crie um programa que leia uma matriz de n inteiros, sendo n um valor introduzido pelo utilizador, não havendo restrições. O programa 
//deverá converter todos os valores negativos da matriz para 0, imprimir a matriz resultante e indicar quantos valores foram alterados.

$negativesToZero = [];
echo "Quantos valores quer adicionar? ";
$nNumbers = intval(fgets(STDIN));
$changeNumbers = 0;

/* for($i=0; $i < $nNumbers; $i++){
    echo "Digite um valor: ";
    $number = intval(fgets(STDIN));
    if($number < 0){
        $number = 0;
        $negativesToZero[] = $number;
        $changeNumbers++;
    }else{
        $negativesToZero[] = $number;
    }
}
*/

// OR

for($i=0; $i < $nNumbers; $i++){
    echo "Digite um valor: ";
    $negativesToZero[]  = intval(fgets(STDIN));
}
foreach ($negativesToZero as $negativeToZero){
    if ($negativeToZero < 0){
        $negativeToZero = 0;
        $changeNumbers++;
    }
}

echo "Foram alterado {$changeNumbers} para zero na matriz \n";


// 6.	Crie um programa que leia um conjunto de valores inteiros do utilizador e os coloque numa matriz. O programa deverá terminar a leitura quando for introduzido um número que 
//já exista na matriz, ou seja, quando for introduzido um número repetido. No final deverá apresentar a matriz.
$values = [];

    $equalValue = false;

    do{

        echo "Digite um número x: ";
        $number = intval(fgets(STDIN));

        if(!(in_array($number, $values))){
            $values[] = $number;
        }
        else
        $equalValue = true;

    } while($equalValue == false);

    print_r($values);


// 5.	Crie um programa que leia uma matriz de 4 valores inteiros do utilizador, não permitindo a introdução de valores repetidos.

$repeatValues = [];
for($i=0; $i < 4; $i++){
    $equalValue = true;
    while($equalValue == true){
        echo "Digite um número : ";
        $number = intval(fgets(STDIN));
        if(!(in_array($number, $repeatValues))){
            $equalValue = false;
            $repeatValues[] = $number;
        }
        else    
            echo "O número {$number} já existe no array... \n";
    }
}

echo "A matriz ficou com os seguintes valores: \n";
print_r($repeatValues);


//4.	Escreva um programa que determine o 2º maior valor de uma matriz.
$secondValue = [];
for($i=0; $i < 4; $i++){
    echo "Digite o número na posição {$i} do array: ";
    $secondValue[] = intval(fgets(STDIN));
}
rsort($secondValue);
echo "O segundo maior valor é {$secondValue[1]} \n";


// 3.	Crie um programa que apresente a soma de todos os valores de uma matriz de inteiros de 4 posições. Os valores devem ser introduzidos pelo utilizador.

$sumValues = [];

for($i=0; $i < 4; $i++){
    echo "Digite o número na posição {$i} do array: ";
    $sumValues[] = intval(fgets(STDIN));
}

$sum = array_sum ($sumValues);
echo "A soma dos valores é: {$sum} \n";

// 2.	Escreva um programa que leia 4 valores inteiros entre 1 e 10 e insira-os numa matriz. Depois, o utilizador deverá indicar um valor e o programa deverá 
//indicar em que posição ou posições onde se en contra esse mesmo valor. Se o valor não existir na matriz o programa deverá dar a respetiva mensagem.

$intNumbers = [];

for($i = 0; $i < 4; $i++){
    echo "Digite o número na posição {$i} do array: ";
    $intNumbers[] = intval(fgets(STDIN));
}

echo "Qual o valor quer buscar? ";
$searchValue = intval(fgets(STDIN));
$key = array_search($searchValue, $intNumbers ); 

if($key == false)
    echo "não existe o valor {$searchValue} no array";
else
    echo "o valor {$searchValue} está na posição {$key} no array. \n";


// 1-1 Escreva um programa que preencha uma matriz de 100 posições com os primeiros 100 números pares.

$oddNumbers = [];

for($i=0; $i<100; $i++ ){
    if($i % 2 == 0){
        $oddNumbers[] = $i;
    }
}
foreach ($oddNumbers as $oddNumber){
    echo "{$oddNumber} \n";
}

/* OR 
print_r($oddNumbers);
*/


// 1 -	Escreva um programa que procure e indique o maior valor (e a respetiva posição) de uma matriz de 4 posições introduzido pelo utilizador. 

$positions = [];

for($i = 0; $i < 4; $i++){
    echo "Digite o número na posição {$i} do array: ";
    $positions[] = intval(fgets(STDIN));
}
$maxValue= max($positions);
$key = array_search($maxValue, $positions); 
echo "O maior valor é: {$maxValue} e e está na posição: {$key}. \n";


