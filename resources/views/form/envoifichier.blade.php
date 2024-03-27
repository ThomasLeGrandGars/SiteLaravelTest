@extends('interface.envoifichier')
@section('formulaire')
@if(Session::get('message_sent'))
    {{Session::get('message_sent')}}
@endif
<form method="POST" action="{{route('contact.send')}}" name="formulaire ajouter avec extend">
    @csrf    
    <h2>Nom Complet</h2>
    <input type="text" name="name" id="">
    <h2>Email</h2>
    <input type="email" name="email" id="">
    <h2>Message</h2>
    <textarea name="msg" id="" cols="30" rows="10"></textarea>
    <h2>Fichier</h2>
    <input type="file" name="file" id="" accept=".txt">
    <button type="submit">Envoyer</button>
</form>

@endsection