<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des offres de stage</title>
</head>
<body>
    @foreach ($job_offers as $job_offer)
        <h2>
            <a href="{{ route('job_offers.show', $job_offer->id) }}">
                {{ $job_offer->title }}
            </a>
        </h2>
        <p>
            {{ $job_offer->body }}
        </p>
    @endforeach
</body>
</html>