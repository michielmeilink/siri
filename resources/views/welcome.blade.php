<!DOCTYPE html>
<html>
    <head>
        <title>Eigen siri</title>

        {{--CSS Bootstrap--}}
        <link rel="stylesheet" href="{{ URL::asset("/public/css/app.css") }}">
        {{--CSS custom--}}
        <link rel="stylesheet" href="{{ URL::asset("/public/css/layout.css") }}">
    </head>

    <body>
        <form class="hero">
            <div class="form-group">
                <label for="text">Wat houd je bezig?</label>
                <input type="text" class="form-control" id="text" placeholder="Waarom zijn bananen geel"> <br>
                <button type="submit" class="btn btn-primary">Stuur</button>
            </div>
        </form>
    </body>
</html>