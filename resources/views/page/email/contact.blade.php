@extends('default.email')
@section('content')
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: 'Segoe UI';">
        <tr>
            <td>
                Mensaje de {{$name}}
            </td>
        </tr>
        <tr>
            <td>
                <p><strong>Email: {{$email}}</strong></p>
                <p><strong>Phone: {{$phone}}</strong></p>
                <p><strong>Date: {{$date}}</strong></p>
                <p><strong>Time: {{$time}}</strong></p>
                <p><strong>Guess: {{$guess}}</strong></p>
                <p><strong>Occasion: {{$occasion}}</strong></p>
                <p><strong>Description: {{$description}}</strong></p>
            </td>
        </tr>
    </table>
@stop