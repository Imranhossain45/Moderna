</div>
<!-- // END drawer-layout__content -->

<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
            <div class="sidebar-heading">Menu</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item active">
                    <a class="sidebar-menu-button" href="index.php">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Dashboards</span>
                    </a>
                </li>
               
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#banner_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Banner</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="banner_menu">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="<?=siteUrl()?>/admin/banner/addbanner.php">
                                <span class="sidebar-menu-text">Add Banner</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="<?=siteUrl()?>/admin/banner/bannerindex.php">
                                <span class="sidebar-menu-text">All Banners</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#service_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Services</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="service_menu">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="<?=siteUrl()?>/admin/service/addservice.php">
                                <span class="sidebar-menu-text">Add Service</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="<?=siteUrl()?>/admin/service/serviceindex.php">
                                <span class="sidebar-menu-text">All Services</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" href="<?=siteUrl()?>/admin/whyus/whyusindex.php">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Why Us</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#features_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Features</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="features_menu">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="<?=siteUrl()?>/admin/feature/addfeature.php">
                                <span class="sidebar-menu-text">Add Feature</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="<?=siteUrl()?>/admin/feature/featureindex.php">
                                <span class="sidebar-menu-text">All Features</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#subscribers_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Subscribers</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="subscribers_menu">
                        
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="<?=siteUrl()?>/admin/subscribers/subscribeindex.php">
                                <span class="sidebar-menu-text">All Subscribers</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                        <span class="sidebar-menu-text">Layouts</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="layouts_menu">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="index.html">
                                <span class="sidebar-menu-text">Default</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                
                    <span class="avatar avatar-sm mr-2">
                        <img src="../images/300 (APPLY).jpg" alt="" class="avatar-img rounded-circle">
                    </span>
                    <span class="flex d-flex flex-column">
                    <a class=" font-weight-bolder text-white" href="<?=siteUrl()?>/admin/profile/imran-profile.php">MD IMRAN HOSSAIN</a>
                        <small class="text-muted">Site Manager</small>
                    </span>
                
            </div>

            
              <a class="font-weight-bolder px-4" style="font-size: 25px;" href="<?=siteUrl()?>/auth/logout.php">Log out</a>
           
        </div>
    </div>
</div>
</div>
<!-- // END drawer-layout -->

</div>
<!-- // END header-layout__content -->

</div>
<!-- // END header-layout -->

<!-- App Settings FAB -->
<div id="app-settings">
    <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
</div>

<!-- jQuery -->
<script src="<?=siteUrl()?>/admin/js/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="<?=siteUrl()?>/admin/js/popper.min.js"></script>
<script src="<?=siteUrl()?>/admin/js/bootstrap.min.js"></script>

<!-- Perfect Scrollbar -->
<script src="<?=siteUrl()?>/admin/js/perfect-scrollbar.min.js"></script>

<!-- DOM Factory -->
<script src="<?=siteUrl()?>/admin/js/dom-factory.js"></script>

<!-- MDK -->
<script src="<?=siteUrl()?>/admin/js/material-design-kit.js"></script>

<!-- App -->
<script src="<?=siteUrl()?>/admin/js/toggle-check-all.js"></script>
<script src="<?=siteUrl()?>/admin/js/check-selected-row.js"></script>
<script src="<?=siteUrl()?>/admin/js/dropdown.js"></script>
<script src="<?=siteUrl()?>/admin/js/sidebar-mini.js"></script>
<script src="<?=siteUrl()?>/admin/js/app.js"></script>

<!-- App Settings (safe to remove) -->
<script src="<?=siteUrl()?>/admin/js/app-settings.js"></script>

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('.myTable').DataTable();
} );
</script>

</body>

</html>