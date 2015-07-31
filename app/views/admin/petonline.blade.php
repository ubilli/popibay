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
				<table class="balance">
					<thead>
						<tr>
						<th width="50">Status</th>
							<th>User name</th>
							<th width="150">User email</th>
							<th width="150">Time of login</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><h3><i class="fa fa-circle green-color"></i></h3></td>
							<td>someone@example.com</td>
							<td>Content Goes Here</td>
							<td>Content Goes Here</td>
						</tr>
						<tr>
							<td><h3><i class="fa fa-circle green-color"></i></h3></td>
							<td>someone@example.com</td>
							<td>Content Goes Here</td>
							<td>Content Goes Here</td>
						</tr>
						<tr>
							<td><h3><i class="fa fa-circle green-color"></i></h3></td>
							<td>someone@example.com</td>
							<td>Content Goes Here</td>
							<td>Content Goes Here</td>
						</tr>
					</tbody>
				</table>
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
	ou = document.getElementById('ou');
	ou.classList.add('main-color');
	adminBoard = document.getElementById('admin-board');
	adminBoard.textContent="Administrator dashboard | online users";
</script>
@stop