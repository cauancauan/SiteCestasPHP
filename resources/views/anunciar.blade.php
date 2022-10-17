<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styleAnunciar.css">
</head>
<body>

<div class="container">
    <div class="title">Anunciar Produto</div>
    <div class="content">
      <form method="post" action="{{route('anunciarBanco')}}" enctype="multipart/form-data">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome do Produto</span>
            <input type="text" name="nome" placeholder="Digite o nome do produto" required>
          </div>
          <div class="input-box">
            <span class="details">Valor</span>
            <input type="text" name="valor" placeholder="Digite o valor do produto (R$...)"  required>
          </div>
          <div class="input-box">
            <span class="details">Estado</span>
            <input type="text" name="estado" placeholder="Digite seu estado" required>
          </div>
          <div class="input-box">
            <span class="details">Cidade</span>
            <input type="text" name="cidade" placeholder="Digite sua cidade" required>
          </div>
          <div class="input-box">
            <span class="details">Envio</span>
            <input type="text" name="envio" placeholder="Digite a forma de envio" required>
          </div>

          
          
        </div>
       
        
        <div class="button">
          <input type="submit" value="Registrar">
        </div>
      </form>
    </div>
  </div>




  <script src="js/mascara.js"></script>
</body>
</html>