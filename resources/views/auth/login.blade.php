@extends('auth.layout.app')

@section('title')
    Admin panel login
@endsection

@section('content')
    <link rel="stylesheet" href="/css/styled.css">
    <div class="container">
        <section id="content">
            <form action="{{env('url') . 'login'}}" method="post">
                <h1>Login Form</h1>
                {{ csrf_field() }}
                <div>
                    <input type="text" placeholder="Email" name="email" required id="username" />
                </div>
                <div>
                    <input type="password" placeholder="Password" name="password" required id="password" />
                </div>
                <div>
                    <input type="submit" value="Log in" />
                </div>
            </form>
        </section>
    </div>
    <script src="/js/index.js"></script>
@endsection

