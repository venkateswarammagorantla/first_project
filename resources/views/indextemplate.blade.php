@include('header')
	  <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-5 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Get your way home worldwide</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <form action="#" class="search-location">
	        		<div class="row">
	        			<div class="col-lg align-items-end">
	        				<div class="form-group">
	          				<div class="form-field">
			                <input type="text" class="form-control" placeholder="Search location">
			                <button><span class="ion-ios-search"></span></button>
			              </div>
		              </div>
	        			</div>
	        		</div>
	        	</form>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section ftco-services-2 bg-light" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-pin"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Find Places Anywhere in the World</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block mt-lg-5 pt-lg-4">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-detective"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">We have agents</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-house"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Buy &amp; Rent Modern Properties</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block mt-lg-5 pt-lg-4">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-purse"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Making Money</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-properties" id="properties-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Property</h2>
            <a href="properties">Our Property</a>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-12">
            <div class="carousel-properties owl-carousel">
            	@foreach ($pros as $pro)

<div class="item">
<div class="properties ftco-animate">
<div class="img">
<img src="images/{{ $pro->id }}.jpg" class="img-fluid" alt="Colorlib Template">
</div>
<div class="desc">
<div class="text bg-primary d-flex text-center align-items-center justify-content-center">
<span>Sale</span>
</div>
<div class="d-flex pt-5">
<div>
<h3><a href="properties-single/{{ $pro->id }}" >{{ $pro->name }}</a></h3>
</div>
<div class="pl-md-4">
<h4 class="price">{{ $pro->price }}</h4>
</div>
</div>
<p class="h-info"><span class="location">{{ $pro->location }} - </span> <span class="details">{{ $pro->bedroom }} beds & {{ $pro->bathroom }} baths></p>
</div>
</div>
</div>
@endforeach
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="properties ftco-animate">
		    					<div class="img">
				    				<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
			    				</div>
			    				<div class="desc">
			    					<div class="text bg-secondary d-flex text-center align-items-center justify-content-center">
				    					<span>Rent</span>
				    				</div>
			    					<div class="d-flex pt-5">
				    					<div>
					    					<h3><a href="properties.html">Fatima Subdivision</a></h3>
											</div>
											<div class="pl-md-4">
												<h4 class="price">$120<span>/mo</span></h4>
											</div>
										</div>
										<p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="properties ftco-animate">
		    					<div class="img">
				    				<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
			    				</div>
			    				<div class="desc">
			    					<div class="text bg-primary d-flex text-center align-items-center justify-content-center">
				    					<span>Sale</span>
				    				</div>
			    					<div class="d-flex pt-5">
				    					<div>
					    					<h3><a href="properties.html">Fatima Subdivision</a></h3>
											</div>
											<div class="pl-md-4">
												<h4 class="price">$230,000</h4>
											</div>
										</div>
										<p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="properties ftco-animate">
		    					<div class="img">
				    				<img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
			    				</div>
			    				<div class="desc">
			    					<div class="text bg-primary d-flex text-center align-items-center justify-content-center">
				    					<span>Sale</span>
				    				</div>
			    					<div class="d-flex pt-5">
				    					<div>
					    					<h3><a href="properties.html">Fatima Subdivision</a></h3>
											</div>
											<div class="pl-md-4">
												<h4 class="price">$120,000</h4>
											</div>
										</div>
										<p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="properties ftco-animate">
		    					<div class="img">
				    				<img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
			    				</div>
			    				<div class="desc">
			    					<div class="text bg-secondary d-flex text-center align-items-center justify-content-center">
				    					<span>Rent</span>
				    				</div>
			    					<div class="d-flex pt-5">
				    					<div>
					    					<h3><a href="properties.html">Fatima Subdivision</a></h3>
											</div>
											<div class="pl-md-4">
												<h4 class="price">$50<span>/mo</span></h4>
											</div>
										</div>
										<p class="h-info"><span class="location">New York</span> <span class="details">&mdash; 3bds, 2bath</span></p>
			    				</div>
		    				</div>
            	</div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-intro img" id="about-section" style="background-image: url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Choose Your Dream House</h2>
						<p>We can manage your dream building A small river named Duden flows by their place</p>
						<p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 px-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">Stayhome Real Estate Agency</h2>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			            <p><a href="#" class="btn btn-primary py-3 px-4">Book now</a> </p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-services-2 bg-light" id="workflow-section">
			<div class="container">
				<div class="row">
          <div class="col-md-4 heading-section ftco-animate">
            <h2 class="mb-4">How it works</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <div class="media block-6 services text-center d-block pt-md-5 mt-md-5">
              <div class="icon justify-content-center align-items-center d-flex"><span>1</span></div>
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Evaluate Your Property</h3>
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <hr>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate mt-lg-5">
            <div class="media block-6 services text-center d-block mt-lg-5 pt-md-5 pt-lg-4">
              <div class="icon justify-content-center align-items-center d-flex"><span>2</span></div>
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Meet Your Agent</h3>
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <hr>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span>3</span></div>
              <div class="media-body p-md-3">
                <h3 class="heading mb-3">Close the deal</h3>
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <hr>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-intro img" id="hotel-section" style="background-image: url(images/bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-7">
						<h2 class="mb-4">Choose Your House for Only <span>$120,000</span></h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Advance Search</a></p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-agent" id="agent-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Agents</h2>
          </div>
        </div>
    		<div class="row">
        	<div class="col-md-12">
            <div class="carousel-agent owl-carousel">
            	<div class="item">
            		<div class="agent">
		    					<div class="img">
				    				<img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div>
				    					<h3>I'm an agent</h3>
				    				</div>
			    				</div>
			    				<div class="desc pt-3">
			    					<div>
				    					<h3><a href="properties.html">James Stallon</a></h3>
											<p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
										</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="agent">
		    					<div class="img">
				    				<img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div>
				    					<h3>I'm an agent</h3>
				    				</div>
			    				</div>
			    				<div class="desc pt-3">
			    					<div>
				    					<h3><a href="properties.html">James Stallon</a></h3>
											<p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
										</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="agent">
		    					<div class="img">
				    				<img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div>
				    					<h3>I'm an agent</h3>
				    				</div>
			    				</div>
			    				<div class="desc pt-3">
			    					<div>
				    					<h3><a href="properties.html">James Stallon</a></h3>
											<p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
										</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="agent">
		    					<div class="img">
				    				<img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div>
				    					<h3>I'm an agent</h3>
				    				</div>
			    				</div>
			    				<div class="desc pt-3">
			    					<div>
				    					<h3><a href="properties.html">James Stallon</a></h3>
											<p class="h-info"><span class="position">Listing</span> <span class="details">&mdash; 10 Properties</span></p>
										</div>
			    				</div>
		    				</div>
            	</div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">april</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">april</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">april</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">april</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">april</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">april</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Read testimonials</span>
            <h2 class="mb-4">What Client Says</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Me</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex ftco-animate">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div id="map" class="bg-white"></div>
		</section>

   @include('footer')