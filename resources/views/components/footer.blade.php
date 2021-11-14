<footer id="primary-footer">
	<!-- footer widget start -->
	<div class="container footer-widget-area">
		<div class="row">
			<div class="col-md-4 p-3">
				<div class="footer-widget-heading fotTitile">
					<h4>Chi Siamo</h4>
				</div>
				<p class="fotInfo">ASTRA di Antonio Sacco è una piccola azienda impegnata da oltre venti anni nel settore dell'impiantistica atta alla ricezione e distribuzione dei segnali televisivi DTT e SATELLITE. Con lo scopo di 
					offrire in ogni occasione i migliori riscontri di efficienza, sin dall' inizio ha optato per l'utilizzo 
					dei migliori prodotti delle più autorevoli aziende del settore. I suoi principali fornitori sono EMMESSE e MICRO TEK.
				</p>
				{{-- <div class="footer-social-icon">
                                <div class="social-title">Follow us:</div>
                                <a href="https://www.facebook.com/foxmayaban/"><i class="fab fa-facebook-f circle-icon"></i></a>
                                <a href="https://www.instagram.com/foxmayadigital/"><i class="fab fa-instagram circle-icon"></i></a>
                                <a href="https://twitter.com/foxmayadigital"><i class="fab fa-twitter circle-icon"></i></a>
                                <a href="https://www.linkedin.com/in/ban-sharma/"><i class="fab fa-linkedin-in circle-icon"></i></a>
                            </div> --}}
			</div>
			<div class="col-md-4 p-3">
				<div class="footer-widget-heading fotTitile">
					<h4>Categorie Principali</h4>
				</div>
				      <ul class="linkediting">
{{-- @foreach ($mastercategories as $mastercategory)
<li><a href="{{route('masterCategory', $mastercategory)}}"><i class="fa fa-angle-right"></i> {{$mastercategory->name}}}</a></li>
@endforeach --}}
                        <li><a href="#"><i class="fa fa-angle-right"></i> Satellite</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> DTT</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Accessori</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Telecomandi</a></li>
                        {{-- <li><a href="#"><i class="fa fa-angle-right"></i> Schemi di utilizzo</a></li> --}}
	                  </ul>
				</div>
			<div class="col-md-4 p-3">
				<div class="footer-widget-heading fotTitile">
					<h4>I nostri fornitori</h4>
				</div>
				<ul class="linkediting">
                        <li><img src="/img/icona emmesse.png" alt="" class="img-fluid pt-3" style="width: 150px"></li>
						<li><img src="/img/microtek.jpeg" alt="" class="img-fluid pt-3" style="width: 100px"></li>
						<li><img src="/img/bravo.png" alt="" class="img-fluid pt-3" style="width: 150px"></li>
	                  </ul>
			</div>
		</div>
	</div>
	
    
   
	
</footer>