<?php
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo roxo">
                    <h3>13. Algoritmo Bcrypt</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=bcrypt&file=bcrypt">
                                Bcrypt
                            </a>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>13. API</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=api&file=datas_01">
                                Datas #01
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=datas_02">
                                Datas #02
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>12. Sessão</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=sessao&file=basico_sessao">
                                Sessão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=sessao&file=gerenciando_sessao">
                                Gerenciando Sessão
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>11. Trat. de Erros</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=gerenciador_erro">
                                Error Handler
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">
                                Erros Personalizados
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tratamento_erro&file=try_catch">
                                Try/Catch
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo laranja-escuro">
                    <h3>10. Namespace</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=use_as">
                                Use/As
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=sub_namespaces">
                                Sub-Namespaces
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=namespace">
                                Exemplo Básico
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>9. Includes</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include_once">
                                Include Once
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=require_return">
                                Require vs Return
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include_require">
                                Include vs Require
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include">
                                Include
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include_funcao">
                                Include Função
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>8. Paradgma O.O.</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=polimorfismo">
                                Polimorfismo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=magic_methods">
                                Métodos Mágicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=trait_02">
                                Trait #02
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=trait_02">
                                Trait #02
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=trait_01">
                                Trait #01
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=final">
                                Modificador Final
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=desafio_erros">
                                Desafio Erros
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=abastract">
                                Classe Abastrata
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=interface">
                                Interface
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=static">
                                Membros Estáticos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=heranca">
                                Herança
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classe_objetos&file=visibilidade">
                                Visibilidade
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>7. Funções</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=map_filter">
                                Map e Filter
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=retornando_funcao">
                                Retornando Função
                            </a>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=desafio_recursao">
                                Desafio Recursão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=fatorial_recursiva">
                                Desafio Fatorial com Recursividade
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=recursividade">
                                Recursividade
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=clousure_callable">
                                Clousure e Callable
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=anonimas">
                                Fuções Anônimas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=usando_tipos">
                                Usando Tipos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=arg_padrao">
                                Argumento Padrão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=args_variaveis">
                                Argumentos Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=palindromo">
                                Desafio Palindromo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=escopo">
                                Função & Escopo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=args_retorno">
                                Argumentos e Retornos
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>6. Repeticoes</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=for">
                                Laço For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_for">
                                Desafio For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=foreach">
                                Foreach
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=break_continue">
                                Break / Continue
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_impressao">
                                Desafio Impressão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=while">
                                While/Do While
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_tabela">
                                Desafio Tabela
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=repeticoes&file=desafio_tabela_2">
                                Desafio Tabela 2
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>5. Array</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=basico">
                                Array
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=mapa">
                                Mapa
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_index">
                                Desafio Index
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_meses">
                                Desafio Meses
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=operacoes">
                                Operações
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=sorteio">
                                Sorteio
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=multi">
                                Multidimensionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=constantes">
                                Arrays Constantes
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=get01">
                                $_GET
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=post">
                                $_POST
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=comparacao">
                                Comparação Arrays
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>4. Controle</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=controle&file=if_else">
                                If Else
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_relacionais">
                                Op. Relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_pi">
                                Desafio PI
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_logicos">
                                Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">
                                Desafio Op. Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operador_ternario">
                                Operador Ternário
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=switch">
                                Switch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_switch">
                                Desafio Switch
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3. Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                Variáveis Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                                Desafio Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Valor vs Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Op. Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedendia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                                Tipo Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>1. Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Arthur Lemos © <?= date('Y'); ?>
    </footer>
</body>

</html>