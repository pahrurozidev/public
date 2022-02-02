@extends('layouts.main')

@section('container')
    <main>
        <h1>Halaman About</h1>
        <ul>
            <li>
                <img src="img/<?php echo $profile['image']; ?>" alt="<?php echo $profile['image']; ?>" width="200">
            </li>
            <li>
                Name : <?php echo $profile['name']; ?>
            </li>
            <li>
                Email : <?php echo $profile['email']; ?>
            </li>
        </ul>
    </main>
@endsection
