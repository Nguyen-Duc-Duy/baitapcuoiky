<div class="container">
	<!--  tiêu đề chung -->

	<div class="row">
		<div id="move">
			<ul>
				<li id="child1" class="wow slideInLeft" ><a href="../../index.html">TRANG CHỦ </a></li>
				<li id="child2" class="wow slideInLeft" ><i class="fas fa-angle-double-right"></i></li>
				<li id="child3" class="wow slideInDown" style=" color: #f76d2c;"> Sản Phẩm</li>
			</ul>
		</div>

	</div>
</div>

<div class="container">
	<p align="center"><b style="border-left: 3px solid red;border-right: 3px solid red;padding: 0 10px 0 10px ">SẢN PHẨM</b></p>

	<p style="text-align: center;"><img src="anh/hr2.png" alt=""></p>
	<div style="border-color: black;border-width: 20px;">
		<div style="background-color: #EEECEC;"class="row tieude" >

			<div style="padding-top: 10px;text-align:center;" class="col-sm-12 col-lg-6">
				<b class="loai" onclick="cachnhin(1)" id="o" style="border-left: 30px;text-align: center;border-top-left-radius: 30px;border-bottom-left-radius: 30px;background-color: #FB4848; "><a href="" style=" padding-left:10px;"><i class="fa fa-th-large"></i></a></b>
				<b class="loai" onclick="cachnhin(2)" id="hang" style="margin-left: -4px;border-right: 30px;text-align: center;border-top-right-radius: 30px;border-bottom-right-radius: 30px;"><a href="#" style="padding-right:10px; "><i class="fa fa-th-list"></i></a></b>
				<b>Sản phẩm/trang</b>
				<select style="border-width: 0;outline: none;">
					<option >10</option>
					<option >12</option>
					<option >20</option>
					<option >50</option>
					<option >100</option>
					<option >250</option>
					<option >500</option>
				</select>

			</div>
			<div style="margin-top: 10px; text-align:center;"class="col-sm-12 col-lg-6 ">
				<b>Sắp xếp</b>
				<select style="border-width: 0;outline: none;">
					<option >Mặc định</option>
					<option >Giá tăng dần</option>
					<option >Giá dảm dần</option>
					<option >Tên sản phẩm từ A đến Z</option>
					<option >Tên sản phẩm từ Z đến A</option>
				</select>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid" style="margin-top: 20px;" >
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-lg-4 ">
				<div class="sanpham">
					<!-- Large modal -->
					<button type="button" class="backgritem " data-toggle="modal" data-target=".bd-example-modal-lg1" style="outline: none;"><a href="#" style="text-decoration: none;">
						<div class="card text-white inner">
							<img  id="xnxx" src="anh/product7.png" class="card-img" alt="...">
							<div class="card-img-overlay">
								<h5 class="card-title sale"  >-10%</h5>
							</div>
						</div>
						<div style="text-align: left;">
							<div class="price"><b>2.000.000.000 ₫</b></div>
							<div class="nameitem"><b>NISSAN NAVARA NP300</b></div>
							<div class="danhgia">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>

							</div>
						</div>
					</a></button>

					<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">NISSAN NAVARA NP300</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-sm-12 col-lg-6">
											<img  id="xnxx" src="anh/product7.png" alt="">
										</div>
										<div class="col-sm-12 col-lg-6">
											<h3>NISSAN NAVARA NP300</h3>
											<div class="price" style="margin-left: 0px;"><b>2.000.000.000 ₫</b></div>
											<div style="margin-top: 10px;"><b>Mã sản phẩm : <b>gvbek</b></b></div>
											<!-- <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.youtube.com&width=153&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=224637985089144" width="153" height="46" style="border:none;overflow:hidden;margin-top: 10px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
											<div> Số Lượng  <input type="number" value="1" style="width:50px;"></div>
											<button class="themvaogiohang">Thêm vào giỏ hàng <i class="fas fa-shopping-cart"></i></button>
											<button class="muangay"><i class="far fa-credit-card" style="color: #FF8000;"></i> Mua ngay</button>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">ĐÓNG</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-sm-12 col-lg-4 " >
				<div class="sanpham">
					<!-- Large modal -->
					<button type="button" class="backgritem " data-toggle="modal" data-target=".bd-example-modal-lg2" style="outline: none;"><a href="#" style="text-decoration: none;">
						<div class="card text-white inner">
							<img id="xnxx"  src="anh/product6.png" class="card-img" alt="...">
							<div class="card-img-overlay">
								<h5 class="card-title sale"  >Hot</h5>
							</div>
						</div>
						<div style="text-align: left;">
							<div class="price"><b>5.999.999.998 ₫</b></div>
							<div class="nameitem"><b>FORD ESCAPE</b></div>
							<div class="danhgia">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>

							</div>
						</div>
					</a></button>

					<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">FORD ESCAPE</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-12 col-lg-6">
												<img  id="xnxx" src="anh/product6.png" alt="">
											</div>
											<div class="col-sm-12 col-lg-6">
												<h3>FORD ESCAPE</h3>
												<div class="price" style="margin-left: 0px;"><b>5.999.999.998 ₫</b></div>
												<div style="margin-top: 10px;"><b>Mã sản phẩm : <b>hmbkhs</b></b></div>
												<!-- <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.youtube.com&width=153&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=224637985089144" width="153" height="46" style="border:none;overflow:hidden;margin-top: 10px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
												<div> Số Lượng  <input type="number" value="1" style="width:50px;"></div>
												<button class="themvaogiohang">Thêm vào giỏ hàng <i class="fas fa-shopping-cart"></i></button>
												<button class="muangay"><i class="far fa-credit-card" style="color: #FF8000;"></i> Mua ngay</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">ĐÓNG</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-sm-12 col-lg-4 ">
				<div class="sanpham">
					<!-- Large modal -->
					<button type="button" class="backgritem " data-toggle="modal" data-target=".bd-example-modal-lg3" style="outline: none;"><a href="#" style="text-decoration: none;">
						<div class="card text-white inner">
							<img  id="xnxx" src="anh/new3.png" class="card-img" alt="...">
							<div class="card-img-overlay">
								<h5 class="card-title sale"  >-9%</h5>
							</div>
						</div>
						<div style="text-align: left;">
							<div class="price"><b>8.999.999.998 ₫</b></div>
							<div class="nameitem"><b>CHEVY AVEO</b></div>
							<div class="danhgia">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<i class="far fa-star"></i>

							</div>
						</div>
					</a></button>

					<div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">FORD ESCAPE</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-12 col-lg-6">
												<img  id="xnxx" src="anh/new3.png" alt="">
											</div>
											<div class="col-sm-12 col-lg-6">
												<h3>CHEVY AVEO</h3>
												<div class="price" style="margin-left: 0px;"><b>8.999.999.998 ₫</b></div>
												<div style="margin-top: 10px;"><b>Mã sản phẩm : <b>hmbkhs</b></b></div>
												<!-- <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.youtube.com&width=153&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=224637985089144" width="153" height="46" style="border:none;overflow:hidden;margin-top: 10px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
												<div> Số Lượng  <input type="number" value="1" style="width:50px;"></div>
												<button class="themvaogiohang">Thêm vào giỏ hàng <i class="fas fa-shopping-cart"></i></button>
												<button class="muangay"><i class="far fa-credit-card" style="color: #FF8000;"></i> Mua ngay</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">ĐÓNG</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="w-100" style="margin-top: 30px;" ></div>
			<div class="col-sm-12 col-lg-4 ">
				<div class="sanpham">
					<!-- Large modal -->
					<button type="button" class="backgritem " data-toggle="modal" data-target=".bd-example-modal-lg4" style="outline: none;"><a href="#" style="text-decoration: none;">
						<div class="card text-white inner">
							<img  id="xnxx" src="anh/new1.png" class="card-img" alt="...">
							<div class="card-img-overlay">
								<h5 class="card-title sale"  >-3%</h5>
							</div>
						</div>
						<div style="text-align: left;">
							<div class="price"><b>2.999.999.998 ₫</b></div>
							<div class="nameitem"><b>BMW16i</b></div>
							<div class="danhgia">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<i class="far fa-star"></i>

							</div>
						</div>
					</a></button>

					<div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">BMW16i</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-12 col-lg-6">
												<img  id="xnxx" src="anh/new1.png" alt="">
											</div>
											<div class="col-sm-12 col-lg-6">
												<h3>BMW16i</h3>
												<div class="price" style="margin-left: 0px;"><b>2.999.999.998 ₫</b></div>
												<div style="margin-top: 10px;"><b>Mã sản phẩm : <b>hmbkhs</b></b></div>
												<!-- <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.youtube.com&width=153&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=224637985089144" width="153" height="46" style="border:none;overflow:hidden;margin-top: 10px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
												<div> Số Lượng  <input type="number" value="1" style="width:50px;"></div>
												<button class="themvaogiohang">Thêm vào giỏ hàng <i class="fas fa-shopping-cart"></i></button>
												<button class="muangay"><i class="far fa-credit-card" style="color: #FF8000;"></i> Mua ngay</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">ĐÓNG</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-sm-12 col-lg-4 ">
				<div class="sanpham">
					<!-- Large modal -->
					<button type="button" class="backgritem " data-toggle="modal" data-target=".bd-example-modal-lg5" style="outline: none;"><a href="#" style="text-decoration: none;">
						<div class="card text-white inner">
							<img  id="xnxx" src="anh/new.png" class="card-img" alt="...">
							<div class="card-img-overlay">
								<h5 class="card-title sale"  >-0%</h5>
							</div>
						</div>
						<div style="text-align: left;">
							<div class="price"><b>999.999.998 ₫</b></div>
							<div class="nameitem"><b>Porsche</b></div>
							<div class="danhgia">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
							</div>
						</div>
					</a></button>

					<div class="modal fade bd-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Porsche</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-12 col-lg-6">
												<img  id="xnxx" src="anh/new.png" alt="">
											</div>
											<div class="col-sm-12 col-lg-6">
												<h3>Porsche</h3>
												<div class="price" style="margin-left: 0px;"><b>999.999.998 ₫</b></div>
												<div style="margin-top: 10px;"><b>Mã sản phẩm : <b>dytgj</b></b></div>
												<!-- <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.youtube.com&width=153&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=224637985089144" width="153" height="46" style="border:none;overflow:hidden;margin-top: 10px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
												<div> Số Lượng  <input type="number" value="1" style="width:50px;"></div>
												<button class="themvaogiohang">Thêm vào giỏ hàng <i class="fas fa-shopping-cart"></i></button>
												<button class="muangay"><i class="far fa-credit-card" style="color: #FF8000;"></i> Mua ngay</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">ĐÓNG</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-sm-12 col-lg-4 ">
				<div class="sanpham">
					<!-- Large modal -->
					<button type="button" class="backgritem " data-toggle="modal" data-target=".bd-example-modal-lg6" style="outline: none;"><a href="#" style="text-decoration: none;">
						<div class="card text-white inner">
							<img  id="xnxx" src="anh/new2.png" class="card-img" alt="...">
							<div class="card-img-overlay">
								<h5 class="card-title sale"  >Hàng sắp về</h5>
							</div>
						</div>
						<div style="text-align: left;">
							<div class="price"><b>3.999.999.998 ₫</b></div>
							<div class="nameitem"><b>Ferrari</b></div>
							<div class="danhgia">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</a></button>

					<div class="modal fade bd-example-modal-lg6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Ferrari</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-12 col-lg-6">
												<img  id="xnxx" src="anh/new2.png" alt="">
											</div>
											<div class="col-sm-12 col-lg-6">
												<h3>Ferrari</h3>
												<div class="price" style="margin-left: 0px;"><b>3.999.999.998 ₫</b></div>
												<div style="margin-top: 10px;"><b>Mã sản phẩm : <b>uyghbj</b></b></div>
												<!-- <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.youtube.com&width=153&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=224637985089144" width="153" height="46" style="border:none;overflow:hidden;margin-top: 10px;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
												<div> Số Lượng  <input type="number" value="1" style="width:50px;"></div>
												<button class="themvaogiohang">Thêm vào giỏ hàng <i class="fas fa-shopping-cart"></i></button>
												<button class="muangay"><i class="far fa-credit-card" style="color: #FF8000;"></i> Mua ngay</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">ĐÓNG</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="nhataitro ">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<div class="slider">
					<div class="slide-track loo ">
						<div class="slide">
							<img src="anh/partner1.jpg" height="64" width="100" alt="" />
						</div>
						<div class="slide">
							<img src="anh/partner2.jpg" height="70" width="49.73" alt="" />
						</div>
						<div class="slide">
							<img src="anh/partner3.png" height="67" width="70" alt="" />
						</div>
						<div class="slide">
							<img src="anh/partner4.png" height="66" width="111" alt="" />
						</div>
						<div class="slide">
							<img src="anh/partner5.png" height="65" width="80" alt="" />
						</div>
						<div class="slide">
							<img src="anh/partner6.png" height="66" width="96" alt="" />
						</div>
						<div class="slide">
							<img src="anh/partner7.png" height="67" width="67" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>