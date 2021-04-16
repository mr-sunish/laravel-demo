<x-app-layout>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Create Product</title>
  </head>
  <body>
    <div class="container">
    	
    	<form id="product_form" name="product_form" method="POST" action="javascript:void(0)">
            <div class="row mt-3">
                <div class="col">
                    <h4>Select the selects to check the products</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <select class="form-select" name="make_id" id="make_id">
                      <option selected disabled>Make</option>
                      
                      @foreach($makeArr as $make)
                        <option value="{{$make->id}}">{{$make->make_name}}</option>
                      @endforeach
                    </select>
                </div> 
                <div class="col">
                    <select class="form-select" name="model_id" id="model_id">
                      <option selected disabled>Model</option>
                    </select>
                </div> 
                <div class="col">
                    <select class="form-select" name="processor_id" id="processor_id">
                      <option selected disabled>Processor</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <button class="btn btn-primary" type="submit" onclick="capture()">Submit</button>
                </div>
            </div>
    	</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function capture(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                $.ajax({
                    url:"http://127.0.0.1:8000/save",
                    type:"POST",
                    data: $("#product_form").serialize(),
                    success: function(res){
                        alert("Stored Successfully");
                        $("#product_form")[0].reset();
                    },
                    error:function(resr){
                        alert("something went wrong try again");
                    }
                });

        }
        $(document).ready(function () {
            $("#make_id").change(function() {
             var options = '';
              var make_id = $('#make_id').val();
              $.ajax({
                      url:"http://127.0.0.1:8000/api/getModel",
                      type:"POST",
                      data: 'make_id='+make_id,
                      success: function(res){
                          for(var i=0; i<res.length; i++) { // Loop through the res & construct the options
                                  options += '<option value="'+res[i].id+'">'+res[i].model_name+'</option>';
                              }
                            $('#model_id').append(options);
                      },
                      error:function(resr){
                          alert("something went wrong try again");
                      }
                  });
            });
            $("#model_id").change(function() {
             var options = '';
              var model_id = $('#model_id').val();
              $.ajax({
                      url:"http://127.0.0.1:8000/api/getProcessor",
                      type:"POST",
                      data: 'model_id='+model_id,
                      success: function(res){
                          for(var i=0; i<res.length; i++) { // Loop through the res & construct the options
                                  options += '<option value="'+res[i].id+'">'+res[i].processor_name+'</option>';
                              }
                            $('#processor_id').append(options);
                      },
                      error:function(resr){
                          alert("something went wrong try again");
                      }
                  });
            });
        });
    </script>
  
  </body>
</html>

</x-app-layout>