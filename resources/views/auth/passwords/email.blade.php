<x-guest-layout>
<x-auth-card>

	<p>Please enter your e-mail address. You will be sent further instructions to your e-mail address.</p>

	@include('errors.messages')

	<x-form action="{{ route('password.email') }}">

		<x-form.input name="email" label="Email">{{ old('email') }}</x-form.input>

		<p><button type="submit" class="btn btn-primary w-full justify-center">Send Reset Email</button></p>

		<p><a href="{{ route('login') }}" class="float-right">Login</a></p>

	</x-form>

</x-auth-card>
</x-guest-layout>
