<x-header data="Details"/>
@if (!session('manager'))
<script>window.location = "../"</script>
@endif
<div class="accountafterlogin">
  <x-managernavbar/>
  <div class="p-5 details-screen">
    <center>
      <div class="detail-account-details">
        <table class="table">
          <thead class="thead-dark p-5">
                  <tr>
                    <th scope="col" class="text-center" colspan="2"> Your Account Information</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Id :</th>
                    <td>{{$data->id}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Frist name:</th>
                    <td>{{$data->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Last name:</th>
                    <td>{{$data->last}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Email :</th>
                    <td class="text-wrap">{{$data->email}}</td>
                  </tr>
                  <tr>
                    <th colspan="2"  scope="col" class="text-center"><a href="edit"><button class="btn btn-dark">Edit Details</button></a></th>
                  </tr>
                </tbody>
              </table>
        </div>
    </center>
  </div>
</div>
  <x-footer/>