<nav>
        <ul class="metismenu" id="menu">
        <li class="<?php if($page=='dashboard') {echo 'active';} ?>"><a href="dashboard.php"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                            
        <li class="<?php if($page=='employee') {echo 'active';} ?>"><a href="pekerja.php"><i class="ti-id-badge"></i> <span>Bahagian Pekerja</span></a></li>
                        
        <li class="<?php if($page=='department') {echo 'active';} ?>"><a href="department.php"><i class="fa fa-th-large"></i> <span>Bahagian Department</span></a></li>

         <li class="<?php if($page=='leave') {echo 'active';} ?>"><a href="asset-type.php"><i class="fa fa-sign-out"></i> <span>Jenis Aset</span></a></li>

        <li class="<?php if($page=='manage-leave') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Urus Aset</span></a>

            <ul class="collapse">
                <li ><a href="pending-history.php"><i class="fa fa-spinner"></i> Belum Selesai</a></li>
                <li ><a href="approved-history.php"><i class="fa fa-check"></i> Diterima</a></li>
                <li ><a href="declined-history.php"><i class="fa fa-times-circle"></i> Ditolak</a></li>
                <li ><a href="asset-history.php"><i class="fa fa-history"></i> Senarai Aset </a></li>
                
            </ul>
            
        </li>

        <li class="<?php if($page=='manage-admin') {echo 'active';} ?>"><a href="manage-admin.php"><i class="fa fa-lock"></i> <span>Mengawal Admin</span></a></li>
                            
    </ul>
</nav>