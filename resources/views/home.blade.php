<!DOCTYPE html>
<html>
<head>
  <title>Formulário</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="reset"] {
      background-color: #dc3545;
      margin-left: 10px;
    }
  </style>
</head>
<body>
  <h1>Formulário</h1>

  <form id="myForm">
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="sobrenome">Sobrenome:</label>
    <input type="text" id="sobrenome" name="sobrenome" required>

    <label for="dataNascimento">Data de Nascimento:</label>
    <input type="date" id="dataNascimento" name="dataNascimento" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="genero">Gênero:</label>
    <select id="genero" name="genero" required>
      <option value="">Selecione</option>
      <option value="masculino">Masculino</option>
      <option value="feminino">Feminino</option>
      <option value="outro">Outro</option>
    </select>

    <button type="submit" id="inserir">Inserir</button>
    <button type="reset" id="recomecar">Recomeçar</button>
  </form>

  <script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
      event.preventDefault(); 

      var cpf = document.getElementById("cpf").value;
      var nome = document.getElementById("nome").value;
      var sobrenome = document.getElementById("sobrenome").value;
      var dataNascimento = document.getElementById("dataNascimento").value;
      var email = document.getElementById("email").value;
      var genero = document.getElementById("genero").value;


      document.getElementById("myForm").reset();
    });
  </script>
</body>
</html>
