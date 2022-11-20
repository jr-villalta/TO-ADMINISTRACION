<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Login | Lalishop</title>
  </head>
  <body class="bg-dark">
      <section>
        <div class="row g-0 ">
            <div class="col-lg-7 d-none d-lg-block">
                <div class="carousel-item img-2 min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block ">
                          
                        </div>
                      </div>
            </div>
            <div class="col-lg-5  d-flex flex-column align-items-end min-vh-100 bg-fondo">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-auto w-100 text-center">
                  <img src="{{ asset('Logos/favicon_lalishop.png') }}" class="img-fluid mt-5" width="150px" />
                </div>
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                <h1 class="font-weight-bold mb-4 text-center">ADMINISTRADOR</h1>
                <form action="{{ route('login.verify') }}" method="POST" class="mb-5">
                  @csrf
                  @if (session('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <small>
                              {{ session('success') }}
                          </small>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      
                  @endif
                  @error('invalid_credentials')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <small>
                              {{ $message }}
                          </small>
                          <button type="button" class="btn-close" aria-label="Close"></button>
                      </div>
                  @enderror
                  <div class="mb-4">
                      <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                          aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                          required>
                  </div>

                  <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
              </form>

                
                </div>
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                    <p class="d-inline-block mb-0">NO COMPARTAS TU CONTRASEÑA CON NADIE</p> 
                </div>
            </div>
        </div>
      </section>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
