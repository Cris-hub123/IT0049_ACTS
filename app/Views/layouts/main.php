<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Basic CodeIgniter 4 point-of-sale system">

    <title><?= esc($title ?? 'Point of Sale') ?> | Point of Sale</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="<?= base_url('assets/css/pos.css') ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('/') ?>">Point of Sale</a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavigation"
                aria-controls="mainNavigation"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a
                            class="nav-link <?= ($activePage ?? '') === 'home' ? 'active' : '' ?>"
                            href="<?= site_url('/') ?>"
                        >
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link <?= ($activePage ?? '') === 'about' ? 'active' : '' ?>"
                            href="<?= site_url('about') ?>"
                        >
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link <?= ($activePage ?? '') === 'customers' ? 'active' : '' ?>"
                            href="<?= site_url('customers') ?>"
                        >
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link <?= ($activePage ?? '') === 'users' ? 'active' : '' ?>"
                            href="<?= site_url('users') ?>"
                        >
                            Users
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="border-top bg-white py-3">
        <div class="container text-center text-secondary small">
            IT0049 Technical Assessment 1
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>