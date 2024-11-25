<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estações do ano</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f8ff;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      color: #333;
    }

    h1 {
      color: #0066cc;
      margin-bottom: 20px;
    }

    label, button {
      font-size: 1rem;
      margin: 10px 0;
    }

    button {
      background-color: #0066cc;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #004999;
    }

    #resultado {
      margin-top: 20px;
      text-align: center;
    }

    #estacao {
      font-size: 1.2rem;
      margin-bottom: 15px;
    }

    #imagemEstacao {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
  <h1>Descubra a Estação do Ano</h1>
  <label for="date">Escolha uma data:</label>
  <input type="date" id="date" />
  <button onclick="verificarEstacao()">Verificar Estação</button>
  <div id="resultado">
    <p id="estacao"></p>
    <img id="imagemEstacao" />
  </div>

  <script>
    function verificarEstacao() {
      const data = new Date(document.getElementById('date').value);
      const dia = data.getDate();
      const mes = data.getMonth() + 1; 
      let estacao = '';
      let imagem = '';

      if ((mes === 12 && dia >= 21) || mes === 1 || mes === 2 || (mes === 3 && dia <= 20)) {
        estacao = 'Verão';
        imagem = 'https://static1.purepeople.com.br/articles/3/25/58/73/@/2909058-neymar-viaja-com-time-do-paris-saint-ger-580x326-2.jpeg';
      } else if ((mes === 3 && dia >= 21) || mes === 4 || mes === 5 || (mes === 6 && dia <= 20)) {
        estacao = 'Outono';
        imagem = 'https://st4.depositphotos.com/1223667/29774/i/450/depositphotos_297742984-stock-photo-yellow-autumn-maple-tree-background.jpg';
      } else if ((mes === 6 && dia >= 21) || mes === 7 || mes === 8 || (mes === 9 && dia <= 22)) {
        estacao = 'Inverno';
        imagem = 'https://images.tcdn.com.br/img/img_prod/476087/90_bola_de_vinil_para_jogar_tematica_olaf_frozen_inflavel_wp_connet_12599_1_6d4c97aee1f2b99782ac6669c92d0416.jpg';
      } else if ((mes === 9 && dia >= 23) || mes === 10 || mes === 11 || (mes === 12 && dia <= 20)) {
        estacao = 'Primavera';
        imagem = 'https://i.ytimg.com/vi/mJzn9ImgmFM/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDCp062gmHIzHtc7IoeMuh6Yn9tyQ';
      }

      document.getElementById('estacao').textContent = `A estação é: ${estacao}`;
      document.getElementById('imagemEstacao').src = imagem;
    }
  </script>
</body>
</html>
