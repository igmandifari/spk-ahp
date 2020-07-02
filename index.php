
<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');

session_start();
  if (empty($_SESSION['name']) AND empty($_SESSION['password'])) {
  header("location:login/login_form.php");  
  }
?>

	<section class="content">
			<h2 class="ui header">Analitycal Hierarchy Process (AHP)</h2>
			  <p>AHP merupakan salah satu alat bantu (proses) dalam pengambilan keputusan yang dikembangkan oleh Thomas L Saaty pada tahun 70 an. Prosedur ini begitu powerfull sehingga sudah diaplikasikan secara luas dalam pengambilan keputusan yang penting.</p>
			  <p>Penggunaan AHP bukan hanya untuk institusi pemerintahan atau swasta namun juga dapat diaplikasikan untuk keperluan individu terutama untuk penelitian-penelitian yang berkaitan dengan kebijakan atau perumusan strategi prioritas. </p>
			  <p>Mengapa AHP dapat diandalkan, karena dalam AHP suatu prioritas disusun dari berbagai pilihan yang dapat berupa kriteria yang sebelumnya telah didekomposisi (struktur) terlebih dahulu, sehingga penetapan prioritas didasarkan pada suatu proses yang terstruktur (hierarki) dan masuk akal. Jadi pada intinya AHP membantu memecahkan persoalan yang kompleks dengan menyusun suatu hirarki kriteria, dinilai secara subjektif oleh pihak yang berkepentingan lalu menarik berbagai pertimbangan guna mengembangkan bobot atau prioritas.
</p>
<p>Menurut Tominanto (2012), Langkah-langkah dalam menggunakan metode AHP adalah sebagai berikut :</p>
			<ol class="ui list">
				<li>Mendefinisikan masalah dan menentukan solusi yang diinginkan.</li>
				<li>Menyusun struktur hirarki dari permasalahan yang dihadapi sesuai dengan tujuan.</li>
				<li>Menentukan Nilai Preferensi.</li>
				<li>Menentukan perbandingan Kriteria dan Kriteria.</li>
				<li>Menghitung nilai eigen..</li>
				<li>Menguji nilai konsistensinya. Jika tidak konsisten maka pengambilan data diulangi.</li>
				<li>Hitung hasil akhir.</li>
				<li>Perangkingan.</li>
			</ol>

			<br>

			

	</section>

<?php include('footer.php'); ?>
