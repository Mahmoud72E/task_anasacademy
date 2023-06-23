<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Company Notification</title>
</head>
<body>
    <h1>{{ __('messages.new_company_subject') }}</h1>

    <p>{{ __('messages.new_company_created') }}</p>

    <h2>{{ __('messages.company_details') }}</h2>
    <ul>
        <li><strong>{{ __('messages.name') }}:</strong> {{ $company->name }}</li>
        <li><strong>{{ __('messages.email') }}:</strong> {{ $company->email }}</li>
        <li><strong>{{ __('messages.website') }}:</strong> {{ $company->website }}</li>
    </ul>
</body>
</html>
