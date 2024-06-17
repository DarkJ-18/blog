<x-app-layout>
        <h1>Formulario para crear un nuevo post</h1>
        <form action="/posts" method="POST">
            @csrf
            <label for="title">Titulo:</label>
            <input type="text" name="title" id="title">
            <br>
            <br>
            <label for="category">Categoria:</label>
            <input type="text" name="category" id="category">
            <br>
            <br>
            <label for="content">Contenido:</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            <br>
            <br>
            <button type="submit">Crear post</button>
        </form>
</x-app-layout>


