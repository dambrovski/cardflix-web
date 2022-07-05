<?php


$nome = "";
$curso = "";
$rgm = "";
$codValidador = "";

$data = "";
$newData = "";

$data = $_GET['data'];

$codValidador = $_GET['data'];
$codValidador = md5($codValidador);


$newData = base64_decode($data);

$dataProcessed = explode("&", $newData);

$nome = $dataProcessed[0];
$nome = substr($nome, 6, strlen($nome));

$curso = $dataProcessed[1];
$curso = substr($curso, 6, strlen($curso));

$rgm = $dataProcessed[2];
$rgm = substr($rgm, 4, strlen($rgm));


?>

<html>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">

<title>Meia-entrada estudantil</title>

<div style="background-color:#005E9E; height: 100px;">
<img src="./assets/meia-entrada.png" height="90" class="d-inline-block align-top" alt="Logo">
</div>
<body>
<div style="color:#005E9E;font-family: 'Rubik', sans-serif;">
<table>
<tr>
<td><p style="margin-left:10px; font-size:25px; color:#005E9E;font-family: 'Rubik', sans-serif;">Validação de CIE (Carteira de Identificação Estudantil)</p></td>
<td><img src="./assets/check.png" style="margin-left:10px;" height="60" width="60"alt="Logo"></td>
</tr>
</table>
</div>

<div style="background-color:#DDDDDD; border-radius:12px; margin-left:10px; height: 300px; width:700px; font-family: 'Rubik', sans-serif;">
<img src="./assets/colleges/02.png" style="margin-left:10px; margin-top: 10px;" height="60" width="200" class="d-inline-block align-top" alt="Logo">

<p style="margin-left:10px;"><b>ALUNO:</b> <?php echo $nome ?></p>
<p style="margin-left:10px;"><b>CURSO:</b>  <?php echo $curso ?></p>
<p style="margin-left:10px;"><b>RGM:</b>  <?php echo $rgm ?></p>
<p style="margin-left:10px;"><b>VALIDADE:</b> 12/2023</p>
<h4 style="margin-left:10px; margin-top:40px;">CÓDIGO VALIDADOR:  <?php echo $codValidador ?></h4>
</div>
<footer>
<div style="background-color:#222F40; font-family: 'Rubik', sans-serif; color:white; font-size:30px; margin-top:30px; height: 350px; text-align: center;">
<h2>meiaentrada.org.br</h2>
<table style="margin-left:35px;">
<tr>
<td><h2><a style="color:#F2B035;" title="Home" href="https://www.meiaentrada.org.br/" >Home</a ></h2></td>
</tr>
<tr>
<td><h2><a style="color:#F2B035;" title="O que diz a lei" href="https://www.meiaentrada.org.br/lei" >Lei da Meia-entrada</a></h2></td>
</tr>
<tr>
<td><h2><a style="color:#F2B035;" title="Validador oficial da CIE" href="https://www.meiaentrada.org.br/chaves-publicas" >Chaves públicas</a></h2></td>
</tr>
<tr>
<td><h2><a style="color:#F2B035;" title="Perguntas e Respostas" href="https://www.meiaentrada.org.br/perguntas-e-respostas" >FAQ</a ></h2></td>
</tr>
</table>

<div class="text-center mt-4"> <span >@Meiaentrada.org.br - Todos os Direitos Reservados 2022</span > </div> </div>
</div>




</footer>
</body>





