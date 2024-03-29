{{-- SIDEBAR --}}
<div class="leftbar p-r-20 p-r-0-sm">
    <!-- Comics -->
    <h4 class="m-text14 p-b-7">Comics</h4>
        <ul class="p-b-54">  
            <li class="p-t-4">
                <a href="{{route("shop")}}" class="s-text13 {{ request()->is('shop*') ? 'active1' : '' }}">All</a>
            </li>
        </ul>
        <!-- End Comics -->
        <!-- Authors -->
        <h4 class="m-text14 p-b-7">Authors</h4>
            <ul class="p-b-54">
                <li class="p-t-4" hidden>
                    <a href="#" class="s-text13" >All</a>
                </li>
                @foreach($authors as $author)
                <li class="p-t-4">
                    <a href="{{route('author',$author->id)}}" class="s-text13 {{ request()->is('author/'.$author->id) ? 'active1' : '' }}">
                        {{$author->name}}
                    </a>
                </li>
                @endforeach
            </ul>
            <!-- End Authors -->
        <!-- Series -->
        <h4 class="m-text14 p-b-7">Series</h4>
            <ul class="p-b-54"> 
                <li class="p-t-4" hidden>
                    <a href="#" class="s-text13">All</a>
                </li>
                @foreach($series as $serie)
                <li class="p-t-4">
                    <a href="{{route('serie',$serie->id)}}" class="s-text13 {{ request()->is('serie/'.$serie->id) ? 'active1' : '' }}">
                        {{$serie->name}}
                    </a>
                </li>
                @endforeach
            </ul>
            <!-- End Series-->
            <!-- Publishers -->
            <h4 class="m-text14 p-b-7">Publishers</h4>
                <ul class="p-b-54">
                    <li class="p-t-4" hidden>
                        <a href="#" class="s-text13 active1">All</a>
                    </li>
                    @foreach($publishers as $publisher)
                    <li class="p-t-4">
                        <a href="{{route('publisher',$publisher->id)}}" class="s-text13 {{ request()->is('publisher/'.$publisher->id) ? 'active1' : '' }}">
                            {{$publisher->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <!-- End Publishers-->
                <!-- Genres -->
            <h4 class="m-text14 p-b-7">Genres</h4>
                <ul class="p-b-54">
                    <li class="p-t-4" hidden>
                        <a href="#" class="s-text13 active1">All</a>
                    </li>
                    @foreach($genres as $genre)
                    <li class="p-t-4">
                        <a href="{{route('genre',$genre->id)}}" class="s-text13 {{ request()->is('genre/'.$genre->id) ? 'active1' : '' }}">
                            {{$genre->name}}
                        </a>
                    </li>

                    @endforeach
                </ul>
                <!-- End Publishers-->
        <div class="search-comics pos-relative bo4 of-hidden">
            <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-comics" placeholder="Search Comics...">

            <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</div>