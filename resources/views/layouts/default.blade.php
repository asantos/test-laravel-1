<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <div class="container">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <span class="fs-4">Mentorship demo</span>
                    </a>

                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="{{ route('site.index')  }}" class="nav-link {{ (request()->route()->getName() == 'site.index') ? 'active' : '' }}">Home</a></li>
                        <li class="nav-item"><a href="{{ route('site.aaa')  }}" class="nav-link {{ (request()->route()->getName() == 'site.aaa') ? 'active' : '' }}">AAA</a></li>
                        <li class="nav-item"><a href="{{ route('site.bbb')  }}" class="nav-link {{ (request()->route()->getName() == 'site.bbb') ? 'active' : '' }}">BBB</a></li>
                        <li class="nav-item"><a href="{{ route('site.posts')  }}" class="nav-link {{ (request()->route()->getName() == ('site.posts' || 'site.posts.single')) ? 'active' : '' }}">Posts</a></li>
                    </ul>
                </header>
            </div>
            <div class="container">
                @section('body')
                @show
            </div>
        </main>
    </body>
</html>
