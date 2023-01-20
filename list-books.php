<html>
  <head>
    <title>Listagem de Itens</title>
    <style>
      table {
        width: 100%;
        border-collapse: collapse;
      }
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
      }
      th {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>Ano de Lançamento</th>
      </tr>

      <?php
        include("conecta.php");
        // Executa a query para selecionar todos os itens
        $result = $db->query("SELECT title, author, publisher, release_year FROM livros");

        // Verifica se houve erro na query
        if (!$result) {
          die("Erro na query: " . $db->error);
        }

        // Percorre cada linha do resultado
        while ($row = $result->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $row["titulo"]; ?></td>
        <td><?php echo $row["autor"]; ?></td>
        <td><?php echo $row["editora"]; ?></td>
        <td><?php echo $row["ano_lancamento"]; ?></td>
      </tr>
      <?php
        }

        // Fecha a conexão com o banco de dados
        $db->close();
      ?>
    </table>
  </body>
</html>