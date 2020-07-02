<?php

include('config.php');
include('fungsi.php');

?>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <div>
    <a href="index.php" class="ui button">Kembali</a>
<h2 class="ui header">Perangkingan</h2>
	
	<table class="ui celled collapsing table">
		<thead>
			<tr>
				<th>Peringkat</th>
				<th>Alternatif</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query  = "SELECT id,nama,id_alternatif,nilai FROM alternatif,ranking WHERE alternatif.id = ranking.id_alternatif ORDER BY nilai DESC";
				$result = mysqli_query($koneksi, $query);

				$i = 0;
				while ($row = mysqli_fetch_array($result)) {
					$i++;
				?>
				<tr>
					<?php if ($i == 1) {
						echo "<td><div class=\"ui ribbon label\">Pertama</div></td>";
					} else {
						echo "<td>".$i."</td>";
					}

					?>

					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['nilai'] ?></td>
				</tr>

				<?php	
				}


			?>
		</tbody>
    </table>
    <button class="ui primary button" onclick="window.print()">Print</button>
    </div>