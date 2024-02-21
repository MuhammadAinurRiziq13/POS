<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bolder fs-4" href="/">RXZ POS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : ''}}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('categories*')) ? 'active' : ''}} " href="/categories">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('transaksi')) ? 'active' : ''}} " href="/transaksi">Transaksi</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/user/20/name/Muhammad-Ainur-Riziq" class="nav-link {{ (request()->is('user*')) ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> User</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>
  