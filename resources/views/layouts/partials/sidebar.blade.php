<li class="{{ set_active('dashboard') }}">
    <a href="{{ route('dashboard') }}">
        <i class="fa fa-home"></i>
        <span>Dashboard</span>
    </a>
</li>

{{-- <li class="header" style="font-weight:bold;">DATA STATISTIK SEKTORAL </li>
<li class="treeview {{ set_active([
    'luasWilayahDenganKetinggianTempat',
    'luasWilayahPerKecamatan',
]) }}">
    <a href="#">
        <i class="fa fa-check-square"></i> <span>Luas Wilayah Per</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu " style="padding-left:25px;">
        <li class="{{ set_active(['luasWilayahDenganKetinggianTempat']) }}"><a href="{{ route('luasWilayahDenganKetinggianTempat') }}"><i class="fa fa-circle-o"></i>Ketinggian Tempat</a></li>
        <li class="{{ set_active(['luasWilayahPerKecamatan']) }}"><a href="{{ route('luasWilayahPerKecamatan') }}"><i class="fa fa-circle-o"></i>Kecamatan</a></li>
    </ul>
</li> --}}

<li class="{{ set_active(['kelompokDataSektoral','kelompokDetail']) }}">
    <a href="{{ route('kelompokDataSektoral') }}">
        <i class="fa fa-list-alt"></i>
        <span>Kelompok Data Sektoral</span>
    </a>
</li>

<li class="header" style="font-weight:bold;">PENGATURAN </li>
<li class="{{ set_active(['pengaturanKolom']) }}">
    <a href="{{ route('pengaturanKolom') }}">
        <i class="fa fa-gears"></i>
        <span>Pengaturan Kolom Data</span>
    </a>
</li>

<li class="{{ set_active(['kolomData']) }}">
    <a href="{{ route('kolomData') }}">
        <i class="fa fa-list-check"></i>
        <span>Kolom Kelompok Data</span>
    </a>
</li>
