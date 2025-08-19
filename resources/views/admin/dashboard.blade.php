<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .small-box { padding: 20px; color: #fff; border-radius: 8px; position: relative; }
        .small-box .inner { text-align: center; }
        .small-box .icon { position: absolute; top: 10px; right: 10px; font-size: 3rem; opacity: 0.2; }
        .small-box-footer { color: #fff; display: block; text-align: center; padding-top: 10px; }
        .badge { font-size: 0.9rem; }
    </style>
</head>
<body>
    <div class="container-fluid mt-4">
        <h1 class="mb-4">Admin Dashboard</h1>

        <div class="row mb-4">
            <!-- Stats Cards -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 id="total-services">0</h3>
                        <p>Total Services</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3 id="active-workers">0</h3>
                        <p>Active Workers</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 id="pending-requests">0</h3>
                        <p>Pending Requests</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3 id="pending-verifications">0</h3>
                        <p>Pending Verifications</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Recent Service Requests -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title mb-0">Recent Service Requests</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Service</th>
                            <th>Worker</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="requests-table-body">
                        <!-- Rows will be inserted dynamically with JS or server-side -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS + Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Example JS to insert dynamic data -->
    <script>
        // Example stats (replace with actual server data)
        const stats = {
            total_services: 12,
            active_workers: 5,
            pending_requests: 3,
            pending_verification: 2
        };

        document.getElementById('total-services').innerText = stats.total_services;
        document.getElementById('active-workers').innerText = stats.active_workers;
        document.getElementById('pending-requests').innerText = stats.pending_requests;
        document.getElementById('pending-verifications').innerText = stats.pending_verification;

        // Example recent requests (replace with server data)
        const recentRequests = [
            {id:1, user:'Rakibul', service:'Plumbing', worker:'Jamil', status:'pending', date:'2025-08-19'},
            {id:2, user:'Sara', service:'Electric', worker:null, status:'completed', date:'2025-08-18'}
        ];

        const tbody = document.getElementById('requests-table-body');
        recentRequests.forEach(r => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${r.id}</td>
                <td>${r.user}</td>
                <td>${r.service}</td>
                <td>${r.worker ? r.worker : 'Not assigned'}</td>
                <td>
                    <span class="badge bg-${r.status === 'completed' ? 'success' : (r.status === 'pending' ? 'warning' : 'info')}">
                        ${r.status.charAt(0).toUpperCase() + r.status.slice(1)}
                    </span>
                </td>
                <td>${r.date}</td>
                <td><button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button></td>
            `;
            tbody.appendChild(tr);
        });
    </script>
</body>
</html>
