<div class="form-group">
    @csrf
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Insira o titulo da matéria" required>

    <label for="resume">Resumo</label>
    <input type="text" class="form-control" id="resume" name="resume" value="{{ old('resume') }}" placeholder="Insira o resumo da matéria" required>

    <label for="post">Matéria</label>
    <textarea class="form-control" name="post" id="post" cols="60" rows="10">{{ old('post') }}</textarea>

    <label for="id_tag">Tag</label>
   <select class="form-control" name="id_tag" id="id_tag">
        <option >Selecione a Tag</option>
        @foreach ($tags as $tag)
            <option  value="{{$tag->id}}">{{$tag->tag}}</option>
        @endforeach
   </select>

   <label for="post_img">Foto Capa</label>
    <input type="file" name="post_img" id="post_img" class="form-control">

    <button type="submit" class="btn btn-primary mt-1">Enviar</button>
</div>
