<form method="POST" action="{{ route('admin/sucursales/store') }}" role="form" enctype="multipart/form-data">
 
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
  @include('admin.sucursales.frm.prt')
                                                          
</form>