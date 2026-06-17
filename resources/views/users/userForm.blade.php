    @section('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endsection
    <div class="row">
    <div class="col-md-8">
        <form action="{{ isset($user) ? route('admin.user.update', ['user' => $user->id]) : route('admin.user.store') }}" method="POST" >
        @csrf
        @if(isset($user))
            @method('PUT')
        @endif    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text"  placeholder="Name ..."  name="name" value="{{ old('name', isset($user) ? $user->name : '') }}" class="form-control" id="name" aria-describedby="nameHelp" required/>

        @error('name')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text"  placeholder="Email ..."  name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" class="form-control" id="email" aria-describedby="emailHelp" required/>

        @error('email')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    
        
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" placeholder="Password ..." value="{{ old('password', isset($user) ? $user->password : '') }}" class="form-control" id="password" aria-describedby="passwordHelp" required/>

        @error('password')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text"  placeholder="Email ..."  name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" class="form-control" id="email" aria-describedby="emailHelp" required/>

        @error('email')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="token" class="form-label">Token</label>
        <input type="text"  placeholder="Token ..."  name="token" value="{{ old('token', isset($user) ? $user->token : '') }}" class="form-control" id="token" aria-describedby="tokenHelp" required/>

        @error('token')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="created_at" class="form-label">Created_at</label>
        <input type="text"  placeholder="Created_at ..."  name="created_at" value="{{ old('created_at', isset($user) ? $user->created_at : '') }}" class="form-control" id="created_at" aria-describedby="created_atHelp" required/>

        @error('created_at')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text"  placeholder="Id ..."  name="id" value="{{ old('id', isset($user) ? $user->id : '') }}" class="form-control" id="id" aria-describedby="idHelp" required/>

        @error('id')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="user_id" class="form-label">User_id</label>
        <input type="text"  placeholder="User_id ..."  name="user_id" value="{{ old('user_id', isset($user) ? $user->user_id : '') }}" class="form-control" id="user_id" aria-describedby="user_idHelp" required/>

        @error('user_id')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="ip_address" class="form-label">Ip_address</label>
        <input type="text"  placeholder="Ip_address ..."  name="ip_address" value="{{ old('ip_address', isset($user) ? $user->ip_address : '') }}" class="form-control" id="ip_address" aria-describedby="ip_addressHelp" required/>

        @error('ip_address')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="user_agent" class="form-label">User_agent</label>
        <input type="text"  placeholder="User_agent ..."  name="user_agent" value="{{ old('user_agent', isset($user) ? $user->user_agent : '') }}" class="form-control" id="user_agent" aria-describedby="user_agentHelp" required/>

        @error('user_agent')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="payload" class="form-label">Payload</label>
        <input type="text"  placeholder="Payload ..."  name="payload" value="{{ old('payload', isset($user) ? $user->payload : '') }}" class="form-control" id="payload" aria-describedby="payloadHelp" required/>

        @error('payload')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    <div class="mb-3">
        <label for="last_activity" class="form-label">Last_activity</label>
        <input type="text"  placeholder="Last_activity ..."  name="last_activity" value="{{ old('last_activity', isset($user) ? $user->last_activity : '') }}" class="form-control" id="last_activity" aria-describedby="last_activityHelp" required/>

        @error('last_activity')
            <div class="error text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>    
    <a href="{{ route('admin.user.index') }}" class="btn btn-danger mt-1">
        Cancel
    </a>
    <button class="btn btn-primary mt-1"> {{ isset($user) ? 'Update' : 'Create' }}</button>
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
    </script>
    @endsection