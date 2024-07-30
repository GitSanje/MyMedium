@php
    $dropdownList = ['Profile', 'Library', 'logout'];
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">MyMedium</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <form class="d-flex me-auto search-form">
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search"
                    value="{{ request('search') }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link fa-lg" href="#">Post <i class="fas fa-pencil-alt"></i></a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#"><i class="fa-solid fa-bell fa-lg"></i></a>
                </li>
                <li class="nav-item px-2 rounded-full">
                    @auth
                        <x-dropdown id="user-dropdown"
                            trigger='<i class="fas fa-user-large fa-lg text-gray-500 hover:text-gray-700"></i>'>
                            @foreach ($dropdownList as $item)
                                <li>
                                    @if ($item === 'logout')
                                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                                            @csrf
                                            <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">
                                                {{ $item }}
                                            </button>
                                        </form>
                                    @else
                                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">
                                            {{ $item }}
                                        </a>
                                    @endif
                                </li>
                            @endforeach

                        </x-dropdown>
                    @else
                        <x-dropdown id="user-dropdown"
                            trigger='<i class="fas fa-user-plus fa-lg text-gray-500 hover:text-gray-700"></i>'>
                            <li>
                                <a href="{{route('login_register')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left"
                                    >Login/Register</a>
                            </li>
                        </x-dropdown>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
