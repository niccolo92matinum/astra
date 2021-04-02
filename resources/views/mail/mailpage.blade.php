<x-layouts.app>
  @push('styles')
  <style>
      .sfondo{
       
        justify-content:center;
          text-align: center;
      }

      .center {
 position: absolute;
    margin: auto;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;

}

.mail-btn{

  display: block; margin: 0 auto;

}

@media (max-width: 400px) {
    .sfondo{
     
   height: 200px;
   width: 200px;
   margin-top:80px;
    }

    .lead{
      font-size: 20px;
     margin-top: 100px;
   position: relative;
   padding-left: 0;
   padding-right:0;
 width: 100%;
     
    }
}


  </style>
  @endpush
<body>
  <div class="container-fluid  back-gray pt-5 ">
    <div class="row ">

      <div class="col-12 col-md-6 py-5 px-3">
        <img class="sfondo  center " src="img/sendemail.png" >
      </div>

        <div class="col-12 col-md-6 pt-5 ">

            <h2 class=" lead">Inserisci i tuo dati e la tua richiesta.</h2>


          
            <form  method="POST" action="{{route('email.send')}}" data-toggle="validator" class="pr-5 pb-5">
                @csrf
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" name="name"  value="{{old('name')}}" >
                  @error('name')
                 
                     <div class="alert alert-danger">{{$message}}</div>
                  @enderror
            
                </div>
                <div class="form-group">
                  <label for="">Mail</label>
                  <input type="email" class="form-control"  name="mail"  value="{{old('mail')}}">
                  @error('mail')
                       <div class="alert alert-danger"> {{$message}}</div>
                   @enderror

                </div>
                <div class="form-group">
                  <label  for="">Messaggio</label>
                  <textarea class="form-control" name="message" id="" cols="30" rows="10">{{old('message')}}</textarea>
                  @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn  btn-outline btn-nico mail-btn">Invia Mail</button>
              </form>
            
        </div>

        

        

        
        
    </div>
</body>
    
        
</x-layouts.app>