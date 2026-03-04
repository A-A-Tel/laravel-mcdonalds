<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Menukaart</title>
</head>
<body>
@include('components.header', ['page' => 'menu'])

<script>
    function onSubmit(formElement) {
        const formData = new FormData(formElement);
        const search = formData.get('searchQuery').toString();

        window.location.assign('{{ route('menu') }}?search=' + encodeURIComponent(search));

        return false;
    }
</script>

<main>
    <form class="search-form" action="javascript:void(0);" onsubmit="function onSubmit(formElement) {

        const formData = new FormData(formElement);
        const search = formData.get('searchQuery').toString();

        window.location.assign('{{ route('menu') }}?search=' + encodeURIComponent(search));

        return false;
    }
    return onSubmit(this)">
        <input name="searchQuery" placeholder="Search" type="text">
    </form>
    <div class="child-wrapper">
        @foreach($items as $item)
            @include('components.item', ['item' => $item])
        @endforeach
    </div>
</main>


@include('components.footer')
</body>
</html>
