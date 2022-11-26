<style>
    .mx-600 {
        max-width: 600px;
        margin: auto;
    }

    .border-info-5 {
        border-bottom: 5px solid #6969dc;
    }
</style>

<div class="mx-600">
    @php
    $titles = ['Post No. 1', 'Post No. 2', 'Post No. 3'];
    @endphp
    @foreach ($titles as $title)
    <article class="{{$loop->odd ? 'border-info-5':''}}">
        <h1><a href="#">{{$title}}</a></h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi facilis nemo velit dicta, earum non deleniti!
            Sequi
            vel voluptatem voluptas ipsam soluta debitis pariatur natus iusto amet, ipsa enim qui ab unde facere provident
            animi! In error, deserunt harum possimus iusto vero rerum distinctio vitae praesentium porro id fuga provident
            similique eligendi sapiente ex quos? Accusamus earum eligendi quod dicta libero quis. Vero corporis rerum iste
            nisi
            voluptatum temporibus? Ea odio amet reprehenderit quo aspernatur voluptatibus tenetur fugit vel ducimus
            corporis,
            fuga sint quos voluptatem porro, minus molestias tempora accusantium error aperiam harum dicta perferendis
            ratione.
        </p>
    </article>
    @endforeach
</div>


<x-layout>
    Hello
</x-layout>

<x-button>
    Click me
</x-button>