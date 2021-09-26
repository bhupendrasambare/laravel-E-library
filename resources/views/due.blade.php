<x-header data="Due"/>
<div class="accountafterlogin">

    <x-navbar/>
    <div class="p-5 details-screen">
        <center>
            <div class="detail-account-details">
                @if (count($due) > 0)
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Name / Book Code</th>
                        <th scope="col">Date</th>
                        <th scope="col">Due</th>
                      </tr>
                    </thead>
                    @foreach ($due as $item)
                    <tbody>
                        <tr>
                          <th scope="row">{{++$count}}</th>
                          <td>{{$item['book']}}</td>
                          <td>{{$item['returndate']}}</td>
                          <td>{{$item['due']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                @else
                <div class="alert alert-warning" role="alert">
                  <h1 class="container text-center">
                      No Due Submitted
                  </h1>
                </div>
                @endif
            </div>
        </center>
    </div>
</div>

<x-footer/>