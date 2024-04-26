@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title')
    Liste des employées
@endsection

@section('styles')
<style>

</style>
@endsection

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase table-success font-weight-bold">
                        <h4>Liste des employées</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="myTable" class=" table table-bordered table-striped ">
                      <thead>
                         <tr>
                            <th>ID</th>
                            <th>Nom </th>
                            <th>Email</th>
                            <th>Diplôme</th>
                            <th>Actions</th>
                         </tr>
                      </thead>  
                      <tbody>
                         @foreach($employes as $key => $employe)
                           <tr>
                              <td>{{$key+=1}}</td>
                              <td>{{$employe->nom_emp }}</td>
                              <td>{{$employe->email_emp}}</td>
                              <td>{{$employe->dip_emp}}</td>
                              <td class="d-flex justify-content-center align-items-center">
                                <a href="{{route('employes.show',$employe->id_emp)}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('employes.edit',$employe->id_emp)}}" class="btn btn-sm btn-warning mx-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('employes.destroy',$employe->id_emp)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                </form>
                                <button type="submit" class="btn btn-sm btn-danger">
                                     <i class="fas fa-trash"></i>
                                </button>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                </table>
            </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip',
                buttons : ['copy','excel','csv','pdf','print','colvis']
            });
        });
    </script>
    @if (session()->has('success'))
        <script>
            Swal.fire({ 
                position: 'top-end',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@endsection