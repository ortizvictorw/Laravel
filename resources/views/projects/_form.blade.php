
            @csrf
            {{-- Titulo --}}
            <div class="form-group">
                <label for="title">Titulo del Proyecto <br>
                <input class="form-control bg-light shadow-sm border-0 " type="text" name="title" id="" value="{{old('title', $project->title) }}">
                </label>
            </div>
                <div class="form-group">
                {{-- URL del Proyecto --}}
                <label for="url">URL del Proyecto <br>
                    <input class="form-control bg-light shadow-sm border-0 " type="text" name="url" id="" value="{{old('url', $project->url) }}">
                </label>
            </div>
                <div class="form-group">
                {{-- Descripcion --}}
                <label for="description">Descripcion del Proyecto <br>
                    <textarea class="form-control bg-light shadow-sm border-0 " type="text" name="description" >{{old('description', $project->description) }}</textarea>
                </label>
            </div>

            <button class="btm btn-primary btn-lg btn-block" type="submit">{{ $btnText }}</button>


