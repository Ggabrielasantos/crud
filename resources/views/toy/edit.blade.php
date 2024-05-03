<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8; 
    color: #000; 
    padding: 20px;
}

h1 {
    color: #8a2be2; 
}


.toy-form {
    max-width: 400px;
    margin-top: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box; 
    margin-bottom: 16px;
}

button {
    padding: 10px 20px;
    background-color: #8a2be2; 
    color: #fff; 
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #6a1a9e; 
}

</style>
<h1>Olá, edite aqui seu produto</h1>
<form action="{{route('toy.update', $toy->id)}}" method="POST">
    @csrf

    @METHOD('PUT')
    Nome: <input type="text" name="name" value="{{$toy->name}}">   
    Descrição: <input type="text" name="description" value="{{$toy->description}}">   
    Preço: <input type="text" name="price" value="{{$toy->price}}">  
    
    
   

    <a href="index"></a><button type="submit">Edit</button>


</form>


