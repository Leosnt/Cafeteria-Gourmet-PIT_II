<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cafeteria Online</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<?php
include 'conexao.php';

  $query = "SELECT * FROM produtos";
  $stmt = $conexao->query($query);
  $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  echo "<div class='cardapio'>";
    echo "<h3 class='title'>CARDAPIO" ."</h3>"; 
    echo "<div class='icons-login card'>";
    echo "<i class ='fa fa-power-off'></i>";
    echo "<p class='text-coffee'>Escolha seu café</p>";
    echo "<i class='fa fa-shopping-bag' aria-hidden='true'></i>";
    echo "</div>";

  foreach ($produtos as $produto) {
    echo "<div class='list-itens'>";
    echo "<div class='item'>";
    if ($produto['imagem']) {
        echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '" width="65px">';
    }
    echo'<p>' . $produto['descricao'] . '</p>';
    echo '<p>Preço: R$' . number_format($produto['preco'], 2) . '</p>';
    echo"</div>";
    echo'</div>';
  }
  echo'</div>';
?>

    <!-- <div class="cardapio">
        <h3 class="title">CARDÁPIO</h3>
        <div class="icons-login card">
            <i class="fa fa-power-off" aria-hidden="true"></i>
            <p class="text-coffee">Escolha seu café</p>
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </div>
        <div class="list-itens">
            <div class="item">
                <img src="/src/images/coado.png" width="65px" alt="Cafe" class="coffee-card">
                <p>Café tradicional passado na hora.</p>
                <p class="price">R$ 2,00</p>
            </div>

            <div class="item">
                <img src="/src/images/macchi.png" width="65px" alt="Cappucchino" class="coffee-card">
                <p>Expresso, leite vaporizado e canela</p>
                <p class="price">R$ 9,50</p>
            </div>

            <div class="item">
                <img src="/src/images/mocca.png" width="60px" alt="Moccachino" class="coffee-card">
                <p>Calda de chocolate, expresso e leite vaporizado</p>
                <p class="price">R$ 9,50</p>
            </div>

            <div class="item">
                <img src="/src/images/mocha.png" width="60px" alt="Moccachino" class="coffee-card">
                <p>Expresso, creme de leite vaporizado</p>
                <p class="price">R$ 9,50</p>
            </div>
        </div>
    </div> -->
</body>