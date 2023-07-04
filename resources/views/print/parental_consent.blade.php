<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parental Consent</title>
	{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
	<style type="text/css">
	body {
		background: rgb(204,204,204);
		/* visibility: hidden; */
		font-size: 18px;
		font-family: "Times New Roman", Times, serif;
	}
	page {
		background: white;
		display: block;
		margin: 0 auto;
		margin-bottom: 0.5cm;
		box-shadow: 0 0 0cm rgba(0,0,0,0);
		font-family: "Times New Roman", Times, serif;
	}
	page[size="A4"] {  
		width: 21cm;
		height: 29.7cm; 
		visibility: visible;
	}
	page[size="A4"][layout="landscape"] {
		width: 29.7cm;
		height: 21cm;  
	}
	page[size="A3"] {
		width: 29.7cm;
		height: 42cm;
	}
	page[size="A3"][layout="landscape"] {
		width: 42cm;
		height: 29.7cm;  
	}
	page[size="A5"] {
		width: 14.8cm;
		height: 21cm;
	}
	page[size="A5"][layout="landscape"] {
		width: 21cm;
		height: 14.8cm;  
	}
	@media print {
		page {
			visibility: visible;
    		position: absolute;
			margin: 0;
			box-shadow: 0;
		}
	}

	td {
		padding: 2px 2px;
	}

	#person {
		font-size: 14px;
	}

	.text-center {
		text-align: center;
	}
	
	h1, h2, h3, h4, h5, h6 {
		/* margin-top: 1em; */
		/* margin-bottom: 1em; */
	}
</style>
</head>
<body>
	<page size="A4">
		
		<div style="
			padding-top: 60px;
			margin-left: 80px;
			margin-right: 80px;
			color: #111;
			">
			<h3 class="text-center">
				SURAT IZIN ORANG TUA
			</h3>
	
			<p style="margin-top: 3em;">
				Saya yang bertanda tangan dibawah ini:
			</p>
			<table style="border: 0px solid; width: 100%;">
				<tr>
					<td>
						Nama
					</td>
					<td>
						: {{ $data['nama_orang_tua'] }}
					</td>
				</tr>
				<tr>
					<td>
						Alamat
					</td>
					<td>
						: {{ $data['alamat_orang_tua'] }}
					</td>
				</tr>
				<tr>
					<td>
						Pekerjaan
					</td>
					<td>
						: {{ $data['pekerjaan_orang_tua'] }}
					</td>
				</tr>
			</table>
			<p style="margin-top: 1em;">
				Dengan ini menyatakan dengan sesungguhnya bahwa saya orang tua dari:
			</p>
			<table style="
				border: 0px solid;
				width: 100%;">
				<tr>
					<td>
						Nama
					</td>
					<td>
						: {{ $data['nama_murid'] }}
					</td>
				</tr>
				<tr>
					<td>
						TTL
					</td>
					<td>
						: {{ $data['ttl_murid'] }}
					</td>
				</tr>
				<tr>
					<td>
						Jenis Kelamin
					</td>
					<td>
						: {{ $data['jenis_kelamin_murid'] }}
					</td>
				</tr>
				<tr>
					<td>
						Alamat
					</td>
					<td>
						: {{ $data['alamat_murid'] }}
					</td>
				</tr>
			</table>
			<p style="
				text-indent: 1em;
				text-align: justify;
				margin-bottom: 0px;
				margin-top: 1em;
				">
				Dengan ini memberikan izin kepada anak saya untuk {{ $data['jenis_acara']}}.
			</p>
			<p style="text-indent: 1em; text-align: justify; margin-bottom: 0px; margin-top: 0px;">
				Demikian surat izin ini saya buat dengan sebenar-benarnya untuk digunakan seperlunya tanpa adanya tekanan dan paksaan dari pihak manapun.
			</p>
			<table style="
				border: 0px solid;
			 	width: 100%;
			 	text-align: center;
			 	margin-top: 2em;
				">
				<tr>
					<td style="width: 70%;"></td>
					<td>
						{{ $data['tanggal_surat'] }}
						<br>
						Orang Tua/Wali
					</td>
				</tr>
				<tr style="height: 3em;">
					<td></td>
					<td>
						@if($data['ttd_image'] != '')
						<img src="{{ $data['ttd_image'] }}" style="max-width: 200px;">
						@endif
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						( {{ $data['nama_orang_tua'] }} )
					</td>
				</tr>
			</table>
		</div>
	</page>
			
	{{-- <hr> --}}
	<div style="text-align: center;">
		<form action="{{ url('document/download-pdf') }}" method="POST">
			@csrf
			<input type="text" name="type" value="parental_consent" hidden>
			<textarea name="data" id="data" hidden>
				{{ json_encode($data) }}
			</textarea>
			
			<button type="button" class="btn btn-info" onclick="window.print();" style="display: inline;">
				Print
			</button>
			<button type="submit" class="btn btn-primary" style="display: inline;">
				Download PDF
			</button>
		</form>
	</div>
	
</body>

<script src="{{ asset('/theme') }}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/theme') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="{{ asset('/theme') }}/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/theme') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/theme') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/theme') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript">

	setTimeout(()=> {
         alert('Anda bisa print langsung atau mendownload melalui tombol dibawah.')
      }
      ,3000);

	// window.onload = function() { window.print(); }
</script>
</html>