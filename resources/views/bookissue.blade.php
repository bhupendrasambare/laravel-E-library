<x-header data="Details"/>
@if (!session('manager'))
<script>window.location = "../"</script>
@endif
<div class="accountafterlogin">
  <x-managernavbar/>
  <div class="p-5 container">
      @if (session('bookissuesuccess'))
      <div class="alert alert-success" role="alert">
        <h5> Book Added Success</h5>
      </div>
      @else
        @if (session('bookissuefail'))
        <div class="alert alert-danger" role="alert">
          <h5> 
            Book Added Fail {{session('bookissuefail')}}
          </h5>      
        </div>
        @endif
      @endif
    <div class="detail-account-details">    
        <form class="form-inline" method="get" action="issuebook">
            <div class="form-group mb-2">
                <input type="number" required class="form-control" name="student" id="inputPassword2" placeholder="Student Id">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input required type="number" name="bookid" class="form-control" id="inputPassword2" placeholder="Book Id">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input required type="password" name="managerpass" class="form-control" id="inputPassword2" placeholder="Manager Password">
              </div>
            <button type="submit" class="btn btn-primary mb-2">Search Student</button>
          </form>
</div>
<x-footer/>