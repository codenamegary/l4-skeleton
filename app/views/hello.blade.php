@extends('l4layouts::'.$platform.'.blank')
@section('body')
<div class="container">
<div class="row">
    <div class="span12">
        <h1>Hello World!</h1>
        <p>This is {{{ ucfirst($platform) }}} {{{ Config::get('l4layouts::settings.'.$platform.'.active') }}} with Font-Awesome {{{ Config::get('l4layouts::settings.font-awesome.active') }}}! <i class="icon-star">&nbsp;</i></p>
        <h2>Other Versions Installed</h2>
        <ul>
            <li><a href="{{ URL::route('version demo', array('bootstrap','2.3.2')) }}">Twitter Bootstrap 2.3.2</a></li>
            <li><a href="{{ URL::route('version demo', array('bootstrap','3.0.0')) }}">Twitter Bootstrap 3.0.0</a></li>
            <li><a href="{{ URL::route('version demo', array('foundation','4.1.0')) }}">Zurb Foundation 4.1.0</a></li>
            <li><a href="{{ URL::route('version demo', array('foundation','4.3.1')) }}">Zurb Foundation 4.3.1</a></li>
        </ul>
        <h3>H3 Header</h3>
        <p><button class="btn btn-default">A Button</button></p>
        <p><a href="#">A Link</a></p>
        <form>
            <legend>A Form</legend>
            <p>&nbsp;</p>
            <label for="text-input">An Input</label><br/>
            <input class="form-control" name="text-input" id="text-input" type="text" value="an input...">
        </form>
    </div>
</div>
</div>
@endsection