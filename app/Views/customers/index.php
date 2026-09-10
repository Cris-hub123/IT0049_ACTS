<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <div>
        <h1 class="h2 mb-1">Customer Accounts</h1>
    </div>
</div>

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer): ?>
                        <tr>
                            <td><?= esc($customer['full_name']) ?></td>
                            <td><?= esc($customer['email']) ?></td>
                            <td><?= esc($customer['phone']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>