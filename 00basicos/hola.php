<?php
// solo para comentarios de una linea.
/* para comentarios de multiples lineas
*/
// echo es utulizado al igual que console.log
echo ("hola mundo <br />");

echo ("hola <br /><h1> Esto es php!!</h1>");
// ahora las variables!!
// todas la variables se escriben con el signo de pesitos, es decir $.
//php es key sensitive, es decir que cada variable anque se llame igual cambia su valor si es que esta escrito con mayuscula o minuscula al comienzo.
// siemore que queramos renderizar algo tenemos que usar la palabra echo.
$nombre="concatenar";
$Nombre="variables";
echo $Nombre.$nombre;
// ahora para lograr tener un espacio en la concatenacion agregamos ."&nbsp;".
echo $Nombre."&nbsp;".$nombre;
echo"<br />";
$num1=5;
$num2=78;

$suma = $num1 + $num2;

echo $suma;
//para que en pantalla se renderize lo siguiente por completo y muestre el simbolo de pesitos lo que tenem,os que hacer es poner la barra, es decir asi /
// a continuacion el ejemplo:
echo "<br /> La Variable \$suma tiene el valor de $suma";





 ?>