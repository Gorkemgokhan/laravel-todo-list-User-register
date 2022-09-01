				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="{{url('/' . $page='index')}}">
							<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
							<img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
							<img src="{{URL::asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Admintro logo">
							<img src="{{URL::asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Admintro logo">
						</a>
					</div>
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="{{URL::asset('assets/images/users/2.jpg')}}" alt="user-img" class="avatar-xl rounded-circle mb-1">
							</div>
							<div class="user-info">
								<h5 class=" mb-1">{{Auth::user()->name}} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
								<span class="text-muted app-sidebar__user-name text-sm">{{Auth::user()->roles()->get()->pluck('name')}}</span>
							</div>
						</div>
					</div>
				</aside>
				<!--aside closed-->
