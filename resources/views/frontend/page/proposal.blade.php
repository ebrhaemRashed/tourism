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





  <body style="background-image: url('http://127.0.0.1:8000/storage/countries/map_background.jpg');">

    <div class="container-fluid">
        <div class="row">

            @foreach($output_array as $key => $value)
                <div class="col-12 "> 
                    <h2 class="text-center m-5">{{$key}} </h2>
                    <div class="container">
                        <div class="row ">
                            <div class="col-6 "> 

                                

                                <h3> General journey INFO </h3>
                            
                                <ul style="color:#258fa2">
                                    <li><h5>  Days count :  {{$value['number_of_days']}} Days  </h5> </li>

                                    <li><h5> Your hotel or apartment will be in :  {{$value['main_city']}}  </h5> </li>

                                    <!-- hotels -->
                                    @if(isset($value['suggested_hotels']))
                                        <li><h5> Suggested Hotels in {{$value['main_city']}} : {{$value['suggested_hotels']}}  </h5> </li>
                                        <li><h5> You Need : {{$value['number_of_rooms']}} Rooms </h5> </li>
                                        <li><h5> Range Hotel Cost for {{$value['number_of_rooms']}} Rooms : {{$value['hotel_cost']}} $ </h5> </li>

                                    @elseif(isset($value['suggested_appartments']))
                                        <li><h5> Suggested Apartments in {{$value['main_city']}} : {{$value['suggested_appartments']}}  </h5> </li>
                                        <li><h5> Range Appartment Cost  : {{$value['appartment_cost']}} $ </h5> </li>
                                    @endif


                                    <!-- car -->
                                    @if(isset($value['car_with_driver']))
                                        <li><h5> Suggested cars in {{$value['main_city']}} : {{$value['car_with_driver']}}  </h5> </li>
                                        <!-- <li><h5> -->
                                            <!-- @foreach($value['car_image']  as  $img) -->
                                                <!-- <img width="200px" src="{{asset($img)}}"> -->
                                            <!-- @endforeach -->
                                        <!-- </h5> </li>  -->
                                        <li><h5> Range Car Cost : {{$value['car_cost']}} $ </h5> </li>
                                        

                                    @elseif(isset($value['rental_car']))
                                        <li><h5> Suggested cars in {{$value['main_city']}} : {{$value['rental_car']}}  </h5> </li>
                                        <!-- <li><h5> -->
                                            <!-- @foreach($value['car_image']  as  $img) -->
                                                <!-- <img width="200px" heigh="150px" src="{{asset($img)}}"> -->
                                            <!-- @endforeach -->
                                        </h5> </li> 
                                        <li><h5> Range Car Cost : {{$value['car_cost']}} $ </h5> </li>
                                    @endif


                                    <!-- cities (journies) -->
                                    @if(isset($value['suggested_cities(city)']))
                                        <li><h5> Suggested cities : {{$value['suggested_cities(city)']}}  </h5> </li>
                                        <!-- <li><h5> -->
                                            <!-- @foreach($value['suggested_cities(image)']  as  $img) -->
                                                <!-- <img width="200px"  src="{{asset($img)}}"> -->
                                            <!-- @endforeach -->
                                        <!-- </h5> </li>  -->
                                        <li><h5> Range City Cost : {{$value['suggested_cities(city_cost)']}} $ </h5> </li>
                                        

                                    @elseif(isset($value['suggested_cities_(the_country)']))
                                        <li><h5> Suggested cities : {{$value['suggested_cities_(the_country)']}}  </h5> </li>
                                        <!-- <li><h5> -->
                                            <!-- @foreach($value['suggested_cities(image)']  as  $img) -->
                                                <!-- <img width="200px" src="{{asset($img)}}"> -->
                                            <!-- @endforeach -->
                                        <!-- </h5> </li>  -->
                                        <li><h5> Range City Cost : {{$value['suggested_cities(the_country_cost)']}} $ </h5> </li>
                                    @endif

                                </ul>
                                
                            </div>

                            <div class="col-6">
                                <img  class="img-thumbnail" width="100%"src="{{asset($value['country_image'])}}" >
                            </div>

                            <?php
                            
                            for($i = 1 ; $i<=$value['number_of_days'] ; $i++){
                                echo('<div class="col-6 mt-5">');
                                echo('<h2>  day '. $i .' : </h2>');

                                foreach($value['days'] as $key => $day){
                                    if($i == 1 && $key == 'day_one'){
                                        foreach($day as $journey){
                                            echo('<ul style="font-size:17px;font-weight:bold;color:#258fa2"><li>');
                                            echo($journey);
                                            echo('</li><br></ul>') ;
                                        }
                                    }elseif($i == 2 && $key == 'day_two'){
                                        foreach($day as $journey){
                                            echo('<ul style="font-size:17px;font-weight:bold;color:#258fa2"><li>');
                                            echo($journey);
                                            echo('</li><br></ul>') ;
                                        }
                                    }elseif($i == 3 && $key == 'day_three'){
                                        foreach($day as $journey){
                                            echo('<ul style="font-size:17px;font-weight:bold;color:#258fa2"><li>');
                                            echo($journey);
                                            echo('</li><br></ul>') ;
                                        }
                                    }elseif($i == 4 && $key == 'day_four'){
                                        foreach($day as $journey){
                                            echo('<ul style="font-size:17px;font-weight:bold;color:#258fa2"><li>');
                                            echo($journey);
                                            echo('</li><br></ul>') ;
                                        }
                                    }elseif($i == 5 && $key == 'day_five'){
                                        foreach($day as $journey){
                                            echo('<ul style="font-size:17px;font-weight:bold;color:#258fa2"><li>');
                                            echo($journey);
                                            echo('</li><br></ul>') ;
                                        }
                                    }elseif($i == 6 && $key == 'day_six'){
                                        foreach($day as $journey){
                                            echo('<ul style="font-size:17px;font-weight:bold;color:#258fa2"><li>');
                                            echo($journey);
                                            echo('</li><br></ul>') ;
                                        }
                                    }elseif($i == 7 && $key == 'day_seven'){
                                        foreach($day as $journey){
                                            echo('<ul style="font-size:17px;font-weight:bold;color:#258fa2"><li>');
                                            echo($journey);
                                            echo('</li><br></ul>') ;
                                        }
                                    }elseif($i == 8 && $key == 'day_eight'){
                                        foreach($day as $journey){
                                            echo('<ul style="font-size:17px;font-weight:bold;color:#258fa2"><li>');
                                            echo($journey);
                                            echo('</li><br></ul>') ;
                                        }
                                    }
                                    

                                    
                                }

                             
                                echo('</div>'); 
                            }
                                
                            
                            ?>

                            <br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
                            <br> <br> <br><br> <br> <br><br> 



                            <div class="container" >
                                <div class="row">
                                    <div class="col-4" >
                                        <h2 class="mb-3"> Suggested Car </h2>
                                        <h5 style="color:#258fa2"><span style="font-weight:bold;color:black">GoTravoo</span> is proud for its dependable services offered to both of its customers. </h5>
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
                                        <h5 class="mt-5">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                        </h5>
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
    <div class="container">
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
                $total_cost = 0;
            ?>


                @foreach($output_array as $key => $value) 
                        @foreach($value['days_prices'] as $key2 => $value2)
                            @foreach($value2  as  $key3 => $value3)
                                <tr>
                                    <td>{{$key}}/{{$key2}}</td>
                                    <td>{{$value['hotel_cost']}}</td>
                                    <td>{{$value['car_cost']}}</td>
                                    <td>{{$value3}}</td>
                                    <td>{{$value['hotel_cost']+$value['car_cost']+$value3}}</td>
                                    

                                    <?php
                                        $total_cost = $total_cost + ($value['hotel_cost']+$value['car_cost']+$value3);
                                    ?>

                                </tr>
                            @endforeach
                        @endforeach
                @endforeach()    


                <tr style="margin-top:20px">
                    <th style="text-align:center" colspan="4"> TOTAL COST </th>
                    <td> {{$total_cost}} </td>
                </tr>
                
            </tbody>
        </table>
    </div>
  

    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/css/bootstrap.js')}}" type='text/javascript'>  </script>
  </body>

</html>