<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Profile Analyzer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mt-5">Twitter Profile Analyzer</h1>
                <form action="/analyze" method="POST" class="mt-4">
                    @csrf
                    <div class="form-group">
                        <label for="twitterUrl">Twitter Profile URL</label>
                        <input type="url" name="twitterUrl" id="twitterUrl" class="form-control" placeholder="Enter Twitter profile URL" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Analyze</button>
                </form>
                @if(session('summary'))
                    <div class="alert alert-info mt-4">
                        <strong>Profile Summary:</strong> {{ session('summary') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>