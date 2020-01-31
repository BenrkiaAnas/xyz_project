<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ALsa</title>
    <link href="images/favicon.png" rel="icon">
    <link href="{{asset('js_front/new/default.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css_front/plugins.css')}}">
    <link href="{{asset('js_front/new/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('lib/font-awesome/css/font-awesome.css')}}"/>
    
    @if (App::isLocale('fr'))

        <link rel="stylesheet" href="{{asset('css_front/style-fr.css')}}">
        <link rel="stylesheet" href="{{asset('css_front/style1-fr.css')}}">

        @else

        <link rel="stylesheet" href="{{asset('css_front/style-ar.css')}}">
        <link rel="stylesheet" href="{{asset('css_front/style1-ar.css')}}">
        
    @endif
    <link rel="stylesheet" href="{{asset('css_front/style_carousel.css')}}"/>

</head>

    @yield('pages')

</html>
