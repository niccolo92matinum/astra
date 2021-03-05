<x-layouts.app>
  @push('styles')
  <style>
      .p{
        justify-content:center;
text-align: center;
      }

  </style>
  @endpush
<body>
  <div class="container-fluid  back-gray pt-5 ">
    <div class="row ">

      <div class="col-12 col-md-6 py-5 px-3">
        <img class="sfondo img-fluid " src="img/sendemail.png"  >
      </div>

        <div class="col-12 col-md-6 pt-5 ">

            <h2 class=" lead">Invia una Mail per qualsiasi curiosità.</h2>


          
            <form  method="POST" action="{{route('email.send')}}" data-toggle="validator" class="pr-5 pb-5">
                @csrf
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" name="name" >
                  {{-- @error('name')
                     <div class="alert alert-danger">{{ $name }}</div>
                  @enderror --}}
            
                </div>
                <div class="form-group">
                  <label for="">Mail</label>
                  <input type="email" class="form-control"  name="mail">
                  {{-- @error('mail')
                       <div class="alert alert-danger">{{ $email }}</div>
                   @enderror --}}

                </div>
                <div class="form-group">
                  <label  for="">Messaggio</label>
                  <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                  {{-- @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror --}}
                </div>
                <button type="submit" class="btn btn btn-outline btn-nico">Invia Mail</button>
              </form>
            
        </div>

        

        

        
        
    </div>
</body>
    
        
</x-layouts.app>