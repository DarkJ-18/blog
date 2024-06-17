<x-app-layout>
    <h1>Formulario para editar un post</h1>
    <form action="/posts/{{$post->id}}" method="POST">

        @csrf
        @method('PUT')
        
        <label for="title">Titulo:</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        <br>
        <br>
        <label for="category">Categoria:</label>
        <input type="text" name="category" id="category" value="{{$post->category}}">
        <br>
        <br>
        <label for="content">Contenido:</label>
        <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        <br>
        <br>
        <button type="submit">Actualizar post</button>
    </form>
</x-app-layout>


