<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

		<!-- Custom CSS -->

		<link rel="stylesheet" href="css/dischi.css">


    <title>Songs</title>
  </head>
  <body>
    <header>
      <img src="dischi-img/logo.png" alt="">
    </header>
    <div class="container">
        
        <ul class="c-flex">
            
            @foreach ($data as $cd)
            
             <li class="song"> 

                 <h3>{{ $cd['title'] }}</h3>
                 <p>{{ $cd['author'] }}</p>
                 <p>{{ $cd['year'] }}</p>
                 <img src="{{$cd['poster']}}" alt="">

             </li>

             @endforeach

            </ul>

    </div>
  </body>
</html>
