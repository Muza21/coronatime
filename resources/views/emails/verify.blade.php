<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Coronatime</title>
</head>
<style>
	main {
		margin-top: 10%;
	}

	div {
		margin-left: auto;
		margin-right: auto;
		font-size: 18px;
		line-height: 18px;
		width: 343px;
	}

	#confirm {
		font-weight: 700;
	}

	button {
		width: 100%;
		border-radius: 0.75rem;
		padding-top: 1rem;
		padding-bottom: 1rem;
		font-weight: 700;
		color: #ffffff;
		--tw-bg-opacity: 1;
		background-color: rgb(34 197 94 / var(--tw-bg-opacity));
	}

	p {
		text-align: center;
	}
</style>

<body>
	<main>
		<div>
			<img src="{{ asset('images/Landing (Worldwide) 2.png') }}" alt="coronatime">
			<br><br>
			<p style="text-align: center; font-weight: 700;">Confirmation email</p>
			<p style="text-align: center;">click this button to verify your email</p>
		</div>
		<div>
            <a href="{{ $url }}">
                <button>
                    VERIFY EMAIL
                </button>
            </a>
		</div>
	</main>
</body>

</html>
