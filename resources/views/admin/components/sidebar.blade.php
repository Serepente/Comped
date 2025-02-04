<div class="sidebar p-3" id="sidebar">
    <!-- Logo Section -->
    <div class="logo">
        <img src="{{Vite::asset('resources/assets/images/logo1.png')}}" alt="COMPED Logo" class="logo-img img-fluid">
    </div>

    <!-- Menu Items -->
    <a href="{{route('admin.index')}}" class="menu-item">
        <img src="https://fonts.gstatic.com/s/i/materialiconsoutlined/home/v7/24px.svg" alt="Home" class="menu-icon">
        <span class="menu-text">Home</span>
    </a>

    <a href="{{route('admin.advisor.control')}}" class="menu-item">
        <img src="https://fonts.gstatic.com/s/i/materialiconsoutlined/supervisor_account/v7/24px.svg" alt="Advisor" class="menu-icon">
        <span class="menu-text">Advisor</span>
    </a>

    <a href="{{route('admin.officer.control')}}" class="menu-item">
        <img src="https://fonts.gstatic.com/s/i/materialiconsoutlined/business/v7/24px.svg" alt="Officer Control" class="menu-icon">
        <span class="menu-text">Officer Control</span>
    </a>

    <a href="{{route('admin.treasurer.control')}}" class="menu-item">
        <img src="https://fonts.gstatic.com/s/i/materialiconsoutlined/account_balance_wallet/v7/24px.svg" alt="Treasurer" class="menu-icon">
        <span class="menu-text">Treasurer</span>
    </a>

    <a href="{{route('admin.secretary.control')}}" class="menu-item">
        <img src="https://fonts.gstatic.com/s/i/materialiconsoutlined/edit/v7/24px.svg" alt="Secretary" class="menu-icon">
        <span class="menu-text">Secretary</span>
    </a>
</div>
