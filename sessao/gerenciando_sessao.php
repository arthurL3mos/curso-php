<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('jrdlt0apran9bu7gad2337e5nu');
session_start();
// jrdlt0apran9bu7gad2337e5nu
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] %  5 === 0) {
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}