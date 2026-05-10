<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title','Admin') - Softnsolution Admin</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'Inter',sans-serif;background:#f0f2f5;color:#333;}
.admin-wrapper{display:flex;min-height:100vh;}

/* Sidebar */
.sidebar{width:240px;background:linear-gradient(180deg,#005464 0%,#006d7a 100%);color:#fff;display:flex;flex-direction:column;flex-shrink:0;}
.sidebar-logo{padding:24px 20px;border-bottom:1px solid rgba(255,255,255,.1);}
.sidebar-logo a{color:#fff;text-decoration:none;font-size:20px;font-weight:800;letter-spacing:-0.5px;}
.sidebar-logo span{color:#ff5722;}
.sidebar-logo small{display:block;font-size:11px;opacity:.6;font-weight:400;margin-top:2px;}
.sidebar-nav{flex:1;padding:16px 0;}
.sidebar-nav a{display:flex;align-items:center;gap:10px;padding:11px 20px;color:rgba(255,255,255,.8);text-decoration:none;font-size:13px;font-weight:500;transition:all .2s;}
.sidebar-nav a:hover,.sidebar-nav a.active{background:rgba(255,255,255,.12);color:#fff;}
.sidebar-nav a .nav-icon{font-size:16px;width:20px;text-align:center;}
.sidebar-nav .nav-section{padding:14px 20px 6px;font-size:10px;text-transform:uppercase;letter-spacing:1px;color:rgba(255,255,255,.4);font-weight:600;}
.sidebar-footer{padding:16px 20px;border-top:1px solid rgba(255,255,255,.1);font-size:12px;color:rgba(255,255,255,.5);}
.sidebar-footer a{color:rgba(255,255,255,.5);text-decoration:none;}
.sidebar-footer a:hover{color:#fff;}

/* Main */
.admin-main{flex:1;display:flex;flex-direction:column;overflow:hidden;}
.admin-topbar{background:#fff;border-bottom:1px solid #e5e7eb;padding:0 24px;height:60px;display:flex;align-items:center;justify-content:space-between;}
.admin-topbar h1{font-size:18px;font-weight:700;color:#222;}
.topbar-right{display:flex;align-items:center;gap:16px;}
.admin-name{font-size:13px;font-weight:600;color:#333;}
.badge-unread{background:#ef4444;color:#fff;border-radius:10px;padding:2px 7px;font-size:11px;font-weight:700;}

/* Content */
.admin-content{flex:1;padding:24px;overflow-y:auto;}

/* Cards */
.stat-cards{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:24px;}
.stat-card{background:#fff;border-radius:10px;padding:20px;box-shadow:0 1px 3px rgba(0,0,0,.07);}
.stat-card-top{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;}
.stat-card-icon{width:44px;height:44px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px;}
.stat-card h3{font-size:28px;font-weight:800;color:#222;margin-bottom:4px;}
.stat-card p{font-size:13px;color:#888;}

/* Tables */
.table-card{background:#fff;border-radius:10px;box-shadow:0 1px 3px rgba(0,0,0,.07);overflow:hidden;}
.table-card-header{padding:16px 20px;border-bottom:1px solid #f3f4f6;display:flex;justify-content:space-between;align-items:center;}
.table-card-header h2{font-size:15px;font-weight:700;color:#222;}
.table-card-header a{font-size:13px;color:#006d7a;text-decoration:none;font-weight:600;}
table{width:100%;border-collapse:collapse;}
thead th{background:#f9fafb;padding:10px 16px;font-size:12px;font-weight:600;color:#6b7280;text-align:left;text-transform:uppercase;letter-spacing:.5px;}
tbody td{padding:12px 16px;font-size:13px;color:#374151;border-bottom:1px solid #f3f4f6;}
tbody tr:last-child td{border-bottom:none;}
tbody tr:hover{background:#fafafa;}

/* Badges */
.badge{display:inline-flex;align-items:center;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;}
.badge-new{background:#dbeafe;color:#1d4ed8;}
.badge-read{background:#f3f4f6;color:#6b7280;}
.badge-replied{background:#dcfce7;color:#16a34a;}
.badge-closed{background:#fef3c7;color:#d97706;}
.badge-reviewing{background:#e0e7ff;color:#4338ca;}
.badge-quoted{background:#dcfce7;color:#16a34a;}

/* Buttons */
.btn{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;border-radius:6px;font-size:13px;font-weight:600;cursor:pointer;text-decoration:none;border:none;transition:all .2s;}
.btn-primary{background:#006d7a;color:#fff;}
.btn-primary:hover{background:#005464;}
.btn-danger{background:#ef4444;color:#fff;}
.btn-danger:hover{background:#dc2626;}
.btn-secondary{background:#f3f4f6;color:#374151;}
.btn-secondary:hover{background:#e5e7eb;}

/* Alert */
.alert{padding:12px 16px;border-radius:8px;font-size:14px;margin-bottom:16px;}
.alert-success{background:#dcfce7;color:#16a34a;border:1px solid #bbf7d0;}
.alert-error{background:#fee2e2;color:#dc2626;border:1px solid #fecaca;}

/* Detail view */
.detail-card{background:#fff;border-radius:10px;box-shadow:0 1px 3px rgba(0,0,0,.07);padding:24px;}
.detail-field{display:grid;grid-template-columns:160px 1fr;gap:8px;padding:12px 0;border-bottom:1px solid #f3f4f6;}
.detail-field:last-child{border-bottom:none;}
.detail-label{font-size:13px;font-weight:600;color:#6b7280;}
.detail-value{font-size:14px;color:#222;}

/* Pagination */
.pagination{display:flex;gap:4px;margin-top:20px;justify-content:center;}
.pagination a,.pagination span{padding:7px 13px;border-radius:6px;font-size:13px;font-weight:500;text-decoration:none;background:#fff;border:1px solid #e5e7eb;color:#374151;}
.pagination .active span{background:#006d7a;color:#fff;border-color:#006d7a;}

/* Login */
.login-page{min-height:100vh;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#005464,#009eb4);}
.login-box{background:#fff;border-radius:16px;padding:40px;width:100%;max-width:400px;box-shadow:0 20px 60px rgba(0,0,0,.2);}
.login-box .logo{font-size:22px;font-weight:800;color:#006d7a;margin-bottom:8px;}
.login-box .logo span{color:#ff5722;}
.login-box h2{font-size:18px;font-weight:600;color:#333;margin-bottom:24px;}
.form-group{margin-bottom:16px;}
.form-group label{display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px;}
.form-group input{width:100%;padding:11px 14px;border:1px solid #d1d5db;border-radius:8px;font-size:14px;font-family:inherit;}
.form-group input:focus{outline:none;border-color:#006d7a;}
.btn-login{width:100%;background:#006d7a;color:#fff;border:none;padding:13px;border-radius:8px;font-size:15px;font-weight:700;cursor:pointer;transition:background .2s;}
.btn-login:hover{background:#005464;}
.error-msg{color:#dc2626;font-size:12px;margin-top:4px;}

@media(max-width:768px){
  .sidebar{display:none;}
  .stat-cards{grid-template-columns:repeat(2,1fr);}
}
</style>
</head>
<body>
@hasSection('login_page')
@yield('content')
@else
<div class="admin-wrapper">
    <aside class="sidebar">
        <div class="sidebar-logo">
            <a href="/admin/dashboard">soft<span>n</span>solution</a>
            <small>Admin Panel</small>
        </div>
        <nav class="sidebar-nav">
            <span class="nav-section">Main</span>
            <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <span class="nav-icon">📊</span> Dashboard
            </a>
            <span class="nav-section">Inquiries</span>
            <a href="/admin/messages" class="{{ request()->is('admin/messages*') ? 'active' : '' }}">
                <span class="nav-icon">✉️</span> Contact Messages
            </a>
            <a href="/admin/quotes" class="{{ request()->is('admin/quotes*') ? 'active' : '' }}">
                <span class="nav-icon">💼</span> Quote Requests
            </a>
            <span class="nav-section">Website</span>
            <a href="/" target="_blank"><span class="nav-icon">🌐</span> View Website</a>
        </nav>
        <div class="sidebar-footer">
            Logged in as <strong>{{ session('admin_name') }}</strong><br>
            <a href="/admin/logout">Logout</a>
        </div>
    </aside>
    <div class="admin-main">
        <div class="admin-topbar">
            <h1>@yield('title','Dashboard')</h1>
            <div class="topbar-right">
                <span class="admin-name">{{ session('admin_name') }}</span>
                <a href="/admin/logout" class="btn btn-secondary" style="padding:6px 12px;font-size:12px;">Logout</a>
            </div>
        </div>
        <div class="admin-content">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
@endif
</body>
</html>
