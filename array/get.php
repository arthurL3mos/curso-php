<!--<div class="titulo">$_GET</div>
url = "http://cursophp.com/array/get.php?nome=Leo&sobrenome=Leit%C3%A3o"
-->

<?php
echo $_GET;
echo '<br>';
print_r($_GET);
echo "<br>{$_GET['nome']}";
