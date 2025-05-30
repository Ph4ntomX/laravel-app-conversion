
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="/">MarketPro Agency</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ $selected === 'home' ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $selected === 'services' ? 'active' : '' }}" href="/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $selected === 'about' ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $selected === 'portfolio' ? 'active' : '' }}" href="/portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $selected === 'contact' ? 'active' : '' }}" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>