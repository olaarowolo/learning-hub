<header>
  <h1 class="hero">Welcome, Future Stars! </h1>
  <p class="hero-text">Ready for an adventure? Pick your year to start learning!</p>
  <div class="location-switcher" style="text-align: center; margin-bottom: 1rem;">
    @if(\Illuminate\Support\Str::lower(request('location')) === 'ng')
      <a href="{{ url('/') }}" style="color: var(--primary); font-weight: 700; text-decoration: underline;">Switch to UK Curriculum</a>
    @else
      <a href="{{ url('/?location=ng') }}" style="color: var(--primary); font-weight: 700; text-decoration: underline;">Switch to Nigeria Curriculum</a>
    @endif
  </div>
  <div class="search-container">
    <input type="text" id="search-input" placeholder="Search for lesson topics..." />
    <div id="search-results"></div>
  </div>
  <div id="search-overlay"></div>
</header>
