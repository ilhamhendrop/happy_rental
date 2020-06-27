@extends('layout.master_dashboard')

@section('tittle')
Profile
@endsection

@section('main')
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-profile">
				<div class="clearfix">
					<!-- LEFT COLUMN -->
					<div class="profile-left">
						<!-- PROFILE HEADER -->
						<div class="profile-header">
							<div class="overlay"></div>
							<div class="profile-main">
								<img src="{{ $pegawai->getAvatar() }}" class="img-circle" alt="Avatar">
								<h3 class="name">{{ $pegawai->name }}</h3>
								<span class="online-status status-available">Available</span>
							</div>
							<div class="profile-stat">
								<div class="row">
									<div class="col-md-4 stat-item">
										45 <span>Projects</span>
									</div>
									<div class="col-md-4 stat-item">
										15 <span>Awards</span>
									</div>
									<div class="col-md-4 stat-item">
										2174 <span>Points</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PROFILE HEADER -->
						<!-- PROFILE DETAIL -->
						<div class="profile-detail">
							<div class="profile-info">
								<h4 class="heading">Basic Info</h4>
								<ul class="list-unstyled list-justify">
									<li>Tempat, Tanggal Lahir <span>{{ $pegawai->ttl }}</span></li>
									<li>Mobile <span>{{ $pegawai->no_tlp }}</span></li>
									<li>Email <span>{{ $pegawai->email }}</span></li>
									<li>Alamat <span>{{ $pegawai->alamat }}</span>
									</li>
								</ul>
							</div>
                            <div class="text-center"><a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-primary">Edit Profile</a></div><br>
                            <div class="text-center"><a href="{{ route('pegawai.delete', $pegawai->id) }}" class="btn btn-danger"> <span>Delete</span></a></div>
						</div>
						<!-- END PROFILE DETAIL -->
					</div>
					<!-- END LEFT COLUMN -->
					<!-- RIGHT COLUMN -->
					<div class="profile-right">

					</div>
					<!-- END RIGHT COLUMN -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection
