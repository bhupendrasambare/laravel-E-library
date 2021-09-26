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
              <table class="table mt-5">
                <thead class="thead-dark p-5">
                        <tr>
                          <th scope="col" class="text-center" colspan="2"> Your Account Information</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>Id :</th>
                          <td>{{session('managerstudentsearch')->s_id}}</td>
                        </tr>
                        <tr>
                          <th scope="row">Frist name:</th>
                          <td class="text-capitalize">{{session('managerstudentsearch')->name}}</td>
                        </tr>
                        <tr>
                          <th scope="row">Last name:</th>
                          <td class="text-capitalize">{{session('managerstudentsearch')->last}}</td>
                        </tr>
                        <tr>
                          <th scope="row">Email :</th>
                          <td class="text-wrap">{{session('managerstudentsearch')->email}}</td>
                        </tr>
                      </tbody>
                    </table>
                  
              @else
              <div class="alert alert-primary" role="alert">
                No Data Found
              </div>
              @endif
              @if (session('managerbookdelete'))
              <div class="alert alert-danger" role="alert">
                <h3 class="text-center">{{session('managerbookdelete')}} Book Deletion Success</h3>
              </div>
              @endif
              @if (session('managerstudentissue'))
              <table class="table mt-5">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book Id</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col"><a href="managerdeleteall?student={{session('managerstudentsearch')->s_id}}"><button class="btn btn-dark">Return All</button></a></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach (session('managerstudentissue') as $item)    
                    <tr>
                      <th scope="row"><i class="fas fa-book"></i></th>
                      <td>{{$item->b_id}}</td>
                      <td>{{$item->issue_date}}</td>
                      <td><a href="managerdelete?book={{$item->i_id}}&student={{session('managerstudentsearch')->s_id}}"><button class="btn btn-dark">Return</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              @else
              @if (session('managerstudentsearch'))
              <div class="alert alert-danger" role="alert">
                <h3 class="text-center m-5 p-1">No Book Issued</h3>
              </div>
              @endif
              @endif
        </div>
</div>
</div>
<x-footer/>