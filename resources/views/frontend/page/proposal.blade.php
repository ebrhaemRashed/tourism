<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('boostrap/css/bootstrap.css')}}" >  </link>

    <title>Proposal</title>
  </head>





  <body style="background-image: url('http://127.0.0.1:8000/storage/countries/map_background.jpg');background-repeat:repeat-y;background-size:100%">

    <div class="container-fluid">
        <div class="row">

            @foreach($output_array as $key => $value)
                <div class="col-12" style="padding:0px"> 
                    
                    <img height="600px" width="100%" src="{{asset($value['country_image'])}}" >
                    
                
                    <div class="container">
                        <div class="row ">
                            
                            <div class="col-12">
                                <p  style="font-weight:bold;font-size:100px;font-family:Times New Roman;border-left:10px solid #258fa2;padding-left:25px;border-radius:10px;margin-top:25px">{{$key}} Program.</p>
                                
                                
                                <?php
                                
                                for($i = 1 ; $i<=$value['number_of_days'] ; $i++){
                                    echo('<div class="col-12 mt-5">');
                                    echo('<p style="font-weight:bold;font-size:45px">  Day '. $i .' : </p>');

                                    foreach($value['days'] as $key => $day){
                                        if($i == 1 && $key == 'day_one'){
                                            foreach($day as $journey){
                                                echo('<ul style="font-size:30px;font-weight:600;color:#258fa2"><li>');
                                                echo($journey);
                                                echo('</li><br></ul>') ;
                                            }
                                        }elseif($i == 2 && $key == 'day_two'){
                                            foreach($day as $journey){
                                                echo('<ul style="font-size:30px;font-weight:600;color:#258fa2"><li>');
                                                echo($journey);
                                                echo('</li><br></ul>') ;
                                            }
                                        }elseif($i == 3 && $key == 'day_three'){
                                            foreach($day as $journey){
                                                echo('<ul style="font-size:30px;font-weight:600;color:#258fa2"><li>');
                                                echo($journey);
                                                echo('</li><br></ul>') ;
                                            }
                                        }elseif($i == 4 && $key == 'day_four'){
                                            foreach($day as $journey){
                                                echo('<ul style="font-size:30px;font-weight:600;color:#258fa2"><li>');
                                                echo($journey);
                                                echo('</li><br></ul>') ;
                                            }
                                        }elseif($i == 5 && $key == 'day_five'){
                                            foreach($day as $journey){
                                                echo('<ul style="font-size:30px;font-weight:600;color:#258fa2"><li>');
                                                echo($journey);
                                                echo('</li><br></ul>') ;
                                            }
                                        }elseif($i == 6 && $key == 'day_six'){
                                            foreach($day as $journey){
                                                echo('<ul style="font-size:30px;font-weight:600;color:#258fa2"><li>');
                                                echo($journey);
                                                echo('</li><br></ul>') ;
                                            }
                                        }elseif($i == 7 && $key == 'day_seven'){
                                            foreach($day as $journey){
                                                echo('<ul style="font-size:30px;font-weight:600;color:#258fa2"><li>');
                                                echo($journey);
                                                echo('</li><br></ul>') ;
                                            }
                                        }elseif($i == 8 && $key == 'day_eight'){
                                            foreach($day as $journey){
                                                echo('<ul style="font-size:30px;font-weight:600;color:#258fa2"><li>');
                                                echo($journey);
                                                echo('</li><br></ul>') ;
                                            }
                                        }
                                        

                                        
                                    }

                                
                                    echo('</div>'); 
                                }
                                    
                                
                                ?>
                            </div>

                            <br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
                            <br> <br> <br><br> <br> <br><br> <br> <br> <br><br> <br> <br><br> 
                            <br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>


                            <!-- suggested car -->
                            <div class="container" >
                                <div class="row">
                                    <div class="col-4" >
                                        <p style="font-size:45px;font-weight:bold" class="mb-3"> Suggested Car </p>
                                        <p style="color:#258fa2;font-size:30px"><span style="font-weight:bold;color:black">GoTravoo</span> is proud for its dependable services offered to both of its customers. </p>
                                    </div>

                                    <div class="col-8" >
                                        @foreach($value['car_image']  as  $key => $img) 
                                            
                                        
                                            <img class="img-thumbnail" width="100%" src="{{asset($img)}}">
                                            @if($key == 0)
                                                @break;
                                            @endif
                                        @endforeach
                                    </div>

                                </div>

                                <div class="row mt-5">
                                    <div class="col-4">
                                        @foreach($value['car_image']  as  $key => $img) 
                                          
                                            @if($key == 0)
                                                @continue;
                                            @endif
                                            <img class="img-thumbnail" width="100%" src="{{asset($img)}}">
                                            
                                        @endforeach
                                    </div>

                                    <div class="col-8">
                                        <P class="mt-5" style="font-size:30px;font-weight:600">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                        </P>
                                    </div>
                                </rom>
                            </div>
                            


                        </div>
                    </div>
                    



                    <hr>

                </div>
            @endforeach
            
        </div>
    </div>



    <!-- table to cost all  -->
    <div class="container-fluid">
        <div class="row" >
            <div class="col-10" style="margin:auto">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Country/Day</th>
                            <th scope="col">Hotel</th>
                            <th scope="col">Trans</th>
                            <th scope="col">Journey</th>
                            <th scope="col">Cost</th>
                        </tr>
                    </thead>
                    <tbody>

                                    
                    <?php
                        $day_cost = 0;
                        $total_cost = 0;
                    ?>


                        @foreach($output_array as $key => $value) 
                                @foreach($value['days_prices'] as $key2 => $value2)
                                    <tr>
                                            <td>{{$key}}/{{$key2}}</td>
                                            <td>{{$value['hotel_cost']}}</td>
                                            <td>{{$value['car_cost']}}</td>
                                            
                                            @foreach($value2  as  $key3 => $value3)
                                                <?php 
                                                    $day_cost = $day_cost + $value3;
                                                ?> 
                                            @endforeach

                                            <td>{{$day_cost}}</td>

                                            <td> {{$day_cost + $value['hotel_cost'] + $value['car_cost']}} </td>
                                            

                                        <?php 
                                            $total_cost = $total_cost +$day_cost + $value['hotel_cost'] + $value['car_cost'];
                                            $day_cost = 0;
                                        ?>

                                    </tr>
                                    
                                @endforeach
                        @endforeach()    


                        <tr style="margin-top:20px">
                            <th style="text-align:center" colspan="4"> TOTAL COST </th>
                            <td> {{$total_cost}} </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  

    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/css/bootstrap.js')}}" type='text/javascript'>  </script>
  </body>

</html>