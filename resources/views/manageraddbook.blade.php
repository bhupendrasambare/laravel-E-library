<x-header data="Details"/>
<div class="accountafterlogin">
  <x-managernavbar/>
    <div class="p-5 details-screen container">
        @if (session('bookaddfail'))
        <div class="alert alert-danger" role="alert">
            {{session('bookaddfail')}}
          </div>
        @endif
        @if (session('bookaddsuccess'))
        <div class="alert alert-success" role="alert">
            {{session('bookaddsuccess')}}
          </div>
        @endif
        <h3>Add Book</h3>
        <form class="needs-validation" method="GET" action="addbook">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom01">Book Name</label>
                <input type="text"name="name" class="form-control" id="validationCustom01" placeholder="Enter Book name" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Book Author</label>
                <input type="text" name="author" class="form-control" id="validationCustom02" placeholder="Author" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Department</label>
                <input type="text" class="form-control" name="department" placeholder="Department" id="validationCustom05" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="subject" id="validationCustom05" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Year</label>
                <input type="number" class="form-control" name="year" placeholder="Year" id="validationCustom05" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Location</label>
                <input type="text" class="form-control" name="location" placeholder="Location" id="validationCustom05" required>
              </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Manager Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="validationCustom05" required>
                  </div>
            </div>
            <button class="btn btn-primary" type="submit">Add Book</button>
          </form>
    </div>
</div>
<x-footer/>