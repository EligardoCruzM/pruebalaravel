<x-layouts.app :title="$post->title" :meta-description="$post->title">
    <h1>Edit Form</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')

        <button type="submit">Enviar</button>

        <br>
    </form>
    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
