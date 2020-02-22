@extends('layouts.site')

@section('content')
    
    <div class="container">
        <div class="row section">
            <h3 style="text-align:center;">Contato</h3>
            <div class="divider"></div>
        </div>
        
        <div class="row section">
            <div class="col s12 m7">
                <img class="responsive-img" src="{{asset('img/img1.jpg')}}" alt="Imobiliaria">
            </div>
            <div class="col s12 m5">
                <form class="col s12" action="">
                    <div class="input-field">
                        <input class="validate" type="text" name="txtNome">
                        <label for="Nome">Nome</label>
                    </div>
                    <div class="input-field">
                        <input class="validate" type="text" name="txtEmail">
                        <label for="Nome">E-mail</label>
                    </div>
                    <div class="input-field">
                        <textarea class="materialize-textarea" name="txtMensagem" id="txtMensagem"></textarea>
                        <label for="Nome">Mensagem</label>
                    </div>
                    <button class="btn blue">Enviar</button>
                </form>
            </div>
        </div>
      
    </div>
@endsection
