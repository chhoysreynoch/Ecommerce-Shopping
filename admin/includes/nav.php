<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
          <span class="align-middle">Admin Panel</span>
        </a>

				<ul class="sidebar-nav">

					<li class="sidebar-item <?=($p=="dashboard"?"active":"")?>">
						<a class="sidebar-link" href="index.php">
              				<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            			</a>
					</li>

					<li class="sidebar-item <?=($p=="slidshow"?"active":"")?>">
						<a class="sidebar-link" href="index.php?p=slidshow">
              				<i class="align-middle" data-feather="archive"></i> <span class="align-middle">Slideshow</span>
            			</a>
					</li>

					<li class="sidebar-item <?=($p=="products"?"active":"")?>">
						<a class="sidebar-link" href="index.php?p=products">
              				<i class="align-middle" data-feather="box"></i> <span class="align-middle">Products</span>
            			</a>
					</li>

					<li class="sidebar-item <?=($p=="category"?"active":"")?>">
						<a class="sidebar-link" href="index.php?p=category">
              				<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Category</span>
            			</a>
					</li>

					<li class="sidebar-item <?=($p=="brand"?"active":"")?>">
						<a class="sidebar-link" href="index.php?p=brand">
              				<i class="align-middle" data-feather="bookmark"></i> <span class="align-middle">Brand</span>
            			</a>
					</li>

					<li class="sidebar-item <?=($p=="page"?"active":"")?>">
						<a class="sidebar-link" href="index.php?p=page">
              				<i class="align-middle" data-feather="file"></i> <span class="align-middle">Page</span>
            			</a>
					</li>

					<li class="sidebar-item <?=($p=="user"?"active":"")?>">
						<a class="sidebar-link" href="index.php?p=user">
              				<i class="align-middle" data-feather="user"></i> <span class="align-middle">User</span>
            			</a>
					</li>

					<li class="sidebar-item <?=($p=="settings"?"active":"")?>">
						<a class="sidebar-link" href="index.php?p=settings">
              				<i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
            			</a>
					</li>

				</ul>

			</div>
		</nav>