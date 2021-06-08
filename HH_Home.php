<!-- Phần Home -->
<div id="one">

<!-- Tiêu đề -->
    <div class="container-fluid padding TieuDe">
		<div class="row padding slideanim amdi" id="Dijkstra">
			<div class="col-md-12 col-lg-9 text-justify">
				<h1 id="TieuDe">Quản Lí Hàng Hóa</h1>
			</div>
			<div class="col-lg-3">
				<img src="img/H2C.png" class="img-fluid" id="hinhH2C">
			</div>
		</div>

		<hr class="my-1">
	</div>
	<br>

<!-- Hình -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
			<li data-target="#slides" data-slide-to="3"></li>
			<li data-target="#slides" data-slide-to="4"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/TW2.gif" class="img-fluid" id="gif">
			</div>
			<div class="carousel-item">
				<img src="img/Nhap.png">
			</div>
			<div class="carousel-item">
				<img src="img/Xuat.png">
			</div>
			<div class="carousel-item">
				<img src="img/Hang.png">
			</div>
			<div class="carousel-item">
				<img src="img/MyTW.png">
			</div>
			

			<a class="carousel-control-prev" href="#slides" data-slide="prev">
	            <span class="carousel-control-prev-icon"></span>
	        </a>
	        <a class="carousel-control-next" href="#slides" data-slide="next">
	            <span class="carousel-control-next-icon" style="font-size:48px;color:green"></span>
	        </a>
		</div>
    
	</div>
	<br>

