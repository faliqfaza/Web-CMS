	<!-- Content page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('assets/pato/'); ?>images/background-contact.jpeg);">
		<h2 class="tit6 t-center">
		</h2>
	</section>
    <section class="section-contact bg1-pattern p-t-90 p-b-113">
		<div class="container">
		<div id="menghilang">
			<?= $this->session->flashdata('alert') ?>
		</div>
			<h3 class="tit7 t-center p-b-5 p-t-105">
				Kirim Pesan
			</h3>
			<h6 class="t-center p-b-62">
				Berikan sebuah pesan, saran atau kritikan
			</h6>

			<form action="<?= base_url('home/simpanpesan') ?>" class="wrap-form-reservation size22 m-l-r-auto" method="post">
				<div class="row">
					<div class="col-md-6">
						<!-- Name -->
						<span class="txt9">
							Nama
						</span>

						<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" id="nama" name="nama" placeholder="Nama" Required>
						</div>
					</div>

					<div class="col-md-6">
						<!-- Email -->
						<span class="txt9">
							Email
						</span>

						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
							<input class="bo-rad-10 sizefull txt10 p-l-20" type="email" id="email" name="email" placeholder="Email" Required>
						</div>
					</div>

					<div class="col-12">
						<!-- Message -->
						<span class="txt9">
							Pesan
						</span>
						<textarea class="bo-rad-10 size35 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-3" name="pesan" id="pesan" placeholder="isi pesan" Required></textarea>
					</div>
				</div>

				<div class="wrap-btn-booking flex-c-m m-t-13">
					<!-- Button3 -->
					<button type="submit" class="btn3 flex-c-m size36 txt11 trans-0-4">
						Kirim
					</button>
				</div>
			</form>
		</div>
    </section>

