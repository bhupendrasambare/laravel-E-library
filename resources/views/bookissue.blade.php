<x-header data="Details"/>
@if (!session('manager'))
<script>window.location = "../"</script>
@endif
<div class="accountafterlogin">
  <x-managernavbar/>
  <div class="p-5 container">
    <div class="detail-account-details">
</div>
<x-footer/>