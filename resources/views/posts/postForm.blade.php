    @section('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endsection
    <div class="row">
    <div class="col-md-8">
        <form action="{{ isset($post) ? route('admin.post.update', ['post' => $post->id]) : route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($post))
            @method('PUT')
        @endif    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text"  placeholder="Title ..."  name="title" value="{{ old('title', isset($post) ? $post->title : '') }}" class="form-control" id="title" aria-describedby="titleHelp" required/>

        @error('title')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text"  placeholder="Description ..."  name="description" value="{{ old('description', isset($post) ? $post->description : '') }}" class="form-control" id="description" aria-describedby="descriptionHelp" required/>

        @error('description')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" class="form-control" id="content" aria-describedby="contentHelp">{{ old('content', isset($post) ? $post->content : '') }}</textarea>

        @error('content')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>  

    {{-- Ajout de la catégorie --}}
    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $category)
                <option @if(old('category_id', isset($post) ? $post->category->id : '') == $category->id) selected @endif value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="mb-3">
        <button type="button" class="btn btn-success btn-file my-1" onclick="triggerFileInput('imageUrl')">
            Add file :  (ImageUrl)
        </button>
        <input type="file" name="imageUrl" value="{{ old('imageUrl', isset($post) ? $post->imageUrl : '') }}" class="visually-hidden form-control imageUpload" id="imageUrl" aria-describedby="imageUrlHelp"/>

        <div class="form-group d-flex" id="preview_imageUrl" style="max-width: 100%;">
        </div>
        @error('imageUrl')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3 d-flex gap-2">
        <label for="isPublished" class="form-label">IsPublished</label>
        <div class="form-check form-switch">
            <input name="isPublished" id="isPublished" value="true" data-bs-toggle="toggle"  {{ old('isPublished', isset($post) && $post->isPublished == 'true' ? 'checked' : '') }} class="form-check-input" type="checkbox" role="switch" />
        </div>
        {{-- <select class="form-control" name="isPublished" id="isPublished">
            <option value="true" {{ old('isPublished', isset($post) && $post->isPublished == 'true' ? 'selected' : '') }}>Yes</option>
            <option value="false" {{ old('isPublished', isset($post) && $post->isPublished == 'false' ? 'selected' : '') }}>No</option>
        </select> --}}

        @error('isPublished')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <a href="{{ route('admin.post.index') }}" class="btn btn-danger mt-1">
        Cancel
    </a>
    <button class="btn btn-primary mt-1"> {{ isset($post) ? 'Update' : 'Create' }}</button>
 </form>
    </div>
    
    </div>

    @section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script>
        const textareas = document.querySelectorAll('textarea');
        textareas.forEach((textarea) => {
            ClassicEditor
                .create(textarea)
                .catch(error => {
                    console.error(error);
                });
        });

        $(document).ready(function() {
            $('select').select2();
        });
        function triggerFileInput(fieldId) {
            const fileInput = document.getElementById(fieldId);
            if (fileInput) {
                fileInput.click();
            }
        }

        const imageUploads = document.querySelectorAll('.imageUpload');
        imageUploads.forEach(function(imageUpload) {
            imageUpload.addEventListener('change', function(event) {
                event.preventDefault()
                const files = this.files; // Récupérer tous les fichiers sélectionnés
                console.log(files)
                if (files && files.length > 0) {
                    const previewContainer = document.getElementById('preview_' + this.id);
                    previewContainer.innerHTML = ''; // Effacer le contenu précédent

                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        if (file) {
                            const reader = new FileReader();
                            const img = document.createElement('img'); // Créer un élément img pour chaque image

                            reader.onload = function(event) {
                                img.src = event.target.result;
                                img.alt = "Prévisualisation de l'image"
                                img.style.maxWidth = '100px';
                                img.style.display = 'block';
                            }

                            reader.readAsDataURL(file);
                            previewContainer.appendChild(img); // Ajouter l'image à la prévisualisation
                            console.log({img})
                            console.log({previewContainer})
                        }
                    }
                    console.log({previewContainer})
                }
            });
        });

        // BIBLIOTHEQUE SELECT2
        $(document).ready(function() {
            $('select')

            .select2();

        });

    </script>
    @endsection