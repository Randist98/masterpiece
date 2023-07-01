@extends('home.layout')
@section('content')



	<div class="hero overlay" style="background-image: url('images/img_v_8-min.jpg')">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up">About Us</h1>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
					<p data-aos="fade-up"  data-aos-delay="100">
						<a href="#" class="btn btn-primary me-4">Donate Now</a>
					</p>

				</div>


			</div>
		</div>
	</div>


    {{-- <div class="col-lg-12">
        <form action="#" class="bg-white p-5 rounded donation-form" data-aos="fade-up">
            <h3>Quick Donation Form</h3>
            <div class="form-field mb-3">
                <label for="amount-1" class="amount js-amount" data-value="1.00">
                    <input type="radio" id="amount-1" name="radio-amount" checked="true">
                    <span>$1</span>
                </label>

                <label for="amount-2" class="amount js-amount" data-value="5.00">
                    <input type="radio" id="amount-2" name="radio-amount">
                    <span>$5</span>
                </label>
                <label for="amount-3" class="amount js-amount" data-value="25.00">
                    <input type="radio" id="amount-3" name="radio-amount" >
                    <span>$25</span>
                </label>
                <label for="amount-4" class="amount js-amount" data-value="100.00">
                    <input type="radio" id="amount-4" name="radio-amount">
                    <span>$100</span>
                </label>

            </div>
            <div class="field-icon">
                <span>$</span>
                <input type="text" placeholder="0.00" class="form-control px-4" name="donate-value" value="1.00">
            </div>
            <div class="form-field mb-3">
                <input type="text" placeholder="Full Name" class="form-control px-4">
                <input type="email" placeholder="Email" class="form-control px-4">
            </div>

            <input type="submit" value="Donate now" class="btn btn-secondary w-100">
        </form>
    </div> --}}



    <div class="col-lg-12">
        <form action="process_donation.php" class="bg-white p-5 rounded donation-form" data-aos="fade-up" method="post">
            <h3>Quick Donation Form</h3>
            <div class="form-field mb-3">
                <label for="amount-1" class="amount js-amount" data-value="1.00">
                    <input type="radio" id="amount-1" name="radio-amount" checked="true">
                    <span>$1</span>
                </label>
                <label for="amount-2" class="amount js-amount" data-value="5.00">
                    <input type="radio" id="amount-2" name="radio-amount">
                    <span>$5</span>
                </label>
                <label for="amount-3" class="amount js-amount" data-value="25.00">
                    <input type="radio" id="amount-3" name="radio-amount" >
                    <span>$25</span>
                </label>
                <label for="amount-4" class="amount js-amount" data-value="100.00">
                    <input type="radio" id="amount-4" name="radio-amount">
                    <span>$100</span>
                </label>
                <!-- Rest of your form fields -->
            </div>
            <div class="field-icon">
                <span>$</span>
                <input type="text" placeholder="0.00" class="form-control px-4" name="donate-value" value="1.00">
            </div>
            <div class="form-field mb-3">
                <input type="text" placeholder="Full Name" class="form-control px-4" name="full-name">
                <input type="email" placeholder="Email" class="form-control px-4" name="email">
            </div>
            <input type="submit" value="Donate now" class="btn btn-secondary w-100">
        </form>
    </div>


	<div class="section sec-instagram pb-0">
		{{-- <div class="container mb-5">
			<div class="row align-items-center">
				<div class="col-lg-3" data-aos="fade-up">
					<span class="subheading mb-3">Instagram</span>
					<h2 class="heading">We Are In Instagram</h2>
				</div>
				<div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
					<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, aperiam sint voluptatum? Molestiae debitis, ipsum, rem ipsa voluptatum cupiditate quaerat!</p>
				</div>
			</div>
		</div> --}}

		<div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
			<div class="instagram-slider" id="instagram-slider">

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="images/img_v_8-min.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="images/img_v_2-min.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="images/img_v_3-min.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="images/img_v_4-min.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="images/img_v_5-min.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="images/img_v_6-min.jpg" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<span class="icon-instagram"></span>
						<img src="images/img_v_7-min.jpg" alt="Image" class="img-fluid">
					</a>
				</div>


			</div>
		</div>

	</div>
    @endsection

