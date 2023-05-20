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
        
        
          <!-- FOR MANAGING NEWS -->
          <section>
            <h2>Manage News</h2>
            <table>
              <thead>
                <tr>
                  <th>Category</th>
                  <th>Date</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($cnews as $news)
                <tr>    
                  <td>{{$news->category}}</td>
                  <td>{{$news->created_at->format('F j, Y')}}</td>
                  <td><img src="{{ $news->image }}" width="30px" alt="Post 1"></td>
                  <td class="editanddelete"><a href="{{ route('create-news.edit',$news->id) }}" class="editBtn">Edit</a> | 
                  <form action="{{ route('create-news.delete',$news->id) }}" method="post">
                      @method('DELETE')
                      @csrf
                      <button class="deleteBtn">Delete</button>
                    </form>
                  </td>
                </tr>

                  @endforeach
              </tbody>
            </table>
            
          </section>

          <!-- END OF NEWS -->


          <!-- FOR MANAGING ABOUT -->
          <section>
            <h2>Manage About</h2>
            <table>
              <thead>
                <tr>
                  <th>Content</th>
                  <th>Date</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($abouts as $about)
                <tr>    
                  <td>{{$about->content}}</td>
                  <td>{{$about->created_at->format('F j, Y')}}</td>
                  <td><img src="{{ $about->image }}" width="30px" alt="Post 1"></td>
                  <td class="editanddelete"><a href="{{ route('create-about.edit',$about->id) }}" class="editBtn">Edit</a> | 
                  <form action="{{ route('create-about.delete',$about->id) }}" method="post">
                      @method('DELETE')
                      @csrf
                      <button class="deleteBtn">Delete</button>
                    </form>
                  </td>
                </tr>

                  @endforeach
              </tbody>
            </table>
            
          </section>

          <!-- END OF ABOUT -->


          <!-- FOR MANAGING EVENTS -->
          <section>
            <h2>Manage Events</h2>
            <table>
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
                  @foreach ($events as $event)
                    <tr>    
                      <td>{{$event->header}}</td>
                      <td>{{$event->created_at->format('F j, Y')}}</td>
                      <td><img src="{{ $event->image }}" width="30px" alt="Post 1"></td>
                      <td class="editanddelete"><a href="{{ route('create-event.edit',$event->id) }}" class="editBtn">Edit</a> | 
                        <form action="{{ route('create-event.delete',$event->id) }}" method="post">
                          @method('DELETE')
                          @csrf
                          <button class="deleteBtn">Delete</button>
                        </form>
                      </td>
                    </tr>

                  @endforeach
              </tbody>
            </table>
            
          </section>

          <!-- END OF NEWS -->
        </div>
      </div>
    </div>
    @endsection
</x-admin-master>
