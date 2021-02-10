<x-layouts.app
title="Homepage"
description="Benvenuti nella homepage del sito"
>

@push('styles')
<style>
   


.carousel .background {
    background-position: center center;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    height: 700px;
  }
  
  @media (max-width:991px) {
    .carousel .background {
      background-size: cover; /* To make the background image looks good */
    }
  }
  
  .carousel .background.a {
    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://static.pexels.com/photos/92090/pexels-photo-92090-large.jpeg");
  }
  
  .carousel .background.b {
    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://static.pexels.com/photos/93750/pexels-photo-93750-large.jpeg");
  }
  
  .carousel .background.c {
    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://static.pexels.com/photos/76827/bahia-ocean-bay-boat-76827-large.jpeg");
  }
  
  .carousel-fade .carousel-inner .item {
    opacity: 0;
    transition: opacity 0.5s; /* The 0.5s describes the duration to make the opacity from 0 to 1 */
  }
  
  .carousel-fade .carousel-inner .active {
    opacity: 1;
  }
  
  /* CSS Hack to trigger GPU for smooth transition */
  @media all and (transform-3d),
  (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
  }
  /* CSS Hack to trigger GPU for smooth transition */
  
  .covertext {
    position: absolute; /* To make the div to be place anywhere. It is out of the document flow */
    top: 200px; /* The distance between the div with the top of document */
    left: 0px; /* Make the div full width */
    right: 0px; /* Make the div full width */
  }
  
  .title {
    font-family: Verdana;
    font-weight: 600;
    font-size: 60px;
    color: #ffffff;
    text-align: center;
  }
  
  .subtitle {
    font-family: Verdana;
    font-size: 23px;
    color: #ffffff;
    text-align: center;
  }
  
  .explore {
    text-align: center;
    margin-top: 10px;
  }
  
  .explore .btn-lg,
  .explore .btn-lg:hover {
    border-radius: 30px;
    padding: 15px 25px;
    font-size: 22px;
    background-image: none;
    background-color: #FF4000;
    border-color: #FF4000;
    color: #ffffff;
  }
  
  .btn,
  .btn:hover {
    border-radius: 0px;
    background-image: none;
    background-color: #FF4000;
    border-color: #FF4000;
    color: #ffffff;
    margin-bottom: 20px;
    box-shadow: none;
    outline: none;
  }
  
  .btn:focus,
  .btn:active:focus,
  .btn.active:focus,
  .btn.focus,
  .btn:active.focus,
  .btn.active.focus {
    color: #ffffff;
    outline: none;
  }
    .carousel-item {
        height: 80vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }


 
  

.container1 {
  display: grid;
  grid-template-columns: repeat(4 , 1fr);
  max-width:85vw;
  grid-gap:20px;
  justify-items:center
}



.container1 > div {
  background-color: white;
  text-align: center;
  border-radius: 5px;
  height: 250px;
  box-shadow: 0 10px 10px 5px rgba(0,0,0,.25);
  transition: all 300ms 50ms ease-in-out;
  color: white;
  position: relative;
  width: 300px;
  max-width:250px;
  min-width:200px;
  overflow: hidden;
}

.content {
  position: absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  transition: all 300ms 50ms ease-in-out;
  /* z-index: 2; */
}


} */

.container1 > div .content::after{
  content: '';
  position: absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  z-index:0;
  background-image: linear-gradient(to bottom,
                    rgba(0,0,0,.01),
                    rgba(0,0,0,.8)
  );
  opacity: .1;
  transition: all 300ms 50ms ease-in-out;
  border-radius:5px;
}

.container1 > div img{
  border-radius: 5px;
  width: 100%;
  height: 100%;
  transition: all 300ms 50ms ease-in-out;
}

.container1 > div h3{
/*   border: 2px solid red; */
  font-family: 'Viga', sans-serif;
  text-transform: uppercase;
  margin-bottom:20px;
  transition: all 200ms 50ms ease-in-out;
}

.container1 > div p{
/*   border: 2px solid blue; */
  font-family: 'Playball', cursive;
  font-size: 20px;
  margin-top: 10px;
  line-height: 1;
  transition: all 200ms 50ms ease-in-out;
  color: transparent;
  opacity: 0;
  width:90%;
  margin:auto;
}

.container1 > div p ,
.container1 > div h3{
  position: relative;
  top:200px;
  z-index:1;
}

.container1 > div:hover{
  box-shadow: 0 20px 15px 10px rgba(0,0,0,.15);
  transform: translateY(-10px);
  cursor: pointer;
}

.container1 > div:hover .content{
  transform:scale(1.1)
}

.container1 > div:hover h3,
.container1 > div:hover p{
  transform: translateY(-100px)
}

.container1 > div:hover p{
  opacity:1;
  color: white;
}

.container1 > div .content:hover:after{
  opacity:1;
}

@media(max-width: 1000px) {
  body{
    height:150vh;
  }
  
  .container1 {
  display: grid;
  grid-template-columns: repeat(2 , 1fr);
  max-width:85vw;
  grid-gap:40px 100px;
  justify-items:center;
  justify-content: center;
  margin-left:0
}
}

@media(max-width: 590px) {
  body{
    height: 300vh;
  }
    .container1 {
  display: grid;
  grid-template-columns: repeat(1 , 1fr);
  width:80vw;
/*   grid-gap:40px 100px; */
  justify-items:center;
      
}
  
  .container1 > div{
    min-width: 300px
  }
}

@media(max-height:450px){
  body{
    height: 200vh;
  }
}

@media(max-height:300px){
  body{
    height: 300vh;
  }
}

@media(max-height:200px){
  body{
    height: 300vh;
  }
}

@media(max-height:100px){
  body{
    height: 300vh;
  }
}
</style>

@endpush




<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">I nostri prodotti</h2>
                    <p class="lead">Qualità e convenienza</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Cosa puoi trovare</h2>
                    <p class="lead">Illustrazioni nell'impiego</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Assistenza e informazione</h2>
                    <p class="lead">Se hai problemi puoi contattarci quando vuoi.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <h2 class="display-4">Rivenditore autorizzato sul satellitare e materiale elettrico con competenze certificate </h2>
        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, totam? Accusamus corrupti eius a ea rem qui voluptas consequatur impedit soluta, commodi maxime sunt eos non animi amet tempora. Cum.<a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
    </div>
</section>


<div class="container">
    <div class="row py-5 ">
        <div class="col-12 py-5">
            <h1 class="text-center">Categorie prodotti</h1>
        </div>
        
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-12 col-md-3">
                <div class="container1">
                    
                    <div class="box">
                        <img src="img/{{$category->name}}.jpg" style="background-size: cover" >
                      <div class="content">
                        <a  class="btn btn-primary" href="{{route('show.articlesCategory', $category)}}"> vai alla categoria</a>
                        <h3 class="btn btn-primary">{{$category->name}}</h3>
                        <p></p>
                      </div>
                    </div>
                </div>
            </div>
            
            {{-- <div class="col-12 col-md-3">
                
                
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                
            </div> --}}
            @endforeach
        </div>
        
    </div>
</div>




@push('scripts')


@endpush

</x-layouts.app>
