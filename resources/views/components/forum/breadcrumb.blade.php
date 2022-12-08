<ul class="mb-[30px] text-black/40 after:clear-both after:block after:content-[' ']" role="menubar">
    <li class="float-left mr-4 text-base w-auto">
        <span class="float-left font-light">
            <a href="{{ url('/') }}" title="Home">
                <i class="fa fa-home fa-fw" aria-hidden="true"></i>
                <span>Home</span>
            </a>
        </span>

        @foreach($items as $item)
        <span class="float-left font-light before:px-2 before:content-['>']">
            <a title="{{$item}}"><span>{{ $item }}</span></a>
        </span>
        @endforeach
    </li>

    <li class="float-right mr-0 ml-4 text-base text-right w-auto hidden max-md:block">
        <a title="View the advanced search options" role="menuitem">
            <i class="fa fa-search fa-fw" aria-hidden="true"></i><span class="sr-only">Search</span>
        </a>
    </li>
</ul>
