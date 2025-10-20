@extends('layouts.layout')

@section('title')
Content page
@endsection

@section('content')
<div class="">
    <h1 class="text-2xl text-gray-300">Content Page</h1>
    <h2 class="text-xl text-success mt-4">chapter 1</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum pariatur cupiditate nostrum quo veritatis recusandae suscipit quidem quam est animi? Libero voluptas ut non asperiores architecto corrupti deserunt delectus quod in saepe cumque soluta porro nemo quo quia rerum, facere vel odio quaerat, odit quam nulla! Modi error iste tempore cum nisi, nobis doloribus, aspernatur ut eaque eius pariatur libero dicta magni atque voluptatibus omnis exercitationem corporis totam officia quo cupiditate dolore! Consequuntur animi inventore dolores cum accusamus sit dolore voluptas nihil laboriosam cupiditate? Iure neque aspernatur, quam dolor qui rem! Libero maiores qui reprehenderit! Explicabo, saepe officia. Laudantium, alias.</p>
    <h2 class="text-xl text-success mt-4">chapter 2</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum pariatur cupiditate nostrum quo veritatis recusandae suscipit quidem quam est animi? Libero voluptas ut non asperiores architecto corrupti deserunt delectus quod in saepe cumque soluta porro nemo quo quia rerum, facere vel odio quaerat, odit quam nulla! Modi error iste tempore cum nisi, nobis doloribus, aspernatur ut eaque eius pariatur libero dicta magni atque voluptatibus omnis exercitationem corporis totam officia quo cupiditate dolore! Consequuntur animi inventore dolores cum accusamus sit dolore voluptas nihil laboriosam cupiditate? Iure neque aspernatur, quam dolor qui rem! Libero maiores qui reprehenderit! Explicabo, saepe officia. Laudantium, alias.</p>
    <h2 class="text-xl text-success mt-4">chapter 3</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum pariatur cupiditate nostrum quo veritatis recusandae suscipit quidem quam est animi? Libero voluptas ut non asperiores architecto corrupti deserunt delectus quod in saepe cumque soluta porro nemo quo quia rerum, facere vel odio quaerat, odit quam nulla! Modi error iste tempore cum nisi, nobis doloribus, aspernatur ut eaque eius pariatur libero dicta magni atque voluptatibus omnis exercitationem corporis totam officia quo cupiditate dolore! Consequuntur animi inventore dolores cum accusamus sit dolore voluptas nihil laboriosam cupiditate? Iure neque aspernatur, quam dolor qui rem! Libero maiores qui reprehenderit! Explicabo, saepe officia. Laudantium, alias.</p>
    <h2 class="text-xl text-success mt-4">chapter 4</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum pariatur cupiditate nostrum quo veritatis recusandae suscipit quidem quam est animi? Libero voluptas ut non asperiores architecto corrupti deserunt delectus quod in saepe cumque soluta porro nemo quo quia rerum, facere vel odio quaerat, odit quam nulla! Modi error iste tempore cum nisi, nobis doloribus, aspernatur ut eaque eius pariatur libero dicta magni atque voluptatibus omnis exercitationem corporis totam officia quo cupiditate dolore! Consequuntur animi inventore dolores cum accusamus sit dolore voluptas nihil laboriosam cupiditate? Iure neque aspernatur, quam dolor qui rem! Libero maiores qui reprehenderit! Explicabo, saepe officia. Laudantium, alias.</p>
</div>
@endsection

@push('scripts')
    <script>
        console.log('content');
    </script>
@endpush

@push('css')
    <link href="test.css" rel="stylesheet" type="text/css" />
@endpush