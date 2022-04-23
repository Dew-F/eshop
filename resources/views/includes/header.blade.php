@section('header')
<style type="text/css">
	.border-red {
		border-color: var(--red) !important;
	}

	.nofocus:focus{
		box-shadow: none;
	}

	.btn-red {
		color: var(--white);
		background-color: var(--red);
	}
	
	.outline-none {

	}
	
	header{
		background-color: var(--light);
	}

</style>

<header class="sticky-top">
	<div class="row">
		<div class="col-3 p-4">
			<a href="">
				<img src="images/logo.png" class="img-fluid"/>
			</a>
		</div>
		<div class="col p-4">
			<form class="form-group d-flex h-100 w-100">
				<input class="form-control w-78 m-0 border border-2 rounded-0 rounded-start border-red nofocus" type="search" placeholder="Искать здесь..."/>
				<button class="btn w-22 m-0 border border-2 rounded-0 rounded-end border-red btn-red nofocus" type="submit">
					<i class="fa-solid fa-magnifying-glass"></i>
				</button>
			</form>
		</div>
		<div class="col p-4">
			<ul class="list-group list-group-horizontal justify-content-end h-100">
				<li class="list-group-item text-nowrap">
					<i class="fa-solid fa-chart-simple"></i>
					<a href="">Сравнить</a>
				</li>
				<li class="list-group-item text-nowrap">
					<i class="fa-solid fa-heart"></i>
					<a href="">Избранное</a>
				</li>
				<li class="list-group-item text-nowrap">
					<i class="fa-solid fa-cart-shopping"></i>
					<a href="">Корзина</a>
				</li>
				<li class="list-group-item text-nowrap">
					<i class="fa-solid fa-user"></i>
					<a href="">Войти</a>
				</li>
			</ul>
		</div>
	</div>
</header>
