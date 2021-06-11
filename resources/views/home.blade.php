<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista pacchetti</h1>

    <ul>
        @foreach($packages as $package)
            <li>
                <div>Country: {{ $package->country }}</div>
                <div>City: {{ $package->city }} </div>
                <div>Host: {{ $package->host }} </div>
                <div>Board: {{ $package->board }} </div>
                @if($package->description)
                    <div>Description: {{ $package->description }} </div>
                @endif
                <div>Price: {{ $package->price }} </div>
                
            </li>
        @endforeach
    </ul>
</body>
</html>