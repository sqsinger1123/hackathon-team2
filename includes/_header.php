	<nav id="header" class="navbar navbar-default" role="navigation">
		<div id="header-inner" class="row">

			<a href="/">
				<div id="menuleft" class="navbar-header col-xs-">
					<div class="logoimg">
						<img alt="Parkb

						ench logo" width="38px" height="45px" src="" />
					</div>
					<div id="hood_name_header" class="hidden-xs hidden-sm">
						<h1 id="hood_name_header_inner" class="">
						</h1>
					</div>
				</div>
			</a>

			<div id="menumiddle" class="navbar-header ">
				
			</div>

			<div id="menuright" class="navbar-header">
				<button title="Click to expand this menu" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pb-collapsing-navbar">
					<span class="sr-only"><?php echo $lang['menu_toggle_navigation']; ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="pb-collapsing-navbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="a_view_map hidden-lg hidden-md">
						<a class="nav_item" onclick="$('#map-canvas').height(175).slideToggle();fnScrollToBlock('#map-canvas');setTimeout(function() { google.maps.event.trigger(gi.map, 'resize'); }, 350);"><?php echo $lang['text_map_view']; ?></a>
					</li>
					<!-- <a class="nav_item" title="Learn more about Parkbench" href="aboutus">Learn more about Parkbench</a> -->
					<?php if ($logged) { ?>
						<li class="li_logged_in_menu">
							<a class="nav_item" href="account"><?php $prof_name = explode(" - ",$profilename); echo $prof_name[0]; ?>
								<img class="img_avatar" alt="That&apos;s your picture, <?php echo $profilename; ?>!" src="<?php echo HTTP_IMAGE . (isset($avatar) ? $avatar : ''); ?>" />
							</a>
						</li>
						<li class="a_go_home">
							<a class="nav_item" href="/"><?php echo $lang['menu_home']; ?></a>
						</li>

						<li id="menu_account_dropdown" class="dropdown">
							<a id="a_account_dropdown" title="Account settings and logout" class="nav_item dropdown-toggle" data-toggle="dropdown">
								Account<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="account" class="nav_item"><?php echo $lang['menu_view_profile']; ?></a></li>
								<li><a href="password" class="nav_item"><?php echo $lang['menu_account_settings']; ?></a></li>
								<hr/>
								<li><a href="register-business" class="nav_item"><?php echo $lang['menu_register_business']; ?></a></li>
								<hr/>
								<li><a id="a_logout" class="nav_item" href="<?php echo $url_logout; ?>"><?php echo $lang['menu_logout']; ?></a></li>
							</ul>
						</li>

					<?php } else { ?>
						<li>
							<a id="a_sign_up_fb" class="facebook nav_item" title="Sign up for Parkbench by using your Facebook account."
							href="<?php echo $fb_url_login; ?>" >
								<img alt="Facebook logo image" class="facebook-pin" alt="facebook-logo" src="<?php echo "//{$_SERVER['HTTP_HOST']}"; ?>/home/splash/spf/facebook_HR.png" /><?php echo $lang['menu_connect']; ?>
							</a>
						</li>
						<li><a id="a_sign_up" class="nav_item" onclick="window.location.hash = '#signup'; fnShowJoinForm();" title="Sign up for Parkbench"><?php echo $lang['menu_signup']; ?></a></li>
						<li><a id="a_log_in" class="nav_item" onclick="window.location.hash = '#login'; fnShowLoginForm();" title="Log In to your Parkbench account"><?php echo $lang['menu_login']; ?></a></li>

					<?php } ?>

				</ul><!-- /.navbar-right -->
			</div><!-- /#pb-collapsing-navbar.navbar-collapse -->
		</div><!-- /#header.container-fluid -->
	</nav>
