<x-layout>
    {{-- @foreach ($posts as $p )
        <article>
            <h1><a href="post/{{$p->id}}"><?=  $p->title; ?></a></h1>

            <a href="/categories/{{$p->category->slug}}">{{$p->category->name}}</a>

            <p>{{$p->excerpt}}</p>
        </article>
    @endforeach --}}

        @include('_posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <x-post-featured-card />

            <div class="lg:grid lg:grid-cols-2">
                <x-post-card />
                <x-post-card />
            </div>

            <div class="lg:grid lg:grid-cols-3">


                <x-post-card />
                <x-post-card />
                <x-post-card />

            </div>
        </main>

</x-layout>


