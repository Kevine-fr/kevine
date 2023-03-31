@extends("layouts.master")
@section("contenu")
<body>
    <div class="signinform">
        <!-- <h1>Edit</h1> -->
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <form action="{{ route('edit_user', ['user' => $user->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="name" required="" name="nom" value="{{ $user->nom }}">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="name" required="" name="prenom" value="{{ $user->prenom }}">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-phone" aria-hidden="true"></i></span>
                            <input type="name" required="" name="telephone" value="{{ $user->telephone }}">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" required="" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" required="" name="password" value="{{ $user->password }}">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Modifier</button>
                    </form>
                    <p class="continue"><span>annuler</span></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
    </div>

    <!-- fontawesome v5-->
    <script src="js/fontawesome.js"></script>

</body>

</html>
@endsection