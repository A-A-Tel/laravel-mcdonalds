<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Contact</title>
</head>
<body class="contact-body">
@include('components.admin.header', ['page' => 'item'])

<form class="generic-form" method="post" action="{{route('admin.items.store')}}" enctype="multipart/form-data">
    @csrf
    <input minlength="1" maxlength="32" placeholder="Naam" type="text" name="name" value="{{ old('name') }}">
    <input maxlength="128" placeholder="Beschrijving" type="text" name="description" value="{{ old('description') }}">
    <input max="999.99" min="0.01" placeholder="Prijs" type="number" step="0.01" name="price" value="{{ old('price') }}">
    <div class="file-input-container">
        <input hidden type="file" accept="image/png, image/jpeg" id="fileInput" name="image">
        <span id="fileName"></span>
        <label for="fileInput" class="upload">Kies afbeelding</label>
    </div>
    @if ($errors->any())
            @foreach ($errors->all() as $error)
                <h6>{{ $error }}</h6>
            @endforeach
    @endif
    <button>Maken</button>
</form>

<script>
    const input = document.getElementById('fileInput');
    const fileName = document.getElementById('fileName');

    input.addEventListener('change', () => {
        if (input.files.length > 0) {
            fileName.textContent = input.files[0].name;
        } else {
            fileName.textContent = "No file chosen";
        }
    });
</script>

@include('components.admin.footer')
</body>
</html>
