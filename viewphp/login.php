
<!-- phần thân -->
<div class="container">
	<div class="col-xs-12 row" id="move">
		<ul>
			<li id="child1" class="wow slideInLeft" ><a href="../../index.html">TRANG CHỦ</a></li>
			<li id="child2" class="wow slideInLeft"><i class="fas fa-angle-double-right"></i></li>
			<li id="child3" class="wow slideInDown" data-wow-delay=".2s" style="color: #f76d2c;">ĐĂNG KÝ TÀI KHOẢN</li>
		</ul>
	</div>

	<div class="row">
		<!--  tài khản -->
		<div class="col-md-4 col-xs-12  col-sm-12" style="overflow: hidden;">
			<div class="title" id="acc">
				<h6 class="wow slideInDown" data-wow-delay=".2s" style="margin-bottom: 40px;">TÀI KHOẢN</h6>
				<ul>
					<li class="wow slideInDown" data-wow-delay=".3s"><i class="fas fa-user-alt"></i><a href="login.html">Đăng nhập</a> </li>
					<li class="wow slideInDown" data-wow-delay=".4s"><i  class="fas fa-key"></i><a href="../sign up/index.html">Đăng ký</a></li>
					<li class="wow slideInDown" data-wow-delay=".5s"><i class="fas fa-question"></i></i><a href="">Quên mật khẩu</a></li>
				</ul>
			</div>
		</div>
		<!--  đăng nhập hệ thống -->
		<div class="col-md-8 col-xs-12 col-sm-12">
			<div class="row">
				<div class="title">
					<h6 class="wow slideInDown" data-wow-delay=".2s">ĐĂNG NHẬP HỆ THỐNG</h6>
				</div>
			</div>
			<!--  form đăng nhập -->
			<div class="row" style="margin-top: 10px;">
				<!--  trống-->
				<div class="col-md-2 "></div>
				<!--  form -->
				<div class="col-md-10 wow bounceInUp" data-wow-delay=".3s">
					<form >
						<!--INPUT 1  email -->
						<div class="form-group row">
							<label type="text" for="inputPassword" class="col-sm-3 col-md-3 col-xs-3 col-form-label nhap">Email</label>
							<div class="col-sm-9 col-md-8 col-xs-8">
								<input type="text" class="form-control" id="input1" placeholder="Tên tài khoản hoặc email hoặc số điện thoại" >
								<div id="er_input1">
									<div style=""></div>
									<label for="" style="" id="error_input1"> </label>
								</div>
							</div>
						</div>
						<!--INPUT 2  password -->
						<div class="form-group row">
							<label for="inputPassword" class="col-sm-3 col-md-3 col-xs-3 col-form-label nhap">Mật khẩu</label>
							<div class="col-sm-9 col-md-8 col-xs-8 ">
								<div class="input-group-prepend input-group" id="inputex" style="border-radius: 5px;">
									<input type="password" class="form-control " id="input2" placeholder="Password" >
									<div class="input-group-text showhide" style="padding-left: 20px;"><i class="far fa-eye i"></i></div>
								</div>
								<div id="er_input2">
									<div style=""></div>
									<label for="" style="" id="error_input2"></label>
								</div>
							</div>
						</div>

						<!-- /* button đăng nhập*/ -->
						<div class="form-group row">
							<div class="col-md-4 col-sm-2 "></div>
							<div class=" col-md-8 col-sm-10">
								<input type="button" id="click" class="wow tada" onclick="lick()" data-wow-delay="1s" value="ĐĂNG NHẬP">
								<a href="" id="remember">Quên mật khẩu ?</a>
							</div>
						</div>
					</form>
				</div>
				<!--  trống-->
			</div>
		</div>
	</div>
</div>
			<!-- /phần thân -->