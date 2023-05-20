<x-admin-master>
    @section('content')
        
    <div class="container">
      <div class="header">
        <div class="header-logo">
        
          <span class="site-title">Foreginer</span>
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
            <nav>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Posts</a></li>
                <li><a href="#">Log out</a></li>
              </ul>
            </nav>
          </header>
        
      
          <h1>User List Dashboard</h1>
          <table>
              <thead>
                  <tr>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Instagram URL</th>
                      <th>Date of Birth</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{ $user->{'instagram_url'} }}"><i class="fab fa-instagram instagram-icon"></i>{{$user->name}}</a></td>
                    <td>{{$user->created_at->format('F j, Y')}}</td>
                </tr>
                
                @endforeach
              </tbody>
          </table>
       
          <div class="pagination">
            <button class="btn">
              <svg
                   xmlns="http://www.w3.org/2000/svg"
                   class="btn-icon"
                   fill="none"
                   viewBox="0 0 24 24"
                   stroke="currentColor"
                   stroke-width="2"
                   >
                <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 19l-7-7 7-7"
                      />
              </svg>
            </button>
            <a href="#" class="page-link">1</a>
            <a href="#" class="page-link">2</a>
            <a href="#" class="page-link page-link--current">3</a>
            <a href="#" class="page-link">4</a>
            <a href="#" class="page-link">5</a>
            <a href="#" class="page-link">6</a>
            <span class="dots">...</span>
            <a href="#" class="page-link">23</a>
            <button class="btn">
              <svg
                   xmlns="http://www.w3.org/2000/svg"
                   class="btn-icon"
                   fill="none"
                   viewBox="0 0 24 24"
                   stroke="currentColor"
                   stroke-width="2"
                   >
                <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9 5l7 7-7 7"
                      />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    @endsection
</x-admin-master>