<form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST">
    @csrf
    @if(isset($post))
        @method('PUT')
    @endif
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ isset($post) ? $post->title : '' }}">
    </div>
    <div class="form-group">
        <label for="content">Conteúdo</label>
        <textarea class="form-control" id="content" name="content">{{ isset($post) ? $post->content : '' }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
</form>