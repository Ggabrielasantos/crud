<style>

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f8f8f8;
        border: 1px solid #ddd;
    }

    thead th {
        background-color: #8a2be2;
        color: #fff;
        padding: 10px;
        text-align: left;
    }

    td {
        border: 1px solid #ddd;
        padding: 10px;
        position: relative;
    }

    form {
        display: inline-block; 
        margin-right: 5px; 
    }

    .edit-button, .delete-button {
        padding: 8px 12px;
        background-color: #8a2be2;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .edit-button:hover, .delete-button:hover {
        background-color: #6a1a9e;
    }

    .create-button {
        display: block;
        margin: 20px auto;
        padding: 12px 20px; 
        background-color: #8a2be2;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none; 
        text-align: center;
        font-size: 20px;
    }

    .create-button:hover {
        background-color: #6a1a9e;
    }
    h1{
        color: #8a2be2; 

    }
    .view-button {
    padding: 8px 12px;
    background-color: #8a2be2;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}

.view-button:hover {
    background-color: #6a1a9e;
}

</style>

</style>

<h1>Olá, essa é sua lista de produtos cadastrados!</h1>
<table>
    <thead>
        <tr>
            <th>Id Brinquedo</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Deletar/Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($toys as $toy)
        <tr>
            <td>{{$toy->id}}</td>
            <td>{{$toy->name}}</td>
            <td>R$ {{$toy->price}}</td>
            <td>{{$toy->description}}</td>
            <td>
                <form action="{{ route('toy.edit', $toy->id) }}" method="GET">
                    @csrf
                    <button type="submit" class="edit-button">Editar</button>
                </form>
                
                <form action="{{ route('toy.destroy', $toy->id) }}" method="POST">
                
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Deletar</button>
                </form>

                <a href="{{ route('toy.show', $toy->id) }}" class="view-button">Ver</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('toy.create') }}" class="create-button">CREATE</a>
