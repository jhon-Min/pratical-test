@extends('welcome')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success mb-3 alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger mb-3 alert-dismissible fade show" role="alert">
                    <strong>{{ session('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col-12 col-md-5">
                <div class="card">
                    <div class="card-header">Contact Form</div>
                    <div class="card-body">
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf

                            @if ($lists->name == 1)
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if ($lists->phone == 1)
                                <div class="mb-3">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}" required autocomplete="phone">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif


                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message">Message</label>
                                <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" required
                                    autocomplete="message">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            @if ($lists->date_of_birth == 1)
                                <div class="mb-3">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input id="date_of_birth" type="date"
                                        class="form-control @error('date_of_birth') is-invalid @enderror"
                                        name="date_of_birth" value="{{ old('date_of_birth') }}" required
                                        autocomplete="date_of_birth">
                                    @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif

                            @if ($lists->gender == 1)
                                <div class="mb-5">
                                    <label for="gender">Gender</label>
                                    <select id="gender" class="form-control @error('gender') is-invalid @enderror"
                                        name="gender" required autocomplete="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other
                                        </option>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            @endif

                            <button class="btn btn-primary px-3">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
