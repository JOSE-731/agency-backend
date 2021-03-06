<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

   <div class="container">
       <div class="row">
           
        <div class="col col-4 pt-4">
            <div class="row">
             <div class="card" style="width: 18rem;">
                 <div class="card-body">
                     <h5 class="card-title">About</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                         content.</p>
                     <a href={{ route('about') }} class="btn btn-primary">Go somewhere</a>
                 </div>
             </div>
            </div>
        </div>

        <div class="col col-4 pt-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Contact</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                    <a href={{ route('contact') }} class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col col-4 pt-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Portafolio</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                    <a href={{ route('portafolio') }} class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

       </div>
   </div>

   <div class="container">
    <div class="row">
        
     <div class="col col-4 pt-4">
         <div class="row">
          <div class="card" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="card-title">Services</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                      content.</p>
                  <a href={{ route('services') }} class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
         </div>
     </div>

     <div class="col col-4 pt-4">
         <div class="card" style="width: 18rem;">
             <div class="card-body">
                 <h5 class="card-title">Team</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                     content.</p>
                 <a href={{ route('team') }} class="btn btn-primary">Go somewhere</a>
             </div>
         </div>
     </div>

     <div class="col col-4 pt-4">
         <div class="card" style="width: 18rem;">
             <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                     content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
             </div>
         </div>
     </div>

    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>