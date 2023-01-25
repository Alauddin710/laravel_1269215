<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-6">
                    <h1> login Form</h1>
                    <form method="post" action="{{route('login')}}" >
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="form2Example1" class="form-control" />
                          <label class="form-label" for="form2Example1">Email address</label>
                        </div>
                      
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example2" name="password" class="form-control" />
                          <label class="form-label" for="form2Example2">Password</label>
                        </div>
                      
                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                          <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                              <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                          </div>
                      
                          <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                          </div>
                        </div>
                      
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                      
                        <!-- Register buttons -->
                        <div class="text-center">
                          <p>Not a member? <a href="#!">Register</a></p>
                          <p>or sign up with:</p>
                          <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                          </button>
                      
                          <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                          </button>
                      
                          <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                          </button>
                      
                          <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                          </button>
                        </div>
                      </form>
                </div>
            
        </div>
    </div>
    
</body>
</html>

