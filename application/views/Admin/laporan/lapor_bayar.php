<?php
$pdf = new FPDF('L', 'mm','A5');
$image1 = base_url() . "assets/img/logo-puskesmas.jpeg";
$image2 = base_url() . "assets/img/logo-puskesmas.jpeg";
/* tinggal diganti image yang 1 dengan logo agan*/
$pdf->AddPage();
$gambar1 = $pdf->Image($image1, 15, 10, 35);
$gambar2 = $pdf->Image($image2, 160, 10, 35);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,7,'Struk Pembayaran Pasien',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,7,'Pemerintah Kabupaten Dhamasraya',0,1,'C');
$pdf->Cell(0,7,'Dinas Kesehatan',0,1,'C');
$pdf->Cell(0,7,'UPT Puskesmas Sitiung 1',0,1,'C');
$pdf->Cell(0,7,'',0,5);
$pdf->Ln(-2);

$x1 = 10;
$y1 = 10;
$x2 = 10;
$y2 = 10;

$pdf->SetLineWidth(0);
$pdf->Line(12, 40, 195, 40);
$pdf->SetLineWidth(1);
$pdf->Line(12, 41, 195, 41);
$pdf->SetLineWidth(0);
$pdf->Ln(2);
$pdf->SetFont('Arial','',11);

$pdf->Cell(35,6,'Id Pembayaran : '.$pembayarandata['id_pembayaran'],0,1,'L');
$pdf->Cell(20,6,'Nama Pasien : '.$pasiendata['nama_p'],0,1,'L');
$pdf->Cell(20,6,'No Kamar : '.$kamardata['no_k'],0,1,'L');
$pdf->Cell(20,6,'Nama Kamar : '.$kamardata['nama_k'],0,1,'L');
$pdf->Cell(20,6,'Kelas Kamar : '.$kamardata['kelas_k'],0,1,'L');
$pdf->Cell(30,6,'Jenis Pembayaran :'.$pembayarandata['jenis_tindakan'],0,1,'L');
$pdf->Cell(30,6,'Lama Inap : '.$rawatdata['lama_inap'].' Hari',0,1,'L');
$pdf->Cell(30,6,'Biaya Periksa : '.$pembayarandata['jumlah_p_tindakan'],0,1,'L');
$pdf->Cell(35,6,'Biaya Inap : '.$pembayarandata['jumlah_p_inap'],0,1,'L');
$pdf->Cell(35,6,'Tanggal Bayar : '.date('d F, Y'),0,1,'L');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(35,6,'',0,1,'L');
$pdf->Cell(70,8,'Total : Rp. '.$pembayarandata['total'],1,1,'L');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(70,8,'Kode Pasien : '.$pembayarandata['id_detail_pasien'],1,1,'L');

$pdf->Output();
?>