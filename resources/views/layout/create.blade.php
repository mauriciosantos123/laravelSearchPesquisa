
@include('layout.header')
@section('content')

<div class="container">
    <div class="row">
        <h3>Novo </h3></br></br></br>
        @include('layout._form')</br></br>
        <div class="form-group">
            <input type="submit" name="save" value="Salvar" class="btn btn-primary">
            <input type="submit" name="cancel" value="Cancelar" class="btn btn-danger">
        </div>
    </div>
    </form>
</div>


@include('layout.Footer')
