<x-layouts.app>


    <div class="container ">
        <div class="row ">

          <div class="col-12 col-md-6 py-5 px-3">
            <img class="sfondo img-fluid" src="img/sendemail.png"  >
          </div>
    
            <div class="col-12 col-md-6 py-5 px-5">
    
                <h2 class="my-5 mx-5">Mail</h2>
    
    
              
                <form  method="POST" action="">
                    @csrf
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" name="name" value="{{old('name')}}">
                      @error('name')
                         <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                
                    </div>
                    <div class="form-group">
                      <label for="">Mail</label>
                      <input type="email" class="form-control"  name="mail" value="{{old('mail')}}">
                      @error('mail')
                           <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
    
                    </div>
                    <div class="form-group">
                      <label  for="">Messaggio</label>
                      <textarea class="form-control" name="message" id="" cols="30" rows="10">{{old('message')}}</textarea>
                      @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Invia Mail</button>
                  </form>
                
            </div>
    
            
    
            
    
            
            
        </div>
        
</x-layouts.app>