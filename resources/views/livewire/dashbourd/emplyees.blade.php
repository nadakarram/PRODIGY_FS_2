<div class="container-fluid p-0 m-0">
    <h2 class="text-center my-4">
        All Employee Data 
       
    </h2>
    <div class="container-fluid p-0 mb-3">
        <div class="d-flex  justify-content-between">
            <div class=" d-flex justify-content-between">
                    
                @livewire("search")
               
          
          
       </div>
       <div class="">
        
        <a href="/addemplyee" class="btn btn-outline-dark">Add Employee <i class="fas fa-add"></i></a>
    </div>
        </div>
        
    </div>

    
    <table class="table table-hover w-100">
        <thead >
            <tr class="" style="">
                <th>Employee </th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Job Feild</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($employes as $employee )
           
                 <tr class="">
                    <td>
                        @if ($employee->image==null)
                        <i class="fas fa-user fs-1"></i>
                            
                        @else
                                 <img src="{{asset("storage/".$employee->image)}}" alt="image" height="50" width="50">
                        @endif
                   </td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->phone_number}}</td>
                    
               
                <td>{{$employee->email}}</td>
                <td>{{$employee->job_feild}}</td>
               
              
                <td>
                    <a wire:navigate href="/updateemployee/{{$employee->id}}" class="btn"><i class="fas fa-edit"></i></a>
                    <a wire:navigate href="/delete/{{$employee->id}}" class="btn"><i class="fas fa-delete-left"></i></a>

                </td>
            </tr>
            @endforeach
           
       
        </tbody>
    </table>
    {{-- {{$admins->links()}} --}}

</div>
