<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDo App</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" >
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <i class="fas fa-tasks mr-2"></i>
      ToDo App
    </a>
  </nav>
  <div class="container">
    <h2 class="mt-4">Incluir Nova Tarefa</h2>
    <form class="form-inline row" method="post">
      <div class="form-group col-8 mb-2 mr-4">
        <input type="text" class="form-control col-12" id="tarefa" placeholder="Informe a descrição da sua tarefa">
      </div>
      <button type="submit" class="btn btn-dark col-2 mb-2">Adicionar</button>
    </form>
    <hr />
    <h2 class="mt-4">Tarefas para fazer</h2>
    <table class="table">
      <thead>
        <th scope="col">Descrição</th>
        <th scope="col" style="width: 200px">Ações</th>
      </thead>
      <tbody>
        <?php foreach($tarefas as $tarefa): ?>
        <tr>
          <td><?= $tarefa ?></td>
          <td>
            <a href="#" class="btn btn-success">
              <i class="fas fa-check"></i>
            </a>
            <a href="#" class="btn btn-warning">
              <i class="fas fa-edit"></i>
            </a>
            <a href="#" class="btn btn-danger">
              <i class="fas fa-trash"></i>
            </a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>