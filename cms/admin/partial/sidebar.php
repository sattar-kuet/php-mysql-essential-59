  <?php $base_url = 'http://'.$_SERVER['SERVER_NAME'];?>
  <nav id="sidebar">
    <div class="sidebar-header">
        <h3><a target="_blank" href="<?php echo $base_url;?>/cms/public/"> CMS </a></h3>
        <strong><a target="_blank" href="<?php echo $base_url;?>/cms/public"> CMS </a></strong>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="<?php echo $base_url;?>/cms/admin/dashboard.php">
                <i class="glyphicon glyphicon-pencil"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url;?>/cms/admin/all_post.php">
                <i class="glyphicon glyphicon-pencil"></i>
                All Post
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url;?>/cms/admin/new_post.php">
                <i class="glyphicon glyphicon-pencil"></i>
                New Post
            </a>
        </li>

    </ul>
</nav>