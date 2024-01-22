<?php

class Bcrypt
{
    private $senha;
    private $salto;
    private $senhaComHash;
    private $combinacao;
    private $custo;
    private $numBytes;

    public function __construct($senha, $custo, $numBytes)
    {
        $this->senha = $senha;
        $this->custo = $custo;
        $this->numBytes = $numBytes;
        $this->gerarSalto();
        $this->combinarSaltoComSenha();
        $this->criarHash();
    }

    public function gerarSalto()
    {
        return $this->salto = random_bytes($this->numBytes);
    }

    public function combinarSaltoComSenha()
    {
        return $this->combinacao = bin2hex($this->salto) . $this->senha;
    }

    public function criarHash()
    {
        $this->senhaComHash = password_hash($this->combinacao, PASSWORD_BCRYPT, ['cost' => $this->custo]);
    }

    public function getSalto()
    {
        return bin2hex($this->salto);
    }

    public function getSenhaComHash() 
    {
        return $this->senhaComHash;
    }

    public function verificarSenha() {
        return password_verify($this->combinacao, $this->senhaComHash);
    }
}

// Inicializar as variáveis
$senha = '';
$custo = 10;
$numBytes = 10;
$salto = $numBytes;
$hash = '';
$mensagem = '';
$combinacao = '';

// Manipular os dados do formulário quando o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $senha = $_POST["senha"];
    $custo = intval($_POST["custo"]);
    $numBytes = intval($_POST["numBytes"]);

    $bcrypt = new Bcrypt($senha, $custo, $numBytes);
    $hash = $bcrypt->getSenhaComHash();
    $salto = $bcrypt->gerarSalto($numBytes);

    if ($bcrypt->verificarSenha()) {
        $mensagem = "A senha está correta!";
    } else {
        $mensagem = "Senha incorreta!";
    }

    $combinacao = $bcrypt->combinarSaltoComSenha();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Hash Bcrypt</title>
</head>
<body>
<div class="container">
<div class="half-width">
    <h2>Gerador de Hash Bcrypt</h2>
    <form method="POST" action="#">
        <label for="senha"><b>Digite a Senha:</b></label>
        <input type="text" id="senha" name="senha" value="<?php echo htmlentities($senha); ?>" required>
        <br>
        <label for="custo"><b>Custo (iterações):</b></label>
        <input type="number" id="custo" name="custo" value="<?php echo $custo; ?>" min="1" max="20" required>
        <br>
        <label for="numBytes"><b>Salto (Número de Bytes):</b></label>
        <input type="number" id="numBytes" name="numBytes" value="<?php echo $numBytes; ?>" min="1" max="500" required>
        <br>
        <input type="submit" value="Gerar Hash">
    </form>
</div>

<div class="half-width">
    <h2>Resultado:</h2>
    <p id="digitada"><b>Senha Digitada:</b> <?php echo $senha; ?></p>
    <p id="saltoGerado">
        <b>Salto Gerado:</b> <?php echo $salto; ?> / 
        <b>Hexadecimal:</b> <?php echo bin2hex($salto); ?>
    </p>
    <p id="combinacao"><b>Combinação :</b> <?php echo $combinacao; ?></p>
    <p><b>Hash gerado:</b> <span id="hashResult"><?php echo htmlentities($hash); ?></span></p>
    <p id="mensagem"><?php echo $mensagem; ?></p>
</div>

</div>
    <script>
        // Evitar que o formulário seja enviado e recarregue a página
        document.getElementById("bcryptForm").addEventListener("submit", function (event) {

            event.preventDefault();

            // Obter os valores do formulário
            var senha = document.getElementById("senha").value;
            var custo = document.getElementById("custo").value;
            var numBytes = document.getElementById("numBytes").value;
            // Criar um objeto XMLHttpRequest para enviar os dados para o servidor
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo $_SERVER["PHP_SELF"]; ?>", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    document.getElementById("senha").textContent = response.senha;
                    document.getElementById("hashResult").textContent = response.hash;
                    document.getElementById("mensagem").textContent = response.mensagem;
                    document.getElementById("combinacao").textContent = response.combinacao;
                }
            };

            // Enviar os dados do formulário para o servidor
            var data = "senha=" + encodeURIComponent(senha) + "&custo=" + encodeURIComponent(custo + "&numBytes=" + encodeURIComponent(numBytes));
            xhr.send(data);
        });
    </script>
</body>

<style>
    form * {
        font-size: 1.8rem;
    }

    form > div {
        margin-bottom: 5px;
    }

    input {
        margin: 10px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
    }

    .half-width {
        max-width: 80%;
        box-sizing: border-box;
        padding: 50px; /* Ajuste conforme necessário */
    }
</style>
</html>