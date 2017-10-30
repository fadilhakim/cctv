<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigation</li>

                <li class="has_sub active">
                    <a href="<?php echo base_url('admin'); ?>" class="waves-effect active"><i class="zmdi zmdi-view-dashboard"></i> <span> Main Menu</span> </a>

                </li>
                <?php
                if($this->session->userdata('role_id')==1){ ?>
<!--                 <li class="has_sub">
                    <a href="<?php echo base_url('admin/users_admin'); ?>" class="waves-effect"><i class="fa fa-street-view"></i> <span>Admin Users</span> </a>
                </li> -->
                <!-- <li class="has_sub">
                    <a href="<?php echo base_url('admin/members'); ?>" class="waves-effect"><i class="fa fa-users"></i> <span>Members</span> </a>
                </li>
                -->
                <li class="has_sub">
                    <a href="<?php echo base_url('admin/slider'); ?>" class="waves-effect"><i class="zmdi zmdi-wallpaper"></i> <span>Slider</span> </a>
                </li>

               <!--  <li class="has_sub">
                    <a href="<?php echo base_url('admin/blog'); ?>" class="waves-effect"><i class="zmdi zmdi-wallpaper"></i> <span>Blog</span> </a>
                </li> -->

                 <!-- <li class="has_sub">
                    <a href="<?php echo base_url('admin/klien'); ?>" class="waves-effect"><i class="zmdi zmdi-wallpaper"></i> <span>Clients</span> </a>
                </li> -->

                </li>
                
                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="zmdi zmdi-washing-machine"></i> <span>Main Product</span> </a>
                    <ul>
                        <li><a href="<?php echo base_url('admin/product'); ?>" class="waves-effect"><i class="fa fa-plus"></i> <span>Add New Product</span> </a></li>
                        <li><a href="<?php echo base_url('admin/product-list'); ?>" class="waves-effect"><i class="fa fa-list-alt"></i> <span>Product List</span> </a></li>
                        <li><a href="<?php echo base_url('admin/product-category'); ?>" class="waves-effect"><i class="fa fa-list-alt"></i> <span>Category List</span> </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="<?php echo base_url('admin/blog'); ?>" class="waves-effect"><i class="zmdi zmdi-wallpaper"></i> <span>Blog</span> </a>
                </li>

                 <?php } ?>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect subdrop"><i class="zmdi zmdi-power"></i><span>Log Out </span></a>
                    <ul style="display: block;">
                        <li>
                            <a href="<?php echo base_url('login/logout'); ?>" ><span>Are You Sure ?</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>