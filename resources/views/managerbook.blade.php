<x-header data="Details"/>
<div class="accountafterlogin">
  <x-managernavbar/>
  <div class="p-5 details-screen container">
      @if (session('passfail'))
      <div class="alert alert-danger" role="alert">
        {{session('passfail')}}
      </div>
      @endif
    <form class="form-inline" method="GET" action="booksearch">
        <div class="form-group m-2">
            <label for="inputPassword2" class="sr-only">Name</label>
            <input type="text" class="form-control" name="name" id="inputPassword2" placeholder="Book Name">
        </div>
        <div class="form-group m-2">
            <label for="inputPassword2" class="sr-only">Subject</label>
            <input type="text" class="form-control" name="subject" id="inputPassword2" placeholder="Subject">
        </div>
        <div class="form-group m-2">
            <label for="inputPassword2" class="sr-only">Department</label>
            <input type="text" class="form-control" name="department" id="inputPassword2" placeholder="Department">
        </div>
        <div class="form-group mx-sm-3 m-2">
          <input required type="password" name="managerpass" class="form-control" id="inputPassword2" placeholder="Manager Password">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search Book</button>
    </form>
@if (session('bookfound'))
<table class="table mt-5">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Author</th>
        <th scope="col">Department</th>
        <th scope="col">Subject</th>
        <th scope="col">Issued</th>
        <th scope="col">Location</th>
      </tr>
    </thead>
    <tbody>
        @foreach (session('bookfound') as $item)  
        <tr>
          <th scope="row"><i class="fas fa-book"></th>
          <td>{{$item['book_id']}}</td>
          <td>{{$item['name']}}</td>
          <td>{{$item['author']}}</td>
          <td>{{$item['department']}}</td>
          @if ($item['issued'] == "false")
          <td>Not Issued</td>    
          @else
          <td>Issued</td>
          @endif
          <td>{{$item['subject']}}</td>
          <td>{{$item['location']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
    </div>
</div>
<x-footer/>