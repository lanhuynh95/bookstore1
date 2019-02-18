<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bookstore</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/responsive.css') }}">

	<script type="text/javascript" src="{{ asset('front/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('front/js/main.js') }}"></script>

	<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#"><img src="{{ asset('front/img/logo.png') }}" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="#">Buy</a></li>
						<li><a href="#">Rent</a></li>
						<li><a href="#">Sell</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<a href="#" class="login_btn">Login</a>
				</nav>
			</div>
		</header><!--  end header section  -->

			<section class="caption">
				<h2 class="caption">Find You Dream Home</h2>
				<h3 class="properties">Appartements - Houses - Mansions</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div>
			<select name="category_id" id="select" class="form-control" onchange="myFunction()">
                <option value="0">ALL</option>
                <option value="1">On sale</option>
                <option value="2">Out of stock</option>
                <option value="3">Stop selling</option>
            </select>
		</div>
		<div class="wrapper">
			<ul class="properties_list">
				@foreach($books as $book)
				<li class='book_list'>
					<a href="#">
						<img src="{{ asset('uploads/'.$book->images) }}" alt="{{$book->title}}" style="width: 200px;height: 350px" />
					</a>
					<span class="price">{{$book->price}}</span>
					<div class="property_details">
						<h1>
							<a href="#">{{$book->title}}</a>
						</h1>
						<h2>{{$book->intro}}<span class="property_size" style="margin: 0px 10px;color: red;font-style: italic;">(@if($book->status==1) on sale @elseif($book->status==2) out of stock @elseif($book->status==3) stop selling @endif)</span><span class="property_size voted" style="color: green" id="{{$book->id}}">vote</span></h2>
					</div>
				</li>
				@endforeach
			</ul>
			<div class="more_listing">
				<a href="#" class="more_listing_btn">View More Listings</a>
			</div>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Appartements</a></li>
						<li><a href="#">Houses</a></li>
						<li><a href="#">Villas</a></li>
						<li><a href="#">Mansions</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Anglos</a></li>
						<li><a href="#">Miami</a></li>
						<li><a href="#">Washington</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="about">
					<p>La Casa is real estate minimal html5 website template, designed and coded by pixelhint, tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum</p>
					<ul>
						<li><a href="http://facebook.com/pixelhint" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/pixelhint" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+Pixelhint" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright © 2015 <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">Pixelhint.com</a>. All Rights Reserved.
		</div>
	</footer><!--  end footer  -->
	
</body>
<script type="text/javascript" src="{{ asset('jquery-3.3.1.min.js') }}"></script>
<script>
	$.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

	function myFunction() {
		if (($(".book_list").length > 0)){
		   $( ".book_list" ).remove();
		}
		var cid = $('#select').val();
		//alert(cid);
        $.ajax({
            type: "GET",
            url: "/index",
            data: {"cid" : cid},
            success: function(result) {
                let data = "";
                result.forEach(book => {
                	let i = book.status;
                	let j = "";
                	if(i==1) { j = "on sale"}
				    else if(i==2) {j = "out of stock"}
				    else if(i==3) {j = "stop selling"}

                    let li = "<li class='book_list'>";
                    li += "<a href='#'><img src='http://bookstore.local/uploads/" + book.images + "' style='width: 200px;height: 350px' /></a>";
                    li += "<span class='price'>" + book.price + " VNĐ</span>";
                    li += "<div class='property_details'>";
                    li += "<h1><a href='#'>" + book.title + "</a></h1>";
                    li += "<h2>" + book.intro + "<span class='property_size' style='margin: 0px 10px;color: red;font-style: italic;'>( "+j+" )</span>";
                    li += "<span class='property_size voted' style='color: green' id='" + book.id + "'>vote</span></h2>";
                    li += "</div>";
                    li += "</li>";
                    data += li;
                });
                $('.properties_list').append(data);
                // console.log('rows---------:', data);
            },
        });
    };


    	$(document).find(".voted").on("click",function(){
    	
    	var id = $(this).prop("id");
    	alert(id);
    	// $.ajax({
    	// 	url: '/home',
    	// 	type: 'POST',
    	// 	data: {"id": id},
    	// })
    	//console.log('rows---------:', id);

    	//$(this).removeAttr("name"); 
   		})

</script>
</html>
