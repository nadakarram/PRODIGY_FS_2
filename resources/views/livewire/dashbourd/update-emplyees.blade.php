<div class="d-flex justify-content-center  my-5">

    <div class="card card-custom col-md-8 p-5 rounded mt-5">
        @if ($massage!="")
               <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{$massage}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
     
        <h5 class="card-title mb-2">Update </h5>
        
        <form class="d-flex align-items-end" wire:submit="changeimage">
            <div class="position-relative p-2 " style="width: min-content">
                @if($edtedimage)
             
                <img src="{{$edtedimage->temporaryUrl()}}" class="mt-3" width="100px" height="100px">
                @else
                <img src="{{asset("storage/".$image)}}" class="mt-3 bg-warning" width="100px" height="100px">
                @endif
               {{-- <img src="{{asset("storage/".$image)}}" class="mt-3 bg-warning" width="100px" height="100px"> --}}
               
               
            <label class=" ms-2 btn rounded-pill btn-dark p-2" style="position: absolute;bottom: 2%;right:0;">
                <i class="fas fa-camera-alt fs-5"></i>
                <input type="file" wire:model="edtedimage" style="display: none" class="custom-file-input" id="fileInput">
            </label>  
            </div>
            <div class="ms-4">
                <span class="fs-4">Uploud your photo </span>
                <br>
                <span class="text-secondary">
                    you can choose the 
                 new<br> profile photo
                </span>
                <br>
        
                <input type="submit" value="change image" class=" btn btn-outline-dark">
            </div>
           
           
        </form>
        <form class="mt-5" wire:submit="updateEmployeeData">
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" wire:model="name" class="form-control" id="name" placeholder="Jane Doe" value="{{$employee->name}}">
                @error('name')
                <p class="text-danger">{{$message }}</p>
                
                    
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" wire:model="email" class="form-control" id="email" placeholder="email@gmail.com" value="{{$employee->email}}">
                @error('email')
                <p class="text-danger">{{$message }}</p>
                
                    
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="email" class="form-label">New Password</label>
                <input type="password" wire:model="newpassword" class="form-control" id="newpassword" placeholder="*** *** ***" >
                @error('newpassword')
                <p class="text-danger">{{$message }}</p>
                
                    
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="text" wire:model="phone_number" class="form-control" id="phone_number" placeholder="+1 123 456 7890" value="{{$employee->phone_number}}">
                @error('phone_number')
            <p class="text-danger">{{$message }}</p>
            
                
            @enderror
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" wire:model="age" class="form-control" id="age" placeholder="16" value="{{$employee->age}}">
                @error('age')
            <p class="text-danger">{{$message }}</p>
            
                
            @enderror
            </div>
            <div class="mb-3">
        
        
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" wire:model="address" id="address" placeholder="123 Main St, Springfield" value="{{$address}}">
            @error("address")
            <p class="text-danger">{{$message }}</p>
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
            <input type="submit" class="btn btn-purple-outline " value="change">
        </form>
    </div>
</div>
