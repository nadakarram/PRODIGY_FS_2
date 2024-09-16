
<div class="d-flex  justify-content-center align-content-end align-items-end" style="background:linear-gradient(#000,white)">
    <div class="form  w-75 bg-white p-5 m-5 rounded-4 shadow mt-5" style="">
        <h3 class=" text-center" style="color: #000">Add Employee</h3>
        
        
        <form class="px-5 py-1 " wire:submit="addemployee">
            <div class="form-group  mb-3">
                
<label for="" class="form-label">name</label> 
                <input type="text" class="form-control  border-right-0" placeholder="Name"  id="name" wire:model="name">
             
                @error("name")
                <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">E-mail</label> 
                <input type="email" class="form-control" placeholder="Email" id="email" wire:model="email">
                @error("email")
                    <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" placeholder="Phone Number" id="phone_number" wire:model="phone_number">
                @error("phone_number")
                    <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="form-group mb-3">
                {{-- <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" wire:model="password">
                @error("password")
                    <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div> --}}
            <div class="form-group mb-3">
                <label for="" class="form-label">Age</label>
                <input type="number" class="form-control" placeholder="Age" id="age" wire:model="age">
                @error("age")
                <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Address</label>
                <input type="text" class="form-control" placeholder="address" id="address" wire:model="address">
                @error("address")
                <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="form-group mb-3">
               <label for="" class="form-label">job department</label>
                <select  id="job_feild" aria-placeholder="select" wire:model="job_feild" class="form-select">
                    <option value="" disabled >select job department</option>
                    <option value="sale">Sale</option>
                    <option value="manager">Manager</option>
                    <option value="security">security</option>
                    <option value="customer_servies"> Customer Servies</option>
                    <option value="it">It</option>
                </select>
              
                @error("job_feild")
                <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">image</label>
                {{-- <span class="form-group-text">image</span> --}}
                <input type="file" class="form-control"  id="image" wire:model="image" >
                @error("image")
                    <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
        
            
          
           
            <button type="submit" class="btn btn-purple w-100 mt-4">
                <span wire:loading wire:target='addemployee'>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </span>
                <div wire:loading.delay.remove wire:target='addemployee'> Add Employee</div>
        
               </button>
        </form>

    




    
            </div>

</div>
