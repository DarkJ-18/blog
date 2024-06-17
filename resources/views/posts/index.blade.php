<x-app-layout>
    <h1>Pagina principal de los posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{$post->id}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach    
    </ul>

</x-app-layout>
