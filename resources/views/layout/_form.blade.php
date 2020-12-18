<form action="{{route('registrar_novo')}}" method="post"class="form-horizonta" method="POST">
{{ csrf_field() }}
</br></br></br>
   <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div >
        <label for="nome">nome </label>
        <input type="text" id="nome" name="nome">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" id="modelo" name="email">
    </div>
    <div>
        <label for="telefone">telefone</label>
        <input type="text" id="telefone" name="telefone">
    </div>