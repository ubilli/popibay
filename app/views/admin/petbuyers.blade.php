@extends('template.master_admin')
@section('content')
		<div class="small-12 medium-12 large-9 columns">
			<div class="content-box">
				<div class="row">
					<div class="large-12 columns">
						<div class="row collapse">
							<div class="small-10 columns">
								<input type="text" placeholder="Hex Value">
							</div>
							<div class="small-2 columns">
								<a href="#" class="button postfix">Go</a>
							</div>
						</div>
					</div>
				</div>
				<div class="pet-list-box go-up-a-bit-20">
					<div class="row">
						<div class="small-12 medium-12 large-3 columns">
							<div class="pet-image-list-con">

							</div>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h3 class="text-left">Pet name</h3>
							<h5 class="text-left">Pet details</h5>
						</div>
						<div class="small-12 medium-12 large-5 columns">
							<a href="#" class="button wider-button go-down-a-bit-50">View more</a>
						</div>
					</div>
				</div>
				<div class="pet-list-box go-up-a-bit-20">
					<div class="row">
						<div class="small-12 medium-12 large-3 columns">
							<div class="pet-image-list-con">

							</div>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h3 class="text-left">Pet name</h3>
							<h5 class="text-left">Pet details</h5>
						</div>
						<div class="small-12 medium-12 large-5 columns">
							<a href="#" class="button wider-button go-down-a-bit-50">View more</a>
						</div>
					</div>
				</div>
				<div class="pet-list-box go-up-a-bit-20">
					<div class="row">
						<div class="small-12 medium-12 large-3 columns">
							<div class="pet-image-list-con">

							</div>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h3 class="text-left">Pet name</h3>
							<h5 class="text-left">Pet details</h5>
						</div>
						<div class="small-12 medium-12 large-5 columns">
							<a href="#" class="button wider-button go-down-a-bit-50">View more</a>
						</div>
					</div>
				</div>
				<div class="pet-list-box go-up-a-bit-20">
					<div class="row">
						<div class="small-12 medium-12 large-3 columns">
							<div class="pet-image-list-con">

							</div>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h3 class="text-left">Pet name</h3>
							<h5 class="text-left">Pet details</h5>
						</div>
						<div class="small-12 medium-12 large-5 columns">
							<a href="#" class="button wider-button go-down-a-bit-50">View more</a>
						</div>
					</div>
				</div>
				<div class="pet-list-box go-up-a-bit-20">
					<div class="row">
						<div class="small-12 medium-12 large-3 columns">
							<div class="pet-image-list-con">
								
							</div>
						</div>
						<div class="small-12 medium-12 large-4 columns">
							<h3 class="text-left">Pet name</h3>
							<h5 class="text-left">Pet details</h5>
						</div>
						<div class="small-12 medium-12 large-5 columns">
							<a href="#" class="button wider-button go-down-a-bit-50">View more</a>
						</div>
					</div>
				</div>
				<div class="pagination-centered">
					<ul class="pagination">
						<li class="arrow unavailable"><a href="">&laquo;</a></li>
						<li class="current"><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<li class="unavailable"><a href="">&hellip;</a></li>
						<li><a href="">12</a></li>
						<li><a href="">13</a></li>
						<li class="arrow"><a href="">&raquo;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	pb = document.getElementById('pb');
	pb.classList.add('main-color');
	adminBoard = document.getElementById('admin-board');
	adminBoard.textContent="Administrator dashboard | pet sellers";
</script>
@stop