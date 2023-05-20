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
            <h2>List of Artistes</h2>
            <table>
              <thead>
                <tr>
                  <th>Artist Name</th>
                  <th>Date</th>
                  <th>Image</th>
                  <th>Actions</th>
                  <th>Twitter URL</th>
                  <th>Spotify URL</th>

                  <th>Apple Music URL</th>

                  <th>Instagram URL</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Davido</td>
                  <td>April 17, 2023</td>
                  <td><img src="{{ asset('assets/djkhaklid.jpeg') }}" width="30px" alt="Post 1"></td>
                  <td><a href="create-artist.html" class="editBtn">Edit</a> | <a href="#" class="deleteBtn">Delete</a></td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>

                </tr>
                <tr>
                  <td>Burna Boy</td>
                  <td>April 16, 2023</td>
                  <td><img src="{{ asset('assets/djkhaklid.jpeg') }" width="30px" alt="Post 2"></td>
                  <td><a href="#" class="editBtn">Edit</a> | <a href="#" class="deleteBtn">Delete</a></td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>

                </tr>
                <tr>
                  <td>Ed Sheeran</td>
                  <td>April 16, 2023</td>
                  <td><img src="{{ asset('assets/djkhaklid.jpeg') }" width="30px" alt="Post 2"></td>
                  <td><a href="#" class="editBtn">Edit</a> | <a href="#" class="deleteBtn">Delete</a></td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>

                </tr>
                <tr>
                  <td>Rema</td>
                  <td>April 16, 2023</td>
                  <td><img src="/assets/djkhaklid.jpeg" width="30px" alt="Post 2"></td>
                  <td><a href="#" class="editBtn">Edit</a> | <a href="#" class="deleteBtn">Delete</a></td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>
                  <td class="box">https://www.google.com/search?q=instagram&rlz=1C5CHFA_enNG1048NG1048&oq=instagram&aqs=chrome..69i57j35i39j0i433i512l3j5j69i60l2.3485j0j7&sourceid=chrome&ie=UTF-8</td>

                </tr>
              </tbody>
            </table>
            
          </section>
       
        
        </div>
      </div>
    </div>

    @endsection
</x-admin-master>
