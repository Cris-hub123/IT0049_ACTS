<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="p-4 p-md-5 mb-4 bg-white border rounded">
    <h1 class="display-6">Point of Sale System</h1>
    <p class="lead mb-0">
        Welcome to the basic Point of Sale system. Use the navigation menu to
        view customer and user account records.
    </p>
</div>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="h5 card-title">Customer Accounts</h2>
                <a class="btn btn-primary" href="<?= site_url('customers') ?>">
                    View customers
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="h5 card-title">User Accounts</h2>
                <a class="btn btn-primary" href="<?= site_url('users') ?>">
                    View users
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="h5 card-title">About</h2>
                <a class="btn btn-outline-secondary" href="<?= site_url('about') ?>">
                    Read more
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>