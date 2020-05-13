@extends('Layouts.default', ['title'=>'Contact'])

@section('contenu')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-offset-2 col-sm-10 col-offset-1">
            <h2> Gradez le contact </h2>
            <p class="text-muted">Vous pouvez me contacter par mail en cliquant : <a href="mailto:dhermanna@gmail.com">ici</a></p>

            <form action="{{route('contact_path')}}" method="post" novalidate>
                {{ csrf_field() }}
            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                  <label for="name" class="control-label">Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom" aria-describedby="nameId" required="required">
                  <small id="nameId" class="text-muted">Préciser votre nom</small>
                  {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Votre Email" aria-describedby="emailId" required="required">
                   
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea name="message" rows="10" cols="10" id="message" class="form-control" aria-describedby="messageId" required="required">
                    </textarea>                    
                    {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Envoyer le message &raquo;</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop