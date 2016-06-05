Click here to reset your password: <a href="{{ $link = i18n_url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
