<!-- phần thân -->
<div class="container" style="width: 90%">
	<div class="row">
		<!--  tiêu đề chung -->
		<div class="col-md-12 row"  id="move">
			<ul>
				<li id="child1" class="wow slideInLeft"><a href="../../index.html">TRANG CHỦ </a></li>
				<li id="child2" class="wow slideInLeft"><i class="fas fa-angle-double-right"></i></li>
				<li id="child3" class="wow slideInDown" data-wow-delay=".2s" style="color: #f76d2c;">ĐĂNG KÝ TÀI KHOẢN</li>
			</ul>
		</div>
		<!-- mũi tên animate -->
		<script>
			$(document).ready(function(){
				$("#child1").hover(function(){
					$("#child2").css("transform","rotate(180deg)");
					$("#child1 a:first").css( "color" , "#f76d2c");
					$("#child3").css("color","#727272");
				},
				function(){
					$("#child2").css("transform","rotate(0deg)");
					$("#child1 a:first").css( "color" , "#727272");
					$("#child3").css("color","#f76d2c");
				}); 


			});
		</script>
		<div class="col-md-12 row" style="padding-bottom: 40px;">
			<!--  tài khản -->
			<div class="col-md-4 col-xs-12  col-sm-12">
				<div class="title row" id="acc" >
					<h6  style="margin-bottom: 40px;" class="wow slideInDown" data-wow-delay=".2s">TÀI KHOẢN</h6>
					<ul>
						<li class="wow slideInDown" data-wow-delay=".3s" id="first" ><i class="fas fa-user-alt"></i> <a href="../log in/login.html" class="i">Đăng nhập</a> </li>
						<li class="wow slideInDown"data-wow-delay=".4s"><i class="fas fa-key"></i><a href="index.html" class="i">Đăng ký</a></li>
						<li class="wow slideInDown " data-wow-delay=".5s"><i class="fas fa-question"></i><a href="" class="i">Quên mật khẩu</a></li>
					</ul>
				</div>

				<div class="wow slideInDown" >
					<iframe id="video" src="https://www.youtube.com/embed/Gn5SMbTERRg?rel=0&start=200&autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			<!--  đăng ký tài khoản -->
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="row">
					<div class="title" >
						<h6 class="wow slideInDown " data-wow-delay=".2s">ĐĂNG KÝ TÀI KHOẢN</h6>
					</div>
				</div>
				<!--  FORM  đăng ký_ Thông tin tài khoản -->
				<div class="row" >
					<div class="col-md-2"> </div>
					<div class=" col-md-9 " id="signup" >
						<h2 class="wow slideInDown " data-wow-delay=".3s">THÔNG TIN TÀI KHOẢN</h2>

						<form>
							<!--  input 1 -->
							<div class="form-group wow slideInDown  row" data-wow-delay=".4s"  id="input_1">
								<!--  -->
								<div class="er_label" id="er_input1" style=" margin-left: -106px;">

									<label for=""  class="error_input" id="error_label_1"></label>
									<span style="" id="a"></span>
								</div>
								<!--  -->
								<label for="inputEmail3" class="col-sm-4 control-label nhap">Tài khoản <span>(*)</span></label>
								<div class="col-sm-8">
									<input type="text" class="form-control input" id="input1" placeholder="Tên tài khoản của bạn"   >
								</div>
							</div>
							<!--  input 2 -->
							<div class="form-group wow slideInDown  row" data-wow-delay=".5s" id="input_2">
								<!--  -->
								<div class="er_label"  id="er_input2" style=" margin-left: -79px;">
									<label for="" style="" id="error_label_2" class="error_label_2"></label>
									<span style="" id="b"></span>
								</div>
								<!--  -->
								<label for="inputEmail3"  class="col-sm-4 control-label nhap">Email <span>(*)</span></label>
								<div class="col-sm-8">
									<input type="email" class="form-control input" id="input2" placeholder="Địa chỉ Email của bạn"  >
								</div>
							</div>
							<!--  input 3 -->

							<div class="form-group wow slideInDown  row" data-wow-delay=".6s" id="input_3">
								<!--  -->
								<div class="er_label" id="er_input3" style=" margin-left: -107px;">

									<label for="" style="" class="error_label_3" id="error_label_3"></label>
									<span style="" id="c"></span>
								</div>
								<!--  -->
								<label for="inputEmail3" class="col-sm-4 control-label nhap">Mật khẩu <span>(*)</span></label>
								<div class="col-sm-8 mb-2 my-1">
									<div class="input-group-prepend input-group " id="ipex1">
										<input type="password" class="form-control input" id="input3" placeholder="Mật khẩu đăng nhập"  >
										<div class="input-group-text showhide" ><i class="far fa-eye i"></i></div>
									</div>
								</div>
							</div>
							<!--  input 4 -->
							<div class="form-group wow slideInDown  row" data-wow-delay=".7s" id="input_4">
								<!--  -->
								<div class="er_label" id="er_input4" style=" margin-left: -155px;">

									<label for="" style="" class="error_label_4" id="error_label_4"> </label>
									<span style="" id="d"></span>

								</div>
								<!--  -->
								<label for="inputPassword3" class="col-sm-4 control-label nhap">Nhập lại mật khẩu <span>(*)</span></label>
								<div class="col-sm-8 my-1 mb-2 ">
									<div class="input-group-prepend input-group " id="ipex2">
										<input type="password"  class="form-control input" id="input4" placeholder="Mật khẩu đăng nhập" >
										<div class="input-group-text showhide" ><i class="far fa-eye i"></i></div>
									</div>
								</div>
							</div>				
							<!--  form thông tin cá nhân -->
							<h2 class="wow slideInDown" style="margin-top: 30px;" data-wow-delay=".7s">THÔNG TIN CÁ NHÂN</h2>
							<div class=" row">
								<div class="col-sm-6 col-xs-6"></div>

								<div class="col-sm-2 col-xs-2  wow flipInY " data-wow-delay=".8s"  id="typesex"  >
									<img  id="img1" src="allstyle/image/images.png" alt="">
									<img  id="img2" src="allstyle/image/img_avatar2.png" alt="">
								</div>
								<div class="col-sm-4 col-xs-4"></div>
							</div>
							<!--  input 5 -->
							<div class="form-group wow slideInDown row " data-wow-delay=".2s" id="input_5">
								<!--  -->
								<div class="er_label" id="er_input5" style=" margin-left: -85px;">

									<label for="" style="" class="error_label_5" id="error_label_5"></label>
									<span style="" id="e"></span>
								</div>
								<!--  -->
								<label for="inputEmail3" class="col-sm-4 col-xs-4 control-label nhap">Họ tên <span>(*)</span></label>
								<div class="col-sm-8 col-xs-8">
									<input type="text" class="form-control input" id="input5" placeholder="Tên của bạn">
								</div>
							</div>
							<!--  input 6-->
							<div class="form-group wow slideInDown  row" data-wow-delay=".3s">
								<label for="inputPassword3" class="col-sm-4 control-label nhap">Giới tính</label>
								<div class="col-sm-8">
									<select name="" id="input_6" class="form-control" >
										<option id="boy" >Nam</option>
										<option id="girl" >Nữ</option>
									</select>
								</div>
								<label for="" id="error_6"></label>
							</div>
							<!-- input 7 -->

							<div class="form-group wow slideInDown  row" data-wow-delay=".4s">

								<label for="inputPassword3" class="col-md-4 col-sm-4  col-xs-1 control-label nhap">Ngày sinh</label>
								<div class="col-md-2 col-sm-2  col-xs-1 year">
									<select name="" class="form-control">
										<script>
											for(i=1;i<=31;i++){
												document.write('<option value="">'+i+'</option>');
											}
										</script>
									</select>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-2  year">
									<select name="" class="form-control">
										<script>
											for(i=1;i<=12;i++){
												document.write('<option value="">'+i+'</option>');
											}
										</script>
									</select>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4  year">
									<select name="" class="form-control">
										<script>
											for(i=1945;i<=2018;i++){
												document.write('<option value="">'+i+'</option>');
											}
										</script>
									</select>

								</div>

							</div>
							<!-- input 8  -->
							<div class="form-group row wow slideInDown " shit data-wow-delay=".5s" >
								<label for="inputEmail3" class="col-sm-4 col-xs-4 control-label nhap">Số điện thoại</label>
								<div class="col-sm-8 col-xs-8">
									<input  class="form-control" id="inputEmail3" placeholder="Số điện thoại liên hệ">
								</div>
							</div>
							<!--  input 9 -->
							<div class="form-group row wow slideInDown " data-wow-delay=".6s">
								<label for="inputEmail3" class="col-sm-4 control-label nhap">Địa chỉ</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Chỗ ở hiện tại">
								</div>
							</div>
							<!-- input 10 -->
							<div class="form-group row wow slideInDown " data-wow-delay=".6s">
								<label for="inputPassword3" class="col-sm-4 control-label nhap">Tỉnh/Thành phố</label>
								<div class="col-sm-8">
									<select name="" id="" class="form-control">
										<option value="">Hà Nội </option>
										<option value="">TP.Hồ Chí Minh</option>
									</select>
								</div>
							</div>
							<!--  input 11 -->
							<div class="form-group row wow slideInDown " data-wow-delay=".7s" >
								<label for="inputPassword3" class="col-sm-4 control-label nhap">Quận/Huyện</label>
								<div class="col-sm-8">
									<select name="" id="" class="form-control">
										<option value="">Quang Minh </option>
										<option value="">Đông Anh</option>
										<option value="">Thanh Xuân</option>
										<option value="">Sóc Sơn</option>
									</select>
								</div>
							</div>
							<!-- click -->
							<div class="form-group row">
								<div class=" col-sm-6 col-xs-10"></div>
								<div class=" col-sm-6 col-xs-2 ">

									<input class="wow tada" type="button" value="ĐĂNG KÝ" id="click" data-wow-delay=".9s"  >
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-1 col-sm-1"></div>
				</div>
			</div>
		</div>
	</div>
</div>
