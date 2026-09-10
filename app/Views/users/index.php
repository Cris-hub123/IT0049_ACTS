<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <div>
        <h1 class="h2 mb-1">User Accounts</h1>
    </div>
</div>

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['full_name']) ?></td>
                            <td><?= esc($user['role']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>