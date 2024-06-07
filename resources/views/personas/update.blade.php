
<form action="{{ route('documents.update', $document->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" value="{{ $document->title }}">

    <label for="description">Descripción:</label>
    <textarea name="description" id="description">{{ $document->description }}</textarea>

    <button type="submit">Actualizar Tarea</button>
</form>
