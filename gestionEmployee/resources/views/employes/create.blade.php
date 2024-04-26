@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title')
    Ajout des employés
@endsection

@section('styles')
<style>
.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
@endsection

@section('content')
<div class="container">
@include('layouts.alert')
    <div class="row ">
        <div class="col-md-8 mx-auto">
            <div class="card my-5">
                <div class="card-header">
                    <div class="text-center font-weight-bold text-uppercase table-success font-weight-bold">
                        <h4>Ajout des employés</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('employes.store')}}" method="post" class="mt-3">
                        @csrf
                        <div class="from-group mb-3">
                            <label for="id_emp">ID :</label>
                            <input type="text" class="form-control" name="id_emp" 
                                   placeholder="ID employé " value="{{old('id_emp')}}">
                        </div>
                        <div class="from-group mb-3">
                            <label for="nom_emp">Nom :</label>
                            <input type="text" class="form-control" name="nom_emp" 
                                   placeholder="Nom " value="{{old('nom_emp')}}">
                        </div>
                        <div class="from-group mb-3">
                            <label for="prenom_emp">Prénom :</label>
                            <input type="text" class="form-control" name="prenom_emp" 
                                   placeholder="Prénom" value="{{old('prenom_emp')}}">
                        </div>
                        <div class="from-group mb-3">
                            <label for="email_emp">Email :</label>
                            <input type="email" class="form-control" name="email_emp" 
                                   placeholder="example@email.ma" value="{{old('email_emp')}}">
                        </div>
                        <div class="from-group mb-3">
                            <label for="sexe_emp">Sexe :</label>
                            <input type="text" class="form-control" name="sexe_emp" 
                                   placeholder="F ou M" value="{{old('sexe_emp')}}">
                        </div>
                        <div class="from-group mb-3">
                            <label for="tele_emp">Téléphone :</label>
                            <input type="phone" class="form-control" name="tele_emp" 
                                   placeholder="Téléphone" value="{{old('tele_emp')}}">
                        </div>
                        <div class="from-group mb-3">
                            <label for="sitFam_emp">Situation familiale :</label>
                            <select name="sitFam_emp" id="sitFam" class="form-control">
                                      <option value="cele">Célibataire</option>
                                      <option value="mar">Marié(e)</option>
                                      <option value="div">Divorcé(e)</option>
                                       <option value="veuf">Veuf(ve)</option>
                            </select>
                        </div>
                        <div class="from-group mb-3">
                            <label for="cin_emp">CIN :</label>
                            <input type="text" class="form-control" name="cin_emp" 
                                   placeholder="CIN" value="{{old('cin_emp')}}">
                        </div>
                        <div class="from-group mb-3">
                            <label for="dip_emp">Diplôme :</label>
                            <input type="text" class="form-control" name="dip_emp" 
                                   placeholder="Diplôme" value="{{old('dip_emp')}}">
                        </div> 
                        <div class="form-groupe">
                            <button type="submit" class="btn btn-primary">
                                    Enregistrer
                            </button>
                        </div> 
                    </form>
                </div>

            </div>
      
        </div>
    </div>
</div>
@endsection