<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-2">
      <div class="text-center">
        <h1 class="display-4 mb-5 text-white">Zalada</h1>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <div class="card px-4 py-3">
            <div class="card-body">
              <div class="text-center">
                <h3 class="card-title">Sign Up</h3>
              </div>
              @if ($message = Session::get('failed'))
                <div class="alert alert-danger">
                  <p>{{ $message }}</p>
                </div>
              @endif
              <!-- FormRegister -->
              <form action="{{ route('user.register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label htmlFor="username">Username</label>
                  <input
                    type="text"
                    name="username"
                    class="form-control"
                    placeholder="Username"
                    require
                  />
                </div>
                <div class="form-group">
                  <label htmlFor="password">Password</label>
                  <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Password"
                    require
                  />
                </div>
                <div class="text-right">
                  <button
                    type="submit"
                    class="btn btn-dark text-right"
                  >
                    Sign up
                  </button>
                </div>
              </form>
              <!-- {FormRegister} -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>