<!-- Nội dung -->

	<!-- Welcom -->
		<div class="container-fluid padding">
			<div class="row welcom text-center slideanim">
				<div class="col-12">
					<h1 class="display-4" id="About"><br><b>WELCOME TO OUR WEBSITE</b></h1>
					<hr>
				</div>
			</div>
		</div>

	<!-- button -->
		<div class="container-fluid padding">
			<div class="row welcom text-center slideanim">
				<div class="col-12">
					<h1>
						<br>
						<img src="img/H2C.png" width="50px">
						có đầy đủ các nghiệp vụ quản lí hàng hóa.
					</h1>
					<hr id="ngan">
				</div>
			</div>
			<br>

			<div class="row welcom text-center slideanim">
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<button class="btn_home">
						<span><a href="#NhapXuat"> Quản lý nhập/xuất </a></span>
					</button>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<button class="btn_home">
						<span><a href="#Hanghoa"> Quản lý mặt hàng </a></span>
					</button>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<button class="btn_home">
						<span><a href="#PhanLoai"> Quản lý phân loại </a></span>
					</button>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<button class="btn_home">
						<span><a href="#LichSu"> Quản lý lịch sử </a></span>
					</button>
				</div>
			</div>
		</div>
		<hr>

	<!-- Nhap / Xuat -->
		<div class="container-fluid padding" id="NhapXuat">
			<div class="row welcom text-center slideanim">
				<div class="col-12">
					<h3 class="NDnho">Quản lý nhập xuất</h3>
					<hr>
				</div>
			</div>
		</div>

		<div class="container-fluid padding">
			<div class="row padding slideanim amdi" id="Dijkstra">
				<div class="col-md-12 col-lg-6 text-justify">
					<p>
						<hr id="hr_GT1">
						<h2><b>NHẬP HÀNG</b></h2>
						<p>Thuật toán Dijkstra — giải bài toán nguồn đơn nếu tất cả các trọng số đều không âm. Thuật toán này có thể tính toán tất cả các đường đi ngắn nhất từ một đỉnh xuất phát cho trước s tới mọi đỉnh khác mà không làm tăng thời gian chạy.<br>Thuật toán Dijstra bình thường sẽ có độ phức tạp là O(n2 + m). Tuy nhiên ta có thể sử dụng kết hợp với cấu trúc heap, khi đó độ phức tạp sẽ là O((m + n)log(n)), nếu dùng Fibonacci Heap thì độ phức tạp giảm xuống còn O(m + nlogn). Trong đó m là số cạnh, n là số đỉnh của đồ thị đang xét.</p>
					</p>
				</div>
				<div class="col-lg-6">
					<img src="img/Nhap.png" class="img-fluid">
				</div>
			</div>
		</div><br>

		<div class="container-fluid padding">
			<div class="row padding slideanim amdi" id="Dijkstra">
				<div class="col-md-12 col-lg-6 text-justify">
					<p>
						<h2><b>XUẤT HÀNG</b></h2>
						<p>Thuật toán Dijkstra — giải bài toán nguồn đơn nếu tất cả các trọng số đều không âm. Thuật toán này có thể tính toán tất cả các đường đi ngắn nhất từ một đỉnh xuất phát cho trước s tới mọi đỉnh khác mà không làm tăng thời gian chạy.<br>Thuật toán Dijstra bình thường sẽ có độ phức tạp là O(n2 + m). Tuy nhiên ta có thể sử dụng kết hợp với cấu trúc heap, khi đó độ phức tạp sẽ là O((m + n)log(n)), nếu dùng Fibonacci Heap thì độ phức tạp giảm xuống còn O(m + nlogn). Trong đó m là số cạnh, n là số đỉnh của đồ thị đang xét.</p>
					</p>
				</div>
				<div class="col-lg-6">
					<img src="img/Xuat.png" class="img-fluid">
				</div>
			</div>
		</div><br>

	<!-- Các mặt hàng -->
		<div class="container-fluid padding" id="Hanghoa">
			<div class="row welcom text-center slideanim">
				<div class="col-12">
					<h3 class="NDnho">Quản lý mặt hàng</h3>
					<hr>
				</div>
			</div>
		</div>
		<div class="container-fluid padding">
			<div class="row padding slideanim" id="Ford-Bellman">
				<div class="col-lg-6">
					<br>
					<br>
					<img src="img/Hang.png" class="img-fluid">
				</div>
				<div class="col-md-12 col-lg-6 text-justify">
					<p>
						<hr id="hr_GT2">
						<h2 class="text-left"><b>MẶT HÀNG</b></h2>
						<p>Thuật toán Bellman-Ford là một thuật toán tính các đường đi ngắn nhất nguồn đơn trong một đồ thị có hướng có trọng số (trong đó một số cung có thể có trọng số âm). Thuật toán Dijkstra giải cùng bài toán này tuy nhiên Dijkstra có thời gian chạy nhanh hơn, đơn giản là đòi hỏi trọng số của các cung phải có giá trị không âm.<br>Thuật toán Bellman-Ford chạy trong thời gian O(V.E), trong đó V là số đỉnh và E là số cung của đồ thị.</p>
					</p>
				</div>
			</div>
		</div><br>

	<!-- Phân Loại -->
		<div class="container-fluid padding" id="PhanLoai">
			<div class="row welcom text-center slideanim">
				<div class="col-12">
					<h3 class="NDnho">Quản lý phân loại</h3>
					<hr>
				</div>
			</div>
		</div>
		<div class="container-fluid padding">
			<div class="row padding slideanim amdi" id="Dijkstra">
				<div class="col-md-12 col-lg-6 text-justify">
					<p>
						<hr id="hr_GT1">
						<h2><b>PHÂN LOẠI</b></h2>
						<p>Thuật toán Dijkstra — giải bài toán nguồn đơn nếu tất cả các trọng số đều không âm. Thuật toán này có thể tính toán tất cả các đường đi ngắn nhất từ một đỉnh xuất phát cho trước s tới mọi đỉnh khác mà không làm tăng thời gian chạy.<br>Thuật toán Dijstra bình thường sẽ có độ phức tạp là O(n2 + m). Tuy nhiên ta có thể sử dụng kết hợp với cấu trúc heap, khi đó độ phức tạp sẽ là O((m + n)log(n)), nếu dùng Fibonacci Heap thì độ phức tạp giảm xuống còn O(m + nlogn). Trong đó m là số cạnh, n là số đỉnh của đồ thị đang xét.</p>
					</p>
				</div>
				<div class="col-lg-6">
					<img src="img/Loai.png" class="img-fluid">
				</div>
			</div>
		</div><br>

	<!-- Lịch sử -->
		<div class="container-fluid padding" id="LichSu">
			<div class="row welcom text-center slideanim">
				<div class="col-12">
					<h3 class="NDnho">Quản lý Lịch sử</h3>
					<hr>
				</div>
			</div>
		</div>
		<div class="container-fluid padding">
			<div class="row padding slideanim" id="Ford-Bellman">
				<div class="col-lg-6">
					<br>
					<br>
					<img src="img/DS_Nhap.png" class="img-fluid">
				</div>
				<div class="col-md-12 col-lg-6 text-justify">
					<p>
						<hr id="hr_GT2">
						<h2 class="text-left"><b>LỊCH SỬ NHẬP</b></h2>
						<p>Thuật toán Bellman-Ford là một thuật toán tính các đường đi ngắn nhất nguồn đơn trong một đồ thị có hướng có trọng số (trong đó một số cung có thể có trọng số âm). Thuật toán Dijkstra giải cùng bài toán này tuy nhiên Dijkstra có thời gian chạy nhanh hơn, đơn giản là đòi hỏi trọng số của các cung phải có giá trị không âm.<br>Thuật toán Bellman-Ford chạy trong thời gian O(V.E), trong đó V là số đỉnh và E là số cung của đồ thị.</p>
					</p>
				</div>
			</div>
		</div><br>
		<div class="container-fluid padding">
			<div class="row padding slideanim" id="Ford-Bellman">
				<div class="col-lg-6">
					<br>
					<br>
					<img src="img/DS_Xuat.png" class="img-fluid">
				</div>
				<div class="col-md-12 col-lg-6 text-justify">
					<p>
						<h2 class="text-left"><b>LỊCH SỬ XUẤT</b></h2>
						<p>Thuật toán Bellman-Ford là một thuật toán tính các đường đi ngắn nhất nguồn đơn trong một đồ thị có hướng có trọng số (trong đó một số cung có thể có trọng số âm). Thuật toán Dijkstra giải cùng bài toán này tuy nhiên Dijkstra có thời gian chạy nhanh hơn, đơn giản là đòi hỏi trọng số của các cung phải có giá trị không âm.<br>Thuật toán Bellman-Ford chạy trong thời gian O(V.E), trong đó V là số đỉnh và E là số cung của đồ thị.</p>
					</p>
				</div>
			</div>
		</div><br>
		<hr>

	<!-- my team -->
		<div class="container-fluid padding" id="LichSu">
			<div class="row welcom text-center slideanim">
				<div class="col-12">
					<h3 class="NDnho">My team</h3>
					<hr>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row padding slideanim">
				<div class="col-12 col-sm-6 col-md-4">
					<div class="card">
						<img src="img/Chuong.jpg" class="card-img-top img-fluid">
						<div class="card-body">
							<h4 class="card-title text-center">Nguyễn Hoàng Chương</h4>
							<a href="http://ltdtagu12mem.atwebpages.com/info/Chuong.html" class="btn btn-outline-secondary" id="HS" target="_blank">See profile</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4">
					<div class="card">
						<img src="img/Huong.jpg" class="card-img-top img-fluid">
						<div class="card-body">
							<h4 class="card-title text-center">Nguyễn Mai Hương</h4>
							<a href="http://ltdtagu12mem.atwebpages.com/info/Huong.html" class="btn btn-outline-secondary" id="HS" target="_blank">See profile</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4">
					<div class="card">
						<img src="img/Hang.jpg" class="card-img-top img-fluid">
						<div class="card-body">
							<h4 class="card-title text-center">Nguyễn Thị Lệ Hằng</h4>
							<a href="http://ltdtagu12mem.atwebpages.com/info/Hang.html" class="btn btn-outline-secondary" id="HS" target="_blank">See profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- footer 
		<div id="footer">
			
		</div>-->


