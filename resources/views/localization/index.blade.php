<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10">
                  <h1 class="pt-3">Dr Strange In The Multiverse Of Madness</h1>
                  <p class="form-text">Dari Wikipedia bahasa Indonesia, ensiklopedia bebas</p>
                  <img src="../localization/img/strange.jpg" alt="strange.jpg" width="65%" class="d-block mx-auto my-3">
                  <p class="lh-lg mt-4">{{ __('Explanation') }}</p>
                  <p class="lh-lg">{{ __('Explanation2') }}</p>
                  <dl class="row mt-4">
                    <dt class="col-sm-2">{{ __('Director') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">Sam Raimi</dd>

                    <dt class="col-sm-2">{{ __('Producer') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">Kevin Feige</dd>
                    
                    <dt class="col-sm-2">{{ __('Screenwriter') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">Jade Bartlett</dd>
                    
                    <dt class="col-sm-2">{{ __('Based Of') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">{{ __('Base Of Desc') }}</dd>
                    
                    <dt class="col-sm-2">{{ __('Starring') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9"> 	
                    Benedict Cumberbatch,
                    Elizabeth Olsen,
                    Benedict Wong,
                    Rachel McAdams,
                    Chiwetel Ejiofor,
                    Xochitl Gomez,
                    Andrew Garfield.
                    </dd>

                    <dt class="col-sm-2">{{ __('Music By') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">Danny Elfman</dd>

                    <dt class="col-sm-2">{{ __('Cinematography') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">John Mathieson</dd>

                    <dt class="col-sm-2">{{ __('Edited By') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">Bob Murawski</dd>

                    <dt class="col-sm-2">{{ __('Production Company') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">Marvel Studios</dd>

                    <dt class="col-sm-2">{{ __('Distributed By') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">Walt Disney Studios, Motion Pictures</dd>
                    
                    <dt class="col-sm-2">{{ __('Release Date') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">{{ __('Release Date Desc') }}</dd>
                    
                    <dt class="col-sm-2">{{ __('Country') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">{{ __('Country Desc') }}</dd>

                    <dt class="col-sm-2">{{ __('Language') }}</dt>
                    <dd class="col-sm-1 text-end"> : </dd>
                    <dd class="col-sm-9">{{ __('Language Desc') }}</dd>
                  </dl>
                  <h2>Synopsis</h2>
                  <p>{!! __('Synopsis') !!}
                    </p>
                  <iframe class="mx-auto d-block" width="65%" height="25%" src="https://www.youtube.com/embed/Rt_UqUm38BI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </div>
      </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>