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
    h1{
        color: #8a2be2; 

    }
</style>

<h1>Detalhes do Produto</h1>
<table>
    <thead>
        <tr>
            <th>Id Brinquedo</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Deletar/Editar</th>
        </tr>

        <tr>
            <td>{{$toy->id}}</td>
            <td>{{$toy->name}}</td>
            <td>R$ {{$toy->price}}</td>
            <td>{{$toy->description}}</td>
            <td>
    </thead>
    <tbody>
      