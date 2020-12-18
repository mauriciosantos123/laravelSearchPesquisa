<!--==========================
  Header
  ============================-->

<div class="container">
    <div class="row">
        <div class="col-md-4">
        </br></br></br>
            <h3>Listagem</h3>
        </div>

        
        <form action="" method="GET" class="container">
    <input type="text" name="category" required/>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
    
</form>

    </div>
    <div class="">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($pesquisas as $pesquisa)
                <tr>
                    <td>{{ $pesquisa->id }}</td>
                    <td>{{ $pesquisa->nome }}</td>
                    <td>{{ $pesquisa->email }}</td>
                    <td>{{ $pesquisa->telefone }}</td>
                    <td>
                        <ul class="list-inline">
                        <div class="row">
                            <li>
                            <a class="btn btn-primary" href="">Editar</a>
                            </li>
                            <li>
                            <a class="btn btn-danger" href="">Deletar</a>
                            </li>
                            </div>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-md-8">







</div>
            <a href="{{route('cr_novo')}}" class="btn btn-primary">Novo</a>
            @if(Session::has('message'))
   <div class="alert alert-sucess alert-dismissible show" role="alert">
        <strong> {!! session()->get('message') !!}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">×</span>
        </button>
   </div>
@endif

        </div>
    </div>
</div>
@endsection