<x-header data="Account"/>
<div class="accountafterlogin">

    <x-navbar/>
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
                        <td>{{$student['s_id']}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Frist name:</th>
                        <td>{{$student['name']}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Last name:</th>
                        <td>{{$student['last']}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Email :</th>
                        <td>{{$student['email']}}</td>
                      </tr>
                      <tr>
                        <th>Number:</th>
                        <td>{{$student['number']}}</td>
                      </tr>
                      <tr>
                        <th>Currently Book issued</th>
                        <td>{{$issue}}</td>
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