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

    * {
      box-sizing: border-box;
      margin:0;
      padding:0;
    }
    body {
      background:#DDD;
      font-family: 'Inknut Antiqua', serif;
      font-family: 'Ravi Prakash', cursive;
      font-family: 'Lora', serif;
      font-family: 'Indie Flower', cursive;
      font-family: 'Cabin', sans-serif;
    }
    div.container {
      max-width: 1350px;
      margin: 0 auto;
      overflow: hidden
    }
    .upcomming {
      font-size: 45px;
      text-transform: uppercase;
      border-left: 14px solid rgba(255, 235, 59, 0.78);
      padding-left: 12px;
      margin: 18px 8px;
    }
    .container .item {
      width: 48%;
      float: left;
      padding: 0 20px;
      background: #fff;
      overflow: hidden;
      margin: 10px
    }
    .container .item-right, .container .item-left {
      float: left;
      padding: 20px 
    }
    .container .item-right {
      padding: 79px 50px;
      margin-right: 20px;
      width: 25%;
      position: relative;
      height: 286px
    }
    .container .item-right .up-border, .container .item-right .down-border {
        padding: 14px 15px;
        background-color: #ddd;
        border-radius: 50%;
        position: absolute
    }
    .container .item-right .up-border {
      top: -8px;
      right: -35px;
    }
    .container .item-right .down-border {
      bottom: -13px;
      right: -35px;
    }
    .container .item-right .num {
      font-size: 60px;
      text-align: center;
      color: #111
    }
    .container .item-right .day, .container .item-left .event {
      color: #555;
      font-size: 20px;
      margin-bottom: 9px;
    }
    .container .item-right .day {
      text-align: center;
      font-size: 25px;
    }
    .container .item-left {
      width: 71%;
      padding: 34px 0px 19px 46px;
      border-left: 3px dotted #999;
    } 
    .container .item-left .title {
      color: #111;
      font-size: 34px;
      margin-bottom: 12px
    }
    .container .item-left .sce {
      margin-top: 5px;
      display: block
    }
    .container .item-left .sce .icon, .container .item-left .sce p,
    .container .item-left .loc .icon, .container .item-left .loc p{
        float: left;
        word-spacing: 5px;
        letter-spacing: 1px;
        color: #888;
        margin-bottom: 10px;
    }
    .container .item-left .sce .icon, .container .item-left .loc .icon {
    margin-right: 10px;
    font-size: 20px;
    color: #666
    }
    .container .item-left .loc {display: block}
    .fix {clear: both}
    .container .item .tickets, .booked, .cancel{
        color: #fff;
        padding: 6px 14px;
        float: right;
        margin-top: 10px;
        font-size: 18px;
        border: none;
        cursor: pointer
    }
    .container .item .tickets {background: #777}
    .container .item .booked {background: #3D71E9}
    .container .item .cancel {background: #DF5454}
    .linethrough {text-decoration: line-through}
    @media only screen and (max-width: 1150px) {
    .container .item {
        width: 100%;
        margin-right: 20px
    }
    div.container {
        margin: 0 20px auto
    }
    }
</style>

<link href="https://fonts.googleapis.com/css?family=Cabin|Indie+Flower|Inknut+Antiqua|Lora|Ravi+Prakash" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />

</head>
<body>
	<page size="A4">
		<div class="container">
      {{-- <h1 class="upcomming">upcomming gigs</h1> --}}
        <div class="item">
          <div class="item-right">
            <h2 class="num">04</h2>
            <p class="day">Jun</p>
            <span class="up-border"></span>
            <span class="down-border"></span>
          </div> <!-- end item-right -->
          
          <div class="item-left">
            <p class="event">Music Event</p>
            <h2 class="title"><b>{{ (isset($data->unique_id)? $data->unique_id : '') }}</b></h2>
            
            <div class="sce">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <p>{{ (isset($data->name)? $data->name : '') }}<br/> {{ (isset($data->address)? $data->address : '') }}</p>
            </div>
            <div class="fix"></div>
            <div class="fix"></div>
            <div class="loc">
              <div class="icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <p>North,Soth, United State , Amre <br/> Party Number 16,20</p>
            </div>
            <div class="fix"></div>
            <button class="tickets" onclick="window.print();">Ticket</button>
          </div> <!-- end item-right -->
        </div>
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
				{{-- Download PDF --}}
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
         alert('Anda bisa screenshot / print langsung atau mendownload melalui tombol dibawah.')
      }
      ,3000);

	// window.onload = function() { window.print(); }
</script>
</html>