<?php
/**
 * Created by PhpStorm.
 * User: 01248267257
 * Date: 15/02/2018
 * Time: 21:09
 */
include 'Aluno.php';
include 'Professor.php';

$aluno1 = new Aluno();

$aluno1->setNome("Jeano ferreira");
$aluno1->setIdade(25);
$aluno1->setSalario(1250.00);

echo $aluno1->getNome();
echo "<br>";
echo $aluno1->getIdade();
echo "<br>";
echo $aluno1->getSalario();

$prof = new Professor("Jeano",2589.89);
echo "<br>";

echo $prof->getNome(). " ganha ". $prof->getSalario();





