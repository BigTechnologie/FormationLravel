<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Formulaire d'envoi d'EMAIL </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <div class="container py-5">

        <h1 class="text-center mb-4">Envoyer un Eamil</h1>

        @if (session('success'))
            <div class="=alert alert-success">{{session('success')}}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('send.mail') }}" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 650px;"> 
            @csrf

            <div>
                <label for="email" class="form-label">Email du destinataire :</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div> 

            <div>
                <label for="message" class="form-label">Message :</label>
                <textarea name="message" id="message" class="form-control" rows="5" required>{{ old('message') }}</textarea>
            </div>

            <div>
                <label for="attachment" class="form-label"> Pièce jointe :</label>
                <input type="file" name="attachment" id="attachment" class="form-control">
            </div> 

            <div>
                <label for="company_logo" class="form-label" class="form-label"> Logo de l'entreprise affiché en bas de l'email :</label>
                <input type="file" name="company_logo" id="company_logo" class="form-control" accept="image/png,image/jpeg,image/gpg,image/webp">
                <div class="form-text">Optionnel. Si on ne choisi rien, le logo par defaut du projet sera utilisé </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Envoyer</button>

        </form>

    </div>
    
</body>
</html>