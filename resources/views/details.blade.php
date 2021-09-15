<x-header data="Details"/>
<center>
    <div class="p-5">
    
@if ($massage != "Account not Found")
    <h1>{{$massage}}</h1>
    <h3>Your Login ID = {{$details['s_id']}}</h3>    
    <h3>Your Login Password = {{$details['password']}}</h3><br>
    <a href="login">Login</a>
    </div> 
@endif
@if ($massage == "Account not Found"){
    {{$massage}}
    <h3>Enter Proper details</h3>
    <a href="login">Try Again</a>
}
    </div> 
@endif
</center>



<x-footer/>