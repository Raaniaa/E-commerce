<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index3.html" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>

			<!-- Right navbar links -->
			@include('admin.layouts.menu')
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="{{ url('design/adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">AdminLTE 3</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="{{ url('design/adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">{{admin()->user()->name}}</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item has-treeview menu-open">
							<a href="{{aurl('')}}" class="nav-link ">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									{{trans('admin.dashboard')}}
								</p>
							</a>

						</li>
						<li class="nav-item has-treeview {{ active_menu('admin')[0] }} ">
							<a href="#" class="nav-link ">
								<i class="fa fa-users"></i>
								<p>
									{{ trans('admin.admin')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('admin')[1] }} ">
								<li class="nav-item">
									<a href="{{aurl('admin')}}" class="nav-link active {{ active_menu('admin')[1] }} ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.admin')}}</p>
									</a>
								</li>


							</ul>
						</li>
						<li class="nav-item has-treeview {{ active_menu('users')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-users"></i>
								<p>
									{{ trans('admin.users_account')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('users')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('users')}}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.users_all')}}</p>
									</a>
									<a href="{{aurl('users')}}?level=user" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.user')}}</p>
									</a>
									<a href="{{aurl('users')}}?level=vendor" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.vendor')}}</p>
									</a>
									<a href="{{aurl('users')}}?level=company" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.company')}}</p>
									</a>
									 
								</li>

                                
							</ul>
						</li>
								<li class="nav-item has-treeview {{ active_menu('countries')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.countries')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('countries')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('countries')}}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.countries')}}</p>
									</a>
									<a href="{{ aurl('countries/create') }}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
									
								
									 
								</li>

                                
							</ul>
						</li>
						<li class="nav-item has-treeview {{ active_menu('cities')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.cities')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('cities')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('cities')}}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.countries')}}</p>
									</a>
									<a href="{{ aurl('cities/create') }}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
									
								
									 
								</li>

                                
							</ul>
						</li>
          <li class="nav-item has-treeview {{ active_menu('states')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.states')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('states')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('states')}}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.states')}}</p>
									</a>
									<a href="{{ aurl('states/create') }}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
									
								
									 
								</li>

                                
							</ul>
						</li>
						<li class="nav-item has-treeview {{ active_menu('departments')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.departments')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('departments')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('departments')}}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.departments')}}</p>
									</a>
									<a href="{{ aurl('departments/create') }}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
									
								
									 
								</li>

                                
							</ul>
						</li>
						<li class="nav-item has-treeview {{ active_menu('trademarks')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.trademarks')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('trademarks')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('trademarks')}}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.trademarks')}}</p>
									</a>
									<a href="{{ aurl('trademarks/create') }}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
									
								
									 
								</li>

                                
							</ul>
						</li>
						
						<li class="nav-item has-treeview {{ active_menu('manufacturers')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.manufacturers')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('manufacturers')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('manufacturers')}}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.manufacturers')}}</p>
									</a>
									<a href="{{ aurl('manufacturers/create') }}" class="nav-link active ">
										<i class="fa fa-users"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
									
								
									 
								</li>

                                
							</ul>
						</li>
						<li class="nav-item has-treeview {{ active_menu('shipping')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.shipping')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('shipping')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('shipping')}}" class="nav-link active ">
										<i class="fa fa-truck"></i>
										<p>{{ trans('admin.shipping')}}</p>
									</a>
									<a href="{{ aurl('shipping/create') }}" class="nav-link active ">
										<i class="fa fa-plus"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
									
								
									 
								</li>

                                
							</ul>
						</li>
						<li class="nav-item has-treeview {{ active_menu('malls')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.malls')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('malls')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('malls')}}" class="nav-link active ">
										<i class="fa fa-building"></i>
										<p>{{ trans('admin.malls')}}</p>
									</a>
									<a href="{{ aurl('malls/create') }}" class="nav-link active ">
										<i class="fa fa-plus"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
									
								
									 
								</li>

                                
							</ul>
						</li>
						<li class="nav-item has-treeview {{ active_menu('colors')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.colors')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('colors')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('colors')}}" class="nav-link active ">
										<i class="fa fa-brush"></i>
										<p>{{ trans('admin.colors')}}</p>
									</a>
									<a href="{{ aurl('colors/create') }}" class="nav-link active ">
										<i class="fa fa-plus"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
								</li>
                              </ul>
						</li>
						
							<li class="nav-item has-treeview {{ active_menu('sizes')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.sizes')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('sizes')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('sizes')}}" class="nav-link active ">
										<i class="fa fa-circle"></i>
										<p>{{ trans('admin.sizes')}}</p>
									</a>
									<a href="{{ aurl('sizes/create') }}" class="nav-link active ">
										<i class="fa fa-plus"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
								</li>
                              </ul>
						</li>
						
						<li class="nav-item has-treeview {{ active_menu('weights')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.weights')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('weights')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('weights')}}" class="nav-link active ">
										<i class="fa fa-circle"></i>
										<p>{{ trans('admin.weights')}}</p>
									</a>
									<a href="{{ aurl('weights/create') }}" class="nav-link active ">
										<i class="fa fa-plus"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
								</li>
                              </ul>
						</li>
						
						<li class="nav-item has-treeview {{ active_menu('products')[0] }}">
							<a href="#" class="nav-link ">
								<i class="fa fa-flag"></i>
								<p>
									{{ trans('admin.products')}}
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview {{ active_menu('products')[1] }}">
								<li class="nav-item">
									<a href="{{aurl('products')}}" class="nav-link active ">
										<i class="fa fa-tag"></i>
										<p>{{ trans('admin.products')}}</p>
									</a>
									<a href="{{ aurl('products/create') }}" class="nav-link active ">
										<i class="fa fa-plus"></i>
										<p>{{ trans('admin.add')}}</p>
									</a>
								</li>
                              </ul>
						</li>
						<!--    <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
         -->
        </ul>
      </nav> 
      <!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside> 
			
	</div></body>
