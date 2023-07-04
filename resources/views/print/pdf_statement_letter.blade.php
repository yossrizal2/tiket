<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parental Consent</title>
	{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
	<style type="text/css">
	body {
		/* background: rgb(204,204,204); */
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
	{{-- <page size="A4"> --}}
		
		<div style="
			padding-top: 60px;
			margin-left: 80px;
			margin-right: 80px;
			color: #111;
			">
			<h3 class="text-center">
				SURAT PERNYATAAN
			</h3>
	
			<p style="margin-top: 3em;">
				Yang bertanda tangan dibawah ini:
			</p>
			<table style="border: 0px solid; width: 100%;">
				<tr>
					<td>
						Nama
					</td>
					<td>
						: {{ $nama }}
					</td>
				</tr>
                <tr>
					<td>
						TTL
					</td>
					<td>
						: {{ $ttl }}
					</td>
				</tr>
				<tr>
					<td>
						Alamat
					</td>
					<td>
						: {{ $alamat }}
					</td>
				</tr>
                <tr>
					<td>
						Nomor HP
					</td>
					<td>
						: {{ $no_hp }}
					</td>
				</tr>
			</table>
			<p style="margin-top: 1em; text-indent: 1em; text-align: justify;">
				Dengan ini menyatakan dengan sesungguhnya bahwa {!! $pernyataan !!}.
			</p>	
			<p style="text-indent: 1em; text-align: justify; margin-bottom: 0px; margin-top: 0px;">
				Demikian surat pernyataan ini saya buat dengan sebenar-benarnya untuk digunakan seperlunya tanpa adanya tekanan dan paksaan dari pihak manapun.
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
						{{ $tanggal_surat }}
						<br>
						Pembuat Pernyataan
					</td>
				</tr>
				<tr style="height: 3em;">
					<td></td>
					<td>
						@if($ttd_image != '')
						<img src="{{ $ttd_image }}" style="max-width: 200px;">
						@endif
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						( {{ $nama }} )
					</td>
				</tr>
			</table>
		</div>
	{{-- </page> --}}

	
</body>

</html>