@extends("layout")

@section("conteudo")
    <h2 class="mt-4">Incluir Nova Tarefa</h2>
    <form class="form-inline row" method="post" action="tarefas">
      @csrf
      <div class="form-group col-8 mb-2 mr-4">
        <input type="text" class="form-control col-12" id="tarefa" name="tarefa" placeholder="Informe a descrição da sua tarefa">
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
        @foreach($tarefas as $tarefa)
        <tr>
          <td>{{ $tarefa }}</td>
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
        @endforeach
      </tbody>
    </table>
@endsection