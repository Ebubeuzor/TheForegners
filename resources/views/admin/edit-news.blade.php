<x-admin-master>
    @section('content')
    <div class="container">
      <div class="header">
        <div class="header-logo">

          <span class="site-title">Foreigners</span>
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
                <li><a href="#">Posts</a></li>
                <li><a href="#">Log out</a></li>
              </ul>
            </nav>
          </header>
        
          <section>
            <h2>Create a news post</h2>
            <form action="{{ route('create-news.update', $news) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
              @csrf
        
              <label for="title">Title:</label>
              <input type="text" id="title" name="title" value="{{$news->title}}">
              @error('title')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror
        
              <label for="category-con">Category</label>
              <div id="category-con">
                <select name="category" id="category" >
                  <option value="Music" {{ $news->category == 'Music' ? 'selected' : '' }}>Music</option>
                  <option value="Fashion"{{ $news->category == 'Fashion' ? 'selected' : '' }}>Fashion</option>
                  <option value="Sports" {{ $news->category == 'Sports' ? 'selected' : '' }}>Sports</option>
                  <option value="Events" {{ $news->category == 'Events' ? 'selected' : '' }}>Events</option>
                </select>
              </div>
              @error('category')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror

              <label for="header">Header:</label>
              <textarea id="header" name="header">{{$news->header}}</textarea>
              @error('header')

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
              <textarea id="content" name="content"> {{$news->content}} </textarea>
              @error('content')

                <div style="font-size: 13px; color: red; text-align: center;">
                  {{ $message }}
                </div>
                
              @enderror
        
              <input type="submit" value="Update">
            </form>
          </section>
        
       
        
        </div>
      </div>
    </div>
    @endsection
</x-admin-master>
