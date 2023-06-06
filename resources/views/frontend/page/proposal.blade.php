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





  <body>
    <h1 class="text-center">Proposal</h1>
    <br> <br> <br>

    <div class="row">

        @foreach($output_array as $key => $value)
            <div class="col-6 text-center"> 
                <h2>{{$key}} </h2>

                <img width = "300px"src="{{asset($value['country_image'])}}" >

                <h5>  Days count :  {{$value['number_of_days']}} Days  </h5>

                <h5> Your hotel or apartment will be in :  {{$value['main_city']}}  </h5>

                <!-- hotels -->
                @if(isset($value['suggested_hotels']))
                    <h5> Suggested Hotels in {{$value['main_city']}} : {{$value['suggested_hotels']}}  </h5>
                    <h5> You Need : {{$value['number_of_rooms']}} Rooms </h5>
                    <h5> Range Hotel Cost for {{$value['number_of_rooms']}} Rooms : {{$value['hotel_cost']}} $ </h5>

                @elseif(isset($value['suggested_appartments']))
                    <h5> Suggested Apartments in {{$value['main_city']}} : {{$value['suggested_appartments']}}  </h5>
                    <h5> Range Appartment Cost  : {{$value['appartment_cost']}} $ </h5>
                @endif

                <hr>

                <!-- car -->
                @if(isset($value['car_with_driver']))
                    <h5> Suggested cars in {{$value['main_city']}} : {{$value['car_with_driver']}}  </h5>
                    <h5>
                        @foreach($value['car_image']  as  $img)
                            <img width="200px" src="{{asset($img)}}">
                        @endforeach
                    </h5> 
                    <h5> Range Car Cost : {{$value['car_cost']}} $ </h5>
                    

                @elseif(isset($value['rental_car']))
                    <h5> Suggested cars in {{$value['main_city']}} : {{$value['rental_car']}}  </h5>
                    <h5>
                        @foreach($value['car_image']  as  $img)
                            <img width="200px" heigh="150px" src="{{asset($img)}}">
                        @endforeach
                    </h5> 
                    <h5> Range Car Cost : {{$value['car_cost']}} $ </h5>
                @endif

                <hr>

                <!-- cities (journies) -->
                @if(isset($value['suggested_cities(city)']))
                    <h5> Suggested cities : {{$value['suggested_cities(city)']}}  </h5>
                    <h5>
                        @foreach($value['suggested_cities(image)']  as  $img)
                            <img width="200px"  src="{{asset($img)}}">
                        @endforeach
                    </h5> 
                    <h5> Range City Cost : {{$value['suggested_cities(city_cost)']}} $ </h5>
                    

                @elseif(isset($value['suggested_cities_(the_country)']))
                    <h5> Suggested cities : {{$value['suggested_cities_(the_country)']}}  </h5>
                    <h5>
                        @foreach($value['suggested_cities(image)']  as  $img)
                            <img width="200px" src="{{asset($img)}}">
                        @endforeach
                    </h5> 
                    <h5> Range City Cost : {{$value['suggested_cities(the_country_cost)']}} $ </h5>
                @endif












                

            </div>
        @endforeach
        
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/css/bootstrap.js')}}" type='text/javascript'>  </script>
  </body>

</html>