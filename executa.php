<?php
$avaliacao = $_POST['avaliacao'] ?? '';
$corFavorita = $_POST['corFavorita'] ?? '';
$comentarios = $_POST['comentarios'] ?? '';
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$fone = $_POST['fone'] ?? '';
$novidades = isset($_POST['novidades']);

echo "<h2>Informações Recebidas</h2>";
echo "<p>Avaliação: $avaliacao</p>";
echo "<p>Cor Favorita: $corFavorita</p>";
echo "<p>Comentários: $comentarios</p>";
echo "<p>Nome: $nome</p>";
echo "<p>Email: $email</p>";
echo "<p>Fone: $fone</p>";

if (!empty($email)) {
    $emailParts = explode('@', $email);
    $provedor = $emailParts[1] ?? 'desconhecido';
    echo "<p>Seu provedor de email é: $provedor</p>";
}

if ($novidades) {
    echo "<p>Enviaremos para você semanalmente todas as novidades.</p>";
}

$palavrasPositivas = ['gostei', 'legal', 'bom', 'interessante', 'feliz'];
foreach ($palavrasPositivas as $palavra) {
    if (stripos($comentarios, $palavra) !== false) {
        echo "<p>Ficamos felizes que você deixou observações positivas sobre nosso site.</p>";
        break;
    }
}

if (strtolower($corFavorita) === 'preto') {
    echo "<script>alert('O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja bem e precisando de ajuda, acesse o site: https://cvv.org.br');</script>";
}
?>
