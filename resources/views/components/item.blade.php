<div class="menu-item" @if($admin?? false) style="cursor: pointer;" onclick="window.location.assign('{{route('admin.items.show', [$item->id])}}')" @endif">
    <div style="background-image: url('/storage/items/{{$item->image}}')" price="&euro;{{$item->price}}"></div>
    <h2>{{$item->name}}</h2>
    <p>{{$item->description}}</p>
</div>
