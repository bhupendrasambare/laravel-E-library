<x-header data="Details"/>
@if (!session('manager'))
<script>window.location = "../"</script>
@endif
<div class="accountafterlogin">
  <x-managernavbar/>
  <div class="p-5 container">
        <div class="detail-account-details">
            <form class="form-inline" method="POST" action="studentsearch">
                @csrf
                <div class="form-group mb-2">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="number" required class="form-control" name="student" id="inputPassword2" placeholder="Student Id">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <input required type="password" name="managerpass" class="form-control" id="inputPassword2" placeholder="Manager Password">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Search Student</button>
              </form>
              @if (session('managerstudentsearch'))
              {{session('managerstudentsearch')}}
                  
              @else
                  no data found
              @endif
              @if (session('managerstudentissue'))
                  {{session('managerstudentissue')}}
              @else
                  
              @endif
        </div>
</div>
</div>
<x-footer/>