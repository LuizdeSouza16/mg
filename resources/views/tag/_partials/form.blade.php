
<div class="form-group">
    @csrf
    <label for="tag">Tag</label>
    <input type="text" class="form-control" id="tag" name="tag" placeholder="Insira a sua Tag" value=" {{ $tag->tag ?? old('tag') }} " required>

    <button type="submit" class="btn-sm btn-primary mt-1">Enviar</button>
</div>
