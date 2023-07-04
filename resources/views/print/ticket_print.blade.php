<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ticket Print</title>
	{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
	<style type="text/css">
	body {
		background: rgb(204,204,204);
		/* visibility: hidden; */
		font-size: 18px;
		font-family: Sans-serif;
	}
	page {
		background: white;
		display: block;
		margin: 0 auto;
		margin-bottom: 0.5cm;
		box-shadow: 0 0 0cm rgba(0,0,0,0);
		font-family: Sans-serif;
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
			padding: 15px; margin: 2px; border-style: double;
			background-color: rgb(255, 153, 0, 0.2);
			background-image: linear-gradient(rgba(255,255,255,0.8), rgba(255,255,255,0.8)), url('https://1.bp.blogspot.com/-p1IGbWUwqME/XUwB4ZhKo5I/AAAAAAACTMI/gnqSaGpzXk08DMxiPghkyPIyHQyQkycNgCLcBGAs/w0/IMG_20190808_180050.jpg');
            background-size: 100%;
			">
			<center>
				{{ (isset($data->project_name)? $data->project_name : '') }}
				<h3 style="margin-bottom: 2px;">
					TIKET KONSER MANTAB 2023
				</h3>
				<h4 style="margin-top: 2px;">
					{{-- No.__________/SPK/PT_____________/_____________/{{ date('Y') }} --}}
				</h4>	
			</center>
			

			<table id="table1" class="table table-striped table-bordered" style="width: 100%; text-align: left;">			
				<tr>
					<td style="width: 8cm; height: 1cm;">Kode Tiket</td>
					<td style="min-width: 5cm; ">
						: <b>{{ (isset($data->unique_id)? $data->unique_id : '') }}</b>
					</td>
				</tr>
				<tr>
					<td style="width: 8cm; height: 1cm;">Atas Nama</td>
					<td style="min-width: 5cm; ">
						: <b>{{ (isset($data->name)? $data->name : '') }}</b>
					</td>
				</tr>
				<tr>
					<td style="width: 8cm; height: 1cm;">Alamat</td>
					<td style="min-width: 5cm; ">
						: <b>{{ (isset($data->address)? $data->address : '') }}</b>
					</td>
				</tr>
			</table>	
            <hr>
            <i>*tiket ini dibuat oleh {{ config('app.name')}}		</i>
		</div>
	</page>
			
	{{-- <hr> --}}
	<div style="text-align: center;">
		<form action="{{ url('document/download-pdf') }}" method="POST">
			@csrf
			<input type="text" name="type" value="referral_letter" hidden>
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