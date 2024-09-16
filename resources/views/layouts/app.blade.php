<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'dashbourd' }}</title>
        <link rel="stylesheet" href="{{asset("assets/css/sidebar.css")}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <style>
      
      
            .btn-purple{
                background-color: #6d31ed;
                color:white
              }
              .btn-purple:hover{
                background-color: white;
                color: #6d31ed;
                border-color: #6d31ed
              }
              .btn-purple-outline{
                background-color: white;
                color: #6d31ed;
                border-color: #6d31ed
                
              }
              .btn-purple-outline:hover{
                background-color: #6d31ed;
                color:white
                
              }
               .input-group .form-control {
                border-left: none;
                border-color: #6c757d;
                background-color: #fff; /* Background color */
                border-radius: 8px; /* Optional: Round the edges */
            }
    
            .input-group .btn {
                border: none;
                background-color: transparent; /* Make the button background transparent */
            }
    
            .form-control:focus {
                box-shadow: none;
                border-color: #6c757d;
            }
    
            .form-select{
                border-color: #6c757d
            }
            .input-group .btn i {
                color: #6c757d; /* Icon color */
            }
            .input-group-text{
                border-right: none;
                border-color: #6c757d;
                
                background-color: #fff
                
            }
            .input-group-text:focus{
                border-color: #6c757d;
            }
            .input-group-text i{
               color: gray
            }
    
            /* Additional spacing between input fields */
          
          
        </style>
    </head>
    <body>
        <div class="container-fluid">
            
            <div class="row">
                 <div id="wrapper">
                
            
        
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav" style="margin-left:0;">
                        <li class="sidebar-brand ps-4 fs-5 text-start">
                            
                          <a id="menu-toggle" style="margin-top:20px ; font-size: 13px" class="text-light toggle cursor-pointer "  >Employee Manage System</a>
                            
                        </li>
                      
                      
                        
                        {{-- @haspermission("show_employee") --}}
                        <li>
                          <a href='/emplyees'> <i class='fa fa-comment-o' aria-hidden='true'> </i> <span style='margin-left:5px;'>All Employee</span> </a>
                        </li> 
                        {{-- @endhaspermission --}}
                        {{-- @haspermission("update_employee")
                        <li>
                          <a href='/updateemployee/{}'> <i class='fa fa-comment-o' aria-hidden='true'> </i> <span style='margin-left:5px;'>All Employee</span> </a>
                        </li> 
                        @endhaspermission
                        @haspermission("create_employee")
                        <li>
                          <a href='/addemplyee'> <i class='fa fa-comment-o' aria-hidden='true'> </i> <span style='margin-left:5px;'>All Employee</span> </a>
                        </li> 
                        @endhaspermission
                        @haspermission("delete_employee")
                        <li>
                          <a href='/delete/{}'> <i class='fa fa-comment-o' aria-hidden='true'> </i> <span style='margin-left:5px;'>All Employee</span> </a>
                        </li> 
                        @endhaspermission --}}
                       
                        <li>
                            <a href="/logout"> <i class="bi bi-globe2" aria-hidden="true"> </i> <span style="margin-left:5px;">logout</span>  </a>
                        </li>
                    </ul>
                </div>
                <!-- /#sidebar-wrapper -->
        
                <!-- Page Content -->
                <div id="page-content-wrapper bg-warning" class=" p-0 m-0">
                    <div class="container-fluid p-0 m-0 ">
                        <div class="row w-100">
                            <div class="col-lg-12 w-100">
                                <main>
                                    {{$slot}}
                                </main>
                                
                                 
                                
        </a>
             <!-- /#page-content-wrapper -->
         
            <!-- /#wrapper -->
          
            </div>
        </div> 
                    </div>
                </div>
                 </div>
            </div>
        </div>
    
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
    
     <script src="{{asset("assets/js/active.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
