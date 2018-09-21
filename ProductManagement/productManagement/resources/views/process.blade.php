<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProductManagement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
    @include('inc.navbar')
    <div class="container">
    <div class="text-center">
        <br>

        <h1>Processing Models</h1>

        <div class="row" >
            <div class="col-mid-row-12" >

                    @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                   

                @endforeach

                <br>

                <div class="container-fluid">
                        <div class="row content">
                               
                            <form class="form-inline" action="/processModel">
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="ModelID">ModelID:</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id"  >
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="Qty">No_of_Items:</label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control" name="Qty">
                                  </div>
                                </div>                        
                            
                            </form>
                        </div>
                        <br>

                            <div class="col-sm-15">
                                <table class="table table-striped">

                                    <h3 style="text-align: left; font-family:cursive">Raw materials</h3>
                                        <tr >                   
                                        <thead style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">
                                        <th>MaterialName</th>
                                        <th>Required_Qty</th>
                                        <th>Available_Qty</th>
                                        <th>Status</th>
                                    
                                    </thead>
                                    @foreach($product_models as $pr)
                                    <tr>
                                        <td>{{$pr->Material1}}</td>
                                        <td>{{$pr->Qty}}</td>
                                        <td></td>
                                    
                                    </tr>
                                    @endforeach
                                    
                                    </table>
                
                          </div>

                          <div class="col-sm-15">
                                <table class="table table-striped">
                                        
                                    <h3 style="text-align: left; font-family:cursive">Machines</h3>
                                    <tr>                   
                                        
                                            <table class="table table-striped">
                                                    <thead  style="font-family:cursive; background:darkgrey; font-size:medium; text-align:center">
                                                      <tr>
                                                        <th>MachinesName</th>
                                                        <th>MachineID</th>
                                                        <th>Availability_Time</th>
                                                        <th>Schedule</th>
                                                      </tr>
                                                    </thead>
                                    
                                    </table>
                
                          </div>
                        
                        
                        
                        </div>
                        <input type="submit" class="btn btn-primary" value="Start Order">
                    </div>         
            </div>
        </div>
    
        
    </body>
    </html>               