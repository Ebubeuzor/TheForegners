<x-admin-master>
    @section('content')
        
    <div class="container">
      <div class="header">
        <div class="header-logo">
        
          <span class="site-title">Foreigner</span>
        </div>
        <div class="header-search">
          <button class="button-menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 385 385">
              <path d="M12 120.3h361a12 12 0 000-24H12a12 12 0 000 24zM373 180.5H12a12 12 0 000 24h361a12 12 0 000-24zM373 264.7H132.2a12 12 0 000 24H373a12 12 0 000-24z" />
            </svg></button>
          <input type="search" placeholder="Search Documentation..." />
        </div>
      </div>
      <div class="main">
        @include('admin.sidebar')
        <div class="page-content">
          <header>
            <h1>Dashboard</h1>
            <nav>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="artisteList.html">List of Artistes</a></li>
                <li><a href="#">Log out</a></li>
              </ul>
            </nav>
          </header>

          
        
          <section>
            <h2>Create an artist post</h2>
            <form action="{{ route('create-artist.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <label for="title">Title:</label>
              <input type="text" id="title" name="title">
              @error('title')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror
        
              <label for="artiste">Artiste:</label>
              <textarea id="artiste" name="artiste"></textarea>

              @error('artiste')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror
        
              <label for="header">Header:</label>
              <textarea id="header" name="header"></textarea>

              @error('header')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror

              <label for="Twitter">Twitter:</label>
              <textarea id="Twitter" name="Twitter"></textarea>
              @error('Twitter')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror

              <label for="Instagram">Instagram:</label>
              <textarea id="Instagram" name="Instagram"></textarea>
              @error('Instagram')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror


              <label for="Spotify">Spotify:</label>
              <textarea id="Spotify" name="Spotify"></textarea>
              @error('Spotify')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror

              <label for="Apple Music">Apple Music:</label>
              <textarea id="Apple Music" name="apple-music"></textarea>
              @error('AppleMusic')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror

              <label for="image">Image:</label>
              <input type="file" id="image" name="image"><br>
              @error('image')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror
        
              <label for="content">Content:</label>
              <textarea id="content" name="content"></textarea>
              @error('content')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror

        
              <input type="submit" value="Create">
            </form>
          </section>
        
       
        
        </div>
      </div>
    </div>

    @endsection
</x-admin-master>
