<x-header data="Bag"/>
<div class="accountafterlogin">

    <x-navbar/>
    <div class="p-5 details-screen">
        <center>
            <div class="detail-account-details">
                @if (count($due)>0)
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Code</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    @foreach ($due as $item)
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>{{$item['b_id']}}</td>
                          <td>{{$item['issue_date']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                    
                @else
                    <h1 class="container text-center">No Book Issued</h1>
                @endif
            </div>
        </center>
    </div>
</div>
<x-footer/>