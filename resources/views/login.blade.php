<x-header data="E-library"/>
@if (session('librarystudent')){
    {{redirect('details')}}
}
    
@endif
<div class="loginbg">
    <div id="flex-login">
        <div class="login-box">
        <h1 class="font-weight-bold text-center mt-2">Login</h1>
        @if (session('loginfail'))
        <center> <h5 class="text-danger">Enter valid ID Password</h5>
        </center>
        @endif
        <form action="login" class="mt-3" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Enter your ID</label>
                <input type="text" required name="id" class="form-control" placeholder="EX: S1100XX">
            </div>
            <div class="form-group">
                <label for="name">Enter Password</label>
                <input type="text" required name="password" class="form-control" placeholder="Password hear">
                <small class="form-text index-forgot text-muted"><span href="" class="text-primary " onclick="forgot()">Forgot password ?</span></small>
            </div>
            <button type="submit" class="mt-2 btn btn-dark btn-block">Login<i class="pl-2 fas fa-sign-in-alt"></i></button>
            <h5 class="signup-button mt-4" onclick="login()">Don't have an account <span class="text-primary">Sign up</span> </h5>
        </form>
    </div>
</div>
<script>
    function login(){
        document.getElementById("flex-login").innerHTML = `<div class="signin-box"><h1 class="font-weight-bold text-center mt-2">SignUp</h1>
        <form action="signup" class="mt-3" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Enter your Frist Name</label>
                <input type="text" required name="name" class="form-control" placeholder="Frist name">
            </div>
            <div class="form-group">
                <label for="last">Enter your Last Name</label>
                <input type="text" required name="last" class="form-control" placeholder="Last name">
            </div>
            <div class="form-group">
                <label for="email">Enter your Email</label>
                <input type="email" required name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="email">Enter your Mobile number</label>
                <input type="number" required name="number" class="form-control" placeholder="Number">
            </div>
            <div class="form-group">
                <label for="name">Enter Password</label>
                <input type="password" required name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="mt-3 btn btn-dark btn-block">Signup</button>
            <h5 class="signup-button mt-4" onclick="signup()">Alredy hav an ID? <span class="text-primary">Log in</span> </h5>
        </form></div>`;
    }
    function forgot(){
        document.getElementById("flex-login").innerHTML = `<div class="signin-box forgot-box"><h1 class="font-weight-bold text-center mt-2">Enter details</h1>
        <form action="forgot" class="mt-3" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Enter your Frist Name</label>
                <input type="text" required name="name" class="form-control" placeholder="Frist name">
            </div>
            <div class="form-group">
                <label for="last">Enter your Last Name</label>
                <input type="text" required name="last" class="form-control" placeholder="Last name">
            </div>
            <div class="form-group">
                <label for="email">Enter your Email</label>
                <input type="email" required name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="email">Enter your Mobile number</label>
                <input type="number" required name="number" class="form-control" placeholder="Number">
            </div>
            <button type="submit" class="mt-3 btn btn-dark btn-block">Search</button>
            <h5 class="signup-button mt-4" onclick="signup()">Alredy hav an ID? <span class="text-primary">Log in</span> </h5>
        </form></div>`;
    }
    function signup(){
        document.getElementById("flex-login").innerHTML = `<div class="login-box">
        <h1 class="font-weight-bold text-center mt-2">Login</h1>
        @if (session('loginfail'))
        <center> <h5 class="text-danger">Enter valid ID Password</h5>
        </center>
        @endif
        <form action="login" class="mt-3" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Enter your ID</label>
                <input type="text" required name="id" class="form-control" placeholder="EX: S1100XX">
            </div>
            <div class="form-group">
                <label for="name">Enter Password</label>
                <input type="text" required name="password" class="form-control" placeholder="Password hear">
                <small class="form-text index-forgot text-muted"><span href="" class="text-primary " onclick="forgot()">Forgot password ?</span></small>
            </div>
            <button type="submit" class="mt-2 btn btn-dark btn-block">Login</button>
            <h5 class="signup-button mt-4" onclick="login()">Don't have an account <span class="text-primary">Sign up</span> </h5>
        </form>
    </div>`;
    }
</script>
<x-footer/>