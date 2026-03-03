<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - {{$item->name}}</title>
</head>
<body class="contact-body">
@include('components.admin.header', ['page' => 'item'])

<form method="post" class="generic-form" action="{{route('admin.items.update', [$item->id])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input minlength="1" maxlength="32" placeholder="Naam" type="text" name="name" value="{{ old('name')?? $item->name }}">
    <input maxlength="128" placeholder="Beschrijving" type="text" name="description" value="{{ old('description') ?? $item->description }}">
    <input max="999.99" min="0.01" placeholder="Prijs" type="number" step="0.01" name="price" value="{{ old('price')?? $item->price }}">
    <div class="file-input-container">
        <input hidden type="file" accept="image/png, image/jpeg" id="fileInput" name="image">
        <span id="fileName">Huidige afbeelding behouden</span>
        <label for="fileInput" class="upload">Kies afbeelding</label>
    </div>
    @if ($errors->any())
            @foreach ($errors->all() as $error)
                <h6>{{ $error }}</h6>
            @endforeach
    @endif
    <button>Bewerken</button>
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
