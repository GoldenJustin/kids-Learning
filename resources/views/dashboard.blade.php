@extends('index')
@section('content')
	<!-- Page header start -->
	<div class="page-header">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Dashboards</li>
			<li class="breadcrumb-item active">Admin Dashboard</li>
		</ol>

		<ul class="app-actions">
			<li>
				<a href="#" id="reportrange">
					<span class="range-text"></span>
					<i class="icon-chevron-down"></i>
				</a>
			</li>
			<li>
				<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
					<i class="icon-print"></i>
				</a>
			</li>
			<li>
				<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
					<i class="icon-cloud_download"></i>
				</a>
			</li>
		</ul>
	</div>
	<!-- Page header end -->

	<!-- Main container start -->
	<div class="main-container">
		

		<!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-3 col-sm-4 col-6">
				<div class="info-tiles">
					<div class="info-icon">
						<i class="icon-account_circle"></i>
					</div>
					<div class="stats-detail">
						<h3>0</h3>
						<p>students</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-4 col-6">
				<div class="info-tiles">
					<div class="info-icon">
						<i class="icon-watch_later"></i>
					</div>
					<div class="stats-detail">
						<h3>0</h3>
						<p>Attempts</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-4 col-6">
				<div class="info-tiles">
					<div class="info-icon">
						<i class="icon-visibility"></i>
					</div>
					<div class="stats-detail">
						<h3>0</h3>
						<p>Quizes</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-4 col-6">
				<div class="info-tiles">
					<div class="info-icon">
						<i class="icon-shopping_basket"></i>
					</div>
					<div class="stats-detail">
						<h3>0</h3>
						<p>Sales</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-4 col-6">
				<div class="info-tiles">
					<div class="info-icon secondary">
						<i class="icon-check_circle"></i>
					</div>
					<div class="stats-detail">
						<h3>3k</h3>
						<p>Signups</p>
					</div>
				</div>
			</div>
			
		</div>
		<!-- Row ends -->

	</div>
	<!-- Main container end -->
@endsection